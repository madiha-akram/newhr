<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $holiday
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Holidays'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="holidays form large-9 medium-8 columns content">
    <?= $this->Form->create($holiday) ?>
    <fieldset>
        <legend><?= __('Add Holiday') ?></legend>
        <?php
            echo $this->Form->control('reason');
            echo $this->Form->control('description');
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
