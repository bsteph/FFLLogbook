<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GunLog Entity
 *
 * @property int $ID_LOG
 * @property int $ID_GUN
 * @property string $SERIAL
 * @property string $MFG
 * @property string $IMPORTER
 * @property string $MODEL
 * @property string $CALIBER
 * @property string $TYPE
 * @property bool $ANT
 * @property bool $CR
 * @property \Cake\I18n\Date $DATE_ACQ
 * @property string $FNAME_ACQ
 * @property string $LNAME_ACQ
 * @property string $LIC_ACQ
 * @property string $ADDR1_ACQ
 * @property string $ADDR2_ACQ
 * @property string $CITY_ACQ
 * @property string $STATE_ACQ
 * @property string $ZIP_ACQ
 * @property \Cake\I18n\Date $DATE_DISP
 * @property string $FNAME_DISP
 * @property string $LNAME_DISP
 * @property string $LIC_DISP
 * @property \Cake\I18n\Date $DOB_DISP
 * @property string $ADDR1_DISP
 * @property string $ADDR2_DISP
 * @property string $CITY_DISP
 * @property string $STATE_DISP
 * @property string $ZIP_DISP
 * @property string $ID_TYPE_DISP
 * @property string $ID_AUTH_DISP
 * @property string $ID_NUM_DISP
 * @property string $F4473_DISP
 * @property string $ALIEN_DOC
 * @property string $EDIT_REASON
 * @property string $ACTION_LOG
 * @property \Cake\I18n\Time $TIME_LOG
 * @property string $CO_ACQ
 * @property string $CO_DISP
 */
class GunLog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID_LOG' => false
    ];
}
