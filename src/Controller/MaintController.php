<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Maint Controller
 *
 * @property \App\Model\Table\MaintTable $Maint
 *
 * @method \App\Model\Entity\Maint[] paginate($object = null, array $settings = [])
 */
class MaintController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $maint = $this->paginate($this->Maint);

        $this->set(compact('maint'));
        $this->set('_serialize', ['maint']);
    }

    /**
     * View method
     *
     * @param string|null $id Maint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maint = $this->Maint->get($id, [
            'contain' => []
        ]);

        $this->set('maint', $maint);
        $this->set('_serialize', ['maint']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maint = $this->Maint->newEntity();
        if ($this->request->is('post')) {
            $maint = $this->Maint->patchEntity($maint, $this->request->getData());
            if ($this->Maint->save($maint)) {
                $this->Flash->success(__('The maint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maint could not be saved. Please, try again.'));
        }
        $this->set(compact('maint'));
        $this->set('_serialize', ['maint']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maint = $this->Maint->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maint = $this->Maint->patchEntity($maint, $this->request->getData());
            if ($this->Maint->save($maint)) {
                $this->Flash->success(__('The maint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maint could not be saved. Please, try again.'));
        }
        $this->set(compact('maint'));
        $this->set('_serialize', ['maint']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maint = $this->Maint->get($id);
        if ($this->Maint->delete($maint)) {
            $this->Flash->success(__('The maint has been deleted.'));
        } else {
            $this->Flash->error(__('The maint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
