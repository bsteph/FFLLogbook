<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gun Entity
 *
 * @property int $ID_GUN
 * @property string $SERIAL
 * @property string $MFG
 * @property string $IMPORTER
 * @property string $MODEL
 * @property string $CALIBER
 * @property string $ACTION
 * @property string $TYPE
 * @property bool $ANT
 * @property bool $CR
 * @property int $STDCAP
 * @property string $MATERIAL
 * @property string $FINISH
 * @property string $COLOR
 * @property \Cake\I18n\Date $DATE_ACQ
 * @property float $PRICE_ACQ
 * @property string $FNAME_ACQ
 * @property string $LNAME_ACQ
 * @property string $CO_ACQ
 * @property string $LIC_ACQ
 * @property string $ADDR1_ACQ
 * @property string $ADDR2_ACQ
 * @property string $CITY_ACQ
 * @property string $STATE_ACQ
 * @property string $ZIP_ACQ
 * @property string $TEL_ACQ
 * @property string $FAX_ACQ
 * @property string $EMAIL_ACQ
 * @property string $WEB_ACQ
 * @property \Cake\I18n\Date $DATE_DISP
 * @property float $PRICE_DISP
 * @property string $FNAME_DISP
 * @property string $LNAME_DISP
 * @property string $LIC_DISP
 * @property \Cake\I18n\Date $DOB_DISP
 * @property string $CO_DISP
 * @property string $ADDR1_DISP
 * @property string $ADDR2_DISP
 * @property string $CITY_DISP
 * @property string $STATE_DISP
 * @property string $ZIP_DISP
 * @property string $ID_TYPE_DISP
 * @property string $ID_AUTH_DISP
 * @property string $ID_NUM_DISP
 * @property string|resource $F4473_DISP
 * @property string $ALIEN_DOC
 * @property int $ROUND_COUNT
 * @property string $NOTES
 * @property string $EDIT_REASON
 * @property string $PERSONAL
 * @property bool $NFA
 * @property string $STATUS
 * @property string $NICS_STATUS
 * @property \Cake\I18n\Time $NICS_TIMEAT
 * @property \Cake\I18n\Time $NICS_EXPIRE
 * @property string $NICS_NUMBER
 * @property bool $CR_ELIGIBLE
 * @property string $EMAIL_DISP
 * @property string $TEL_DISP
 * @property string $WEB_DISP
 * @property \Cake\I18n\Date $BEGIN_DATE
 * @property \Cake\I18n\Date $END_DATE
 */
class Gun extends Entity
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
        'ID_GUN' => false
    ];
}
