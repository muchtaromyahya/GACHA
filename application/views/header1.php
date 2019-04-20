<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.min.css">

  <!-- <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script> -->
<style>

body{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
 li {
     margin-right: 10px;
     padding-top: 5px;
 }

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
p{
  font-size: 40px;
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

</head>
<body>

    <nav class = "navbar navbar-expand-md navbar-light bg-light sticky-top">

        <button class ="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse" id = "collapse_target">

        <a class = "navbar-brand"><img src = "<?php echo base_url('application/views/assets/placeholder.jpg'); ?>" style = "width: 40px;height: 20%;"></a>
        <span class = "navbar-text" style = "padding-bottom:10px;margin-right: 580px;color: black;font-size: 25x;font-weight: bold;">GACHA</span>

            <ul class = "navbar-nav">
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Home'); ?>">Home</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Lowongan'); ?>">Lowongan</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Mitra'); ?>">Mitra</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('About'); ?>">About</a>
                </li>
                <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Cari">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 10px;">Cari</button>
                    </form>
                <li class = "nav-item dropdown">
                    <a class = "nav-link dropdown-toggle" data-toggle = "dropdown" data-target="dropdown_target" href = "#" style = "padding-top:8px;">
                        Nama Akun
                        <span class = "caret"></span>
                    </a>
                    <div class = "dropdown-menu" aria-labelled by="dropdown_target">
                            <ul class = "navbar-nav">
                                <a class = "dropdown-item"><img src = "assets/img_avatar2.png" style = "width: 40px;"></a>
                                <li class = "nav-item">
                                        <a class = "dropdown-item">Nama</a>
                                        <a class = "dropdown-item">Email</a>
                                        <button class = "dropdown-item" style = "background-color:bg-danger">Setting</button>
                                </li>       
                        </ul>
                        
                    </div>
                </li>
                <li class = "nav-item dropdown" >
                    <button class="nav-link  login" onclick="document.getElementById('id01').style.display='block'" data-toggle = "dropdown" data-target="dropdown_target1" style = "background:red;color:white;border:none;cursor:pointer;width: 75px;height:50px;border-radius:20px;padding-bottom:10px;">
                        Login
                    </button>
                    <div class = "dropdown-menu" arialabelledby = "dropdown_target1">
                        <button class = "dropdown-item">User</button>
                        <button class = "dropdown-item">Mitra</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <img src ="assets/placeholder_bg.png"> 
    <img src ="assets/placeholder_bg.png"> -->

    <div id="id01" class="modal" style="padding-left:30%;padding-right:30%;">
			<form class="modal-content animate" action="/action_page.php" style="padding-top:5%;padding-bottom:5%;">
				<div class="imgcontainer" style="text-align: center;">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
					</span>
					<img src="assets/img_avatar2.png" alt="Avatar" class="avatar" style="width:40%;border-radius:50%;margin-bottom:5%">
					<div><p>Login</p></div>
				</div>
				<div class="container">
					<div><label for="uname" ><b>Username</label></div>
					<div><input type="text" name="uname" placeholder="Enter Username" required></div>
					<div><label for="psw"><b>Password</label></div>
					<div><input type="password" name="psw" placeholder="Enter Password" required></div>
					<div style="text-align:center;margin-top:5%"><button class="login " type="submit" style="padding:5px;">Login</button></div>
				</div>
				<div class="container" style="background-color: #f1f1f1;padding:5%;margin-top:5%">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="login">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
          <div><br>
          <span class="psw">Belum punya akun?. daftar <a href="#">Disini?</a></span>
          </div>
				</div>	
			</form>
		</div>
</body>
</html>