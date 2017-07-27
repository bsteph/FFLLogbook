<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gun Controller
 *
 * @property \App\Model\Table\GunTable $Gun
 *
 * @method \App\Model\Entity\Gun[] paginate($object = null, array $settings = [])
 */


class GunController extends AppController
{
    var $begin_date = '1/1/1960';
    var $end_date = '12/31/2040';
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    public function search()
    {
        if ($this->request->is('post')) {
//            $gun = $this->Gun->patchEntity($gun, $this->request->getData());
            //if ($this->Gun->save($gun)) {
             //   $this->Flash->success(__('The gun has been saved.'));
            //if($this->request->)
            //$co_acq = $this->request->
            $this->request->session()->write(['CO_ACQ','CO_ACQ','BEGIN_DATE','END_DATE']);
          //  $this->request->session()->write('SERIAL','SERIAL');
            //$postvars=$this->request->data['SERIAL']['SERIAL'];
            $serial=$this->request->getData('SERIAL');
            $coacq=$this->request->getData('CO_ACQ');
            $begin_date=$this->request->getData('BEGIN_DATE');
            $end_date=$this->request->getData('END_DATE');

            return $this->redirect(['action' => 'index','?'=>['CO_ACQ'=>$coacq,'SERIAL'=>$serial,'BEGIN_DATE'=>$begin_date,'END_DATE'=>$end_date]]);
  //          }
    //        $this->Flash->error(__('The gun could not be saved. Please, try again.'));
        }
        $this->set(compact('gun'));
        $this->set('_serialize', ['gun']);

    }
    public function exportAll()
    {
        $gun = $this->Gun->find('all');

        $this->set(compact('gun'));
        /*$_header = array('Gun ID','Serial','Manufacurer','Importer','Model','Caliber', 'Action', 'Type', 'Antique','Curio&Relic','Standard Capacity','Material','Finish',
         'Color', 'Date Acquired', 'Price Acquired', 'First Name Acquired', 'Last Name Acquired', 'Company Acquired', 'License Acquired', 'Address 1 Acquired', 'Address 2 Acquired',
            'City Acquired', 'State Acquired', 'Zip Acquired', 'Telephone Acquired', 'Fax Acquired', 'Email Acquired', 'Web Acquired', 'Date Disposed', 'Price Disposed', 'First Name Disposed', 'Last Name Disposed', 'License Disposed', 'DOB Disposed',
            'Company Disposed', 'Address 1 Disposed', 'Address 2 Disposed', 'State Disposed', 'ZIP Code Disposed','ID Type Disposed','ID Auth Disposed', 'ID Number Disposed', '4473', '4473 Number', 'Alien Documentation', 'Round Count',
            'Notes', 'Edit Reason', 'Personal', 'NFA', 'Status', 'NICS Status', 'NICS Time AT', 'NICS Expire', 'NICS Number', 'Curio & Relic Eligible', 'Email Disposed','Telephone Disposed','Web Disposed');*/

        $_serialize='gun';
        $this->viewBuilder()->className('CsvView.Csv');
//        $this->set(compact( '_header', '_extract'));
        $this->set(compact('_serialize', '_extract'));
        $this->response->download("export.csv");
        $this->viewBuilder()->setLayout('ajax');


    }

    public function export()
    {



        //return;
        $gun = $this->Gun->find('all');

        $fields=$this->loadModel("Fields");


        //$mfg = $this->Fields->find('all')->contain(['MFG']);

        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);

        $this->set(compact('gun'));
        $_header= array('Serial Number','Manufacturer', 'Importer','Model','Caliber','Type','Date Acquired','First Name Acquired', 'Last Name Acquired',
            'Company Acquired', 'License Acquired', 'Address 1 Acquired', 'Address 2 Acquired','Date Disposed',  'First Name Disposed',
            'Last Name Disposed','Company Disposed','4473 Number');
        $header="Serial Number,Manufacturer, Importer,Model,Caliber,Type,Date Acquired,First Name Acquired, Last Name Acquired,Company Acquired, License Acquired, Address 1 Acquired, Address 2 Acquired,Date Disposed,  First Name Disposed,Last Name Disposed,Company Disposed,4473 Number";
        $_extract = array('SERIAL','MFG',
        'IMPORTER','MODEL','CALIBER', 'TYPE','DATE_ACQ','FNAME_ACQ','LNAME_ACQ','CO_ACQ','LIC_ACQ','ADDR1_ACQ','ADDR2_ACQ',
            'DATE_DISP','FNAME_DISP','LNAME_DISP', 'CO_DISP','F4473_DISP');
        $_serialize='gun';

        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfg',$mfg);

        //$this->viewBuilder()->className('CsvView.Csv');
        $this->set(compact( '_header', '_extract'));
        //$this->set(compact('_serialize', '_header', '_extract'));
        $this->set('gun', $gun);
        $this->set('header',$header);
        //$this->set('_serialize', ['gun']);
        $this->response->download("export.csv");
        $this->viewBuilder()->setLayout('ajax');


    }

    public function index()
    {
        $this->pdfConfig = array(
            'download' => 'true',
            'filename' => 'gun.pdf'
        );

        $this->loadModel("Fields");
        //$mfg = $this->Fields->find('all')->contain(['MFG']);
        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfg',$mfg);
        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);

        $serial=$this->request->getData('SERIAL');
        $coacq=$this->request->getData('CO_ACQ');
        $begin_date_array=$this->request->getData( 'BEGIN_DATE');
        $end_date_array=$this->request->getData('END_DATE');
        if (!empty($begin_date_array)){
            $begin_date = implode("-",$begin_date_array);
        }
        if (!empty($end_date_array)){
            $end_date = implode("-",$end_date_array);
        }

        if (empty($serial) and !empty($coacq)) {
            $query = $this->Gun->find('all')
                ->where(['CO_ACQ LIKE' => '%' . $coacq . '%']);

        } elseif (empty($coacq) and !empty($serial)){
            $query = $this->Gun->find('all')
                ->where(['SERIAL LIKE' => '%' . $serial . '%']);
        } elseif (!empty($coacq) and !empty($serial)) {
            $query = $this->Gun->find('all')
                ->where(['SERIAL LIKE' => '%' . $serial . '%'])
                ->orWhere(['CO_ACQ LIKE' => '%' . $coacq . '%']);
        } elseif (!empty($begin_date)) {
            if (empty($end_date)) {
                $end_date= date("Y-m-d");
            }
            $query = $this->Gun->find('all')
                ->where(['DATE_ACQ >='=> $begin_date])
                ->andWhere(['DATE_ACQ <=' => $end_date]);

        }
        else {
            $query = $this->Gun->find('all');
        }

        $this->set('gun', $this->paginate($query));

   //     $gun = $this->paginate($this->Gun);


        $this->set(compact('gun'));
        $this->set('_serialize', ['gun']);
    }

    /**
     * View method
     *
     * @param string|null $id Gun id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function pdfview($id=null) {

        $this->pdfConfig = array(
            'download' => 'true',
            'filename' => 'gun.pdf'
        );

        $this->loadModel("Fields");
        //$mfg = $this->Fields->find('all')->contain(['MFG']);
        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfg',$mfg);
        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);

        $serial=$this->request->getData('SERIAL');
        $coacq=$this->request->getData('CO_ACQ');
        $begin_date_array=$this->request->getData( 'BEGIN_DATE');
        $end_date_array=$this->request->getData('END_DATE');
        if (!empty($begin_date_array)){
            $begin_date = implode("-",$begin_date_array);
        }
        if (!empty($end_date_array)){
            $end_date = implode("-",$end_date_array);
        }

        if (empty($serial) and !empty($coacq)) {
            $query = $this->Gun->find('all')
                ->where(['CO_ACQ LIKE' => '%' . $coacq . '%']);

        } elseif (empty($coacq) and !empty($serial)){
            $query = $this->Gun->find('all')
                ->where(['SERIAL LIKE' => '%' . $serial . '%']);
        } elseif (!empty($coacq) and !empty($serial)) {
            $query = $this->Gun->find('all')
                ->where(['SERIAL LIKE' => '%' . $serial . '%'])
                ->orWhere(['CO_ACQ LIKE' => '%' . $coacq . '%']);
        } elseif (!empty($begin_date)) {
            if (empty($end_date)) {
                $end_date= date("Y-m-d");
            }
            $query = $this->Gun->find('all')
                ->where(['DATE_ACQ >='=> $begin_date])
                ->andWhere(['DATE_ACQ <=' => $end_date]);

        }
        else {
            $query = $this->Gun->find('all');
        }

        $this->set('gun', $this->paginate($query));

        //     $gun = $this->paginate($this->Gun);


        $this->set(compact('gun'));
        $this->set('_serialize', ['gun']);
    }


    public function view($id = null)
    {
        $gun = $this->Gun->get($id, [
            'contain' => []
        ]);
        $this->loadModel("Fields");
        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfg',$mfg);
        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);

        $this->pdfConfig = array(
            'download' => 'true',
            'filename' => 'gun.pdf'
        );

        $this->set('gun', $gun);
        $this->set('_serialize', ['gun']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel("Fields");
        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfgs',$mfg);
        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);
        $gun = $this->Gun->newEntity();
        if ($this->request->is('post')) {
            $gun = $this->Gun->patchEntity($gun, $this->request->getData());
            if ($this->Gun->save($gun)) {
                $this->Flash->success(__('The gun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gun could not be saved. Please, try again.'));
        }
        $this->set(compact('gun'));
        $this->set('_serialize', ['gun']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gun id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gun = $this->Gun->get($id, [
            'contain' => []
        ]);
        $this->loadModel("Fields");
        $mfg = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'GUN_MFG_F'])->toArray();
        $this->set('mfgs',$mfg);
        $caliber = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'CALIBER_F'])->toArray();
        $this->set('caliber',$caliber);
        $type_firearm = $this->Fields->find("list", [
            "keyField"=>"id",
            "valueField"=>'TYPE_FIREARM_F'])->toArray();
        $this->set('type_firearm',$type_firearm);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gun = $this->Gun->patchEntity($gun, $this->request->getData());
            if ($this->Gun->save($gun)) {
                $this->Flash->success(__('The gun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gun could not be saved. Please, try again.'));
        }
        $this->set(compact('gun'));
        $this->set('_serialize', ['gun']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gun id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gun = $this->Gun->get($id);
        if ($this->Gun->delete($gun)) {
            $this->Flash->success(__('The gun has been deleted.'));
        } else {
            $this->Flash->error(__('The gun could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
