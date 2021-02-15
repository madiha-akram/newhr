<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Leave extends Entity
{
   
    protected $_accessible = [
        'reason' => true,
        'fromm' => true,
        'until' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
    ];
}
