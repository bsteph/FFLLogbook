<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FieldsFixture
 *
 */
class FieldsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_F' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'CALIBER_F' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATES_F' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ACTION_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TYPE_FIREARM_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TYPE_ID_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FINISH_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MATERIAL_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COLOR_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ALIEN_DOC_F' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GUN_MFG_F' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GUN_IMPORTER_F' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GUN_MODEL_F' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_F'], 'length' => []],
            'CALIBER_F' => ['type' => 'unique', 'columns' => ['CALIBER_F'], 'length' => []],
            'STATES_F' => ['type' => 'unique', 'columns' => ['STATES_F'], 'length' => []],
            'TYPE_FIREARM_F' => ['type' => 'unique', 'columns' => ['TYPE_FIREARM_F'], 'length' => []],
            'TYPE_ID_F' => ['type' => 'unique', 'columns' => ['TYPE_ID_F'], 'length' => []],
            'FINISH_F' => ['type' => 'unique', 'columns' => ['FINISH_F'], 'length' => []],
            'COLOR_F' => ['type' => 'unique', 'columns' => ['COLOR_F'], 'length' => []],
            'MATERIAL_F' => ['type' => 'unique', 'columns' => ['MATERIAL_F'], 'length' => []],
            'ALIEN_DOC_F' => ['type' => 'unique', 'columns' => ['ALIEN_DOC_F'], 'length' => []],
            'ACTION_F' => ['type' => 'unique', 'columns' => ['ACTION_F'], 'length' => []],
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
            'ID_F' => 1,
            'CALIBER_F' => 'Lorem ipsum dolor sit amet',
            'STATES_F' => '',
            'ACTION_F' => 'Lorem ipsum dolor sit amet',
            'TYPE_FIREARM_F' => 'Lorem ipsum dolor sit amet',
            'TYPE_ID_F' => 'Lorem ipsum dolor sit amet',
            'FINISH_F' => 'Lorem ipsum dolor sit amet',
            'MATERIAL_F' => 'Lorem ipsum dolor sit amet',
            'COLOR_F' => 'Lorem ipsum dolor sit amet',
            'ALIEN_DOC_F' => 'Lorem ipsum dolor sit amet',
            'GUN_MFG_F' => 'Lorem ipsum dolor sit amet',
            'GUN_IMPORTER_F' => 'Lorem ipsum dolor sit amet',
            'GUN_MODEL_F' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
