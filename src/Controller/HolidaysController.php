<?php
namespace App\Controller;

use App\Controller\AppController;



class HolidaysController extends AppController
{
 

    public function index()
    {
        $holidays = $this->paginate($this->Holidays);

        $this->set(compact('holidays'));
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
        $holiday = $this->Holidays->get($id, [
            'contain' => [],
        ]);

        $this->set('holiday', $holiday);
    }

 

    public function add()
    {
        $holiday = $this->Holidays->newEntity();
        if ($this->request->is('post')) {
            $holiday = $this->Holidays->patchEntity($holiday, $this->request->getData());
            if ($this->Holidays->save($holiday)) {
                $this->Flash->success(__('The holiday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The holiday could not be saved. Please, try again.'));
        }
        $this->set(compact('holiday'));
    }

  

    public function edit($id = null)
    {
        $holiday = $this->Holidays->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $holiday = $this->Holidays->patchEntity($holiday, $this->request->getData());
            if ($this->Holidays->save($holiday)) {
                $this->Flash->success(__('The holiday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The holiday could not be saved. Please, try again.'));
        }
        $this->set(compact('holiday'));
    }

 
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $holiday = $this->Holidays->get($id);
        if ($this->Holidays->delete($holiday)) {
            $this->Flash->success(__('The holiday has been deleted.'));
        } else {
            $this->Flash->error(__('The holiday could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
