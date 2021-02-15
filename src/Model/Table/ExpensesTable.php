<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expenses Model
 */
class ExpensesTable extends Table
{
    /**
     * Initialize method
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('expenses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('qty')
            ->maxLength('qty', 255)
            ->requirePresence('qty', 'create')
            ->notEmptyString('qty');

        $validator
            ->scalar('pfrom')
            ->maxLength('pfrom', 255)
            ->requirePresence('pfrom', 'create')
            ->notEmptyString('pfrom');

        $validator
            ->date('pdate')
            ->requirePresence('pdate', 'create')
            ->notEmptyDate('pdate');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('more')
            ->requirePresence('more', 'create')
            ->notEmptyString('more');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
