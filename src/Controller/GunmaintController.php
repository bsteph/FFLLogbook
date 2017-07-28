<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gunmaint Controller
 *
 * @property \App\Model\Table\GunmaintTable $Gunmaint
 *
 * @method \App\Model\Entity\Gunmaint[] paginate($object = null, array $settings = [])
 */
class GunmaintController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gunmaint = $this->paginate($this->Gunmaint);

        $this->set(compact('gunmaint'));
        $this->set('_serialize', ['gunmaint']);
    }

    /**
     * View method
     *
     * @param string|null $id Gunmaint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gunmaint = $this->Gunmaint->get($id, [
            'contain' => []
        ]);

        $this->set('gunmaint', $gunmaint);
        $this->set('_serialize', ['gunmaint']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gunmaint = $this->Gunmaint->newEntity();
        if ($this->request->is('post')) {
            $gunmaint = $this->Gunmaint->patchEntity($gunmaint, $this->request->getData());
            if ($this->Gunmaint->save($gunmaint)) {
                $this->Flash->success(__('The gunmaint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gunmaint could not be saved. Please, try again.'));
        }
        $this->set(compact('gunmaint'));
        $this->set('_serialize', ['gunmaint']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gunmaint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gunmaint = $this->Gunmaint->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gunmaint = $this->Gunmaint->patchEntity($gunmaint, $this->request->getData());
            if ($this->Gunmaint->save($gunmaint)) {
                $this->Flash->success(__('The gunmaint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gunmaint could not be saved. Please, try again.'));
        }
        $this->set(compact('gunmaint'));
        $this->set('_serialize', ['gunmaint']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gunmaint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gunmaint = $this->Gunmaint->get($id);
        if ($this->Gunmaint->delete($gunmaint)) {
            $this->Flash->success(__('The gunmaint has been deleted.'));
        } else {
            $this->Flash->error(__('The gunmaint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
