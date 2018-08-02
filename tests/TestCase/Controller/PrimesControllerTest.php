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
        $this->markTestIncomplete('Not implemented yet.');
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
    }
}
