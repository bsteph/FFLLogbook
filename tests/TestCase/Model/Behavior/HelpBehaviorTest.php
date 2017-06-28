<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\HelpBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\HelpBehavior Test Case
 */
class HelpBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\HelpBehavior
     */
    public $Help;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Help = new HelpBehavior();
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
