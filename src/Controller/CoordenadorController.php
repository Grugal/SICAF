<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordenador Controller
 *
 * @property \App\Model\Table\CoordenadorTable $Coordenador
 */
class CoordenadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $coordenador = $this->paginate($this->Coordenador);

        $this->set(compact('coordenador'));
        $this->set('_serialize', ['coordenador']);
    }

    /**
     * View method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordenador = $this->Coordenador->get($id, [
            'contain' => []
        ]);

        $this->set('coordenador', $coordenador);
        $this->set('_serialize', ['coordenador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordenador = $this->Coordenador->newEntity();
        if ($this->request->is('post')) {
            $coordenador = $this->Coordenador->patchEntity($coordenador, $this->request->data);
            if ($this->Coordenador->save($coordenador)) {
                $this->Flash->success(__('The coordenador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coordenador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coordenador'));
        $this->set('_serialize', ['coordenador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordenador = $this->Coordenador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordenador = $this->Coordenador->patchEntity($coordenador, $this->request->data);
            if ($this->Coordenador->save($coordenador)) {
                $this->Flash->success(__('The coordenador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coordenador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coordenador'));
        $this->set('_serialize', ['coordenador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordenador = $this->Coordenador->get($id);
        if ($this->Coordenador->delete($coordenador)) {
            $this->Flash->success(__('The coordenador has been deleted.'));
        } else {
            $this->Flash->error(__('The coordenador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
