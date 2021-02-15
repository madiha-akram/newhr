<?php

?>
<style>
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
                    <li> <?= $this->Html->link(__('Employee profile'), ['controller' => 'Users','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add Attendences'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add Leaves'), ['controller' => 'Leaves', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li> 
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></li>
                  </ul>

</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Employee Panel') ?></h3>
    <hr>
    <div style="border-radius:50%; background-color:green;height:100px;width:100px;text-align:center;">
    <p  style="color:white;padding-top:40px;"><?= $this->request->session()->read('Auth.User.fname'); ?> </p>
    </div>
    <h5 style="color:green;">
    <?= $this->request->session()->read('Auth.User.fname'); ?>  <?= $this->request->session()->read('Auth.User.lname'); ?>  Profile
   <?php
   // $a =   $this->request->session()->read('Auth.User.id');
    //$sal =   $this->request->session()->read('Auth.User.salary');
  //  echo "logged in" ;
   // echo  $a;
    //echo  $sal;
    ?>
</h5>
<br>
<hr>
<h5>Personal Information</5>
<hr>


    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date Of Birth') ?></th>
             
               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Html->link($user->fname, ['action' => 'view', $user->id]) ?></td>
             
                <td><?= h($user->lname) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->dob) ?></td>
           
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?><br>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <br>
<hr>
    <h5>Contact Information</5>
<hr>
  
   

    <table cellpadding="0" cellspacing="0">
  
        <thead>
            <tr>
                
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
     
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                
           
                <td><?= h($user->phone) ?></td>
      
                <td><?= h($user->address) ?></td>
             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <br>

<hr>
    <h5>Qualification</5>
<hr>
<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('qualification') ?></th>
            <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
            <th scope="col"><?= $this->Paginator->sort('joining') ?></th>
            <th scope="col"><?= $this->Paginator->sort('aggrement') ?></th>

            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->qualification) ?></td>
            <td><?= h($user->experience) ?></td>
            <td><?= h($user->joining) ?></td>
            <td><?= h($user->aggrement) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>

<hr>
    <h5>Job details</5>
<hr>
<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('salary') ?></th>
            <th scope="col"><?= $this->Paginator->sort('experience') ?></th>


            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->salary) ?></td>
            <td><?= h($user->experience) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
