<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maint Model
 *
 * @method \App\Model\Entity\Maint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Maint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Maint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Maint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maint findOrCreate($search, callable $callback = null, $options = [])
 */
class MaintTable extends Table
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

        $this->setTable('maint');
        $this->setDisplayField('ID_MAINT');
        $this->setPrimaryKey('ID_MAINT');
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
            ->integer('ID_MAINT')
            ->allowEmpty('ID_MAINT', 'create');

        $validator
            ->allowEmpty('TYPE_MAINT');

        $validator
            ->date('DATE_MAINT')
            ->allowEmpty('DATE_MAINT');

        $validator
            ->allowEmpty('DESCRIPTION_MAINT');

        $validator
            ->allowEmpty('NOTES_MAINT');

        return $validator;
    }
}
