<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Expense extends Entity
{
  
    
    protected $_accessible = [
        'name' => true,
        'qty' => true,
        'pfrom' => true,
        'pdate' => true,
        'price' => true,
        'more' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
    ];
}
