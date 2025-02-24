<?php

namespace Alisalehi\LaravelLangFilesTranslator\Services\Translators;

use Alisalehi\LaravelLangFilesTranslator\Contracts\TranslatorInterface;
use Illuminate\Support\Facades\Http;

class ChatGPTTranslator implements TranslatorInterface
{
    private string $source;
    private string $target;
    private string $apiKey;
    private string $model;
    private float $temperature;

    public function __construct()
    {
        $this->apiKey = config('lang-files-translator.chatgpt.api_key');
        $this->temperature = config('lang-files-translator.chatgpt.temperature', 0.3);

        if (empty($this->apiKey)) {
            throw new \RuntimeException('OpenAI API key is not configured. Set OPENAI_API_KEY in your .env file.');
        }
    }

    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function setSource(string $source): TranslatorInterface
    {
        $this->source = $source;
        return $this;
    }

    public function setTarget(string $target): TranslatorInterface
    {
        $this->target = $target;
        return $this;
    }

    public function translate(string $text): string
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => $this->model,
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "You are a professional translator. Translate from {$this->source} to {$this->target}. Maintain any variables or placeholders in the text. Only return the translated text without explanations or additional context.",
                ],
                [
                    'role' => 'user',
                    'content' => $text,
                ],
            ],
            'temperature' => $this->temperature,
        ]);

        if (!$response->successful()) {
            throw new \RuntimeException('ChatGPT API request failed: ' . $response->body());
        }

        return trim($response->json('choices.0.message.content'));
    }
}
