<?php

$con = mysqli_connect("localhost","root","","form");

if($con){
	echo "Connection successful";
}else{
	echo "No connection ";
}
if(isset($_POST["submit"]))
{
$Email_id=$_POST['email'];
$Password=$_POST['pass'];
$Repeat_Password=$_POST['repeatpass'];

$query="INSERT INTO registration_info(email,password,repeatpass)VALUES('$Email_id','$Password','$Repeat_Password')";
$Register=mysqli_query($con,$query);
if($Register)
{
	echo "inserted";
}
}
?>

<?php

$con = mysqli_connect("localhost","root","","youtubeuserdata");

if($con){
	echo "Connection successful";    
}else{
	echo "No connection ";
}
if(isset($_POST["submit"]))
{
$Username=$_POST['un'];
$Email_id=$_POST['email'];
$Contact=$_POST['mobil'];
$Comments=$_POST['comment'];
$query="INSERT INTO userinfodata(user,email,mobile,comments)VALUES('$Username','$Email_id','$Contact','$Comments')";
$submit=mysqli_query($con,$query);
if($submit)
{
	echo "inserted";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BULGARIA MATCREATIONS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hotel5.jpg" alt="Dadar" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dadar</h3>
        <p>We had such a great time</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/hotel2.jpg" alt="Thane" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Thane</h3>
        <p>Thank you, Thane!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/hotel7.jpg" alt="Vashi" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Vashi</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	  <div class="container-fluid">

		<div class="text-center">
			<h2>WELCOME TO BULGARIA HOTEL & RESORTS</h2>
			<p>we offers  you our best services with attractive accommodation packages weather its a bulk wedding booking, official booking, for  leisure or a weekend getaway holiday stay with your family and friends.

			We have associated with leading chains of hotels in all major  destination and get the best deals from them. There are unlimited hotels to choose from and We help you get assured accommodation at your desired level of hotels from any category you choose.</p>
			<a href="about.php" class="btn btn.success">check more</a>
		</div>
	 </div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/hotel12.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Hotel services</h4>
						<p class="card-text">Complimentary high speed Wi-Fi throughout the hotel.24 hours reception available.Laundry and dry-cleaning services & Underground parking Boutique</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/hotel11.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Leisure facilities</h4>
						<p class="card-text">Complimentary access to indoor swimming pool and fully equipped fitness centre.Beauty centre: massage, waxing, facial, body and beauty experiences</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/hotel4.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Restaurants & Cafeteria</h4>
						<p class="card-text">If you want to experience and dine the authentic ‘Peshwari’ style you can’t miss out on this. Indulge in delicious North Indian Cuisine. Right from their Paneer Tikka Masala and Butter Chicken Masala to their Rumali Roti and the Kebabs, every dish is cooked to perfection!</p>
						<a href="#" class="btn btn-primary">See Profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
    </div>

	<div class="container-fluid">
	    <div class="row">
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel6.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel3.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel21.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel22.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel23.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel25.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel27.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel29.jpg" class="img-fluid pd-4">
	        </div>
	        <div class="col-lg-4 col-md-4 col12">
	           <img src="images/hotel28.jpg" class="img-fluid pd-4">
	        </div>
	    </div>
	</div>    
</section>



<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Feedback</h2>
    </div>

    <div class="w-50 m-auto">
    	<form action="userinfo.php" method="post">
    		<div class="form-group">
    			<label>Username</label>
    			<input type="text" name="un" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Email-id</label>
    			<input type="text" name="email" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Contact number</label>
    			<input type="text" name="mobil" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Comments</label>
    			<textarea class="form-control" name="comment">
    			</textarea>
    		</div>

            <button name="submit" type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>    
</section>

<footer>
	 <p class="p-3 bg-dark text-white text-center">@bulgariamatproductions77</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

