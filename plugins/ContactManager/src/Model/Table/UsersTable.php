<?php
namespace ContactManager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \ContactManager\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \ContactManager\Model\Table\JobsTable&\Cake\ORM\Association\BelongsTo $Jobs
 * @property \ContactManager\Model\Table\AttendencesTable&\Cake\ORM\Association\HasMany $Attendences
 * @property \ContactManager\Model\Table\LeavesTable&\Cake\ORM\Association\HasMany $Leaves
 * @property \ContactManager\Model\Table\ProjectsTable&\Cake\ORM\Association\HasMany $Projects
 *
 * @method \ContactManager\Model\Entity\User get($primaryKey, $options = [])
 * @method \ContactManager\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \ContactManager\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \ContactManager\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departments', [
            'foreignKey' => 'dept_id',
            'joinType' => 'INNER',
            'className' => 'ContactManager.Departments',
        ]);
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER',
            'className' => 'ContactManager.Jobs',
        ]);
        $this->hasMany('Attendences', [
            'foreignKey' => 'user_id',
            'className' => 'ContactManager.Attendences',
        ]);
        $this->hasMany('Leaves', [
            'foreignKey' => 'user_id',
            'className' => 'ContactManager.Leaves',
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'user_id',
            'className' => 'ContactManager.Projects',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
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
            $validator
            ->scalar('salary')
            ->maxLength('salary', 255)
            ->requirePresence('salary', 'create')
            ->notEmptyString('salary');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['dept_id'], 'Departments'));
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));

        return $rules;
    }
}
