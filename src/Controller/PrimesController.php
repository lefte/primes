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
  * Index method
  *
  * @return \Cake\Http\Response|void
  */
  public function index()
  {
    // Just a test prime array for now
    $primes = array(2, 3, 5, 7);

    $this->viewBuilder()->setLayout('empty');
    $this->set([
      '_serialize' => ['primes'],
      'primes' =>$primes,
    ]);
  }
}
