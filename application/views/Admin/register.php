<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px;">
	<h1>Register Form</h1>

	<?php if($user=$this->session->flashdata('user')):   
$user_class=$this->session->flashdata('user_class')    ?>

  <div class="row">
<div class="col-lg-6">
<div class="alert <?= $user_class ?>">
<?= $user_class; ?>
</dvi>
</div>
</div>
<?php  endif;  ?>






<?php echo form_open('Login/sendemail'); ?>

<!-- User Name   -->

<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="Username">Username :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('username'); ?>
</div>
</div>


<!-- password  -->
<div class="row">
	<div class="col-lg-6" >
<div class="form-group">
	<label for="pwd">  Password :</label>
	
 <?php echo form_password(['class'=>'form-control','type'=>'Password', 'placeholder'=>' Enter Password','name'=>'password','value'=>set_value('password ')]); ?>

</div>
</div> 
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('password'); ?>
</div>
</div>
<!-- First  Name   -->
<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="firstname">First Name :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter First Name','name'=>'firstname','value'=>set_value('firstname')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('firstname'); ?>
</div>
</div>

<!-- Last  Name   -->
<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="lastname">Last Name :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Last Name','name'=>'lastname','value'=>set_value('lastname')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('lastname'); ?>
</div>
</div>

<!-- Email   -->
<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="Username">Email :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Email','name'=>'Email','value'=>set_value('Email')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('Email'); ?>
</div>
</div>






<?php  echo form_submit(['type'=>'Submit','class'=>'btn btn-default','value'=>'Submit']) ?>
<?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']) ?>
<?php echo anchor("Login/index",'cancel',['class'=>'btn btn-info']) ?>


</div>



<?php include('footer.php'); ?>