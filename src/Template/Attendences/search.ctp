<style>

table, td, th,tr {
  border: 1px solid lightblue;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>
<nav style="background-color:lightblue;" class="large-3 medium-4 columns" id="actions-sidebar">

<ul class="nav nav-pills nav-stacked side-nav">
                  
                  <h4>
                  <?= $this->request->session()->read('Auth.User.fname'); ?>
                  <small>logged in</small>

                   </h4>
                      
                      
                    <li> <?= $this->Html->link(__('New Employee'), ['controller' => 'Users','action' => 'add']) ?></li>
                    <li>   <?= $this->Html->link(__('List Employee'), ['controller' => 'Users','action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('New Leave'), ['controller' => 'Leaves', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
                      <li><?= $this->Html->link(__('New Holiday'), ['controller' => 'Holidays', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add Expenses'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
                      <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
                    <li> <?= $this->Html->link(__('Add company info '), ['controller' => 'Companys', 'action' => 'add']) ?></li>
                    <li> <?= $this->Html->link(__('List Company details'), ['controller' => 'Companys', 'action' => 'index']) ?></li>
                  </ul>

</nav>
   
<div class="users index large-9 medium-8 columns content">
   
        <div class='col-md-4'>
    <form action="<?php echo $this->url->build(['action'=>'search']) ?>" method="get">
        <div class ="input-group">
            <input type="search" name="q" class="form-control" placeholder="Search by name" value="<?= $search; ?>" >
            <div class="input-group-prepend">
                <button class="btn btn-primary input-group-text" type="submit">search</button>
            </div>
        </div>        
</form>

</div>
<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendences as $attendence): ?>
            <tr>
                <td><?= $this->Number->format($attendence->id) ?></td>
               
               
                <td><?= h($attendence->status) ?></td>
              
               
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendence->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendence->id]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>