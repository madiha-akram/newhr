<?php

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
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table style="margin:10px;" class="vertical-table">
        <tr>
            <th scope="row"><?= __('First name') ?></th>
            <td><?= h($user->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last name') ?></th>
            <td><?= h($user->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnic') ?></th>
            <td><?= h($user->cnic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qualification') ?></th>
            <td><?= h($user->qualification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Experience') ?></th>
            <td><?= h($user->experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aggrement') ?></th>
            <td><?= h($user->aggrement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department Name') ?></th>
            <td><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Tilte') ?></th>
            <td><?= $user->has('job') ? $this->Html->link($user->job->title, ['controller' => 'Jobs', 'action' => 'view', $user->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($user->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Joining') ?></th>
            <td><?= h($user->joining) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($user->projects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Completion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->projects as $projects): ?>
            <tr>
                <td><?= h($projects->id) ?></td>
                <td><?= h($projects->name) ?></td>
                <td><?= h($projects->completion) ?></td>
                <td><?= h($projects->created) ?></td>
                <td><?= h($projects->modified) ?></td>
                <td><?= h($projects->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Attendences') ?></h4>
        <?php if (!empty($user->attendences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Task') ?></th>
                <th scope="col"><?= __('Completion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->attendences as $attendences): ?>
            <tr>
                <td><?= h($attendences->id) ?></td>
                <td><?= h($attendences->status) ?></td>
                <td><?= h($attendences->detail) ?></td>
                <td><?= h($attendences->task) ?></td>
                <td><?= h($attendences->completion) ?></td>
                <td><?= h($attendences->created) ?></td>
                <td><?= h($attendences->modified) ?></td>
                <td><?= h($attendences->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attendences', 'action' => 'view', $attendences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attendences', 'action' => 'edit', $attendences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendences', 'action' => 'delete', $attendences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Leaves') ?></h4>
        <?php if (!empty($user->leaves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Reason') ?></th>
                <th scope="col"><?= __('From') ?></th>
                <th scope="col"><?= __('Until') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->leaves as $leaves): ?>
            <tr>
                <td><?= h($leaves->id) ?></td>
                <td><?= h($leaves->reason) ?></td>
                <td><?= h($leaves->from) ?></td>
                <td><?= h($leaves->until) ?></td>
                <td><?= h($leaves->status) ?></td>
                <td><?= h($leaves->created) ?></td>
                <td><?= h($leaves->modified) ?></td>
                <td><?= h($leaves->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leaves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leaves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leaves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
</div>
