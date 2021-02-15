<?php
namespace ContactManager\Controller;

use ContactManager\Controller\AppController;

/**
 * Leaves Controller
 *
 * @property \ContactManager\Model\Table\LeavesTable $Leaves
 *
 * @method \ContactManager\Model\Entity\Leave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeavesController extends AppController
{
    public function initialize()
    {
    parent::initialize();
    $this->loadModel('Users');
    //$this->viewBuilder()->layout("Userslayout");
    $this->loadComponent('Flash'); // Include the FlashComponent
    // Auth component allow visitors to access add action to register and access logout action
    $this->Auth->allow(['logout', 'add']);
    
    }
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
        $a = $this->request->session()->read('Auth.User.id');
       
       // echo  $a;
        $leaves = $this->Leaves->find('all')->where(['user_id'=>$a]);
      
        //$leaves = $this->paginate($this->Leaves);

        $this->set(compact('leaves'));
    }
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'user') {
            return true;
        }
    
        // Default deny
        return false;
    }
    /**
     * View method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leave = $this->Leaves->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('leave', $leave);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {  
        $a = $this->request->session()->read('Auth.User.id');
    
        $users = $this->Users->find('all')->where(['id'=>$a])->toArray();
        $leave = $this->Leaves->newEntity();
        if ($this->request->is('post')) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());
            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        //$users = $this->Leaves->Users->find('list', ['limit' => 200]);
        $this->set(compact('leave', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leave = $this->Leaves->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());
            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        $users = $this->Leaves->Users->find('list', ['limit' => 200]);
        $this->set(compact('leave', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leave = $this->Leaves->get($id);
        if ($this->Leaves->delete($leave)) {
            $this->Flash->success(__('The leave has been deleted.'));
        } else {
            $this->Flash->error(__('The leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
