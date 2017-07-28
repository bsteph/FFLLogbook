<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acc Controller
 *
 * @property \App\Model\Table\AccTable $Acc
 *
 * @method \App\Model\Entity\Acc[] paginate($object = null, array $settings = [])
 */
class AccController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $acc = $this->paginate($this->Acc);

        $this->set(compact('acc'));
        $this->set('_serialize', ['acc']);
    }

    /**
     * View method
     *
     * @param string|null $id Acc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acc = $this->Acc->get($id, [
            'contain' => []
        ]);

        $this->set('acc', $acc);
        $this->set('_serialize', ['acc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acc = $this->Acc->newEntity();
        if ($this->request->is('post')) {
            $acc = $this->Acc->patchEntity($acc, $this->request->getData());
            if ($this->Acc->save($acc)) {
                $this->Flash->success(__('The acc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acc could not be saved. Please, try again.'));
        }
        $this->set(compact('acc'));
        $this->set('_serialize', ['acc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acc = $this->Acc->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acc = $this->Acc->patchEntity($acc, $this->request->getData());
            if ($this->Acc->save($acc)) {
                $this->Flash->success(__('The acc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acc could not be saved. Please, try again.'));
        }
        $this->set(compact('acc'));
        $this->set('_serialize', ['acc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acc = $this->Acc->get($id);
        if ($this->Acc->delete($acc)) {
            $this->Flash->success(__('The acc has been deleted.'));
        } else {
            $this->Flash->error(__('The acc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
