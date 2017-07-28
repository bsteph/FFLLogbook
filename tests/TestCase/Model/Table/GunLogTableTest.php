<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GunLogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GunLogTable Test Case
 */
class GunLogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GunLogTable
     */
    public $GunLog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gun_log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GunLog') ? [] : ['className' => GunLogTable::class];
        $this->GunLog = TableRegistry::get('GunLog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GunLog);

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
