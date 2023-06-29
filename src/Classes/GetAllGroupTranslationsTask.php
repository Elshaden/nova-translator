<?php

namespace Elshaden\NovaTranslator\Classes;


use Elshaden\NovaTranslator\Models\Localization;

class GetAllGroupTranslationsTask
{



    public function run($group): mixed
    {
        return Localization::with('languages')->where('group', $group)->get();
    }
}
