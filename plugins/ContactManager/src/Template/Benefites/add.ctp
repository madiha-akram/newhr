<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $benefite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Benefites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="benefites form large-9 medium-8 columns content">
    <?= $this->Form->create($benefite) ?>
    <fieldset>
        <legend><?= __('Add Benefite') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('Medical');
            echo $this->Form->control('travel');
            echo $this->Form->control('residential');
            echo $this->Form->control('user_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
