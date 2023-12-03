# Laravel Lang Files Translator

![Laravel Lang Files Translator](https://banners.beyondco.de/laravel-lang-files-translator%20.png?theme=dark&packageManager=composer+require&packageName=alisalehi%2Flaravel-lang-files-translator&pattern=fourPointStars&style=style_1&description=Easiest+way+to+translate+lang+files&md=1&showWatermark=0&fontSize=100px&images=translate)
[![Latest Stable Version](http://poser.pugx.org/alisalehi/laravel-lang-files-translator/v)](https://packagist.org/packages/alisalehi/laravel-lang-files-translator)
[![Total Downloads](http://poser.pugx.org/alisalehi/laravel-lang-files-translator/downloads)](https://packagist.org/packages/alisalehi/laravel-lang-files-translator)
[![License](http://poser.pugx.org/alisalehi/laravel-lang-files-translator/license)](https://packagist.org/packages/alisalehi/laravel-lang-files-translator)
[![PHP Version Require](http://poser.pugx.org/alisalehi/laravel-lang-files-translator/require/php)](https://packagist.org/packages/alisalehi/laravel-lang-files-translator)
***
Laravel lang files translator is a package for the Easiest way to translate lang files to other languages in PHP format in Laravel. <br>

# Requirements
***

- `PHP: >=8.0`
- `stichoza/google-translate-php: ^5.1`
- `Laravel Framework: 9.*|10.*`

# Installation
***
```
composer require alisalehi/laravel-lang-files-translator
```

# Usage
```
php artisan translate:lang {from} {to}
```
for example, your locale is English and you have en lang files and want to have these files to Persian(fa) lang too.
just enough to run:
```
php artisan translate:lang en fa
```
and done!
Go to lang/fa and you will see all the translated files from the en folder.

## Contributing
This project exists thanks to all the people who
contribute. [CONTRIBUTING](https://github.com/alisalehi/laravel-lang-files-translator/graphs/contributors)

![laravel-lang-files-translator](https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/2ce1256a-781a-424f-8f8c-79ae5aaae170)

## License
The MIT License (MIT). See **[License File](https://github.com/alisalehi1380/laravel-lang-files-translator/blob/master/LICENSE)** for more information.
