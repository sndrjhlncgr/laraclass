<br>

<div align="center">
<h1 align="center">Laravel Class Generator</h1>
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
Use `php artisan make:class` command to make a class. add `-f` if you want to force create the class.

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
