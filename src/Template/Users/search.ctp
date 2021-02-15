



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
                <th scope="col"><?= $this->Paginator->sort('first name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last name') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
               
                
            
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
          
                <th scope="col"><?= $this->Paginator->sort('qualification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('aggrement') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Html->link($user->fname, ['action' => 'view', $user->id]) ?></td>
               
                <td><?= h($user->lname) ?></td>
              
                <td><?= h($user->email) ?></td>
                
              
               
                <td><?= h($user->phone) ?></td>
                
               
                <td><?= h($user->qualification) ?></td>
                <td><?= h($user->experience) ?></td>
               
                <td><?= h($user->aggrement) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>