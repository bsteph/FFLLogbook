<?php
namespace App\Test\TestCase\Form;

use App\Form\HelpForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\HelpForm Test Case
 */
class HelpFormTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Help = new HelpForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Help);

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
