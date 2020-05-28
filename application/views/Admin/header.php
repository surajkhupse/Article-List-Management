<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	<!-- using local path

		<link rel="stylesheet" type="text/css" href="http://localhost/project/Assets/css/bootstrap.min.css"> -->
     <!-- using helper-->

    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")?>">
    -->

     <?= link_tag("Assets/css/bootstrap.min.css")?>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <?php 

if($this->session->userdata('id'))
{
 ?>


<li><a href="logout" class="btn btn-danger " style="" >Logout</a> </li>    
<!--<li><a href="<?php echo base_url('Admin/logout'); ?>"  class="btn btn-danger " style="">Logout</a></li>
-->
<?php 
}
  ?>

 
</nav>