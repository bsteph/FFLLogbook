<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Acc Entity
 *
 * @property int $ID_ACC
 * @property string $TBLNAME_ACC
 * @property string $QUENAME_ACC
 * @property string $STROFID_ACC
 * @property string $DESCRIPTION_ACC
 */
class Acc extends Entity
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
        'ID_ACC' => false
    ];
}
