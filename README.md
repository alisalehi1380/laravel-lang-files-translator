## Laravel Lang Files Translator

![Laravel Lang Files Translator][img-package]
[![PHP Version Require][ico-php]][link-packagist]
[![Required Laravel Version][ico-laravel]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]
[![License][ico-license]][link-packagist]
***
Laravel lang files translator is a package for the Easiest way to translate lang files to other languages in PHP format in Laravel. <br>

# Problems solved:
Did you buy a Laravel script and it doesn't have your language in the`lang`file? </br>
Do you want to make your web application bilingual, but you don't know how to translate all those words?</br>
Do you not have the possibility to use the JSON format that many Laravel language translation packages give you?

# Installation
```
composer require alisalehi/laravel-lang-files-translator
```

After installation, publish the configuration file:
```
php artisan vendor:publish --tag=lang-files-translator-config
```

# Configuration

The package supports two translation providers:
- Google Translate (default)
- OpenAI (requires API key)

To use OpenAI for translations, set your API key in `.env`:
```
OPENAI_API_KEY=your-api-key
```

# 💎Usage

The package provides a simple artisan command to translate your language files:

```bash
php artisan translate:lang {from} {to} [options]
```

## Available Options

### Using Google Translate (Default)
```bash
php artisan translate:lang en fa
```
No configuration needed, just run the command.

### Using OpenAI
First, add your OpenAI API key to `.env`:
```
OPENAI_API_KEY=your-api-key
```

Then run the command with OpenAI options:
```bash
php artisan translate:lang en fa --provider=openai --model=gpt-3.5-turbo
```

## Command Reference

### Arguments:
- `from`: Source language code (e.g., en)
- `to`: Target language code (e.g., fa)

### Options:
- `--provider`: Translation provider (google or openai)
- `--model`: OpenAI model name (required when using openai)

After running the command, translated files will be created in the `lang/{target-language}` folder.

## Demo Video ⤵️

https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/748eaba0-29a3-4782-8505-1d8368d44ed2

## 🙋‍♂️Contributing
![laravel-lang-files-translator](https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/a43389af-2f2e-4f29-8993-0609b94abbe8)

As Einstein said, **"There's a way to do it better!"** So I welcome any change that makes the code better, more readable, and testable. (Even renaming a variable!) 

Just open an issue or pull a request.

## License
The MIT License (MIT). See **[License File](https://github.com/alisalehi1380/laravel-lang-files-translator/blob/master/LICENSE)** for more information.

## ❤️Contributing
This project exists thanks to all the people who contribute:

- [Ali Salehi](https://github.com/alisalehi1380) - Original author and maintainer
- [Amirmohammad Mokhtari](https://github.com/am-mokhtari)
- [Navid Mirzaaghazadeh](https://github.com/mirzaaghazadeh) - Implemented OpenAI integration for natural language translation

See all [contributors](https://github.com/alisalehi1380/laravel-lang-files-translator/graphs/contributors).

[img-package]: https://banners.beyondco.de/laravel-lang-files-translator%20.png?theme=dark&packageManager=composer+require&packageName=alisalehi%2Flaravel-lang-files-translator&pattern=fourPointStars&style=style_1&description=Easiest+way+to+translate+lang+files&md=1&showWatermark=0&fontSize=100px&images=translate
[ico-laravel]: https://img.shields.io/packagist/dependency-v/alisalehi/laravel-lang-files-translator/laravel/framework.svg?color=%23f13c2f
[ico-php]: https://img.shields.io/packagist/dependency-v/alisalehi/laravel-lang-files-translator/php.svg?
[link-packagist]: https://packagist.org/packages/alisalehi/laravel-lang-files-translator
[ico-license]: https://img.shields.io/packagist/l/alisalehi/laravel-lang-files-translator.svg?
[ico-downloads]: https://img.shields.io/packagist/dt/alisalehi/laravel-lang-files-translator.svg?color=brightgreen
