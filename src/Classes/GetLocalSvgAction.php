<?php

namespace Elshaden\NovaTranslator\Classes;

class GetLocalSvgAction
{
    public function getOtherLocalSvg()
    {

        $CurrentLocal = app()->getLocale();
        $Svgs = collect(config('nova-translator.svgs'))->reject(function ($item, $key) use ($CurrentLocal) {
            return $key == $CurrentLocal;
        });
        return $Svgs->first();
    }

    public function getOtherLocal()
    {

        $CurrentLocal = app()->getLocale();
        $local = collect(config('nova-translator.locales_names'))->reject(function ($item, $key) use ($CurrentLocal) {
            return $key == $CurrentLocal;
        });
        return $local->first();
    }
}
