# Laravel Server Error Pages
[![Latest Stable Version](https://poser.pugx.org/enniosousa/server-error-pages/v/stable)](https://packagist.org/packages/enniosousa/server-error-pages)
[![Total Downloads](https://poser.pugx.org/enniosousa/server-error-pages/downloads)](https://packagist.org/packages/enniosousa/server-error-pages)
[![License](https://poser.pugx.org/enniosousa/server-error-pages/license)](https://packagist.org/packages/enniosousa/server-error-pages)

### Table of Contents
* [Errors Avaliables](#errors-avaliables)
* [Languages Avaliables](#languages-avaliables)
* [Installation](#installation)
* [How to Create Custom Error Pages](#how-to-create-custom-error-pages)
* [Custom Error Messages](#custom-error-messages)


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

### Languages Avaliables
* English by [alexphelps/server-error-pages](https://github.com/alexphelps/server-error-pages)
* Brazilian Portuguese by [Ennio Sousa](https://enniosousa.com.br)
* Spanish by [Patricia Carmona](https://github.com/carmonapacs)

## Installation
**Step 1**:Install package via Composer
```bash
composer require enniosousa/server-error-pages
```
**Step 2**: If you are using Laravel 5, include the service provider within your `config/app.php` file.

```php
'providers' => [
    EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider::class,
];
```

**Step 3**: Publish vendor provider
```bash
php artisan vendor:publish --provider="EnnioSousa\ServerErrorPages\ServerErrorPagesServiceProvider"
```

## How to Create Custom Error Pages
**Step 1**:  Create new empty file named with HTTP code error at folder `resources/views/errors` like specified in [Laravel docs](https://laravel.com/docs/5.5/errors#custom-http-error-pages).

**Step 2**: Put the following content in the file you just created.
```
@include('server-error-pages::template', compact($exception))
```

**Step 3**: Add to file `resrouces/lang/vendor/en/server-error-pages.php` custom messages following the template:
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
