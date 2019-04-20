<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>GACHA</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.min.css">

  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <style>
    #navbar{
      background-color: ;
      margin: 0%;
    }
    .login {
      background-color: red;
      color: white;
      border: none;
      cursor: pointer;
      width: 80px;
      border-radius: 10px;
      position: center;
    }

    .login:hover {
      opacity: 0.5;
    }
    .h1{
      font-size: 90px;
      color: cornsilk;
    }
    .nav-link .color{
        color: antiquewhite;
    }
      .badge {
	margin-left: 3px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 35%; /* Could be more or less, depending on screen size */
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 10px;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
     margin-left: 80%;

  }
  .login {
     width: 100%;
  }
}
input[type=text], input[type=password], [type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text-field],  [type=date]{
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-family: Arial;
}




      
  
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GACHA</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item  mx-0 mx-lg-1"> <!--DIPANGGIL UNTUK REDIRECT KE HALAMAN BRIKUTNYA-->
            <a class="nav-link color" href="<?php echo base_url('Home'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color" href="<?php echo base_url('Lowongan'); ?>">Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color" href="<?php echo base_url('Mitra'); ?>">Mitra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url('About'); ?>">About</a>
          </li>
          <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Cari">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>
          <li class="nav-item">
              <a class="nav-link color" href="#contact">NAMA KAMU " "</a> <!--MEMANGGIL $DATA NAMA-->
          </li>
          <button class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Login</button>
          </ul>
      </div>
    </div>
  </nav>
  <div id="id01" class="modal" style="padding-left:30%;padding-right:30%;">
			<form class="modal-content animate" action="/action_page.php" style="padding-top:5%;padding-bottom:5%;">
				<div class="imgcontainer" style="text-align: center;">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
					</span>
					<img src="assets/img_avatar2.png" alt="Avatar" class="avatar" style="width:40%;border-radius:50%;margin-bottom:5%">
					<div></div>
				</div>
				<div class="container">
					<div><label for="uname" ><b>Username</label></div>
					<div><input type="text" name="uname" placeholder="Enter Username" required></div>
					<div><label for="psw"><b>Password</label></div>
					<div><input type="password" name="psw" placeholder="Enter Password" required></div>
					<div style="text-align:center;margin-top:5%"><button class="login" type="submit" style="padding:5px;">Login</button></div>
				</div>
				<div class="container" style="background-color: #f1f1f1;padding:5%;margin-top:5%">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="login">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>	
			</form>
		</div>
</head>
<script>
        window.onclick = function(event){
	        var modal1 = document.getElementById('id01');
	        if (event.target == modal1) {
		        modal1.style.display = "none";
	        }		
}
    </script>