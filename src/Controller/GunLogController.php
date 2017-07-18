<?php
namespace App\Controller;

use App\Controller\AppController;

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


        $idgun=$this->request->getData('ID_GUN');
        if (!empty($idgun)) {
            $query = $this->GunLog->find('all')
                ->where(['ID_GUN ='=> $idgun]);
            $this->set('gunLog', $this->paginate($query));
        }
        else {
            $gunLog = $this->paginate($this->GunLog);
        }

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
