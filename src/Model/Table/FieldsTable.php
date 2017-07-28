<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fields Model
 *
 * @method \App\Model\Entity\Field get($primaryKey, $options = [])
 * @method \App\Model\Entity\Field newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Field[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Field|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Field patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Field[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Field findOrCreate($search, callable $callback = null, $options = [])
 */
class FieldsTable extends Table
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
        $this->belongsTo('Gun');
        $this->setTable('fields');
        $this->setDisplayField('ID_F');
        $this->setPrimaryKey('ID_F');
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
            ->integer('ID_F')
            ->allowEmpty('ID_F', 'create');

        $validator
            ->allowEmpty('CALIBER_F')
            ->add('CALIBER_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('STATES_F')
            ->add('STATES_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('ACTION_F')
            ->add('ACTION_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('TYPE_FIREARM_F')
            ->add('TYPE_FIREARM_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('TYPE_ID_F')
            ->add('TYPE_ID_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('FINISH_F')
            ->add('FINISH_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('MATERIAL_F')
            ->add('MATERIAL_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COLOR_F')
            ->add('COLOR_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('ALIEN_DOC_F')
            ->add('ALIEN_DOC_F', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('GUN_MFG_F');

        $validator
            ->allowEmpty('GUN_IMPORTER_F');

        $validator
            ->allowEmpty('GUN_MODEL_F');

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
        $rules->add($rules->isUnique(['CALIBER_F']));
        $rules->add($rules->isUnique(['STATES_F']));
        $rules->add($rules->isUnique(['TYPE_FIREARM_F']));
        $rules->add($rules->isUnique(['TYPE_ID_F']));
        $rules->add($rules->isUnique(['FINISH_F']));
        $rules->add($rules->isUnique(['COLOR_F']));
        $rules->add($rules->isUnique(['MATERIAL_F']));
        $rules->add($rules->isUnique(['ALIEN_DOC_F']));
        $rules->add($rules->isUnique(['ACTION_F']));

        return $rules;
    }
}
