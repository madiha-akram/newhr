<?php
namespace ContactManager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leaves Model
 *
 * @property \ContactManager\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \ContactManager\Model\Entity\Leave get($primaryKey, $options = [])
 * @method \ContactManager\Model\Entity\Leave newEntity($data = null, array $options = [])
 * @method \ContactManager\Model\Entity\Leave[] newEntities(array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Leave|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\Leave saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\Leave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Leave[] patchEntities($entities, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Leave findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeavesTable extends Table
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

        $this->setTable('leaves');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => 'ContactManager.Users',
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
            ->scalar('reason')
            ->maxLength('reason', 255)
            ->requirePresence('reason', 'create')
            ->notEmptyString('reason');

        $validator
            ->date('fromm')
            ->requirePresence('fromm', 'create')
            ->notEmptyDate('fromm');

        $validator
            ->date('until')
            ->requirePresence('until', 'create')
            ->notEmptyDate('until');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
