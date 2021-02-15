<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;



class Holiday extends Entity
{
   
    protected $_accessible = [
        'reason' => true,
        'description' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
    ];
}
