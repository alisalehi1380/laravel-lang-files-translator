<?php

namespace Alisalehi\LaravelLangFilesTranslator\Services;

use Illuminate\Support\Facades\File;
use Alisalehi\LaravelLangFilesTranslator\Contracts\TranslatorInterface;
use Alisalehi\LaravelLangFilesTranslator\Services\TranslatorFactory;
use Symfony\Component\Finder\SplFileInfo;

class TranslateService
{
    private string $translate_from;
    private string $translate_to;
    private string $provider = 'google';
    private ?string $model = null;
    
    //setters
    public function from(string $from): TranslateService
    {
        $this->translate_from = $from;
        return $this;
    }
    
    public function to(string $to): TranslateService
    {
        $this->translate_to = $to;
        return $this;
    }

    public function withProvider(string $provider, ?string $model = null): TranslateService
    {
        $this->provider = $provider;
        $this->model = $model;
        return $this;
    }
    
    public function translate(): void
    {
        $files = $this->getLocalLangFiles();
        
        foreach ($files as $file) {
            $this->filePutContent($this->getTranslatedData($file), $file);
        }
    }
    
    private function getLocalLangFiles(): array
    {
        $this->existsLocalLangDir();
        $this->existsLocalLangFiles();
        
        return $this->getFiles($this->getTranslateLocalPath());
    }
    
    private function filePutContent(string $translatedData, string $file): void
    {
        $folderPath = lang_path($this->translate_to);
        $fileName = pathinfo($file, PATHINFO_FILENAME) . '.php';
        
        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }
        
        $filePath = $folderPath . DIRECTORY_SEPARATOR . $fileName;
        File::put($filePath, $translatedData);
    }
    
    private function getTranslatedData(SplFileInfo $file): string
    {
        $translatedData = var_export($this->translateLangFiles(include $file), "false");
        return $this->addPhpSyntax($translatedData);
    }
    
    private function getTranslator(): TranslatorInterface
    {
        return TranslatorFactory::create($this->provider, $this->model)
            ->setSource($this->translate_from)
            ->setTarget($this->translate_to);
    }
    
    private function translateLangFiles(array $content): array
    {
        if (empty($content)) {
            return [];
        }

        $translator = $this->getTranslator();
        return $this->translateRecursive($content, $translator);
    }
    
    private function translateRecursive($content, TranslatorInterface $translator): array
    {
        $trans_data = [];
        
        foreach ($content as $key => $value) {
            if (is_array($value)) {
                $trans_data[$key] = $this->translateRecursive($value, $translator);
                continue;
            }

            $hasProps = str_contains($value, ':');
            $modifiedValue = $hasProps
                ? preg_replace_callback(
                    '/(:\w+)/',
                    fn($match) => '{' . $match[0] . '}',
                    $value
                )
                : $value;

            $translatedValue = $translator->translate($modifiedValue);

            $trans_data[$key] = $hasProps
                ? str_replace(['{', '}'], '', $translatedValue)
                : $translatedValue;
        }
        
        return $trans_data;
    }
    
    private function addPhpSyntax(string $translatedData): string
    {
        return '<?php return ' . $translatedData . ';';
    }
    
    // Exceptions
    private function existsLocalLangDir(): void
    {
        $path = $this->getTranslateLocalPath();
        
        throw_if(
            !File::isDirectory($path),
            ("lang folder $this->translate_from not Exist !" . PHP_EOL . '  Have you run `php artisan lang:publish` command before?')
        );
    }
    
    private function existsLocalLangFiles(): void
    {
        $files = $this->getFiles($this->getTranslateLocalPath());
        
        throw_if(empty($files), ("lang files in '$this->translate_from' folder not found !"));
    }
    
    //helpers
    private function getFiles(string $path = null): array
    {
        return File::files($path);
    }
    
    private function getTranslateLocalPath(): string
    {
        return lang_path(DIRECTORY_SEPARATOR . $this->translate_from);
    }
}
