<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Primes Controller
 *
 *
 * @method \App\Model\Entity\Prime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrimesController extends AppController
{
  public function initialize()
  {
    $this->loadComponent('RequestHandler');
  }

  /**
  * List method for returning a basic page
  */
  public function primeList()
  {
    $this->viewBuilder()->setLayout('empty');
  }

  /**
  * Index method
  *
  * @return \Cake\Http\Response|void
  */
  public function index()
  {
    $primes = $this->getPrimes();

    $this->viewBuilder()->setLayout('empty');
    $this->set([
      '_serialize' => ['primes'],
      'primes' =>$primes,
    ]);
  }

  // Call this with the highest number you want to return (default 1000)
  public function getPrimes($maxPrime = 1000) {
    $primes = array();

    // Prime number algorithm found at: http://www.testingbrain.com/php-tutorial/a-prime-number-list-generation-php-script.html
    $number = 2;
    while ($number < $maxPrime) {
      // How many times can this number be divided?
      $div_count = 0;
      for ($i=1; $i <= $number; $i++) {
        // Fancy modulus math!
        if (($number % $i) == 0) {
          // Yep, increment
          $div_count++;
        }
      }
      // Cool, it's prime
      if ($div_count < 3) {
        $primes[] = $number;
      }
      // Keep going!
      $number = $number+1;
    }

    return $primes;
  }
}
