<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Benefite[]|\Cake\Collection\CollectionInterface $benefites
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
<div class="benefites index large-9 medium-8 columns content">
<div class="input-group-prepend">
                <button  class="btn btn-primary input -group-text right"> <?=  $this->Html->link(__('Add Benefits'), ['controller' => 'Benefites','action' => 'add']) ?></button>
            </div><br><br>
    <h3><?= __('Benefits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
              
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Medical') ?></th>
                <th scope="col"><?= $this->Paginator->sort('travel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('residential') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($benefites as $benefite): ?>
            <tr>
                <td><?= $this->Number->format($benefite->id) ?></td>
              
                <td><?= h($benefite->created) ?></td>
                <td><?= h($benefite->modified) ?></td>
                <td><?= h($benefite->Medical) ?></td>
                <td><?= h($benefite->travel) ?></td>
                <td><?= h($benefite->residential) ?></td>
                <td><?= $this->Number->format($benefite->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $benefite->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $benefite->id]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $benefite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $benefite->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
