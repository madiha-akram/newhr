<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Benefite Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $Medical
 * @property string $travel
 * @property string $residential
 * @property int|null $user_id
 */
class Benefite extends Entity
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
        
        'description' => true,
        'created' => true,
        'modified' => true,
        'Medical' => true,
        'travel' => true,
        'residential' => true,
        'user_id' => true,
        'user' => true,
    ];
}
