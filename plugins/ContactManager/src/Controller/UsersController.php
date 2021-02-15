<?php
namespace ContactManager\Controller;

use ContactManager\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class UsersController extends AppController
{
    public function initialize()
{
parent::initialize();
//$this->viewBuilder()->layout("Userslayout");
$this->loadComponent('Flash'); // Include the FlashComponent
// Auth component allow visitors to access add action to register and access logout action
$this->Auth->allow(['logout']);

}
public function beforeFilter(Event $event)
{
    parent::beforeFilter($event);
}


    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Jobs'],
        ];?>


    <?php
      $a = $this->request->session()->read('Auth.User.id');
    $users = $this->Users->find('all')->where(['id'=>$a]);
       // print_r($users->toArray());exit;

        //$users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    
public function login()
{
if ($this->request->is('post')) {
// Auth component identify if sent user data belongs to a user
$user = $this->Auth->identify();


if ($user) {
    $this->Auth->setUser($user);
    // $this->Flash->success(__('Login Success.'));
    if($this->Auth->user('role') == 'admin') {
        return $this->redirect('/admin');
    }else{
        return $this->redirect(['controller'=>'Users','action'=>'index']);
        //return $this->redirect($this->Auth->redirectUrl());
    }
} else {
    $this->Flash->error(__('Username or password is incorrect'));
}
}
}

public function logout(){
$this->Flash->success('You successfully have loged out');
return $this->redirect($this->Auth->logout());//index of Topics
}


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departments', 'Jobs', 'Attendences', 'Leaves', 'Projects'],
        ]);

        $this->set('user', $user);
    }


    public function add()
    {
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $jobs = $this->Users->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments', 'jobs'));
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
 


    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $jobs = $this->Users->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments', 'jobs'));
    }

 


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
