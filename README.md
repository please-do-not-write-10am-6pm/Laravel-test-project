Laravel Vimeo
=============
![image](https://raw.githubusercontent.com/vinkla/vinkla.github.io/master/images/vimeo-package.png)
Laravel wrapper for the official Vimeo API.

## Installation
Require this package in your `composer.json` and update composer.

```json
{
	"require": {
		"vinkla/vimeo": "~1.0"
	}
}
```

If using [Laravel](http://laravel.com) (not required), add the service provider to ```config/app.php``` in the providers array.

```php
'Vinkla\Vimeo\ViemoServiceProvider'
```

If you want you can use the facade for shorter code. Add the class to your aliases array.
```php
'Vimeo' => 'Vinkla\Vimeo\Facades\Vimeo'
```

To add the configuration file to your `app/config/packages` directory, run the command below.
```bash
php artisan publish:config vinkla/vimeo
```

## License

The Laravel Vimeo package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
