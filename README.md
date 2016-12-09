# CakeShrink plugin for CakePHP

This is part of Code Advent 2016

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require jdmaymeow/cake-shrink
```

Require `jdmaymeow/cake-advent` updated cakephp skeleton. For those who using standard cakephp skeleton update  `bootstrap.php` with following lines

```php
/**
 * Code Advent configuraiton file
 */
try {
    Configure::config('codeadvent', new JsonConfig());
    Configure::load('codeadvent', 'codeadvent', false);
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}
```

and create `config/codeadvent.json` file with 

```
{
  "CakeShrink": {
    "url": "https://<your url>/"
  }
}
```