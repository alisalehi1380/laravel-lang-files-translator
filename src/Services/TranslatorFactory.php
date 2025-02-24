<?php

namespace Alisalehi\LaravelLangFilesTranslator\Services;

use Alisalehi\LaravelLangFilesTranslator\Contracts\TranslatorInterface;
use Alisalehi\LaravelLangFilesTranslator\Services\Translators\ChatGPTTranslator;
use Alisalehi\LaravelLangFilesTranslator\Services\Translators\GoogleTranslator;

class TranslatorFactory
{
    public static function create(string $provider = 'google', ?string $model = null): TranslatorInterface
    {
        if ($provider === 'openai') {
            if (empty($model)) {
                throw new \InvalidArgumentException('Model parameter is required for OpenAI provider');
            }
            $translator = new ChatGPTTranslator();
            $translator->setModel($model);
            return $translator;
        }

        if ($provider === 'google') {
            return new GoogleTranslator();
        }

        throw new \InvalidArgumentException("Unsupported translator provider: {$provider}");
    }
}
