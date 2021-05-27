<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BUSINESS WEBSITE</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
</body>
</html>

  <!--------------------------------------------------------------------------------NavigationBar------------------------------------------------------------------------------->

  <section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="logo.JPG"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="previouspapers.php">PREVIOUS PAPERS</a>
         </li>
         <li class="nav-item">
        <a class="nav-link" href="Chaptersphp">CHAPTERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exams.php">MBA EXAMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php">NEWS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="signup.php">SIGNUP</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
    </li>
   </ul>
  </div>
</nav>
</section>


<!-----------------------------------------------------------------------------------------slider----------------------------------------------------------------------------------------------------------->

<div id="slider">
<div id="headerslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-slide-to="1"></li>
    <li data-target="#headerslider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid"><img src="laptop.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid"><img src="books.jpg">
     </div>
    <div class="carousel-item">
      <img class="d-block img-fluid"><img src="library.jpg">
    </div>
   </div>
  <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!---------------------------------------------------------------------About-------------------------------------------------------------------------->


<section id="About">
<div class="container">
<div class="row"> 
 <div class="col-md-6">
 <h2>About us</h2>
 <div class="About-content">
  we genuinelly belive that education should be free to everyone regardless of socio-economic issues. This is my small start for the students out there that aspire to study and gain knowledge we post different articles, papers, courses about business and management. This will help students to learn out of book content and also get ready for their entrance exams. we see our start to reach as many students and create a large community where people will help eachother and feel free to have discussions with eachother. join us! lets create a big community to educate people.
</div>
<a class="btn btn-primary" href="about.php" role="button">Read More</a>
</div>
<div class="col-md-6" skills-bar>
	<p>EXAMS</p>
	<div class="progress">
	<div class="progress-bar" style="width: 80%">80%</div>
	</div>
<p>ARTICLES</p>
<div class="progress">
<div class="progress-bar" style="width: 75%">75%</div>
	</div>
<p>NEWS</p>
<div class="progress">
<div class="progress-bar" style="width: 55%">55%</div>
	</div>
<p>Adobephotoshop</p>
<div class="progress">
<div class="progress-bar" style="width: 40%">40%</div>
	</div>
</div>
</div>
</div>
</section>


<!---------------------------------------------------------------------------services----------------------------------------------------------------------->


<section id="services"> 
<div class="container">
<h1>OUR SERVICES</h1>
<div class="row services">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-md-3 text-center">
	<div class="icon">
	<i class="fa fa-desktop"></i>
</div>
<h3>Articles</h3>
<p>	Articles related to business, finance and management. we are here to support you! you are always welcome to share your problems here.</P>
</div>
<div class="col-md-3 text-center">
	<div class="icon">
	<i class="fa fa-bars"></i>
</div>
<h3>News</h3>
<p>	News related to business, finance and management. we are here to support you! you are always welcome to share your problems here.</P>
</div>
<div class="col-md-3 text-center">
	<div class="icon">
	<i class="fa fa-question"></i>
</div>
<h3> Previous Question Papers</h3>
<p>	All about digital marketing you need to know. we are here to support you! you are always welcome to share your problems here.</P>
</div>
<div class="col-md-3 text-center">
	<div class="icon">
	<i class="fa fa-sticky-note"></i>
</div>
<h3>Mock Papers</h3>
<p>	Mock papers related to business, finance and management. we are here to support you! you are always welcome to share your problems here.</P>
	</div>
</div>
</div>
</section>

<!-------------------------------------------------------------------Article Carousel------------------------------------------------------>
<div class="box">
 <img src="entrepreneur.jpg" alt="entrepreneur">
<h4>10 SIGNS YOU MIGHT BE AN ENTREPRENEUR</h4>
  <p>An Entrepreneur is one who has the capability to bring a change in the world. They constantly think about new ideas and what can be done better and can be brought in live, and this depicts their personality.</p>
<a class="btn btn-primary" href="readmore.php" role="button">Read More</a>
</div>


<div class="box">
 <img src="Warren-Buffet.jpg" alt="Warren-Buffet">
<h4>ARE YOU TOO OLD TO BE AN SUCCESSFUL ENTREPRENEUR?</h4>
  <P>Entrepreneur is a word which can be referred to anyone irrespective of their ages. Entrepreneur is nothing but a pure passion. Some people succeed at their early age and some take time. </p>
<a class="btn btn-primary" href="readmore.php" role="button">Read More</a>
</div>



<div class="box">
 <img src="bornormade.png" alt="are entrepreneur born or made">
<h4>ARE SUCCESSFUL ENTREPRENEURS BORN OR MADE?</h4>
  <p>This is a question that has troubled many of journalists, professors, industrial leaders and also many entrepreneurs. Thinking about this get you into a deeper thought process of what is it really? And significantly turns into a big equation.</p>
<a class="btn btn-primary" href="readmore.php" role="button">Read More</a>
</div>



<!--------------------------------------------------------------------->






<!--------------------------Footer---------------------------------------->
<section id="footer">
  <div class="container">
    <P>Made With <i class="fa fa-heart-o"></i> By Managementedu</P>






</div>
</section>
</body>
</html>