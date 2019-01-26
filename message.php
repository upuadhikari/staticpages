<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>page</title>
  </head>
  <body>


    <div class="container-fluid">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <z class="navbar-brand">Menu</z>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

  <!--<a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
        <a class="nav-link" href="http://localhost/prolearn/html/home.php">Home<span class="sr-only">(current)</span></a>
      
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/prolearn/html/message.php">Message<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/prolearn/html/product.php">Product</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="http://localhost/prolearn/html/discount.php" tabindex="-1" aria-disabled="true">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>








<?php 
if(isset($_GET['submit']))
{
  ?>
  <div class="alert alert-primary" role="alert">
    <p>Thank you for submitting</p></div>
    <!--<p>
      <?php
      /*echo 'Name:'.$_GET['name']."br";
      echo 'Email:'.GET['email']."br";
      echo 'Message:'.GET['message']."br";
      ?>
      </p> 
  </div>
  <?php */ 
}

?>-->




<div class="row">
    <div class="col-8" >
     
<form action="" method="GET">
  <div class="form-group">
    <label for="exampleFormControlTextarea1" name="name">Name</label>
    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" rows="1"placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Subject</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <!--

  <div class="form-group">
    <label for="exampleFormControlSelect1">Message About</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Select Any</option>
      <option>Late Dilivery</option>
      <option>Bug report</option>
      <option>Defective Product</option>
      <option>Payment</option>
      <option>Other</option>
    </select>
    </div>

  -->


 <!-- 

 <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> 

-->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Type your message here</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" type="submit" name="submit">submit</button>

  <div class="alert alert-primary" role="alert">
  A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
 </div>
</div> 
<div class="col-2" style="border-left: 3px solid #000;">
  







  
</div>



<div class="col-2" style="border-left: 3px solid #000;">
  

</div>
 </div>
    </div>
 




</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>