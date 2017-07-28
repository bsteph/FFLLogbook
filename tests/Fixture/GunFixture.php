<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GunFixture
 *
 */
class GunFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gun';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_GUN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'SERIAL' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MFG' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPORTER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MODEL' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CALIBER' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ACTION' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TYPE' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ANT' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'CR' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'STDCAP' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MATERIAL' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FINISH' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COLOR' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DATE_ACQ' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'PRICE_ACQ' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'FNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LNAME_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CO_ACQ' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LIC_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR1_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR2_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CITY_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATE_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ZIP_ACQ' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TEL_ACQ' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FAX_ACQ' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EMAIL_ACQ' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'WEB_ACQ' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DATE_DISP' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'PRICE_DISP' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'FNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LNAME_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'LIC_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DOB_DISP' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CO_DISP' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR1_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ADDR2_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CITY_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATE_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ZIP_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_TYPE_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_AUTH_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_NUM_DISP' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'F4473_DISP' => ['type' => 'binary', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ALIEN_DOC' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ROUND_COUNT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NOTES' => ['type' => 'string', 'length' => 4096, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EDIT_REASON' => ['type' => 'string', 'length' => 87, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PERSONAL' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => 'FALSE', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NFA' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'STATUS' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NICS_STATUS' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NICS_TIMEAT' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'NICS_EXPIRE' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'NICS_NUMBER' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CR_ELIGIBLE' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'EMAIL_DISP' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TEL_DISP' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'WEB_DISP' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_GUN'], 'length' => []],
            'SERIAL' => ['type' => 'unique', 'columns' => ['SERIAL'], 'length' => []],
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
            'SERIAL' => 'Lorem ipsum dolor sit amet',
            'MFG' => 'Lorem ipsum dolor sit amet',
            'IMPORTER' => 'Lorem ipsum dolor sit amet',
            'MODEL' => 'Lorem ipsum dolor sit amet',
            'CALIBER' => 'Lorem ipsum dolor sit amet',
            'ACTION' => 'Lorem ipsum dolor sit amet',
            'TYPE' => 'Lorem ipsum dolor sit amet',
            'ANT' => 1,
            'CR' => 1,
            'STDCAP' => 1,
            'MATERIAL' => 'Lorem ipsum dolor sit amet',
            'FINISH' => 'Lorem ipsum dolor sit amet',
            'COLOR' => 'Lorem ipsum dolor sit amet',
            'DATE_ACQ' => '2017-06-27',
            'PRICE_ACQ' => 1.5,
            'FNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'LNAME_ACQ' => 'Lorem ipsum dolor sit amet',
            'CO_ACQ' => 'Lorem ipsum dolor sit amet',
            'LIC_ACQ' => 'Lorem ipsum dolor sit amet',
            'ADDR1_ACQ' => 'Lorem ipsum dolor sit amet',
            'ADDR2_ACQ' => 'Lorem ipsum dolor sit amet',
            'CITY_ACQ' => 'Lorem ipsum dolor sit amet',
            'STATE_ACQ' => 'Lorem ipsum dolor sit amet',
            'ZIP_ACQ' => 'Lorem ipsum dolor sit amet',
            'TEL_ACQ' => 'Lorem ipsum dolor sit amet',
            'FAX_ACQ' => 'Lorem ipsum dolor sit amet',
            'EMAIL_ACQ' => 'Lorem ipsum dolor sit amet',
            'WEB_ACQ' => 'Lorem ipsum dolor sit amet',
            'DATE_DISP' => '2017-06-27',
            'PRICE_DISP' => 1.5,
            'FNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'LNAME_DISP' => 'Lorem ipsum dolor sit amet',
            'LIC_DISP' => 'Lorem ipsum dolor sit amet',
            'DOB_DISP' => '2017-06-27',
            'CO_DISP' => 'Lorem ipsum dolor sit amet',
            'ADDR1_DISP' => 'Lorem ipsum dolor sit amet',
            'ADDR2_DISP' => 'Lorem ipsum dolor sit amet',
            'CITY_DISP' => 'Lorem ipsum dolor sit amet',
            'STATE_DISP' => 'Lorem ipsum dolor sit amet',
            'ZIP_DISP' => 'Lorem ipsum dolor sit amet',
            'ID_TYPE_DISP' => 'Lorem ipsum dolor sit amet',
            'ID_AUTH_DISP' => 'Lorem ipsum dolor sit amet',
            'ID_NUM_DISP' => 'Lorem ipsum dolor sit amet',
            'F4473_DISP' => 'Lorem ipsum dolor sit amet',
            'ALIEN_DOC' => 'Lorem ipsum dolor sit amet',
            'ROUND_COUNT' => 1,
            'NOTES' => 'Lorem ipsum dolor sit amet',
            'EDIT_REASON' => 'Lorem ipsum dolor sit amet',
            'PERSONAL' => 'Lor',
            'NFA' => 1,
            'STATUS' => 'Lorem ipsum dolor sit amet',
            'NICS_STATUS' => 'Lorem ipsum dolor sit amet',
            'NICS_TIMEAT' => 1498591753,
            'NICS_EXPIRE' => 1498591753,
            'NICS_NUMBER' => 'Lorem ipsum dolor sit amet',
            'CR_ELIGIBLE' => 1,
            'EMAIL_DISP' => 'Lorem ipsum dolor sit amet',
            'TEL_DISP' => 'Lorem ip',
            'WEB_DISP' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
