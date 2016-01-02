# Laravel - Is Steam RIP

## Installation

First, pull in the package through Composer.

```js
composer require m44rt3np44uw/laravel-is-steam-rip
```

And then, if using Laravel 5.1, include the service provider within `app/config/app.php`.

```php
'providers' => [
    M44rt3np44uw\IsSteamRIP\Providers\IsSteamRIPServiceProvider::class,
]
```

Aliases will be automatically set in the service provider.

If using Laravel 5. Include this service provider.

```php
'providers' => [
   "M44rt3np44uw\IsSteamRIP\Providers\IsSteamRIPServiceProvider"
]
```

## Usage

Within, for example the routes.php add this.

```php
Route::get('/steam-status', function()
{
    // Steam Status.
    $steamStatus = RIP::steamStatus();

    // echo steam status.
    echo $steamStatus;
});
```

## Available is.steam.rip API calls

| API Call         | Method             |
| ---------------- | ------------------ |
| steamStatus      | steamStatus()      |
| getAllRegionData | getAllRegionData() |
| getRegions       | getRegions()       |
| isSteamRip       | isSteamRip()       |
| opData           | opData()           |
| test             | test()             |