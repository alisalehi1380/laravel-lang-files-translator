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
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lang-files-translator.php',
            'lang-files-translator'
        );
    }
    
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(self::$commandNames);
            
            $this->publishes([
                __DIR__ . '/../config/lang-files-translator.php' => config_path('lang-files-translator.php'),
            ], 'lang-files-translator-config');
        }
    }
}
