<?php

namespace App\Services;

use Http\Discovery\Exception\NotFoundException;
use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Symfony\Component\Finder\SplFileInfo;

class TranslateService
{
    private string $translate_from;
    private string $translate_to;
    
    public function __construct(string $from, string $to)
    {
        $this->translate_from = $from;
        $this->translate_to = $to;
    }
    
    public function translate()
    {
        foreach ($this->getLocalLangFiles() as $file) {
            $this->filePutContent($this->getTranslatedData($file), $file);
        }
        
        echo "translated files are ready. \n Enjoy it!";
    }
    
    private function getLocalLangFiles(): array
    {
        try {
            $langPath = lang_path(DIRECTORY_SEPARATOR . $this->translate_from);
            return File::files($langPath);
        }catch (NotFoundException $e){
            throw new NotFoundException("lang folder `$this->translate_from` not Exist!" , 0 , $e);
        }
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
    
    private function addPhpSyntax(string $translatedData): string
    {
        return '<?php return ' . $translatedData . ';';
    }
    
    private function setUpGoogleTranslate(): GoogleTranslate
    {
        $google = new GoogleTranslate();
        return $google->setSource($this->translate_from)
            ->setTarget($this->translate_to);
    }
    
    private function translateLangFiles(array $content): array
    {
        $google = $this->setUpGoogleTranslate();
        
        $trans_data = [];
        foreach ($content as $first_key => $first_value) {
            if (is_array($first_value)) {
                foreach ($first_value as $second_key => $second_value) {
                    $trans_data[$first_key][$second_key] = $google->translate($second_value);
                }
            } else {
                $trans_data[$first_key] = $google->translate($first_value);
            }
        }
        
        return $trans_data;
    }
}