<?php

namespace Alisalehi\LaravelLangFilesTranslator;

use Alisalehi\LaravelLangFilesTranslator\Commands\Translate;
use Illuminate\Support\ServiceProvider;

class LangFilesTranslatorServiceProvider extends ServiceProvider
{
    private static array $commandNames = [
        Translate::class
    ];
    
    public function register(): void
    {
    
    }
    
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(self::$commandNames);
        }
    }
}