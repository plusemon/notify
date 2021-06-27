# Laravel Toastr JS Notify System

### Installation

Using Composer ^2.0

    composer require idemonbd/notify

### Service Provider (Optional)

Add the service provider to `config/app.php`

```php
Idemonbd\Notify\NotifyServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Notify'  => Idemonbd\Notify\Facades\Notify::class,
```

### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish --provider=Idemonbd\Notify\NotifyServiceProvider

to publish the config file for notify.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.

> You can use Notify() function available.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic Usage

- Notify::info('message', 'title', ['options']);

- Notify::success('message', 'title', ['options']);

- Notify::warning('message', 'title', ['options']);

- Notify::error('message', 'title', ['options']);

- Notify::clear();

- Notify()->info('message', 'title', ['options']);

```php
<?php

Route::get('/', function () {
    Notify::success('Notify Message', 'Notify Title', ["positionClass" => "toast-top-center"]);
    return view('welcome');
});
```

Then

You should add `{!! Notify::message() !!}` to your html.

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Notify</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
</head>

<body>

    <!-- Main Contents -->
    <h1>Laravel Toastr Notify Notification</h1>

    <!-- jQuery CDN -->
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}

</body>

</html>

```

### MIT

