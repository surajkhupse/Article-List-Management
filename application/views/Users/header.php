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
  <a class="navbar-brand" href="#">Article List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>