<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Carros']
        ];
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Carros']
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cliente'));
            }
        }
        $carros = $this->Clientes->Carros->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'carros'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cliente'));
            }
        }
        $carros = $this->Clientes->Carros->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'carros'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Cliente'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Cliente'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
