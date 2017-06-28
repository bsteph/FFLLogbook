<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gunmaint Model
 *
 * @method \App\Model\Entity\Gunmaint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gunmaint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gunmaint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gunmaint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gunmaint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gunmaint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gunmaint findOrCreate($search, callable $callback = null, $options = [])
 */
class GunmaintTable extends Table
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

        $this->setTable('gunmaint');
        $this->setDisplayField('ID_GUN');
        $this->setPrimaryKey(['ID_GUN', 'ID_MAINT']);
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
            ->integer('ID_MAINT')
            ->allowEmpty('ID_MAINT', 'create');

        return $validator;
    }
}
