<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class AdminController extends AppController
{
    public function initialize()
{
parent::initialize();
$this->viewBuilder()->layout("Adminlayout");
$this->loadComponent('Flash'); // Include the FlashComponent
// Auth component allow visitors to access add action to register and access logout action
//$this->Auth->allow(['logout', 'add']);

}
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index()
    {

        $this->set('title', 'Welcome to Admin Panel');
        
        

    }

    public function view()
    {

        $this->set('title', 'Welcome to Admin Panel');
        $users = $this->paginate($this->Users);
     

        $this->set(compact('users'));
        
        

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

    public function logout(){
        $this->Flash->success('You successfully have loged out');
       // return $this->redirect($this->Auth->logout());
        return $this->redirect(['controller'=>'Users','action'=>'logout']);
        }
}