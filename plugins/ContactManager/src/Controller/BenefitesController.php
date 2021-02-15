<?php
namespace ContactManager\Controller;

use ContactManager\Controller\AppController;


class BenefitesController extends AppController
{
    public function initialize()
    {
    parent::initialize();
    $this->loadModel('Users');

    $this->loadComponent('Flash'); // Include the FlashComponent
    // Auth component allow visitors to access add action to register and access logout action
    $this->Auth->allow(['logout', 'add']);
    
    }

    public function index()
    {
        $a = $this->request->session()->read('Auth.User.id');
       
        // echo  $a;
         $benefites = $this->Benefites->find('all')->where(['user_id'=>$a]);
       // $benefites = $this->paginate($this->Benefites);

        $this->set(compact('benefites'));
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


    public function view($id = null)
    {
        $benefite = $this->Benefites->get($id, [
            'contain' => [],
        ]);

        $this->set('benefite', $benefite);
    }


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
        $this->set(compact('benefite'));
    }


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
        $this->set(compact('benefite'));
    }


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
