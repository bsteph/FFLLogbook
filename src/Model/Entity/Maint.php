<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maint Entity
 *
 * @property int $ID_MAINT
 * @property string $TYPE_MAINT
 * @property \Cake\I18n\Date $DATE_MAINT
 * @property string $DESCRIPTION_MAINT
 * @property string $NOTES_MAINT
 */
class Maint extends Entity
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
        'ID_MAINT' => false
    ];
}
