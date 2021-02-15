<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $benefite
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
<div class="benefites view large-9 medium-8 columns content">
    <h3><?= h($benefite->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Medical') ?></th>
            <td><?= h($benefite->Medical) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Travel') ?></th>
            <td><?= h($benefite->travel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residential') ?></th>
            <td><?= h($benefite->residential) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($benefite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($benefite->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($benefite->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($benefite->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($benefite->description)); ?>
    </div>
</div>
