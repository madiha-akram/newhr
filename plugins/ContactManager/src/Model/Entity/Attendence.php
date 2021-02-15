<?php
namespace ContactManager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendence Entity
 *
 * @property int $id
 * @property string $status
 * @property string $detail
 * @property string $task
 * @property \Cake\I18n\FrozenDate $completion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $user_id
 *
 * @property \ContactManager\Model\Entity\User $user
 */
class Attendence extends Entity
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
        'status' => true,
        'detail' => true,
        'task' => true,
        'completion' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
    ];
}
