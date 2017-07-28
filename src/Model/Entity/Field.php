<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Field Entity
 *
 * @property int $ID_F
 * @property string $CALIBER_F
 * @property string $STATES_F
 * @property string $ACTION_F
 * @property string $TYPE_FIREARM_F
 * @property string $TYPE_ID_F
 * @property string $FINISH_F
 * @property string $MATERIAL_F
 * @property string $COLOR_F
 * @property string $ALIEN_DOC_F
 * @property string $GUN_MFG_F
 * @property string $GUN_IMPORTER_F
 * @property string $GUN_MODEL_F
 */
class Field extends Entity
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
        'ID_F' => false
    ];
}
