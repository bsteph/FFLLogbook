<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GunTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GunTable Test Case
 */
class GunTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GunTable
     */
    public $Gun;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gun'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gun') ? [] : ['className' => GunTable::class];
        $this->Gun = TableRegistry::get('Gun', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gun);

        parent::tearDown();
    }

    /**
     * Test searchConfiguration method
     *
     * @return void
     */
    public function testSearchConfiguration()
    {
        $this->markTestIncomplete('Not implemented yet.');
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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
