<div class= "row">
    <div style="width:100%;"  class= "b">
    <div style="width:60%"  class ="col-sm-6 pic">
            <div style="color: white;" class="text-center mrgn bg">
				<h3><b>Login Page</b></h3>
				<h4 style="text-align: left;padding-left:30px;">HRMS:</h4>			
				<h5 class="pd" style="text-align: left;">  HRMS provide you with a platform to ensure you get the best from your employee and manager. In some cases HRMS software is also known as HRIS, Human Resource Information System.</h5>
				
			</div>
    </div>
        <div style="width:40%"  class ="col-sm-6">
            <div style="margin:40px;padding-top:130px;">
           
            <img style="height=120px;width:120px;" src="../../img/logo-2.png"/>
                    <p>Enter your Email & password: </p>
                   
                    <?php echo $this->Form->create();
                    echo $this->Form->input('email');
                    echo $this->Form->input('password');
                    echo $this->Form->button('Login');
                    echo $this->Form->end()
                    ?>
            </div>
        </div>

    </div>

</div>