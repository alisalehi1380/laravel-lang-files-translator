# <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="25" width="30" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 9 8 L 25.886719 8 L 25.886719 26.308594 L 9 26.308594 Z M 9 8 " clip-rule="nonzero"/></clipPath><clipPath id="id2"><path d="M 3.386719 3.808594 L 21 3.808594 L 21 22 L 3.386719 22 Z M 3.386719 3.808594 " clip-rule="nonzero"/></clipPath><clipPath id="id3"><path d="M 14 21 L 21 21 L 21 26.308594 L 14 26.308594 Z M 14 21 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="rgb(81.17981%, 84.709167%, 86.268616%)" d="M 9.011719 8.183594 L 24.636719 8.183594 C 25.328125 8.183594 25.886719 8.746094 25.886719 9.433594 L 25.886719 25.058594 C 25.886719 25.75 25.328125 26.308594 24.636719 26.308594 L 15.886719 26.308594 Z M 9.011719 8.183594 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="rgb(32.939148%, 43.139648%, 47.839355%)" d="M 16.40625 21.84375 L 15.835938 20.734375 L 16.390625 20.449219 C 16.429688 20.429688 20.203125 18.441406 22.042969 14.757812 L 22.320312 14.199219 L 23.441406 14.757812 L 23.160156 15.316406 C 21.132812 19.375 17.132812 21.472656 16.960938 21.558594 Z M 16.40625 21.84375 " fill-opacity="1" fill-rule="nonzero"/><path fill="rgb(32.939148%, 43.139648%, 47.839355%)" d="M 23.398438 21.308594 L 22.855469 21.003906 C 22.726562 20.933594 19.671875 19.191406 17.546875 16.210938 L 18.5625 15.484375 C 20.523438 18.230469 23.441406 19.898438 23.46875 19.914062 L 24.011719 20.222656 Z M 23.398438 21.308594 " fill-opacity="1" fill-rule="nonzero"/><path fill="rgb(32.939148%, 43.139648%, 47.839355%)" d="M 15.886719 13.808594 L 24.636719 13.808594 L 24.636719 15.058594 L 15.886719 15.058594 Z M 15.886719 13.808594 " fill-opacity="1" fill-rule="nonzero"/><path fill="rgb(32.939148%, 43.139648%, 47.839355%)" d="M 19.636719 12.558594 L 20.886719 12.558594 L 20.886719 15.058594 L 19.636719 15.058594 Z M 19.636719 12.558594 " fill-opacity="1" fill-rule="nonzero"/><g clip-path="url(#id2)"><path fill="rgb(12.939453%, 58.81958%, 95.289612%)" d="M 20.261719 21.933594 L 4.636719 21.933594 C 3.945312 21.933594 3.386719 21.375 3.386719 20.683594 L 3.386719 5.058594 C 3.386719 4.371094 3.945312 3.808594 4.636719 3.808594 L 13.386719 3.808594 Z M 20.261719 21.933594 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#id3)"><path fill="rgb(24.708557%, 31.759644%, 70.979309%)" d="M 15.886719 26.308594 L 14.011719 21.933594 L 20.261719 21.933594 Z M 15.886719 26.308594 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="rgb(100%, 100%, 100%)" d="M 11.621094 15.058594 L 8.894531 15.058594 L 8.265625 16.933594 L 6.511719 16.933594 L 9.488281 8.808594 L 11.015625 8.808594 L 14.011719 16.933594 L 12.257812 16.933594 Z M 9.289062 13.808594 L 11.226562 13.808594 L 10.253906 10.863281 Z M 9.289062 13.808594 " fill-opacity="1" fill-rule="nonzero"/></svg> Laravel Lang Files Translator

![Laravel Lang Files Translator][img-package]
[![Required Laravel Version][ico-laravel]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]
[![License][ico-license]][link-packagist]
[![PHP Version Require][ico-php]][link-packagist]
***
Laravel lang files translator is a package for the Easiest way to translate lang files to other languages in PHP format in Laravel. <br>

## problems:
**Did you buy a Laravel script and it doesn't have your language in the`lang`file?** </br>
**Do you want to make your web application bilingual, but you don't know how to translate all those words?**</br>
**Do you not have the possibility to use the JSON format that many Laravel language translation packages give you?**

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

## 🙋Contributing
![laravel-lang-files-translator](https://github.com/alisalehi1380/laravel-lang-files-translator/assets/111766206/a43389af-2f2e-4f29-8993-0609b94abbe8)

As Einstein said, **"There's a way to do it better!"** So I welcome any change that makes the code better, more readable, and testable. (Even renaming a variable!) 

Just open an issue or pull a request.


## License
The MIT License (MIT). See **[License File](https://github.com/alisalehi1380/laravel-lang-files-translator/blob/master/LICENSE)** for more information.

## ❤️Contributing
This project exists thanks to all the people who
contribute. [CONTRIBUTING](https://github.com/alisalehi/laravel-lang-files-translator/graphs/contributors)


[img-package]: https://banners.beyondco.de/laravel-lang-files-translator%20.png?theme=dark&packageManager=composer+require&packageName=alisalehi%2Flaravel-lang-files-translator&pattern=fourPointStars&style=style_1&description=Easiest+way+to+translate+lang+files&md=1&showWatermark=0&fontSize=100px&images=translate
[ico-laravel]: https://img.shields.io/badge/Laravel-≥%208-ff2d20?style=&logo=laravel
[link-packagist]: https://packagist.org/packages/alisalehi/laravel-lang-files-translator
[ico-php]: http://poser.pugx.org/alisalehi/laravel-lang-files-translator/require/php
[ico-license]: http://poser.pugx.org/alisalehi/laravel-lang-files-translator/license
[ico-downloads]: http://poser.pugx.org/alisalehi/laravel-lang-files-translator/downloads
