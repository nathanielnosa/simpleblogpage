<?php 

include("connect/connect.php");

if (isset($_POST['snd'])) {

  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $que = "INSERT INTO contact (email, msg) VALUES ('$email', '$msg')";
  $re = mysqli_query($conn, $que);

  echo "<script>alert('message sent')</script>";

}

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

 <nav class="navbar  navbar-default navbar-fixed-top " role="navigation" id="nav">
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
            <li><a href="#"><i class="glyphicon glyphicon-home "></i> HOME</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-info"></i> ABOUT</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-phone"></i>SERVICE</a></li>

          </ul> 
        </div> 
    </nav>

    <!-- End of nav -->

    <div class="container" id="d">
      <h3>Trending Post</h3>
      <i class="fa fa-chevron-left prev"></i>
      <i class="fa fa-chevron-right next"></i>
      <div class="postcon">

           <div class="post">
               <img src="img/aa.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> What You Need To Know About Programming</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>

          <div class="post">
               <img src="img/bb.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> How To Become A Backend Programmer</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>

          <div class="post">
               <img src="img/cc.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> Learning The Crude Programmer</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>


          <div class="post">
               <img src="img/dd.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href="">Making Your Work Stress Free</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>


          <div class="post">
               <img src="img/ee.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> How To Become A Frontend Programmer</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>

          <div class="post">
               <img src="img/ff.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> Obeject Oriented Programming</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>

          <div class="post">
               <img src="img/gg.jpg" alt="webber" class="slideimg">
                   <div class="post-word">
                      <h4><a href=""> Learn All Aspect Of Programming</a></h4>
                      <i class="fa fa-user"> Nathaniel</i> &nbsp;
                      <i class="fa fa-calendar"> May, 5, 2020</i>
                  </div> 
          </div>



         
      </div>
    </div>

<script>
  
  $('.postcon').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: $('.prev'),
  nextArrow: $('.next'),

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
<!-- end of caurousel -->
<!-- the body contents -->

<div class="container" id="content">
  <h3>Recent Post</h3>

  <div class="row" id="content-row">
    <div class="col-sm-8" id="main-cont">
      <div class="post">
         <img src="img/gg.jpg" alt="webber" class="postimg">
        <div class="post-review">
           <h4><a href=""> Learn All Aspect Of Programming</a></h4>
           <i class="fa fa-user"> Nathaniel</i> &nbsp;
           <i class="fa fa-calendar"> May, 5, 2020</i>
           <p class="post-text">
              This book expresses the author’s views and opinions. The information contained in this book is provided without
              any express, statutory, or implied warranties...
           </p>
           <a href="" class="btn btn-primary">Read More</a>
        </div>
      </div>


      <div class="post">
         <img src="img/cc.jpg" alt="webber" class="postimg">
        <div class="post-review">
           <h4><a href=""> Learning The Crude Programmer</a></h4>
           <i class="fa fa-user"> Nathaniel</i> &nbsp;
           <i class="fa fa-calendar"> May, 5, 2020</i>
           <p class="post-text">
              This book expresses the author’s views and opinions. The information contained in this book is provided without
              any express, statutory, or implied warranties...
           </p>
           <a href="" class="btn btn-primary">Read More</a>
        </div>
      </div>


       <div class="post">
         <img src="img/dd.jpg" alt="webber" class="postimg">
        <div class="post-review">
           <h4><a href="">Making Your Work Stress Free</a></h4>
           <i class="fa fa-user"> Nathaniel</i> &nbsp;
           <i class="fa fa-calendar"> May, 5, 2020</i>
           <p class="post-text">
              This book expresses the author’s views and opinions. The information contained in this book is provided without
              any express, statutory, or implied warranties...
           </p>
           <a href="" class="btn btn-primary">Read More</a>
        </div>
      </div>


       <div class="post">
         <img src="img/aa.jpg" alt="webber" class="postimg">
        <div class="post-review">
           <h4><a href=""> What You Need To Know About Programming</a></h4>
           <i class="fa fa-user"> Nathaniel</i> &nbsp;
           <i class="fa fa-calendar"> May, 5, 2020</i>
           <p class="post-text">
              This book expresses the author’s views and opinions. The information contained in this book is provided without
              any express, statutory, or implied warranties...
           </p>
           <a href="" class="btn btn-primary">Read More</a>
        </div>
      </div>

    </div> <!-- main content -->

    <div class="col-sm-4" id="sidebar">
      <div class="searchbar">
        <h2>Search</h2>
        <form class="form" action="" method="">
        <div class="form-group">
          <input class="form-control" type="text" name="" placeholder="Search...">
          <input type="submit" name="" class="btn btn-primary" value="Search">
        </div>
      </form>
      </div>

      <div class="top-topics">
        <h2>Topics</h2>

        <div class="topic-link">
        <table class="table">
          <tr>
            <th><h5><a href="">Programming</a></h5></th>
          </tr>
          <tr>
            <th><h5><a href="">Web Design</a></h5></th>
          </tr>
          <tr>
            <th><h5><a href="">PHP</a></h5></th>
          </tr>
          <tr>
            <th><h5><a href="">Laravel</a></h5></th>
          </tr>
          <tr>
            <th><h5><a href="">MySQLI</a></h5></th>
          </tr>
          <tr>
            <th><h5><a href="">Java Script</a></h5></th>
          </tr>
        </table>
        
        </div>
      </div>

    </div>

  </div>  <!-- for row -->

</div> <!-- for content -->



<!-- footer -->


<div class="container" id="footer">
  
  <div class="row" id="footer-content">
    <div class="col-sm-4">
      <h3><span>Narth</span>Inspired</h3>
      <p>
        NarthInspired is a programing web site for any one who wants to learna programming language.
        It also for anyone who knows about programing
      </p>

        <div class="contact">
              <span><i class="fa fa-phone"></i> &nbsp; 081-775-077-80</span> <br>
              <span><i class="fa fa-envelope"></i> &nbsp; nathanielnarth@gmail.com</span>
        </div>

        <div class="social">
              <a href=""><i class="fa fa-facebook"></i></a> 
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-youtube"></i></a>
        </div>

    </div>
    <div class="col-sm-4">
      <h3>Quick Link</h3>
        <div class="link">
          <ul>
            <li><a href="">Events</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">Mentors</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Terms and Condition</a></li>
          </ul>
        </div>
    </div>
    <div class="col-sm-4">
      <h3>Contact Us</h3>
      <div class="cont">
        <form class="form" action="#" method="POST">
          <div class="form-group">
           <input type="email" name="email" placeholder="Enter Email" class="form-control" required="">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="msg" placeholder="Message Goes Here.." required=""></textarea>
          </div>
          <div class="form-group">
           <button class="btn btn-primary" type="submit" name="snd"><i class="fa fa-send"></i> Send</button>
          </div>

        </form>
      </div>
    </div>

</div>

  <div class="footer-bottom">
    &copy; NarthInspired | Designed By Nathaniel Nosa
  </div>
</div>

 </body>
 </html>