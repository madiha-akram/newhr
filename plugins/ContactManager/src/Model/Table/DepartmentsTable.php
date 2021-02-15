<?php
namespace ContactManager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @method \ContactManager\Model\Entity\Department get($primaryKey, $options = [])
 * @method \ContactManager\Model\Entity\Department newEntity($data = null, array $options = [])
 * @method \ContactManager\Model\Entity\Department[] newEntities(array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Department|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\Department saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \ContactManager\Model\Entity\Department patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Department[] patchEntities($entities, array $data, array $options = [])
 * @method \ContactManager\Model\Entity\Department findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DepartmentsTable extends Table
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

        $this->setTable('departments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
