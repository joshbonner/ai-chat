<?php 

namespace Modules\OpenAI\Services\v2;

use AiProviderManager;

class FeatureManagerService
{
    /**
     * Retrieves active providers based on the given feature name.
     *
     * @param string $featurName The name of the feature to retrieve active providers for.
     * @return array The array of active provider names.
     */
    public function getActiveProviders(string $featureName): array
    {
        $providers = $this->getProviders($featureName);
        $providerName = [];

        if (count($providers) != 0) {
            foreach ($providers as $key => $provider) {
                $providerName[] = explode('_', $key , 2)[1];
            }
        }
        return $providerName;
    }

    /**
     * Method to retrieve models based on a given feature name and provider name.
     *
     * @param string $featureName The name of the feature to retrieve models for.
     * @param string $providerName The name of the provider to filter models by.
     * @return array The array of models associated with the specified feature and provider.
     */
    public function getModels(string $featureName, string $providerName): array
    {
        $providers = $this->getProviders($featureName);
        $models = [];

        if (count($providers) != 0) {
            foreach ($providers as $key => $provider) {
                $name = explode('_', $key , 2)[1];

                if ($name == $providerName) {
                    foreach ($provider as $feature) {
                        if ($feature['name'] == 'model') {
                            $models = $feature['value'];
                        }
                    }
                }
                
            }
        }

        return array_values($models);
    }

    /**
     * Retrieves preferences based on the given feature name, provider name, and request data.
     *
     * @param string $featureName The name of the feature to retrieve preferences for.
     * @param string $providerName The name of the provider to filter preferences by.
     * @param array $requestData The request data to filter preferences.
     *
     * @return array The array of preferences associated with the specified feature, provider, and request data.
     */
    public function getPreference(string $featureName, string $providerName, array $requestData): array
    {
        $providers = $this->getProviders($featureName);

        $preference = [];
        $filteredProviders = array_filter($providers, function($provider, $key) use ($providerName) {
            $name = explode('_', $key, 2)[1];
            return $name === $providerName;
        }, ARRAY_FILTER_USE_BOTH);

        foreach ($filteredProviders as $provider) {
            foreach ($provider as $feature) {
                if ($feature['type'] === 'dropdown' && $feature['name'] != 'model') {
                    $preference[$feature['name']] = array_values($feature['value']);
                }
            }
        }

        if (!empty($requestData['feature_name'])) {
            return array_key_exists($requestData['feature_name'], $preference) ? $preference[$requestData['feature_name']] : [];
        }

        return $preference;
    }

    /**
     * Retrieves providers based on the given feature name.
     *
     * @param string $featureName The name of the feature to retrieve providers for.
     *
     * @return array The array of providers associated with the specified feature.
     */
    private function getProviders(string $featureName): array
    {
        return AiProviderManager::databaseOptions($featureName);
    }

    /**
     * Retrieve and filter options for a given feature, provider, and model.
     *
     * This function fetches the database options and rules for the specified feature,
     * then filters the options based on the rules for the given provider and model.
     * It combines these filtered options with the default options, ensuring that
     * certain keys are not overwritten.
     *
     * @param string $featureName The name of the feature (e.g., 'imagemaker').
     * @param string $providerName The name of the provider (e.g., 'openai').
     * @param string $modelName The name of the model (e.g., 'dall-e-3').
     *
     * @return array An associative array of filtered options.
     */
    public function getAdditionalOptions(string $featureName, string $providerName, string $modelName): array
    {
        // Retrieve options and rules for the specified feature
        $databaseOptions = AiProviderManager::databaseOptions($featureName);
        $providerRules = AiProviderManager::rules($featureName);
        $filteredRules = [];

        if ($modelName != 'default') {
            foreach ($providerRules[$providerName] as $ruleKey => $ruleValue) {
                $filteredRules[$ruleKey] = $ruleValue[$modelName];
            }
        }

        $optionValues = [];
        foreach ($databaseOptions as $key => $options) {
            $checkProviderName = explode('_', $key, 2)[1];
            if ($checkProviderName === $providerName) {
                foreach ($options as $option) {
                    $optionValues[$option['name']] = $option['value'];
                }
            }
        }

        $finalOptions = [];
        foreach ($optionValues as $optionName => $optionValue) {
            if (!empty($filteredRules) && isset($filteredRules[$optionName])) {
                $finalOptions[$optionName] = array_values(array_intersect($filteredRules[$optionName], $optionValue));
            } elseif (!in_array($optionName, ['provider', 'model', 'status'])) {
                if ($optionValue === '') {
                    $finalOptions[$optionName] = [];
                } else {
                    $value = is_array($optionValue) ? $optionValue : (array) $optionValue;
                    $finalOptions[$optionName] = array_values($value);
                }
            }
        }

        return $finalOptions;
    }
}
