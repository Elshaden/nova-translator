<?php

namespace Elshaden\NovaTranslator\Classes;

use Elshaden\NovaTranslator\Exceptions\CreateResourceFailedException;
use Elshaden\NovaTranslator\Models\Localization;
use Exception;

class CreateTermTranslationTask
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data)
    {
        try {
           return Localization::updateOrCreate(['group'=>$data['group'], 'term'=>$data['term']],$data);


        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
