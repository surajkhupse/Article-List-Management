<?php include('header.php'); ?>

<div class="container">
	<h1>Admin Form</h1>
<?php

if($error=$this->session->flashdata('Login_failed'))     :?>

<div class="row">
<div class="col-lg-6">
<div class="alert alert-danger">
<?php echo $error; ?>

</div>
</div>
</div>
<?php  endif;  ?>


<?php echo form_open('Login/index'); ?>


<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="Username">Username :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('uname'); ?>
</div>
</div>




<div class="row">
	<div class="col-lg-6" >
<div class="form-group">
	<label for="pwd">Password :</label>
	
 <?php echo form_password(['class'=>'form-control','type'=>'Password', 'placeholder'=>' Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>

</div>
</div> 
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('pass'); ?>
</div>
</div>





<?php  echo form_submit(['type'=>'Submit','class'=>'btn btn-success','value'=>'Submit']) ?>
<?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']) ?>
<!-- 
	creating a sign up button-->
	
	<?php echo anchor("Admin/register",'SIGN UP',['class'=>'btn btn-inf'])  ?>

</div



<?php include('footer.php'); ?>