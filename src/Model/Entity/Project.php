<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Project extends Entity
{

    protected $_accessible = [
        'name' => true,
        'completion' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
    ];
}
