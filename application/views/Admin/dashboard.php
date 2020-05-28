
<?php include('header.php'); ?>


<div class="container" style="margin-top:50px;"">
<div class="row">
<a href="adduser" class="btn btn-lg btn-outline-primary"> Add Article</a>

</div>


<div class="container" style="margin-top:50px">

<?php if($msg=$this->session->flashdata('msg')):   
$msg_class=$this->session->flashdata('msg_class')    ?>

  <div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; ?>
</dvi>
</div>
</div>
<?php  endif;  ?>
</div>

 <table class="table">
	 <thead>
		 <tr>
			
			 <th>Article Title</th>
			 <th>Edit</th>
			 <th>Delete</th>
		 </tr>
	 </thead>
	 <tbody>
	 <?php  if(count($Articles)) :   ?>
	 <?php foreach($Articles As $art) : ?> 
	 	
		 <tr>
			 
             <td> <?=  $art->article_title; ?> </td>
			 
			 <td><?=  anchor("Admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-danger']);  ?></td>
             
			<td> 
			<?=
			form_open('Admin/delarticles'),
		    form_hidden('id',$art->id),
			form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
			form_close();	
			?>
            </td>  
		 </tr>
	<?php  endforeach; ?>
	 <?php  else: ?>-->
	 <tr>
	 <td colspan="3">Not Data available</td>
	 </tr>
	<?php endif; ?>  
	 </tbody>
	
 </table>
 <?php echo $this->pagination->create_links();  ?>
</div>

<?php include('footer.php'); ?>
