## Transliteracija ukraïnśkoï kyrylyci v ukraïnśku latynku

1. Require this package in your composer.json and run composer update :

		"goszowski/ukraine-latin-translit": "1.*"
    
2. Use 
 ```php
use Goszowski\UkraineLatinTranslit\Translit;

$transit = new Translit;
echo $transit->string('Транслітерація Української кирилиці в Українську латинку');
// Transliteracija ukraïnśkoï kyrylyci v Ukraïnśku latynku
 ```
