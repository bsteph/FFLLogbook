<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gunlite Model
 *
 * @method \App\Model\Entity\Gunlite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gunlite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gunlite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gunlite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gunlite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gunlite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gunlite findOrCreate($search, callable $callback = null, $options = [])
 */
class GunliteTable extends Table
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

        $this->setTable('gunlite');
        $this->setDisplayField('ID_GUN');
        $this->setPrimaryKey(['ID_GUN', 'ID_LITE']);
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
            ->integer('ID_GUN')
            ->allowEmpty('ID_GUN', 'create');

        $validator
            ->integer('ID_LITE')
            ->allowEmpty('ID_LITE', 'create');

        $validator
            ->allowEmpty('functions');

        return $validator;
    }
}
