<?php
namespace ContactManager\Controller;

use ContactManager\Controller\AppController;


class AttendencesController extends AppController
{
    public function initialize()
    {
    parent::initialize();
    $this->loadModel('Users');
    $this->loadComponent('Flash'); // Include the FlashComponent
    // Auth component allow visitors to access add action to register and access logout action
    $this->Auth->allow(['logout', 'add']);
    
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


    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $a = $this->request->session()->read('Auth.User.id');
       
       // echo  $a;
        $attendences = $this->Attendences->find('all')->where(['user_id'=>$a]);
       // $query = $this->Attendences->find('all')-> where(['status'=>1]);
       //it can display count of users whose status is 0
        $query = $this->Attendences->find('all', array('conditions'=>array('status'=>1,'user_id'=>$a)));
        $number = $query->count();
        //echo $number;
        //$tt=$attendences->Users->salary;
       //echo $tt;

       // $attendences = $this->paginate($this->Attendences);

        $this->set(compact('attendences'));
    }

    public function view($id = null)
    {
        $attendence = $this->Attendences->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('attendence', $attendence);
    }


    public function salaryy(){
        
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $a = $this->request->session()->read('Auth.User.id');
        $sal = $this->request->session()->read('Auth.User.salary');
        echo $sal;
        echo " user id";
        echo  $a;
        $attendences = $this->Attendences->find('all')->where(['user_id'=>$a]);
        $sal = $this->request->session()->read('Auth.User.salary');
        echo $sal;
       // $query = $this->Attendences->find('all')-> where(['status'=>1]);
       //it can display count of users whose status is 0
        $query = $this->Attendences->find('all', array('conditions'=>array('status'=>0,'user_id'=>$a)));
        $number = $query->count();
    
        $this->set(compact('sal','a','number'));
    }

    public function add()
    {
        $a = $this->request->session()->read('Auth.User.id');
    
        $users = $this->Users->find('all')->where(['id'=>$a])->toArray();
       
        $attendence = $this->Attendences->newEntity();
        if ($this->request->is('post')) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->getData());
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }
        
        //$users= $this->Users->get($a);
        //$users = $this->Attendences->Users->find('all')->where(['user_id'=>$a]);
        
        $this->set(compact('attendence', 'users'));
    }


    public function edit($id = null)
    {
        $attendence = $this->Attendences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->getData());
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }
        $users = $this->Attendences->Users->find('list', ['limit' => 200]);
        $this->set(compact('attendence', 'users'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendence = $this->Attendences->get($id);
        if ($this->Attendences->delete($attendence)) {
            $this->Flash->success(__('The attendence has been deleted.'));
        } else {
            $this->Flash->error(__('The attendence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
