<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Users Model
 */

class UsersTable extends Table
{

    /**
     * Initialize method
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setDisplayField('fname');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departments', [
            'foreignKey' => 'dept_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Attendences', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Leaves', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'user_id',
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
            ->scalar('fname')
            ->maxLength('fname', 255)
            ->requirePresence('fname', 'create')
            ->notEmptyString('fname');

        $validator
            ->scalar('lname')
            ->maxLength('lname', 255)
            ->requirePresence('lname', 'create')
            ->notEmptyString('lname');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 255)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->notEmptyDate('dob');

        $validator
            ->scalar('cnic')
            ->maxLength('cnic', 255)
            ->requirePresence('cnic', 'create')
            ->notEmptyString('cnic');

        $validator
            ->scalar('qualification')
            ->maxLength('qualification', 255)
            ->requirePresence('qualification', 'create')
            ->notEmptyString('qualification');

        $validator
            ->scalar('experience')
            ->maxLength('experience', 255)
            ->requirePresence('experience', 'create')
            ->notEmptyString('experience');

        $validator
            ->date('joining')
            ->requirePresence('joining', 'create')
            ->notEmptyDate('joining');

        $validator
            ->scalar('aggrement')
            ->maxLength('aggrement', 255)
            ->requirePresence('aggrement', 'create')
            ->notEmptyString('aggrement');

        return $validator;
    }

    
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['dept_id'], 'Departments'));
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));

        return $rules;
    }

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }

}
