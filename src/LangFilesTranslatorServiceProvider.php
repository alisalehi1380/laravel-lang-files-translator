<?php

namespace Alisalehi\LangFilesTranslator;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class LangFilesTranslatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('langTranslator', LangTranslatorFacade::class);
    }
    
    public function register()
    {
        $this->app->singleton('translateLangFiles', function () {
            return new TranslateService();
        });
    }
}