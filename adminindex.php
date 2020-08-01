<?php 




 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Narth Inspired</title>
 		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=-1">
	<meta http-equiv="x-ua-compactible" content="ie-edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font4.7/css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.innerfade.js"></script>

  <!-- styling link -->
  <link rel="stylesheet" type="text/css" href="style/main.css">

<!-- JS -->

<script type="text/javascript" src="slick/slick.min.js"></script>

 </head>
 <body>
 	 <!-- nav bar begin -->

 <nav class="navbar  navbar-default navbar-static-top " role="navigation" id="nav">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
          <h3 class="navbar-brand" class="navbar-brand"><span>Narth</span>Inspired</h3> 
        </div>
        
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
           <ul class="nav navbar-nav" id="navul">
            <li><a href="#"><i class="fa fa-user-circle "></i> Admin name</a></li>

          </ul> 
     </div> 
 </nav>

    <!-- End of nav -->

 <div class="container">
 	<div class="row">
 		<div class="col-sm-3" id="dash">
 				<center><h4>Dashboard <i class="fa fa-dashboard"></i></h4></center>

        <ul>
          <li><a href=""><i class="fa fa-plus"> </i> Add Post</a></li>
          <li><a href=""><i class="fa fa-edit"></i> Manage Post</a></li>
          <li><a href=""><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
 		</div>

 		<div class="col-sm-6" id="addp">
 			<center><h3>Add Post</h3></center>
      <form  class="form" action="#" method="POST">

        Title
        <div class="form-group">
          <input type="text" name="title" class="form-control">
        </div>
        Author
        <div class="form-group">
          <input type="text" name="auth" class="form-control">
        </div>
        Body
        <div class="form-group">
          <input type="text" name="body" class="form-control">
        </div>
        Topic
        <div class="form-group">
          <select class="form-control">
            <option>PHP</option>
            <option>PHP</option>
            <option>PHP</option>
          </select>
        </div>
        Date
        <div class="form-group">
          <input type="date" name="dte" class="form-control">
        </div>
        Image
        <div class="form-group">
          <input type="file" name="bimg" class="form-control">
        </div>

        
      </form>
 		</div>

    <div class="col-sm-3"></div>

 		</div>
 	</div>	



</body>
</html>