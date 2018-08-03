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
