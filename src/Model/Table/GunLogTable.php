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
            ->allowEmpty('OLD_SERIAL');

        $validator
            ->allowEmpty('SERIAL');

        $validator
            ->allowEmpty('OLD_MFG');

        $validator
            ->allowEmpty('MFG');

        $validator
            ->allowEmpty('OLD_IMPORTER');

        $validator
            ->allowEmpty('IMPORTER');

        $validator
            ->allowEmpty('OLD_MODEL');

        $validator
            ->allowEmpty('MODEL');

        $validator
            ->allowEmpty('OLD_CALIBER');

        $validator
            ->allowEmpty('CALIBER');

        $validator
            ->allowEmpty('OLD_TYPE');

        $validator
            ->allowEmpty('TYPE');

        $validator
            ->boolean('OLD_ANT')
            ->allowEmpty('OLD_ANT');

        $validator
            ->boolean('ANT')
            ->allowEmpty('ANT');

        $validator
            ->boolean('OLD_CR')
            ->allowEmpty('OLD_CR');

        $validator
            ->boolean('CR')
            ->allowEmpty('CR');

        $validator
            ->date('OLD_DATE_ACQ')
            ->allowEmpty('OLD_DATE_ACQ');

        $validator
            ->date('DATE_ACQ')
            ->allowEmpty('DATE_ACQ');

        $validator
            ->allowEmpty('OLD_FNAME_ACQ');

        $validator
            ->allowEmpty('FNAME_ACQ');

        $validator
            ->allowEmpty('OLD_LNAME_ACQ');

        $validator
            ->allowEmpty('LNAME_ACQ');

        $validator
            ->allowEmpty('OLD_LIC_ACQ');

        $validator
            ->allowEmpty('LIC_ACQ');

        $validator
            ->allowEmpty('OLD_ADDR1_ACQ');

        $validator
            ->allowEmpty('ADDR1_ACQ');

        $validator
            ->allowEmpty('OLD_ADDR2_ACQ');

        $validator
            ->allowEmpty('ADDR2_ACQ');

        $validator
            ->allowEmpty('OLD_CITY_ACQ');

        $validator
            ->allowEmpty('CITY_ACQ');

        $validator
            ->allowEmpty('OLD_STATE_ACQ');

        $validator
            ->allowEmpty('STATE_ACQ');

        $validator
            ->allowEmpty('OLD_ZIP_ACQ');

        $validator
            ->allowEmpty('ZIP_ACQ');

        $validator
            ->date('OLD_DATE_DISP')
            ->allowEmpty('OLD_DATE_DISP');

        $validator
            ->date('DATE_DISP')
            ->allowEmpty('DATE_DISP');

        $validator
            ->allowEmpty('OLD_FNAME_DISP');

        $validator
            ->allowEmpty('FNAME_DISP');

        $validator
            ->allowEmpty('OLD_LNAME_DISP');

        $validator
            ->allowEmpty('LNAME_DISP');

        $validator
            ->allowEmpty('OLD_LIC_DISP');

        $validator
            ->allowEmpty('LIC_DISP');

        $validator
            ->allowEmpty('OLD_ADDR1_DISP');

        $validator
            ->allowEmpty('ADDR1_DISP');

        $validator
            ->allowEmpty('OLD_ADDR2_DISP');

        $validator
            ->allowEmpty('ADDR2_DISP');

        $validator
            ->allowEmpty('OLD_CITY_DISP');

        $validator
            ->allowEmpty('CITY_DISP');

        $validator
            ->allowEmpty('OLD_STATE_DISP');

        $validator
            ->allowEmpty('STATE_DISP');

        $validator
            ->allowEmpty('OLD_ZIP_DISP');

        $validator
            ->allowEmpty('ZIP_DISP');

        $validator
            ->allowEmpty('EDIT_REASON');

        $validator
            ->allowEmpty('ACTION_LOG');

        $validator
            ->dateTime('TIME_LOG')
            ->requirePresence('TIME_LOG', 'create')
            ->notEmpty('TIME_LOG');

        $validator
            ->allowEmpty('OLD_CO_ACQ');

        $validator
            ->allowEmpty('CO_ACQ');

        $validator
            ->allowEmpty('OLD_CO_DISP');

        $validator
            ->allowEmpty('CO_DISP');

        return $validator;
    }
}
