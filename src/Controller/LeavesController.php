<?php
namespace App\Controller;

use App\Controller\AppController;



class LeavesController extends AppController
{
   

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $leaves = $this->paginate($this->Leaves);

        $this->set(compact('leaves'));
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
    



    public function view($id = null)
    {
        $leave = $this->Leaves->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('leave', $leave);
    }

 

    public function add()
    {
        $leave = $this->Leaves->newEntity();
        if ($this->request->is('post')) {
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
