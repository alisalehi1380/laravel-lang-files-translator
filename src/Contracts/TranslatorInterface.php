<?php

namespace Alisalehi\LaravelLangFilesTranslator\Contracts;

interface TranslatorInterface
{
    public function setSource(string $source): self;
    public function setTarget(string $target): self;
    public function translate(string $text): string;
}
