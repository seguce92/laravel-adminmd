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

You can optionally use the facade for shorter code. Add this to your facades in array `aliases`:
```php
'AdminMD' => Seguce92\AdminMD\Facade::class,
```

Export setting file and resources with command:

```bash
$ php artisan vendor:publish
```

## Configuration
To start using the file manager perform the respective configuration in the file `app\config\seguce92\filemanager.php`

```php
    /**
     * PATH GLOBAL FILEMANAGER EMBED IN TINYMCE EDITOR
     * --------------------------------------------------------------
     *  Path filemanager resources
     */
    'filemanager' => '/filemanager/',

```
### Information and Details
visit site [mascodigo.net](https://mascodigo.net)
