<?php

namespace Alisalehi\LaravelLangFilesTranslator\Commands;

use Alisalehi\LaravelLangFilesTranslator\Services\TranslateService;
use Illuminate\Console\Command;

class Translate extends Command
{
    protected $signature = 'translate:lang {from : translate from language} {to : translate to language} 
        {--provider=google : translation provider (google or openai)} 
        {--model= : OpenAI model name (required when provider is openai)}';
    
    protected $description = 'translate lang files';
    
    public function handle(TranslateService $translateService)
    {
        $provider = $this->option('provider');
        if (!in_array($provider, ['google', 'openai'])) {
            $this->error('Invalid provider. Use either "google" or "openai"');
            return 1;
        }

        if ($provider === 'openai' && empty($this->option('model'))) {
            $this->error('Model name is required when using OpenAI provider');
            return 1;
        }

        $this->info('Start translation using ' . strtoupper($provider) . ' provider...');
        $this->info(PHP_EOL . 'The speed of translation of files depends on the speed of the Internet,');
        $this->info('the number of file lines and the indentation of each key.');
        $this->info('So please be patient until the translation of the files is finished.');
        $this->info('Thankful');
        
        $translateService
            ->to($this->argument('to'))
            ->from($this->argument('from'))
            ->withProvider($provider, $this->option('model'))
            ->translate();
        
        $this->getOutput()->writeln(PHP_EOL . ' - Finished translation! (go to lang/' . $this->argument('to') . ' folder) ');
        
        $this->thanks();
    }
    
    public function thanks(): void
    {
        $this->line(PHP_EOL . '<fg=blue>|-------------------------------------------------|</>');
        $this->line('<fg=blue>|-----------     <fg=yellow>Star Me On Github</>     -----------|</>');
        $this->line('<fg=blue>|-------------------------------------------------|</>');
        $this->line('<fg=blue>|  if you have found lang-files-translator useful |</>');
        $this->line('<fg=blue>|  Please consider giving it an star on github.   |</>');
        $this->line('<fg=blue>|  \(^_^)/    Regards, Ali Salehi    \(^_^)/      |</>');
        $this->line('<fg=blue>|-------------------------------------------------|</>');
        $this->line('https://github.com/alisalehi1380/laravel-lang-files-translator');
    }
}
