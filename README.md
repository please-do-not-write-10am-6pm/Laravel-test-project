# Laravel Vimeo

![vimeo](https://cloud.githubusercontent.com/assets/499192/11158771/b3f80b2c-8a5a-11e5-82e5-5db4be19b4ce.png)

> A [Vimeo](https://vimeo.com) bridge for Laravel.

```php
// Fetching data.
$vimeo->request('/users/dashron', ['per_page' => 2], 'GET');

// Upload videos.
$vimeo->upload('/home/aaron/foo.mp4');

// Want to use a facade?
Vimeo::uploadImage('/videos/123/images', '/home/aaron/bar.png', true);
```

```php
use Vimeo\Laravel\Facades\Vimeo;

// Writing this…
Vimeo::connection('main')->upload('/bar.mp4');

// …is identical to writing this
Vimeo::upload('/bar.mp4');

// and is also identical to writing this.
Vimeo::connection()->upload('/bar.mp4');

// This is because the main connection is configured to be the default.
Vimeo::getDefaultConnection(); // This will return main.

// We can change the default connection.
Vimeo::setDefaultConnection('alternative'); // The default is now alternative.
```

If you prefer to use dependency injection over facades like me, then you can inject the manager:

```php
use Vimeo\Laravel\VimeoManager;

class Foo
{
    protected $vimeo;

    public function __construct(VimeoManager $vimeo)
    {
        $this->vimeo = $vimeo;
    }

    public function bar()
    {
        $this->vimeo->upload('/foo.mp4');
    }
}

App::make('Foo')->bar();
```

## Documentation

There are other classes in this package that are not documented here. This is because the package is a Laravel wrapper of [the official Vimeo package](https://github.com/vimeo/vimeo.php).

## License

[Apache License 2.0](LICENSE) © [Vimeo](https://vimeo.com/)
