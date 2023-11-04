<?php

namespace Alisalehi\LangFilesTranslator;

use Illuminate\Support\Facades\Facade;

class LangTranslatorFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'LangTranslator';
    }
}