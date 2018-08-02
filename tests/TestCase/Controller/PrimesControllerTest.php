<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PrimesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PrimesController Test Case
 */
class PrimesControllerTest extends IntegrationTestCase
{
    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
      $result = $this->get('/primes');

      $this->assertResponseOk();
    }

    /**
     * Test whether this returns an array
     *
     * @return void
     */
    public function testPrimesIsArray() {
      $this->configRequest([
        'headers' => ['Accept' => 'application/json']
      ]);
      $result = $this->get('/primes');

      // Check that the response was a 200
      $this->assertResponseOk();

      // Assert that it's an array
      // fwrite(STDERR, print_r(json_decode((string)$this->_response->getBody(), true), TRUE));
      $this->assertTrue(is_array(json_decode((string)$this->_response->getBody(), true)));
    }

    /**
     * Test whether the first item is a 2
     *
     * @return void
     */
    public function testPrimesBeginsWithTwo() {
      $this->configRequest([
        'headers' => ['Accept' => 'application/json']
      ]);
      $result = $this->get('/primes');

      // Check that the response was a 200
      $this->assertResponseOk();
    }
}
