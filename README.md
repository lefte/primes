# Erik's Prime Number Generator Sample
## To Run

Requires PHP and Composer to be installed.

Check out this repo, update composer dependencies using ```composer update```, then run the built-in server using ```bin/cake server``` and browse to ```localhost:8765```.

## JSON Output

The JSON prime array can be found at: ```localhost:8765/primes```. If browsed using a JSON request, it returns as JSON. If not, it returns a helpful message instead. It can also be forced to output JSON by browsing to ```localhost:8765/primes.json```.

## Front-end output

A simple page with an AJAX call can be found at: ```localhost:8765```.

## Testing

PHPUnit tests can be run with ```vendor/bin/phpunit``` to run all tests in the ```tests``` folders.

## CakePHP Application Skeleton

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
