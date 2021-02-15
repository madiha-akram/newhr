<?php
namespace ContactManager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Leave Entity
 *
 * @property int $id
 * @property string $reason
 * @property \Cake\I18n\FrozenDate $fromm
 * @property \Cake\I18n\FrozenDate $until
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $user_id
 *
 * @property \ContactManager\Model\Entity\User $user
 */
class Leave extends Entity
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
        'reason' => true,
        'fromm' => true,
        'until' => true,
        'status' => false,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
    ];
}
