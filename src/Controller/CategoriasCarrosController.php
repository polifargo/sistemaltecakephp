<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasCarros Controller
 *
 * @property \App\Model\Table\CategoriasCarrosTable $CategoriasCarros
 *
 * @method \App\Model\Entity\CategoriasCarro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasCarrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categoriasCarros = $this->paginate($this->CategoriasCarros);

        $this->set(compact('categoriasCarros'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Carro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasCarro = $this->CategoriasCarros->get($id, [
            'contain' => ['Carros']
        ]);

        $this->set('categoriasCarro', $categoriasCarro);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasCarro = $this->CategoriasCarros->newEntity();
        if ($this->request->is('post')) {
            $categoriasCarro = $this->CategoriasCarros->patchEntity($categoriasCarro, $this->request->data);
            if ($this->CategoriasCarros->save($categoriasCarro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categorias Carro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categorias Carro'));
            }
        }
        $this->set(compact('categoriasCarro'));
        $this->set('_serialize', ['categoriasCarro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Carro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasCarro = $this->CategoriasCarros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasCarro = $this->CategoriasCarros->patchEntity($categoriasCarro, $this->request->data);
            if ($this->CategoriasCarros->save($categoriasCarro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categorias Carro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categorias Carro'));
            }
        }
        $this->set(compact('categoriasCarro'));
        $this->set('_serialize', ['categoriasCarro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Carro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasCarro = $this->CategoriasCarros->get($id);
        if ($this->CategoriasCarros->delete($categoriasCarro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Categorias Carro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Categorias Carro'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
