<?php

namespace Elshaden\NovaTranslator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elshaden\NovaTranslator\NovaTranslator
 */
class NovaTranslator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elshaden\NovaTranslator\NovaTranslator::class;
    }
}
