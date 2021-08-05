# Laravel Toastr JS Notify System


### 1. Install

    composer require idemonbd/notify
    
### 2. Add resources

   
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


### 3. Usages

    <!--  Example   -->
    Notify::success('You have successfully added Notify alert system');
    Notify()->info('Info message with helper function');
    
    <!--  Using Facade    -->
    Notify::info('message', 'title', ['options']);
    Notify::success('message', 'title', ['options']);
    Notify::warning('message', 'title', ['options']);
    Notify::error('message', 'title', ['options']);
    
    <!--   Clear   -->
    Notify::clear();
    
    
## You have successfully installed notify system. 😃
 

### More Configuration

Add the service provider to `config/app.php`

```php
Idemonbd\Notify\NotifyServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Notify'  => Idemonbd\Notify\Facades\Notify::class,
```

### Options

Publish the config file

    php artisan vendor:publish --provider=Idemonbd\Notify\NotifyServiceProvider

For More visit [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### MIT

