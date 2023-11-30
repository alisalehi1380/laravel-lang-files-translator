<?php

namespace Alisalehi\LangFilesTranslator;

use AliSalehi\LangFilesTranslator\Commands\Translate;
use Illuminate\Support\ServiceProvider;

class LangFilesTranslatorServiceProvider extends ServiceProvider
{
    private static array $commandNames = [
        Translate::class
    ];
    
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands(self::$commandNames);
        }
    }
}