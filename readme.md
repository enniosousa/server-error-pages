# Laravel Server Error Pages
Laravel server-side error pages inspired [alexphelps/server-error-pages](https://github.com/alexphelps/server-error-pages) repository.

## Languages Avaliables
* English by [alexphelps/server-error-pages](https://github.com/alexphelps/server-error-pages)
* Brazilian Portuguese by [Ennio Sousa](https://enniosousa.com.br)
* Spanish by [Patricia Carmona](https://github.com/carmonapacs)

## Errors Avaliables
* 400 Bad Request
* 401 Unauthorized
* 403 Forbidden
* 404 Not Found
* 405 Method not allowed
* 419 Authentication Timeout
* 429 Too Many Requests
* 500 Internal Server Error
* 502 Bad Gateway
* 503 Service Unavailable
* 504 Gateway Timeout
* Maintenance (used when ```php artisan down```)

## Instalation
Install package via Composer
```bash
composer require enniosousa/server-error-pages
```
Next, if using Laravel 5, include the service provider within your `config/app.php` file.

```php
'providers' => [
    EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider::class,
];
```

Publishing error pages to ``resources/views/errors/`` (required)
```bash
php artisan vendor:publish --provider="EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider" --tag=errors
```

Publishing error pages (optional)
```bash
php artisan vendor:publish --provider="EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider" --tag=views
```

Publishing i18n (optional)
```bash
php artisan vendor:publish --provider="EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider" --tag=lang
```

## Custom HTTP Error Pages
First create new file with HTTP code error at folder ```resources/views/errors``` like specified in [Laravel docs](https://laravel.com/docs/5.5/errors#custom-http-error-pages).

This file's content needs be
```
@include('server-error-pages::template', compact($exception))
```

Last step is add to file ``resrouces/lang/vendor/en/server-error-pages.php`` custom messages following the template:
```php
<?php
return [
  '000' => [
          'title' => "000 HTTP ERROR",
          'description' => "Brief description",
          'icon' => "fa fa-cogs green", //icon color options are: green, orange or red
          'button' => [
              'name' => "Try This Page Again",
              'link_to' => "reload", //options are: reload, home or previous
          ],
          'why' => [
              'title' => "What happened?",
              'description' => "Error description"
          ],
          'what_do' => [
              'title' => "What can I do?",
              'visitor' => [
                  'title' => "If you're a site visitor",
                  'description' => "Explanation."
              ],
              'owner' => [
                  'title' => "If you're the site owner",
                  'description' => "Explanation"
              ],
          ],
      ],
];
```

## Custom Error Messages
Use ```abort()``` Laravel helper
```php
abort(500, "The server is broken");
abort(403, "You user role does not heave permission to see that.");
```

Or
```bash
php artisan down --message="This application is update process. Wait 10 minutes and try again." --retry=600
```
