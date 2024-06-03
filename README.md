## Laravel Lang Files Translator

![Laravel Lang Files Translator][img-package]
[![PHP Version Require][ico-php]][link-packagist]
[![Required Laravel Version][ico-laravel]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]
[![License][ico-license]][link-packagist]
***
Laravel lang files translator is a package for the Easiest way to translate lang files to other languages in PHP format in Laravel. <br>

# problems:
Did you buy a Laravel script and it doesn't have your language in the`lang`file? </br>
Do you want to make your web application bilingual, but you don't know how to translate all those words?</br>
Do you not have the possibility to use the JSON format that many Laravel language translation packages give you?

# Requirements
***

- `PHP: >=8.0`
- `stichoza/google-translate-php: ^5.1`
- `Laravel Framework: 9.*|10.*|11.*`

# Installation
***
```
composer require alisalehi/laravel-lang-files-translator
```

# 💎Usage
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

how to use video ⤵️

<img src="https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/9fdb0342-a045-4a3d-8b76-51c848dce2ec" width="700px" height="auto" />


## 🙋‍♂️Contributing
![laravel-lang-files-translator](https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/a43389af-2f2e-4f29-8993-0609b94abbe8)

As Einstein said, **"There's a way to do it better!"** So I welcome any change that makes the code better, more readable, and testable. (Even renaming a variable!) 

Just open an issue or pull a request.


## License
The MIT License (MIT). See **[License File](https://github.com/alisalehi1380/laravel-lang-files-translator/blob/master/LICENSE)** for more information.

## ❤️Contributing
This project exists thanks to all the people who
contribute. [CONTRIBUTING](https://github.com/alisalehi/laravel-lang-files-translator/graphs/contributors)


[img-package]: https://banners.beyondco.de/laravel-lang-files-translator%20.png?theme=dark&packageManager=composer+require&packageName=alisalehi%2Flaravel-lang-files-translator&pattern=fourPointStars&style=style_1&description=Easiest+way+to+translate+lang+files&md=1&showWatermark=0&fontSize=100px&images=translate
[ico-laravel]: https://img.shields.io/badge/Laravel-≥%208.0-ff2d20?style=&logo=laravel
[ico-php]: https://img.shields.io/badge/php-≥%208.0-7b7eb1?style=&logo=php
[link-packagist]: https://packagist.org/packages/alisalehi/laravel-lang-files-translator
[ico-license]: http://poser.pugx.org/alisalehi/laravel-lang-files-translator/license
[ico-downloads]: http://poser.pugx.org/alisalehi/laravel-lang-files-translator/downloads
