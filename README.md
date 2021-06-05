# Laravel Toastr JS Alert System

### Installation

Using Composer ^2.0

    composer require idemonbd/laralert

### Laravel ^5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel above 5.4

Add the service provider to `config/app.php`

```php
idemonbd\Alert\AlertServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Alert'  => idemonbd\Alert\Facades\Alert::class,
```

### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish --provider=idemonbd\Alert\AlertServiceProvider

to publish the config file for alert.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.

> You can use Alert() function available.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic Usage

- Alert::info('message', 'title', ['options']);

- Alert::success('message', 'title', ['options']);

- Alert::warning('message', 'title', ['options']);

- Alert::error('message', 'title', ['options']);

- Alert::clear();

- Alert()->info('message', 'title', ['options']);

```php
<?php

Route::get('/', function () {
    Alert::success('Alert Message', 'Alert Title', ["positionClass" => "toast-top-center"]);
    return view('welcome');
});
```

Then

You should add `{!! Alert::message() !!}` to your html.

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Alert</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
</head>

<body>

    <!-- Main Contents -->
    <h1>Laravel Toastr Alert Notification</h1>

    <!-- jQuery CDN -->
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Toastr Scripts render -->
    {!! Alert::message() !!}

</body>

</html>

```

### MIT

