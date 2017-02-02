## Admin Material Design for Laravel 5.*

## Installation

### Laravel 5.x:
You can install the package for your Laravel 5 project through Composer.

```bash
$ composer require seguce92/laravel-adminmd
```

Register the service provider array in `app/config/app.php`.
```php
Seguce92\AdminMD\ServiceProvider::class,
```

Export setting file and resources with command:

```bash
$ php artisan vendor:publish
```

## Configuration
To start using the file manager perform the respective configuration in the file `app\config\seguce92\filemanager.php`

```php
<?php
/**
 * @package AdminMD
 */
return [
    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * COLOR SIDEBAR THEME
     * ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     *
     * themes available [amber, black, blue-grey, blue, brown, cyan, deep-orange, deep-purple, green, grey, indigo, light-blue, lime, orange, pink, purple, red, teal, yellow]
     */
    'theme' =>  'deep-purple'
];
```
### Examples
Show examples in ```public/vendor/seguce92/AdminMD```

### Information and Details
visit site [mascodigo.net](https://mascodigo.net)
