
<!DOCTYPE html>
<html lang="en">
<head>
  <title>newhr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 700px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: skyblue;
      height: 100%;
    }
    .pic{
    background-image: url(../img/course-8.jpg);
    max-width: 100%;
   
    background-size: cover;
 background-position: center;
 background-repeat: no-repeat;
	opacity: 0.8;

}
.bg{
    background-color:deepskyblue;
    opacity: 0.7;
  padding: 10px;
   
}
    .box{
	 background-color: black;
   padding:10px;
   margin:20px;
   width:220px;
   height:160px;
 
  text-align: center;
 
 
  color: white;
  
}
.box1{

  
   margin:30px;
  text-align: center;
  color: white;
  
}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
       
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container">

  <div class="row content">
  <nav style="background-color:darkcyan;color:white;" class="navbar">
  <div class="container">
    <div class="navbar-header">
    <img style="width:50px;height:50px;" src="<?= $this->URL->image('hrlogo2.jfif')?>"/>
    </div>
    <ul style="color:white;"  class="nav navbar-nav">
      <li class="active"><a href="">Admin Panel</a></li>
    
    </ul>
    <ul style="background-color:skyblue;"  class="nav navbar-nav navbar-right">
      <li style="color:white;" class="active text-right"><?= $this->Html->link(__('Logout'), ['controller' => 'Admin', 'action' => 'logout']) ?></li>
    </ul>
  </div>
</nav>
    <div style="margin-top:-20px;" class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
                  
                    <h4>
                    <?= $this->Html->link(__($this->request->session()->read('Auth.User.fname')), ['controller' => 'Users','action' => 'indexx']) ?></li>
                    <small>logged in</small>

                     </h4>
                        
                     <li>   <?= $this->Html->link(__('Dashboard'), ['controller' => 'Admin','action' => 'index']) ?></li>
                     
                      <li>   <?= $this->Html->link(__('List Employee'), ['controller' => 'Users','action' => 'index']) ?></li>
                      <li> <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
                     
                      <li> <?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
                      
                      <li> <?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
                     
                      <li> <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></li>
                     
                      <li> <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
                      
                      <li> <?= $this->Html->link(__('List Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></li>
                    
                        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
                     
                      <li> <?= $this->Html->link(__('List Company details'), ['controller' => 'Companys', 'action' => 'index']) ?></li>
                    </ul><br>

    </div>

    <div class="col-sm-9 ">


      <div class="row panel panel-default">
        <div style="background-color:darkcyan;" class="col-sm-3 text-center box panel panel-default">
        <h4 class="">Employees</h4>
        
        <img class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('hrlogo.png')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Employees'), ['controller' => 'Users','action' => 'index']) ?></h4>
        </div>
        <div style="background-color:darkorchid;" class="col-sm-3 box panel panel-default">
        <h4>Company</h4>
        <img class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('dep.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Company'), ['controller' => 'Companys', 'action' => 'index']) ?></h4>
          
        
        </div>
        <div style="background-color:olivedrab;" class="col-sm-3 box panel panel-default">
        <h4>Departments</h4>
        <img  class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('hr55.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Department'), ['controller' => 'Departments', 'action' => 'index']) ?></h4>
         
        
        </div>
        <div style="background-color:darkgoldenrod;" class="col-sm-3 text-center box panel panel-default">
        <h4>Projects</h4>
        <img  class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('pp.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></h4>
        </div>
        <div style="background-color:saddlebrown;" class="col-sm-3 box panel panel-default">
        <h4>Monitor Attendences</h4>
        <img class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('ab.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Attendence'), ['controller' => 'Attendences', 'action' => 'index']) ?></h4>
         
          <br>
        </div>
        <div style="background-color:green;" class="col-sm-3 box panel panel-default">
        <h4>Leaves</h4>
        <img  class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('leave.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?></h4>
          
          <br>
        </div>
        <div style="background-color:tomato;" class="col-sm-3 text-center box panel panel-default">
        <h4>Jobs</h4>
        <img  class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('job.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></h4>
        </div>
        <div style="background-color:orange;" class="col-sm-3 box panel panel-default">
        <h4>Holidays</h4>
        <img  class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('holiday.jpg')?>"/>
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Holidays'), ['controller' => 'Holidays', 'action' => 'index']) ?></h4>
        
          <br>
        </div>
        <div style="background-color:red;" class="col-sm-3 box panel panel-default">
        <h4>Benefits</h4>
        <img class="img-circle" style="width:40px;height:40px;" src="<?= $this->URL->image('benefit.jpg')?>"/>
        
          <h4 class="panel-heading"><?= $this->Html->link(__('Manage Benefits'), ['controller' => 'Benefites', 'action' => 'index']) ?></h4>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>



