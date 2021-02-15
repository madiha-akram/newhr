<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


class User extends Entity
{

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
        'department' => true,
        'job' => true,
        'attendences' => true,
        'leaves' => true,
        'projects' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     */
    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }

}
