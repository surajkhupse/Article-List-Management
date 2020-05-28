<?php include('header.php'); ?>

<div class="container">
	<h1>Add Article</h1>
    



<?php echo form_open('Admin/userValidation'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('id')) ;         ?>


<div class="row">
	<div class="col-lg-6">
<div class="form-group">
	<label for="Username">Article Title :</label>
	
 <?php echo form_input(['class'=>'form-control', 'placeholder'=>'article_title','name'=>'article_title','value'=>set_value('article_title')]); ?>
</div>	
</div>
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('article_title'); ?>
</div>
</div>




<div class="row">
	<div class="col-lg-6" >
<div class="form-group">
	<label for="pwd">Article Body :</label>
	
 <?php echo form_textarea(['class'=>'form-control','type'=>'article_body', 'placeholder'=>'article_body','name'=>'article_body','value'=>set_value('article_body')]); ?>

</div>
</div> 
<div class="col-lg-6" style="margin-top: 40px">
	<?php  echo form_error('article_body'); ?>
</div>
</div>





<?php  echo form_submit(['type'=>'Submit','class'=>'btn btn-success','value'=>'Submit']) ?>
<?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']) ?>



</div>



<?php include('footer.php'); ?>