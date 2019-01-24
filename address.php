<?php
	session_start();
	if(!empty($_POST['s1']))
	{
		$name=$_POST['name'];
		$mob=$_POST['mobile'];
		$mail=$_POST['mail'];
		$address=$_POST['add'];
		$timing=$_POST['time'];
		$_SESSION['nme']=$name;
		$_SESSION['ad']=$address;
		$_SESSION['mail']=$mail;
		$_SESSION['mobile']=$mob;
				header("Location:confirm.php");
		
		$i="insert into address(name,mobile,mail,address,time)values('$name','$mob','$mail','$address','$timing')";
			$con=mysqli_connect("127.0.0.1","root","","kri"); 
		if($con)
		{
			mysqli_query($con,$i);
		}
		
}
	

	?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Address</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="animate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>


<body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top badge-dark">
      <a class="navbar-brand" href="index.php">
        <h3 style="font-size:30px; font-family: 'Martel', serif;">KRISHAKK</h3>
        </a>
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="installation.php">Installation Guide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php">Order Online</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.VERTICAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
            </li>
          </ul>
        </div>
      </div>
    </nav>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<div class="container " >
<div class="row">
<div class="col-lg-12">
<div class="animated fadeInUp">
<form class="form-horizontal" action="address.php" method="post">
<fieldset>

<!-- Form Name -->
<center><h1 class="abc">Type Address</h1></center>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Enter Your name:</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="prependedtext" name="name" class="form-control" placeholder="Name" type="text" required="">
    </div>
    <p class="help-block">*</p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mobile Number">Mobile Number:</label>  
  <div class="col-md-4">
  <input id="Mobile Number" name="mobile" type="text" placeholder="Mobile" class="form-control input-md" required="">
  <span class="help-block">*</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email:</label>  
  <div class="col-md-4">
  <input id="textinput" name="mail" type="text" placeholder="Email" class="form-control input-md" required="">
  <span class="help-block">*</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="add">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="add" name="add"></textarea>
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  

  <center><label class="abc"><h2>Preffered Timing</h2>
  <select name="time" class="izbor" size="1">
    <option >9 a.m</option>
    <option>10 a.m</option>
    <option>12 noon</option>
    <option>1 p.m</option>
    <option>2 p.m</option>
    <option>3 p.m</option>
 <option>4 p.m</option>
 <option>5 p.m</option>
 <option>6 p.m</option>
 <option>7 p.m</option>
 <option>8 p.m</option>
 <option>9 p.m</option>
  </select>
  </label></center>

</div>





<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
  <form action="address.php" method="post">
    <input type="submit" id="button1id" name="s1" class="btn btn-success btn-lg" value="Submit"/>
    </form>
  </div>
</div>

</fieldset>
</form>
<center><a href="index.php"><button class="btn btn-danger btn-g">Cancel</button></a>
</div>
</div>
</div>
</div>
</center>
<footer class="page-footer font-small cyan darken-3 badge-dark ">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-2" align="center">
          <div class="mb-5 flex-center">
<br>
           <br>
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    
    
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
    
    </div>
    <!-- Copyright -->

  </footer>
</body>
</html>