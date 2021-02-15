<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Department extends Entity
{
   
    
    protected $_accessible = [
        'name' => true,
        'created' => true,
        'modified' => true,
    ];
}
