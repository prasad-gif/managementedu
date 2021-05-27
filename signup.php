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
        <a class="nav-link" href="Chapters.php">CHAPTERS</a>
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
        <a class="nav-link" href="register.php">SIGNUP</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
    </li>
   </ul>
  </div>
</nav>
</section>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<section id="signup">
<div class="container">
<h1>SIGN UP</h1>
<div class="row">
<div class="col-md-6">
  <form action="includes/signup.inc.php" method="post">
<form class="signup-form">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Fullname">
</div>    
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
<input type="text" class="form-control" name="uid" placeholder="Username">
</div>
<div class="form-group">
<input type="password" class="form-control" name="pwd" placeholder="Password">
</div> 
<div class="form-group">
<input type="password" class="form-control" name="pwdrepeat" placeholder="Repeat password">
</div> 
<button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</form>
</form>
</div>
</div>
</div>
</section>
</body>
</html>