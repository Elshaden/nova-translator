<?php

namespace Elshaden\NovaTranslator\Classes;


use Illuminate\Support\Facades\Cache;

class RefreshTermTranslationTask
{

    public function run(string $Group)
    {

        Cache::forget('Localization.'. $Group);
        app(GetAllGroupTranslationsTask::class)->run($Group);

    }
}
