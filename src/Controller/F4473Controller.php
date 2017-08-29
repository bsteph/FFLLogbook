<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * F4473 Controller
 *
 * @property \App\Model\Table\F4473Table $F4473
 *
 * @method \App\Model\Entity\F4473[] paginate($object = null, array $settings = [])
 */
class F4473Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $f4473 = $this->paginate($this->F4473);

        $this->set(compact('f4473'));
        $this->set('_serialize', ['f4473']);
    }

    /**
     * View method
     *
     * @param string|null $id F4473 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $f4473 = $this->F4473->get($id, [
            'contain' => []
        ]);

        $this->set('f4473', $f4473);
        $this->set('_serialize', ['f4473']);
    }
    public function download($id) {

        $file = $this->F4473->get($id);
        header('Content-type: application/pdf');
        header('Content-length: ' . $file['size']); // some people reported problems with this line (see the comments), commenting out this line helped in those cases
        header('Content-Disposition: attachment; filename="'.$file['name'].'"');
        echo stream_get_contents($file['data']);

        exit();


    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $f4473 = $this->F4473->newEntity();

        if ($this->request->is('post')) {
            $f4473 = $this->F4473->patchEntity($f4473, $this->request->getData());

         //   $file = $this->request->data['file'];
            $file = fread(fopen($this->request->getData('file.tmp_name'), "r"),
                $this->request->getData('file.size'));
            $f4473->size=$this->request->getData('file.size');
            $f4473->type=$this->request->getData('file.type');
            $f4473->name=$this->request->getData('file.name');
            echo $f4473;
            $f4473->data=$file;
            if ($this->F4473->save($f4473)) {
                $this->Flash->success(__('The f4473 has been saved.'));

               return $this->redirect(['action' => 'index']);
            }
            echo $f4473;
            echo "error is " . $this->request->data['file']['error'];
            if ($this->request->getData('file.error') == 1) {
                $this->Flash->error(__('The f4473 could not be saved. File is too large (greater than max_file_size)'));
            }else {
                $this->Flash->error(__('The f4473 could not be saved. Please, try again.'));
            }

        }
        $this->set(compact('f4473'));
        $this->set('_serialize', ['f4473']);
    }

    /**
     * Edit method
     *
     * @param string|null $id F4473 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $f4473 = $this->F4473->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['post','put','patch'])) {
            $f4473 = $this->F4473->patchEntity($f4473, $this->request->getData());

            //$file = $this->request->data['file'];
            $file = fread(fopen($this->request->getData('file.tmp_name'), "r"),
                $this->request->getData('file.size'));
            $f4473->size=$this->request->getData('file.size');
            $f4473->type=$this->request->getData('file.type');
            $f4473->name=$this->request->getData('file.name');

            $f4473->data=$file;
            if ($this->F4473->save($f4473)) {
                $this->Flash->success(__('The f4473 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            echo $f4473;
            echo "error is " . $this->request->data['file']['error'];
            if ($this->request->data['file']['error'] == 1) {
                $this->Flash->error(__('The f4473 could not be saved. File is too large (greater than max_file_size)'));
            }else {
                $this->Flash->error(__('The f4473 could not be saved. Please, try again.'));
            }

        }

        $this->set(compact('f4473'));
        $this->set('_serialize', ['f4473']);
    }

    /**
     * Delete method
     *
     * @param string|null $id F4473 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $f4473 = $this->F4473->get($id);
        if ($this->F4473->delete($f4473)) {
            $this->Flash->success(__('The f4473 has been deleted.'));
        } else {
            $this->Flash->error(__('The f4473 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
