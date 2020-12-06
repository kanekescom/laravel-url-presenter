# laravel-url-presenter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

```bash
$ composer require kanekescom/laravel-url-presenter
```

## Usage

```php
namespace App\Models;

use Kanekescom\LaravelUrlPresenter\ResourceUrlPresenter;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    /**
     * The accessors to append to the model's array form.
     *`
     * @var array
     */
    protected $appends = [
        'url',
    ];

    /**
     * Create url attribute.
     *
     * @return void
     */
    public function getUrlAttribute()
    {
        return ResourceUrlPresenter::create('myroutes', $this);
    }
```

Or with generate method, you have to set resource attribute

```php
class MyModel extends Model
{
    /**
     * The attributes to get resources name.
     *
     * @return void
     */
    public $route = 'myroutes';

    /**
     * Create url attribute.
     *
     * @return void
     */
    public function getUrlAttribute()
    {
        return ResourceUrlPresenter::generate($this);
    }
```

### With Trait

```php
use Kanekescom\LaravelUrlPresenter\HasUrlPresenter;

class MyModel extends Model
{
    use HasUrlPresenter;

    /**
     * The attributes to get resources name.
     *
     * @return void
     */
    public $route = 'myroutes';
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email kanekescom@gmail.com instead of using the issue tracker.

## Credits

-   [Kanekes.com][link-author]
-   [All Contributors][link-contributors]

## License

MIT. Please see the [license file](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/kanekescom/laravel-url-presenter.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kanekescom/laravel-url-presenter.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kanekescom/laravel-url-presenter/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield
[link-packagist]: https://packagist.org/packages/kanekescom/laravel-url-presenter
[link-downloads]: https://packagist.org/packages/kanekescom/laravel-url-presenter
[link-travis]: https://travis-ci.org/kanekescom/laravel-url-presenter
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/kanekescom
[link-contributors]: ../../contributors
