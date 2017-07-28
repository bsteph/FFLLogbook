<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gunlite Controller
 *
 * @property \App\Model\Table\GunliteTable $Gunlite
 *
 * @method \App\Model\Entity\Gunlite[] paginate($object = null, array $settings = [])
 */
class GunliteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gunlite = $this->paginate($this->Gunlite);

        $this->set(compact('gunlite'));
        $this->set('_serialize', ['gunlite']);
    }

    /**
     * View method
     *
     * @param string|null $id Gunlite id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gunlite = $this->Gunlite->get($id, [
            'contain' => []
        ]);

        $this->set('gunlite', $gunlite);
        $this->set('_serialize', ['gunlite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gunlite = $this->Gunlite->newEntity();
        if ($this->request->is('post')) {
            $gunlite = $this->Gunlite->patchEntity($gunlite, $this->request->getData());
            if ($this->Gunlite->save($gunlite)) {
                $this->Flash->success(__('The gunlite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gunlite could not be saved. Please, try again.'));
        }
        $this->set(compact('gunlite'));
        $this->set('_serialize', ['gunlite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gunlite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gunlite = $this->Gunlite->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gunlite = $this->Gunlite->patchEntity($gunlite, $this->request->getData());
            if ($this->Gunlite->save($gunlite)) {
                $this->Flash->success(__('The gunlite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gunlite could not be saved. Please, try again.'));
        }
        $this->set(compact('gunlite'));
        $this->set('_serialize', ['gunlite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gunlite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gunlite = $this->Gunlite->get($id);
        if ($this->Gunlite->delete($gunlite)) {
            $this->Flash->success(__('The gunlite has been deleted.'));
        } else {
            $this->Flash->error(__('The gunlite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
