<?php 

namespace Modules\OpenAI\Services\v2;
use Modules\OpenAI\Entities\FeaturePreference;
use Illuminate\Http\Response;

class FeaturePreferenceService
{
    /**
     * Processes the user preference data and returns an array of merged and updated configurations.
     *
     * @param object $preference An object containing user preferences, including `metas` and other configurations.
     * @return array The processed and merged configuration data.
     */
    public function processData(string $feature): array
    {
        // Fetch the preference record
        $preference = FeaturePreference::where('slug', $feature)->first();

        if (!$preference) {
            return response()->json(['error' => __('Feature not found.')], Response::HTTP_NOT_FOUND);
        }

        $data = [];
        // Initialize dynamically based on metas
        foreach ($preference->metas as $meta) {
            $metaKey = $meta->key;
            $metaValue = json_decode($meta->value, true);
            $data[$metaKey] = $metaValue;
        }

        if ($feature == 'chatbot') {
            $keysToUpdate = [
                'default_avatar' => defaultImage('chatbots'), 
                'default_floating_image' => defaultImage('chatbot_floating_image')
            ];

            foreach ($keysToUpdate as $key => $value) {
                if (isset($data['general_options'][$key])) {
                    $fileId = $data['general_options'][$key];
                    $file = \App\Models\File::find($fileId);

                    if ($file) {
                        $data['general_options'][$key] = objectStorage()->url('public/uploads/' . $file->file_name);
                    } else {
                        $data['general_options'][$key] = objectStorage()->url($value);
                    }
                }
            }
        }

        // Update settings if they exist
        if (isset($data['settings'])) {
            if (isset($data['settings']['conversation'])) {
                $data['settings']['conversation'] = $data['settings']['conversation'] === 'on';
            }
            if (isset($data['settings']['training_options'])) {
                $data['settings']['training_options'] = array_map(function($option) {
                    return $option === 'on';
                }, $data['settings']['training_options']);
            }
            if (isset($data['settings']['feature_options'])) {
                $data['settings']['feature_options'] = array_map(function($option) {
                    return $option === 'on';
                }, $data['settings']['feature_options']);
            }
        }

        // Merge the data arrays
        return array_merge(
            $data['general_options'] ?? [],
            $data['theme_options'] ?? [],
            $data['settings'] ?? []
        );
    }
}
