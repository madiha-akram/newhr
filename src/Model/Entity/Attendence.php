<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Attendence extends Entity
{
  
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
