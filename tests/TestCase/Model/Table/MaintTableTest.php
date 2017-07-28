<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaintTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaintTable Test Case
 */
class MaintTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaintTable
     */
    public $Maint;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maint'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Maint') ? [] : ['className' => MaintTable::class];
        $this->Maint = TableRegistry::get('Maint', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Maint);

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
