<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GunliteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GunliteTable Test Case
 */
class GunliteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GunliteTable
     */
    public $Gunlite;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gunlite'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gunlite') ? [] : ['className' => GunliteTable::class];
        $this->Gunlite = TableRegistry::get('Gunlite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gunlite);

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
