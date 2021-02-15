<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
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
                  
                  <h4>
                  <?= $this->request->session()->read('Auth.User.fname'); ?>
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
<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->name) ?></h3>
    <table class="vertical-table">
    <tr>
            <th scope="row"><?= __('Department Id') ?></th>
            <td><?= $this->Number->format($department->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department Name') ?></th>
            <td><?= h($department->name) ?></td>
        </tr>
    
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($department->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($department->modified) ?></td>
        </tr>
    </table>
</div>
