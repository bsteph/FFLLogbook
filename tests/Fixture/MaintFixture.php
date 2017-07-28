<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaintFixture
 *
 */
class MaintFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'maint';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_MAINT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TYPE_MAINT' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DATE_MAINT' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DESCRIPTION_MAINT' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOTES_MAINT' => ['type' => 'string', 'length' => 4096, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_MAINT'], 'length' => []],
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
            'ID_MAINT' => 1,
            'TYPE_MAINT' => 'Lorem ipsum dolor sit amet',
            'DATE_MAINT' => '2017-06-27',
            'DESCRIPTION_MAINT' => 'Lorem ipsum dolor sit amet',
            'NOTES_MAINT' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
