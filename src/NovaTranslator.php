<?php

namespace Elshaden\NovaTranslator;

use Elshaden\NovaTranslator\Classes\CreateTermTranslationTask;
use Elshaden\NovaTranslator\Classes\GetAllGroupTranslationsTask;
use Elshaden\NovaTranslator\Exceptions\NotFoundException;
use Elshaden\NovaTranslator\Models\Language;
use Exception;
use Illuminate\Translation\Translator;

class NovaTranslator
{
    protected $group;
    protected $InTerm;


    /**
     * @throws NotFoundException
     */
    public function run(string $term)
    {
        $this->InTerm = $term;
        $Term = $this->parseTerm($term);

        try {
            $Group = app(GetAllGroupTranslationsTask::class)->run($this->group)
                ->where('term', $Term);
            if (!$Group->count()) {
                $Group = $this->createNewTerm($Term);
                return $Group;
            } else {
                $Group = $Group->first();
            }

            $Array = $Group->languages;

            return $Array->pluck('translation', 'language')->toArray();

        } catch (Exception) {
            return Null;
        }
    }

    private function parseTerm(string $term)
    {
        //Try to get the Translation from default Laravel Localization Files using the helper function __()
        $Term = app(Translator::class)->parseKey($term);

        if (!$Term[2] || $Term[2] == Null) {
            $this->group = 'default';
            $Term = $Term[1];
        } else {
            $this->group = $Term[1];
            $Term = $Term[2];
        }
        return $Term;
    }

    private function createNewTerm($term)
    {
        $Group = app(CreateTermTranslationTask::class)->run([
            'group' => $this->group ?? 'default',
            'term' => $term
        ]);

        $Locales = config('nova-translator.available_languages');

        foreach ($Locales as $Locale) {
            $InTranslatins = __($this->InTerm, [], $Locale) == $this->InTerm ? Null : __($this->InTerm, [], $Locale);
            Language::updateOrCreate([
                'language' => $Locale,
                'nova_localization_id' => $Group->id
            ], [
                'translation' => $InTranslatins
            ]);

        }
        return $Group;

    }
}
