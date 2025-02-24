<?php

namespace Alisalehi\LaravelLangFilesTranslator\Services\Translators;

use Alisalehi\LaravelLangFilesTranslator\Contracts\TranslatorInterface;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleTranslator implements TranslatorInterface
{
    private GoogleTranslate $translator;

    public function __construct()
    {
        $this->translator = new GoogleTranslate();
    }

    public function setSource(string $source): TranslatorInterface
    {
        $this->translator->setSource($source);
        return $this;
    }

    public function setTarget(string $target): TranslatorInterface
    {
        $this->translator->setTarget($target);
        return $this;
    }

    public function translate(string $text): string
    {
        return $this->translator->translate($text);
    }
}
