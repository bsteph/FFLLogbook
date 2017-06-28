<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GunmaintTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GunmaintTable Test Case
 */
class GunmaintTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GunmaintTable
     */
    public $Gunmaint;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gunmaint'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gunmaint') ? [] : ['className' => GunmaintTable::class];
        $this->Gunmaint = TableRegistry::get('Gunmaint', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gunmaint);

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
