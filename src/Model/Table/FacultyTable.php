<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faculty Model
 *
 * @method \App\Model\Entity\Faculty newEmptyEntity()
 * @method \App\Model\Entity\Faculty newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Faculty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faculty get($primaryKey, $options = [])
 * @method \App\Model\Entity\Faculty findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Faculty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Faculty[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faculty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faculty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FacultyTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('Faculty');
        $this->setDisplayField('FacID');
        $this->setPrimaryKey('FacID');

        $this->belongsTo('Unit', [
            "foreignKey"  => "AdminUnit",
            "className" => "Unit"
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('FacID')
            ->maxLength('FacID', 50)
            ->allowEmptyString('FacID', null, 'create');

        $validator
            ->scalar('LastName')
            ->maxLength('LastName', 50)
            ->allowEmptyString('LastName');

        $validator
            ->scalar('FirstName')
            ->maxLength('FirstName', 50)
            ->allowEmptyString('FirstName');

        $validator
            ->boolean('Admin')
            ->notEmptyString('Admin');

        $validator
            ->scalar('UnitAdmin')
            ->maxLength('UnitAdmin', 50)
            ->allowEmptyString('UnitAdmin');

        $validator
            ->scalar('Pwd')
            ->maxLength('Pwd', 255)
            ->allowEmptyString('Pwd');

        $validator
            ->scalar('Username')
            ->maxLength('Username', 50)
            ->allowEmptyString('Username')
            ->add('Username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('Email')
            ->maxLength('Email', 100)
            ->allowEmptyString('Email');

        $validator
            ->scalar('CollegeAdmin')
            ->maxLength('CollegeAdmin', 50)
            ->allowEmptyString('CollegeAdmin');

        $validator
            ->boolean('Ignore')
            ->notEmptyString('Ignore');

        $validator
            ->scalar('AdminUnit')
            ->maxLength('AdminUnit', 50)
            ->allowEmptyString('AdminUnit');

        $validator
            ->boolean('Inactive')
            ->notEmptyString('Inactive');

        $validator
            ->boolean('TenureTrack')
            ->notEmptyString('TenureTrack');

        $validator
            ->scalar('Telephone')
            ->maxLength('Telephone', 50)
            ->allowEmptyString('Telephone');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 255)
            ->allowEmptyString('Address');

        $validator
            ->scalar('Website')
            ->maxLength('Website', 100)
            ->allowEmptyString('Website');

        $validator
            ->integer('PctFullTime')
            ->allowEmptyString('PctFullTime');

        $validator
            ->boolean('GrantsOnly')
            ->notEmptyString('GrantsOnly');

        $validator
            ->boolean('NC')
            ->notEmptyString('NC');

        $validator
            ->scalar('maineedu_email')
            ->maxLength('maineedu_email', 50)
            ->allowEmptyString('maineedu_email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['Username']), ['errorField' => 'Username']);

        return $rules;
    }
}
