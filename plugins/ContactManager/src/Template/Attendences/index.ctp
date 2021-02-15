<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $attendences
 * <?= $this->Html->link(__('calculate salary'), ['action' => 'salaryy']) ?>
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
                    <li> <?= $this->Html->link(__('List Employee'), ['controller' => 'Users','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add Attendences'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>

                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add Leave'), ['controller' => 'Leaves', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li> 
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></li>
                  </ul>

</nav>
<div class="attendences index large-9 medium-8 columns content">

    <h3><?= __('Attendences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendences as $attendence): ?>
            <tr>
                <td><?= $this->Number->format($attendence->id) ?></td>
                <td><?= h($attendence->status) ?></td>
                <td><?= h($attendence->detail) ?></td>
                <td><?= h($attendence->task) ?></td>
                <td><?= h($attendence->completion) ?></td>
                <td><?= h($attendence->created) ?></td>
                <td><?= h($attendence->modified) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendence->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendence->id]) ?><br>
                   
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
