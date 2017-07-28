<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccTable Test Case
 */
class AccTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccTable
     */
    public $Acc;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acc'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Acc') ? [] : ['className' => AccTable::class];
        $this->Acc = TableRegistry::get('Acc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acc);

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
