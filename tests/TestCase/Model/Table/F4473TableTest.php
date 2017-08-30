<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\F4473Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\F4473Table Test Case
 */
class F4473TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\F4473Table
     */
    public $F4473;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.f4473'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('F4473') ? [] : ['className' => F4473Table::class];
        $this->F4473 = TableRegistry::get('F4473', $config);
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
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
