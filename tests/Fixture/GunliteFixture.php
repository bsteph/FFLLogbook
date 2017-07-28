<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GunliteFixture
 *
 */
class GunliteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gunlite';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_GUN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_LITE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'functions' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'ID_LITE' => ['type' => 'index', 'columns' => ['ID_LITE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_GUN', 'ID_LITE'], 'length' => []],
            'GUNlite_ibfk_1' => ['type' => 'foreign', 'columns' => ['ID_GUN'], 'references' => ['gun', 'ID_GUN'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'GUNlite_ibfk_2' => ['type' => 'foreign', 'columns' => ['ID_LITE'], 'references' => ['lite', 'ID_LITE'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'ID_LITE' => 1,
            'functions' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
