<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($job->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($job->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($job->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($job->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fname') ?></th>
                <th scope="col"><?= __('Lname') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Cnic') ?></th>
                <th scope="col"><?= __('Qualification') ?></th>
                <th scope="col"><?= __('Experience') ?></th>
                <th scope="col"><?= __('Joining') ?></th>
                <th scope="col"><?= __('Aggrement') ?></th>
                <th scope="col"><?= __('Dept Id') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->fname) ?></td>
                <td><?= h($users->lname) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->address) ?></td>
                <td><?= h($users->phone) ?></td>
                <td><?= h($users->dob) ?></td>
                <td><?= h($users->cnic) ?></td>
                <td><?= h($users->qualification) ?></td>
                <td><?= h($users->experience) ?></td>
                <td><?= h($users->joining) ?></td>
                <td><?= h($users->aggrement) ?></td>
                <td><?= h($users->dept_id) ?></td>
                <td><?= h($users->job_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
