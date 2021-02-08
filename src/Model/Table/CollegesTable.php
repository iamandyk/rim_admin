<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colleges Model
 *
 * @method \App\Model\Entity\College newEmptyEntity()
 * @method \App\Model\Entity\College newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\College[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\College get($primaryKey, $options = [])
 * @method \App\Model\Entity\College findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\College patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\College[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\College|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CollegesTable extends Table
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

        $this->setTable('College');
        $this->setDisplayField('College');
        $this->setPrimaryKey('College');

        $this->hasMany('Unit', [
            "foreignKey" => "College"
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
            ->scalar('College')
            ->maxLength('College', 50)
            ->allowEmptyString('College', null, 'create');

        $validator
            ->scalar('CollegeName')
            ->maxLength('CollegeName', 100)
            ->allowEmptyString('CollegeName');

        $validator
            ->scalar('ContactEmail')
            ->maxLength('ContactEmail', 50)
            ->allowEmptyString('ContactEmail');

        $validator
            ->scalar('ContactName')
            ->maxLength('ContactName', 50)
            ->allowEmptyString('ContactName');

        $validator
            ->scalar('ContactTel')
            ->maxLength('ContactTel', 20)
            ->allowEmptyString('ContactTel');

        $validator
            ->scalar('Homepage')
            ->maxLength('Homepage', 4294967295)
            ->allowEmptyString('Homepage');

        $validator
            ->scalar('Stylesheet')
            ->maxLength('Stylesheet', 50)
            ->allowEmptyString('Stylesheet');

        $validator
            ->scalar('Report')
            ->maxLength('Report', 50)
            ->allowEmptyString('Report');

        $validator
            ->integer('FYStart')
            ->allowEmptyString('FYStart');

        return $validator;
    }
}
