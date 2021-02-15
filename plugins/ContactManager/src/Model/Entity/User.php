<?php
namespace ContactManager\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $role
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $address
 * @property string $phone
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $cnic
 * @property string $qualification
 * @property string $experience
 * @property \Cake\I18n\FrozenDate $joining
 * @property string $aggrement
 * @property int $dept_id
 * @property int $job_id
 *
 * @property \ContactManager\Model\Entity\Department $department
 * @property \ContactManager\Model\Entity\Job $job
 * @property \ContactManager\Model\Entity\Attendence[] $attendences
 * @property \ContactManager\Model\Entity\Leave[] $leaves
 * @property \ContactManager\Model\Entity\Project[] $projects
 */
class User extends Entity
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
        'fname' => true,
        'lname' => true,
        'role' => true,
        'email' => true,
        'password' => true,
        'gender' => true,
        'address' => true,
        'phone' => true,
        'dob' => true,
        'cnic' => true,
        'qualification' => true,
        'experience' => true,
        'joining' => true,
        'aggrement' => true,
        'dept_id' => true,
        'job_id' => true,
        'salary' => true,
        'department' => true,
        'job' => true,
        'attendences' => true,
        'leaves' => true,
        'projects' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
