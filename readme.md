<br>

<div align="center">
<h1 >Laravel Class Generator</h1>
<p align="center">Artisan command for generating a new custom interface, abstract, normal class in Laravel.</p>
</div>

<p align="center">
   <a href="https://github.com/sndrjhlncgr/laraclass/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/sndrjhlncgr/laraclass"></a>
   <a href="https://github.com/sndrjhlncgr/laraclass/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/sndrjhlncgr/laraclass"></a>
   <a href="https://github.com/sndrjhlncgr/laraclass/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/sndrjhlncgr/laraclass"></a>
   <a href="https://github.com/sndrjhlncgr/laraclass/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/sndrjhlncgr/laraclass"></a>
<p align="center">


## Installation

Install the package via composer:
```
composer require laracrate/generator
```


## Usage
Use make:class command from Artisan.

To create a new class,

```php
php artisan make:class YourClass       
// OR WITH CONSTRUCTOR       
php artisan make:class YourClass -c            
php artisan make:class YourClass --constructor 
```



To create a new abstract class

```php
php artisan make:class YourClass --a
// OR
php artisan make:class YourClass --abstract
```

To create a new interface

```php
php artisan make:class YourClass --i
// OR
php artisan make:class YourClass --interface
```

To create a new enum

```php
php artisan make:class YourClass --e
// OR
php artisan make:class YourClass --enum
```


  ['force', 'f', InputOption::VALUE_NONE, 'Create the class even if the class already exists'],
            ['constructor', 'c', InputOption::VALUE_NONE, 'Create a new class with constructor'],
            ['interface', 'i', InputOption::VALUE_NONE, 'Create a new interface class'],
            ['abstract', 'a', InputOption::VALUE_NONE, 'Create a new abstract class'],
            ['enum', 'e', InputOption::VALUE_NONE, 'Create a new enum'],







Usage
To create a new class, call the make:class command from Artisan. Class will be created under the app folder.

php artisan make:class ClassName
You can add the -c or --constructor option to generate new class with constructor.

php artisan make:class ClassName -c
php artisan make:class ClassName --constructor