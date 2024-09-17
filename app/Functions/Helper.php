<?php

namespace App\Functions;

use Illuminate\Support\Str;

class Helper
{
    public static function generateSlug($string, $model)
    {
        $original_slug = Str::slug($string, '-');

        $same_original_slug_count = $model::where('slug', 'LIKE', $original_slug . '%')->count();

        return $same_original_slug_count ? "{$original_slug}-{$same_original_slug_count}" : $original_slug;
    }
}
