<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('_tran')) {
    function _tran(string $term)
    {


        try {
            if (config('nova-translator.enable_cache', false    )) {
                $Term = Cache::rememberForever('Translation.' . $term, fn() => app(\Elshaden\NovaTranslator\NovaTranslator::class)->run($term));
            }else{
                $Term = app(\Elshaden\NovaTranslator\NovaTranslator::class)->run($term);
            }
            return $Term[app()->getLocale()] ?? $term;

        } catch (Exception $e) {
            \Illuminate\Support\Facades\Log::error('Localization Helper :' . $e->getMessage());
            return $term;
        }

    }
}
