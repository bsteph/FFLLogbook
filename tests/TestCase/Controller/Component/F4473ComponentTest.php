<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\F4473Component;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\F4473Component Test Case
 */
class F4473ComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\F4473Component
     */
    public $F4473;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->F4473 = new F4473Component($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->F4473);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
