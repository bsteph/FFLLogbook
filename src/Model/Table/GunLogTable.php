<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GunLog Model
 *
 * @method \App\Model\Entity\GunLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\GunLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GunLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GunLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GunLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GunLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GunLog findOrCreate($search, callable $callback = null, $options = [])
 */
class GunLogTable extends Table
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

        $this->setTable('gun_log');
        $this->setDisplayField('ID_LOG');
        $this->setPrimaryKey('ID_LOG');
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
            ->integer('ID_LOG')
            ->allowEmpty('ID_LOG', 'create');

        $validator
            ->integer('ID_GUN')
            ->allowEmpty('ID_GUN');

        $validator
            ->allowEmpty('SERIAL');

        $validator
            ->allowEmpty('MFG');

        $validator
            ->allowEmpty('IMPORTER');

        $validator
            ->allowEmpty('MODEL');

        $validator
            ->allowEmpty('CALIBER');

        $validator
            ->allowEmpty('TYPE');

        $validator
            ->boolean('ANT')
            ->allowEmpty('ANT');

        $validator
            ->boolean('CR')
            ->allowEmpty('CR');

        $validator
            ->date('DATE_ACQ')
            ->allowEmpty('DATE_ACQ');

        $validator
            ->allowEmpty('FNAME_ACQ');

        $validator
            ->allowEmpty('LNAME_ACQ');

        $validator
            ->allowEmpty('LIC_ACQ');

        $validator
            ->allowEmpty('ADDR1_ACQ');

        $validator
            ->allowEmpty('ADDR2_ACQ');

        $validator
            ->allowEmpty('CITY_ACQ');

        $validator
            ->allowEmpty('STATE_ACQ');

        $validator
            ->allowEmpty('ZIP_ACQ');

        $validator
            ->date('DATE_DISP')
            ->allowEmpty('DATE_DISP');

        $validator
            ->allowEmpty('FNAME_DISP');

        $validator
            ->allowEmpty('LNAME_DISP');

        $validator
            ->allowEmpty('LIC_DISP');

        $validator
            ->date('DOB_DISP')
            ->allowEmpty('DOB_DISP');

        $validator
            ->allowEmpty('ADDR1_DISP');

        $validator
            ->allowEmpty('ADDR2_DISP');

        $validator
            ->allowEmpty('CITY_DISP');

        $validator
            ->allowEmpty('STATE_DISP');

        $validator
            ->allowEmpty('ZIP_DISP');

        $validator
            ->allowEmpty('ID_TYPE_DISP');

        $validator
            ->allowEmpty('ID_AUTH_DISP');

        $validator
            ->allowEmpty('ID_NUM_DISP');

        $validator
            ->allowEmpty('F4473_DISP');

        $validator
            ->allowEmpty('ALIEN_DOC');

        $validator
            ->allowEmpty('EDIT_REASON');

        $validator
            ->allowEmpty('ACTION_LOG');

        $validator
            ->dateTime('TIME_LOG')
            ->requirePresence('TIME_LOG', 'create')
            ->notEmpty('TIME_LOG');

        $validator
            ->allowEmpty('CO_ACQ');

        $validator
            ->allowEmpty('CO_DISP');

        return $validator;
    }
}
