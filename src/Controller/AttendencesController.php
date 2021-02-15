<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;



class AttendencesController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $attendences = $this->paginate($this->Attendences);
       // $total = $attendences->find('all')->where(['status' => 0])->count();
        //echo $total;

        $this->set(compact('attendences'));
    }
    public function search()
    {
        $search = $this->request->getQuery('q');
		$attendences = $this->Attendence->find()
        ->where([
           
            'status ' => '%'.$search.'%',
            
            
         // "OR" => array (
      //  'lname LIKE' => '%' .$search.'%'
                
        //    )
           
            
            
        ]);
        $this->set('attendences',$attendences);
        $this->set('search',$search);
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
        $attendence = $this->Attendences->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('attendence', $attendence);
    }

  

    public function add()
    {
        $attendence = $this->Attendences->newEntity();
        if ($this->request->is('post')) {
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
