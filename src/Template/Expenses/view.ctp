<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
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
<div class="expenses view large-9 medium-8 columns content">
    <h3><?= h($expense->name) ?></h3>
    <table class="vertical-table">
    <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($expense->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($expense->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase from') ?></th>
            <td><?= h($expense->pfrom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase date') ?></th>
            <td><?= h($expense->pdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($expense->price) ?></td>
        </tr>

     
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($expense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($expense->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('More') ?></h4>
        <?= $this->Text->autoParagraph(h($expense->more)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($expense->description)); ?>
    </div>
</div>
