<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gun Model
 *
 * @method \App\Model\Entity\Gun get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gun newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gun[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gun|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gun patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gun[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gun findOrCreate($search, callable $callback = null, $options = [])
 */
class GunTable extends Table
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

        $this->setTable('gun');
        $this->setDisplayField('ID_GUN');
        $this->setPrimaryKey('ID_GUN');
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
            ->requirePresence('SERIAL', 'create')
            ->notEmpty('SERIAL')
            ->add('SERIAL', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('MFG');

        $validator
            ->allowEmpty('IMPORTER');

        $validator
            ->allowEmpty('MODEL');

        $validator
            ->allowEmpty('CALIBER');

        $validator
            ->allowEmpty('ACTION');

        $validator
            ->allowEmpty('TYPE');

        $validator
            ->boolean('ANT')
            ->requirePresence('ANT', 'create')
            ->notEmpty('ANT');

        $validator
            ->boolean('CR')
            ->requirePresence('CR', 'create')
            ->notEmpty('CR');

        $validator
            ->integer('STDCAP')
            ->allowEmpty('STDCAP');

        $validator
            ->allowEmpty('MATERIAL');

        $validator
            ->allowEmpty('FINISH');

        $validator
            ->allowEmpty('COLOR');

        $validator
            ->date('DATE_ACQ')
            ->allowEmpty('DATE_ACQ');

        $validator
            ->decimal('PRICE_ACQ')
            ->allowEmpty('PRICE_ACQ');

        $validator
            ->allowEmpty('FNAME_ACQ');

        $validator
            ->allowEmpty('LNAME_ACQ');

        $validator
            ->allowEmpty('CO_ACQ');

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
            ->allowEmpty('TEL_ACQ');

        $validator
            ->allowEmpty('FAX_ACQ');

        $validator
            ->allowEmpty('EMAIL_ACQ');

        $validator
            ->allowEmpty('WEB_ACQ');

        $validator
            ->date('DATE_DISP')
            ->allowEmpty('DATE_DISP');

        $validator
            ->decimal('PRICE_DISP')
            ->allowEmpty('PRICE_DISP');

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
            ->allowEmpty('CO_DISP');

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
            ->integer('ROUND_COUNT')
            ->allowEmpty('ROUND_COUNT');

        $validator
            ->allowEmpty('NOTES');

        $validator
            ->allowEmpty('EDIT_REASON');

        $validator
            ->requirePresence('PERSONAL', 'create')
            ->notEmpty('PERSONAL');

        $validator
            ->boolean('NFA')
            ->requirePresence('NFA', 'create')
            ->notEmpty('NFA');

        $validator
            ->allowEmpty('STATUS');

        $validator
            ->allowEmpty('NICS_STATUS');

        $validator
            ->dateTime('NICS_TIMEAT')
            ->requirePresence('NICS_TIMEAT', 'create')
            ->notEmpty('NICS_TIMEAT');

        $validator
            ->dateTime('NICS_EXPIRE')
            ->requirePresence('NICS_EXPIRE', 'create')
            ->notEmpty('NICS_EXPIRE');

        $validator
            ->allowEmpty('NICS_NUMBER');

        $validator
            ->boolean('CR_ELIGIBLE')
            ->requirePresence('CR_ELIGIBLE', 'create')
            ->notEmpty('CR_ELIGIBLE');

        $validator
            ->allowEmpty('EMAIL_DISP');

        $validator
            ->allowEmpty('TEL_DISP');

        $validator
            ->allowEmpty('WEB_DISP');

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
        $rules->add($rules->isUnique(['SERIAL']));

        return $rules;
    }
}
