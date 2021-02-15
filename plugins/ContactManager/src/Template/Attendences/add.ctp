<?php
$a = $this->request->session()->read('Auth.User.id');
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
<div class="attendences form large-9 medium-8 columns content">
    <?= $this->Form->create($attendence) ?>
    <fieldset>
        <h3><?= __('Add Attendence') ?></h3>
        <?php
        //print_r($users[0]->id);exit;
            echo $this->Form->control('status');
            echo $this->Form->control('detail');
            echo $this->Form->control('task');
            echo $this->Form->control('completion');
            echo $this->Form->controll('user_id', ['value'=>$users[0]->id]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
