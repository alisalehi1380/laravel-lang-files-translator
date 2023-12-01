<?php

namespace AliSalehi\LaravelLangFilesTranslator\Commands;

use AliSalehi\LangFilesTranslator\Services\TranslateService;
use Illuminate\Console\Command;

class Translate extends Command
{
    protected $signature = 'view:lang {-h|--help : translate lang files} {from} {to}';
    
    protected $description = 'translate lang files';
    
    public function handle(TranslateService $translateService)
    {
        $this->info('start translation. please wait...');
        
        $translateService->to($this->argument('to'))->from($this->argument('from'))->translate();
        
        $this->thanks();
        
        $this->getOutput()->writeln(' - Finished translation. (go to ' . $this->argument('to') . ' folder) ');
    }
    
    public function thanks(): void
    {
        $this->line(PHP_EOL . '<fg=blue>|-------------------------------------------------|</>');
        $this->line('<fg=blue>|-----------     Star Me On Github     -----------|</>');
        $this->line('<fg=blue>|-------------------------------------------------|</>');
        $this->line('<fg=blue>|  if you have found lang-files-translator useful |</>');
        $this->line('<fg=blue>|  Please consider giving it an star on github.   |</>');
        $this->line('<fg=blue>|  \(^_^)/    Regards, Ali Salehi    \(^_^)/      |</>');
        $this->line('<fg=blue>|-------------------------------------------------|</>');
        $this->line('https://github.com/alisalehi1380/laravel-lang-files-translator');
    }
}