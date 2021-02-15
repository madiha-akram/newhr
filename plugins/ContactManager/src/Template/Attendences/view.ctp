<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $attendence
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
                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li> 
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></li>
                  </ul>

</nav>
<div class="attendences view large-9 medium-8 columns content">
    <h3>Attendence Id  <?= h($attendence->id) ?></h3>
    <table class="vertical-table">
    <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendence->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($attendence->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($attendence->detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= h($attendence->task) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee ID') ?></th>
            <td><?= $attendence->has('user') ? $this->Html->link($attendence->user->id, ['controller' => 'Users', 'action' => 'view', $attendence->user->id]) : '' ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($attendence->completion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($attendence->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($attendence->modified) ?></td>
        </tr>
    </table>
</div>
