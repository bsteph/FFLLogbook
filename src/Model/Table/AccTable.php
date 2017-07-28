<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acc Model
 *
 * @method \App\Model\Entity\Acc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acc findOrCreate($search, callable $callback = null, $options = [])
 */
class AccTable extends Table
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

        $this->setTable('acc');
        $this->setDisplayField('ID_ACC');
        $this->setPrimaryKey('ID_ACC');
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
            ->integer('ID_ACC')
            ->allowEmpty('ID_ACC', 'create');

        $validator
            ->requirePresence('TBLNAME_ACC', 'create')
            ->notEmpty('TBLNAME_ACC');

        $validator
            ->requirePresence('QUENAME_ACC', 'create')
            ->notEmpty('QUENAME_ACC');

        $validator
            ->requirePresence('STROFID_ACC', 'create')
            ->notEmpty('STROFID_ACC');

        $validator
            ->requirePresence('DESCRIPTION_ACC', 'create')
            ->notEmpty('DESCRIPTION_ACC');

        return $validator;
    }
}
