<?php
/**
 * @package ContentFilter
 * @author TechVillage <support@techvill.org>
 * @contributor kabir Ahmed <kabir.techvill@gmail.com>
 * @created 29-03-2023
 */

namespace Modules\OpenAI\Filters\v2;

use App\Filters\Filter;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class ImageFilter extends Filter
{

    /**
     * Filter by userId query string
     *
     * @param  string  $id
     * @return EloquentBuilder|QueryBuilder
     */
    public function userId($id)
    {
        return $this->query->WhereHas('metas', function($q) use ($id) {
            $q->where('key', 'image_creator_id')->where('value', $id);
        });
    }
    
    /**
     * Filter by language query string
     *
     * @param  string  $id
     * @return EloquentBuilder|QueryBuilder
     */
    public function size($size)
    {
        return $this->query->whereHas('metas', function($q) use ($size) {
            $q->where('key', 'generation_options')
              ->where(\DB::raw("JSON_UNQUOTE(JSON_EXTRACT(value, '$.size'))"), 'LIKE', '%' . $size . '%'); // Extract size from JSON
        });
    }


    /**
     * Filter by search query string
     *
     * @param  string  $value
     * @return EloquentBuilder|QueryBuilder
     */
    public function search($value)
    {
        $value = xss_clean($value['value']);

        return $this->query->where(function ($query) use ($value) {
            $query->where('title', 'LIKE', '%' . $value . '%')
            ->orWhere('creators.name', 'LIKE', $value);;
        });
      
    }
}
