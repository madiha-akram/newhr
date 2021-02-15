<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Benefites Controller
 *
 * @property \App\Model\Table\BenefitesTable $Benefites
 *
 * @method \App\Model\Entity\Benefite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BenefitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $benefites = $this->paginate($this->Benefites);

        $this->set(compact('benefites'));
    }

    /**
     * View method
     *
     * @param string|null $id Benefite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $benefite = $this->Benefites->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('benefite', $benefite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $benefite = $this->Benefites->newEntity();
        if ($this->request->is('post')) {
            $benefite = $this->Benefites->patchEntity($benefite, $this->request->getData());
            if ($this->Benefites->save($benefite)) {
                $this->Flash->success(__('The benefite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benefite could not be saved. Please, try again.'));
        }
        $users = $this->Benefites->Users->find('list', ['limit' => 200]);
       
        $this->set(compact('benefite','users'));
    }


    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
    
        // Default deny
        return false;
    }

    /**
     * Edit method
     *
     * @param string|null $id Benefite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $benefite = $this->Benefites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $benefite = $this->Benefites->patchEntity($benefite, $this->request->getData());
            if ($this->Benefites->save($benefite)) {
                $this->Flash->success(__('The benefite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benefite could not be saved. Please, try again.'));
        }
        $users = $this->Benefites->Users->find('list', ['limit' => 200]);
       
        $this->set(compact('benefite', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Benefite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $benefite = $this->Benefites->get($id);
        if ($this->Benefites->delete($benefite)) {
            $this->Flash->success(__('The benefite has been deleted.'));
        } else {
            $this->Flash->error(__('The benefite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
