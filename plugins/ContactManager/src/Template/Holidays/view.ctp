<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $holiday
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
<div class="holidays view large-9 medium-8 columns content">
    <h3><?= h($holiday->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($holiday->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($holiday->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($holiday->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($holiday->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Reason') ?></h4>
        <?= $this->Text->autoParagraph(h($holiday->reason)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($holiday->description)); ?>
    </div>
</div>
