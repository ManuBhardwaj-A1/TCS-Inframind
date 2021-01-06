<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        /* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

/* Global */
html{
  min-height: 100%;
  
}
body{
  height: calc(100vh - 8em);
overflow: hidden;
  
  color: rgba(255,255,255,.75);
  font-family: 'Anonymous Pro', monospace;  
  background-color: rgb(25,25,25);  
}
.line-1{
    position: relative;
    top:5%;  
    width: 24em;
    margin: 0 auto;
    border-right: 2px solid rgba(255,255,255,.75);
    font-size: 180%;
    text-align:left;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(-50%); 

}

/* Animation */
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
}

@keyframes typewriter{
  from{width: 0;}
  to{width: 50em;}
}
@keyframes blinkTextCursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}
        *{
            margin: 0;
            padding: 0;
        }
        
.bgimage{
    background-image:url('https://source.unsplash.com/1600x900/?code,technology');
    min-height: 510px;
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: absolute;
  right: 0;
  margin: 10px;
  max-width: 400px;
  padding: 16px;
  border-radius: 10px;
  background-color: #f2f2f2;

  
}

/* Full-width input fields */

input[type=text], input[type=password]{
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 5px;
  background: #f1f1f1;
  border: 1px solid #ccc;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn1 {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}



    </style>

    <title>index</title>
  </head>
  <body>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Database Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
     
        <a class="nav-link" href="/">Home</a>
      </li>
      
         <li class="nav-item active">
        
        <a class="nav-link" href="aboutus">About us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adminlogin">Admin Login</a>
          <a class="dropdown-item" href="{{ route('login') }}">Student_Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactus">Contact us</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="bgimage">
 
 <p style="font-size: 50px;margin-top: 1px;float: left;padding-left: 25%;color: #0066ff;">About Us</p>
 <p style="font-size: 20px;margin-top: 5px;float: left;padding-left:1%;margin-right: 70%;"><b>How can we help?\(^o^)/</b></p>
 <p style="font-size: 20px;margin-top: 5px;float: left;padding-left:1%;margin-right: 50%;"><b>Mobile Design and Editing: -</b>
No matter what device you're using, your site will look great and you can edit on-the-go.</p>
<p style="font-size: 20px;margin-top: 5px;float: left;padding-left:1%;margin-right:50%;"><b>Rapid Page-Load Performance: -</b>
Nothing's worse than a slow loading webpage. Ours are fast. </p>
<p style="font-size: 20px;margin-top: 5px;float: left;padding-left:1%;margin-right:50%;"><b>Backup and Restore: -</b>
Sleep soundly knowing that you've always got a backup of your site.</p>




    
    <div class="button">

   
  <form action="/action_page.php" class="container" style="float:left;">

    <label for="name" style="color: #333333;"><b>Name*</b></label>
    <br>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>
    
    <label for="email"  style="color: #333333;">Email*</label><br>
    <input type="text" placeholder="Enter Email" name="email"pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required>
    <br>
    <label for="text"  style="color: #333333;">Message*</label>
    <br>
    <input type="text"name="text"placeholder="typing............" required>
    <br>
     <label for="Details"  style="color: #333333;">Additional Details*</label>
    <br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="width: 100%;
  padding: 10px;
  margin: 5px 0 22px 5px;
  background: #f1f1f1;
  border: 1px solid #ccc;"></textarea>
    <br>
    <button type="submit" class="btn1">Submit</button>
  </form>
 
</div>

</div>



</div>

    <p style="background-color: #007bff;

    text-align: center;">Powered by Bhardwaj Company PVT. LTD.</p>
    

  </body>
</html>