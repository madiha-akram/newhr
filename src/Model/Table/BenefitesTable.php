<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Benefites Model
 *
 * @property &\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Benefite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Benefite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Benefite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Benefite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Benefite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Benefite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Benefite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Benefite findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BenefitesTable extends Table
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

        $this->setTable('benefites');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('Medical')
            ->maxLength('Medical', 255)
            ->requirePresence('Medical', 'create')
            ->notEmptyString('Medical');

        $validator
            ->scalar('travel')
            ->maxLength('travel', 255)
            ->requirePresence('travel', 'create')
            ->notEmptyString('travel');

        $validator
            ->scalar('residential')
            ->maxLength('residential', 255)
            ->requirePresence('residential', 'create')
            ->notEmptyString('residential');

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
