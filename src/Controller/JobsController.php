<?php
namespace App\Controller;

use App\Controller\AppController;



class JobsController extends AppController
{
   


    public function index()
    {
        $jobs = $this->paginate($this->Jobs);

        $this->set(compact('jobs'));
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
        $job = $this->Jobs->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('job', $job);
    }




    public function add()
    {
        $job = $this->Jobs->newEntity();
        if ($this->request->is('post')) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $this->set(compact('job'));
    }

 

    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $this->set(compact('job'));
    }

 

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
