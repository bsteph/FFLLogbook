<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GunmaintFixture
 *
 */
class GunmaintFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gunmaint';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_GUN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_MAINT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ID_MAINT' => ['type' => 'index', 'columns' => ['ID_MAINT'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_GUN', 'ID_MAINT'], 'length' => []],
            'GUNmaint_ibfk_1' => ['type' => 'foreign', 'columns' => ['ID_GUN'], 'references' => ['gun', 'ID_GUN'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'GUNmaint_ibfk_2' => ['type' => 'foreign', 'columns' => ['ID_MAINT'], 'references' => ['maint', 'ID_MAINT'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ID_GUN' => 1,
            'ID_MAINT' => 1
        ],
    ];
}
