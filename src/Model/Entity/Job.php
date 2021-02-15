<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;



class Job extends Entity
{
   

    protected $_accessible = [
        'title' => true,
        'created' => true,
        'modified' => true,
       
        'users' => true,
        'salary' => true,
        'status' => true,
        'vaccancy' => true,
    ];
}
