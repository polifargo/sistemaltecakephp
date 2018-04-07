<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carros Controller
 *
 * @property \App\Model\Table\CarrosTable $Carros
 *
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoriasCarros']
        ];
        $carros = $this->paginate($this->Carros);

        $this->set(compact('carros'));
    }

    /**
     * View method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => ['CategoriasCarros']
        ]);

        $this->set('carro', $carro);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carro = $this->Carros->newEntity();
        if ($this->request->is('post')) {
            $carro = $this->Carros->patchEntity($carro, $this->request->data);
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Carro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Carro'));
            }
        }
        $categoriasCarros = $this->Carros->CategoriasCarros->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'categoriasCarros'));
        $this->set('_serialize', ['carro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carro = $this->Carros->patchEntity($carro, $this->request->data);
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Carro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Carro'));
            }
        }
        $categoriasCarros = $this->Carros->CategoriasCarros->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'categoriasCarros'));
        $this->set('_serialize', ['carro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carro = $this->Carros->get($id);
        if ($this->Carros->delete($carro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Carro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Carro'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
