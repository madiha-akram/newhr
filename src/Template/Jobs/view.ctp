<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
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
                  
                  <h4>
                  <?= $this->request->session()->read('Auth.User.fname'); ?>
                  <small>logged in</small>

                   </h4>
                      
                      
                   <li>   <?= $this->Html->link(__('Dashboard'), ['controller' => 'Admin','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee'), ['controller' => 'Users','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
                   
                    <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                   
                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
                   
                     
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    
                      <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
                    
                    <li> <?= $this->Html->link(__('List Company details'), ['controller' => 'Companys', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Employee Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></li>
                  </ul>

</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Job Title') ?></th>
            <td><?= h($job->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Id') ?></th>
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
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= h($job->salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($job->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaccancy') ?></th>
            <td><?= h($job->vaccancy) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($job->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Email') ?></th>
              
           
               
                <th scope="col"><?= __('Phone') ?></th>
               
             
                <th scope="col"><?= __('Qualification') ?></th>
                <th scope="col"><?= __('Experience') ?></th>
              
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
              
             
               
                <td><?= h($users->phone) ?></td>
                
              
                <td><?= h($users->qualification) ?></td>
                <td><?= h($users->experience) ?></td>
           
                <td><?= h($users->dept_id) ?></td>
                <td><?= h($users->job_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?><br>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
