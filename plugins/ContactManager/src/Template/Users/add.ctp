<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Leave'), ['controller' => 'Leaves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('fname');
            echo $this->Form->control('lname');
            echo $this->Form->control('role');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('gender');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('dob');
            echo $this->Form->control('cnic');
            echo $this->Form->control('qualification');
            echo $this->Form->control('experience');
            echo $this->Form->control('joining');
            echo $this->Form->control('aggrement');
            echo $this->Form->control('dept_id', ['options' => $departments]);
            echo $this->Form->control('job_id', ['options' => $jobs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
