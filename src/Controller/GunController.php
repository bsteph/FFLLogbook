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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $query = $this->Gun
            // Use the plugins 'search' custom finder and pass in the
            // processed query params
            ->find('search', ['search' => $this->request->query]);
            // You can add extra things to the query if you need to
//            ->contain(['Comments'])
            //->where(['title IS NOT' => null]);

        $this->set('gun', $this->paginate($query));

        //$gun = $this->paginate($this->Gun);

        //$this->set(compact('gun'));
        //$this->set('_serialize', ['gun']);
    }

    /**
     * View method
     *
     * @param string|null $id Gun id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gun = $this->Gun->get($id, [
            'contain' => []
        ]);

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
