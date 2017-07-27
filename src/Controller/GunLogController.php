<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * GunLog Controller
 *
 * @property \App\Model\Table\GunLogTable $GunLog
 *
 * @method \App\Model\Entity\GunLog[] paginate($object = null, array $settings = [])
 */
class GunLogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $showdelete=Configure::read('SHOWDELETE');

        $idgun=$this->request->getData('ID_GUN');
        if (!empty($idgun)) {
            $query = $this->GunLog->find('all')
                ->where(['ID_GUN ='=> $idgun]);
            $this->set('gunLog', $this->paginate($query));
        }
        else {
            $gunLog = $this->paginate($this->GunLog);
        }

        $dodelete="False";

        if ($showdelete == true) {
            $dodelete="True";
        }


        $this->set('dodelete',$dodelete);
        $this->set(compact('gunLog'));
        $this->set('_serialize', ['gunLog']);
    }

    /**
     * View method
     *
     * @param string|null $id Gun Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gunLog = $this->GunLog->get($id, [
            'contain' => []
        ]);

        $this->set('gunLog', $gunLog);
        $this->set('_serialize', ['gunLog']);
    }
    public function exportAll()
    {
        $gunLog = $this->GunLog->find('all');

        $this->set(compact('gunLog'));
        /*$_header = array('Gun ID','Serial','Manufacurer','Importer','Model','Caliber', 'Action', 'Type', 'Antique','Curio&Relic','Standard Capacity','Material','Finish',
         'Color', 'Date Acquired', 'Price Acquired', 'First Name Acquired', 'Last Name Acquired', 'Company Acquired', 'License Acquired', 'Address 1 Acquired', 'Address 2 Acquired',
            'City Acquired', 'State Acquired', 'Zip Acquired', 'Telephone Acquired', 'Fax Acquired', 'Email Acquired', 'Web Acquired', 'Date Disposed', 'Price Disposed', 'First Name Disposed', 'Last Name Disposed', 'License Disposed', 'DOB Disposed',
            'Company Disposed', 'Address 1 Disposed', 'Address 2 Disposed', 'State Disposed', 'ZIP Code Disposed','ID Type Disposed','ID Auth Disposed', 'ID Number Disposed', '4473', '4473 Number', 'Alien Documentation', 'Round Count',
            'Notes', 'Edit Reason', 'Personal', 'NFA', 'Status', 'NICS Status', 'NICS Time AT', 'NICS Expire', 'NICS Number', 'Curio & Relic Eligible', 'Email Disposed','Telephone Disposed','Web Disposed');*/
        $_header = array('ID_LOG', 'ID_GUN', 'OLD_SERIAL', 'SERIAL', 'OLD_MFG', 'MFG', 'OLD_IMPORTER', 'IMPORTER', 'OLD_MODEL', 'MODEL', 'OLD_CALIBER', 'CALIBER', 'OLD_TYPE', 'TYPE', 'OLD_ANT', 'ANT', 'OLD_CR', 'CR', 'OLD_DATE_ACQ', 'DATE_ACQ', 'OLD_FNAME_ACQ', 'FNAME_ACQ', 'OLD_LNAME_ACQ', 'LNAME_ACQ', 'OLD_LIC_ACQ', 'LIC_ACQ', 'OLD_ADDR1_ACQ', 'ADDR1_ACQ', 'OLD_ADDR2_ACQ', 'ADDR2_ACQ', 'OLD_CITY_ACQ', 'CITY_ACQ', 'OLD_STATE_ACQ', 'STATE_ACQ', 'OLD_ZIP_ACQ', 'ZIP_ACQ', 'OLD_DATE_DISP', 'DATE_DISP', 'OLD_FNAME_DISP', 'FNAME_DISP', 'OLD_LNAME_DISP', 'LNAME_DISP', 'OLD_LIC_DISP', 'LIC_DISP', 'OLD_ADDR1_DISP', 'ADDR1_DISP', 'OLD_ADDR2_DISP', 'ADDR2_DISP', 'OLD_CITY_DISP', 'CITY_DISP', 'OLD_STATE_DISP', 'STATE_DISP', 'OLD_ZIP_DISP', 'ZIP_DISP', 'EDIT_REASON', 'ACTION_LOG', 'TIME_LOG', 'OLD_CO_ACQ', 'CO_ACQ', 'OLD_CO_DISP', 'CO_DISP');
        $_serialize='gunLog';
        $this->viewBuilder()->className('CsvView.Csv');

        $this->set(compact('_header','_serialize'));
        //$this->set(compact('_serialize', '_extract'));
        $this->response->download("export.csv");
        $this->viewBuilder()->setLayout('ajax');


    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
   /* public function add()
    {
        $gunLog = $this->GunLog->newEntity();
        if ($this->request->is('post')) {
            $gunLog = $this->GunLog->patchEntity($gunLog, $this->request->getData());
            if ($this->GunLog->save($gunLog)) {
                $this->Flash->success(__('The gun log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gun log could not be saved. Please, try again.'));
        }
        $this->set(compact('gunLog'));
        $this->set('_serialize', ['gunLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gun Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    /*public function edit($id = null)
    {
        $gunLog = $this->GunLog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gunLog = $this->GunLog->patchEntity($gunLog, $this->request->getData());
            if ($this->GunLog->save($gunLog)) {
                $this->Flash->success(__('The gun log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gun log could not be saved. Please, try again.'));
        }
        $this->set(compact('gunLog'));
        $this->set('_serialize', ['gunLog']);
    }*/

    /**
     * Delete method
     *
     * @param string|null $id Gun Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /* public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gunLog = $this->GunLog->get($id);
        if ($this->GunLog->delete($gunLog)) {
            $this->Flash->success(__('The gun log has been deleted.'));
        } else {
            $this->Flash->error(__('The gun log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
}
