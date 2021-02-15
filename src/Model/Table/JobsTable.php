<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 */
class JobsTable extends Table
{
    /**
     * Initialize method
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('jobs');
        $this->setDisplayField('title');
        //$this->setDisplayField('salary');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'job_id',
        ]);
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');
            $validator
            ->scalar('salary')
            ->maxLength('salary', 255)
            ->requirePresence('salary', 'create')
            ->notEmptyString('salary');
            $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');
            $validator
            ->scalar('vaccancy')
            ->maxLength('vaccancy', 255)
            ->requirePresence('vaccancy', 'create')
            ->notEmptyString('vaccancy');


        return $validator;
    }
}
