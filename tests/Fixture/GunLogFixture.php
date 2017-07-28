<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GunLogFixture
 *
 */
class GunLogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gun_log';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_LOG' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_GUN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OLD_SERIAL' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'SERIAL' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_MFG' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MFG' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_IMPORTER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPORTER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_MODEL' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MODEL' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_CALIBER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CALIBER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_TYPE' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TYPE' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ANT' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'ANT' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'OLD_CR' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'CR' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'OLD_DATE_ACQ' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DATE_ACQ' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'OLD_FNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_LNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_LIC_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LIC_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ADDR1_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR1_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ADDR2_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR2_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_CITY_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CITY_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_STATE_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATE_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ZIP_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ZIP_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_DATE_DISP' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DATE_DISP' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'OLD_FNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_LNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_LIC_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LIC_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ADDR1_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR1_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ADDR2_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR2_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_CITY_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CITY_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_STATE_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATE_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_ZIP_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ZIP_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EDIT_REASON' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ACTION_LOG' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TIME_LOG' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'OLD_CO_ACQ' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CO_ACQ' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'OLD_CO_DISP' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CO_DISP' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_LOG'], 'length' => []],
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
            'ID_LOG' => 1,
            'ID_GUN' => 1,
            'OLD_SERIAL' => 'Lorem ipsum dolor sit amet',
            'SERIAL' => 'Lorem ipsum dolor sit amet',
            'OLD_MFG' => 'Lorem ipsum dolor sit amet',
            'MFG' => 'Lorem ipsum dolor sit amet',
            'OLD_IMPORTER' => 'Lorem ipsum dolor sit amet',
            'IMPORTER' => 'Lorem ipsum dolor sit amet',
            'OLD_MODEL' => 'Lorem ipsum dolor sit amet',
            'MODEL' => 'Lorem ipsum dolor sit amet',
            'OLD_CALIBER' => 'Lorem ipsum dolor sit amet',
            'CALIBER' => 'Lorem ipsum dolor sit amet',
            'OLD_TYPE' => 'Lorem ipsum dolor sit amet',
            'TYPE' => 'Lorem ipsum dolor sit amet',
            'OLD_ANT' => 1,
            'ANT' => 1,
            'OLD_CR' => 1,
            'CR' => 1,
            'OLD_DATE_ACQ' => '2017-07-17',
            'DATE_ACQ' => '2017-07-17',
            'OLD_FNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'FNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_LNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'LNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_LIC_ACQ' => 'Lorem ipsum dolor sit amet',
            'LIC_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_ADDR1_ACQ' => 'Lorem ipsum dolor sit amet',
            'ADDR1_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_ADDR2_ACQ' => 'Lorem ipsum dolor sit amet',
            'ADDR2_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_CITY_ACQ' => 'Lorem ipsum dolor sit amet',
            'CITY_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_STATE_ACQ' => 'Lorem ipsum dolor sit amet',
            'STATE_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_ZIP_ACQ' => 'Lorem ipsum dolor sit amet',
            'ZIP_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_DATE_DISP' => '2017-07-17',
            'DATE_DISP' => '2017-07-17',
            'OLD_FNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'FNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_LNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'LNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_LIC_DISP' => 'Lorem ipsum dolor sit amet',
            'LIC_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_ADDR1_DISP' => 'Lorem ipsum dolor sit amet',
            'ADDR1_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_ADDR2_DISP' => 'Lorem ipsum dolor sit amet',
            'ADDR2_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_CITY_DISP' => 'Lorem ipsum dolor sit amet',
            'CITY_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_STATE_DISP' => 'Lorem ipsum dolor sit amet',
            'STATE_DISP' => 'Lorem ipsum dolor sit amet',
            'OLD_ZIP_DISP' => 'Lorem ipsum dolor sit amet',
            'ZIP_DISP' => 'Lorem ipsum dolor sit amet',
            'EDIT_REASON' => 'Lorem ipsum dolor sit amet',
            'ACTION_LOG' => 'Lorem ipsum dolor sit amet',
            'TIME_LOG' => 1500321926,
            'OLD_CO_ACQ' => 'Lorem ipsum dolor sit amet',
            'CO_ACQ' => 'Lorem ipsum dolor sit amet',
            'OLD_CO_DISP' => 'Lorem ipsum dolor sit amet',
            'CO_DISP' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
