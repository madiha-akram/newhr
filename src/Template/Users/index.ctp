<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>newhr</title>
  
  <style>
  
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 900px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: lightblue;
      height: 100%;
    }
    .box{
	 background-color: black;
   padding:10px;
   margin:30px;

 
  text-align: center;
 
 
  color: white;
  
}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }





   
table, td, th {
  border: 1px solid lightblue;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<nav style="background-color:skyblue;" class="large-3 medium-4 columns" id="actions-sidebar">

<ul class="nav nav-pills nav-stacked side-nav">
                  
<h4>
                    <?= $this->Html->link(__($this->request->session()->read('Auth.User.fname')), ['controller' => 'Users','action' => 'indexx']) ?></li>
                    <small>logged in</small>

                     </h4>
                      
                      
                   <li>   <?= $this->Html->link(__('Dashboard'), ['controller' => 'Admin','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee'), ['controller' => 'Users','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
                   
                    <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                   
                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
                   
                     
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    
                      <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Company details'), ['controller' => 'Companys', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></li>
                  </ul>

</nav>
   
    <div class="users form large-9 medium-8 columns content">
    <form action="<?php echo $this->url->build(['action'=>'search']) ?>" method="get">
        <div class ="input-group">
            <input type="search" name="q" class="form-control" placeholder="Search by Name">
            <div class="input-group-prepend">
                <button class="btn btn-primary input -group-text" type="submit">search</button>
            </div>
        </div>        
</form>
<div class="input-group-prepend">
                <button  class="btn btn-primary input -group-text left"> <?=  $this->Html->link(__('New Employee'), ['controller' => 'Users','action' => 'add']) ?></button>
            </div>


      



      
      <div class="row">
      <br>
      <br>
      <br>
      <h3><?= __('Employee Details') ?></h3>

      <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('First Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Last Name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
               
             
                <th scope="col"><?= $this->Paginator->sort('deprtment name_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_id') ?></th>

               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Html->link($user->fname, ['action' => 'view', $user->id]) ?></td>
               
                <td><?= h($user->lname) ?></td>
                
                <td><?= h($user->email) ?></td>
                
               
                <td><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
                <td><?= $user->has('job') ? $this->Html->link($user->job->title, ['controller' => 'Jobs', 'action' => 'view', $user->job->id]) : '' ?></td>
                
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


 


    
    

    
    
    
    

  
 
   


    
      </div>
    </div>
  </div>
</div>



</body>
</html>









