<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gunlite Entity
 *
 * @property int $ID_GUN
 * @property int $ID_LITE
 * @property string $functions
 */
class Gunlite extends Entity
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
        'ID_GUN' => false,
        'ID_LITE' => false
    ];
}
