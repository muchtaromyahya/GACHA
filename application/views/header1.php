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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css') ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

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
<body >
    <nav class = "navbar-nav navbar-expand-lg navbar-light bg-light sticky-top" style="padding:10px;">

        <button class ="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse" id = "collapse_target">

        <a class = "navbar-brand"><img src = "<?php echo base_url('application/views/assets/placeholder.jpg'); ?>" style = "width: 40px;height: 20%;"></a>
        <span class = "navbar-text" style = "padding-bottom:10px;margin-right: 580px;color: black;font-size: 25x;font-weight: bold;">GACHA</span>

            <ul class = "navbar-nav mr-auto">
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
                <?php
                    if(isset($_SESSION['Logged_in'])){
                        $this->load->view('akun/login'); 
                    }
                 ?>

                <li>
                   
                    <?php 

                    if (!isset($_SESSION['Logged_in'])) {
                        echo " <button class='nav-link  login' onclick='showlogin()' data-toggle = 'dropdown' data-target='dropdown_target1' style = 'background:red;color:white;border:none;cursor:pointer;width:75px;height:50px;border-radius:20px;padding-bottom:10px;'>
                        Login
                    </button>";
                    } 
                    ?>
                </li>
            </ul>
        </div>
        <div id="id02" class="modal" style="padding-left:30%;padding-right:30%;overflow-y:scroll;">
            <form class="modal-content animate" action="<?php echo base_url('UserController/register') ?>" method="post" style="padding-top:5%;padding-bottom:5%;">
                <div class="imgcontainer" style="text-align:center">
                    <span onclick="document.getElementById('id02').style.display='none';" class="close" title="Close Modal">&times;
                    </span>
                    <img src="assets/img_avatar2.png" alt="Avatar" class="avatar" style="width:15%;border-radius:50%;margin-bottom:2%">
                    <div></div>
					<div><p><b>Register</b></p></div>
                </div>
                <div class="container">
                    <div><label for="daftarsebagai"><b>Daftar Sebagai</b></label></div>
                    <div><select class="custom-select" name="status">
                        <option value="mitra">Mitra</option>
                        <option value="magang">Pencari Magang</option>
                    </select><div>                 
                    <div><label for="fullname"><b>Nama Lengkap</b></label></div>
                    <div><input type="text" name="fullname" placeholder="Masukan Nama Lengkap" required></div>
                    <div><label for="uname" ><b>Username</label></div>
                    <div><input type="text" name="uname" placeholder="Masukan Username" required></div>
                    <div><label for="email"><b>Email</b></label></div>
                    <div><input type="email" name="email" placeholder="Masukan email" required>
                    <div><label for="tgllahir"><b>Tanggal Lahir</b></label></div>
                    <div>
                        <input type="text-field" name="Tempat" placeholder="Tempat Lahir" required>
                        <input type="date" name="tanggal" placeholder="Tanggal" required>
                    </div>
                    <div><label for="psw" id="psw1"><b>Password</label></div>
                    <div><input type="password" name="psw1" id="password" placeholder="Enter Password" required onkeyup="check()"></div>
                    <div><label for="psw" id="psw2"><b>Konfirmasi Password</label></div>
                    <div><input type="password" name="psw2" id="confirm_password" placeholder="Enter Password" required onkeyup="check()"></div>
                    <span id='message'></span>
                    <div style="text-align:center;margin-top:5%"><button class="login" syle="padding:5px;" id="regist" type="submit" disabled>Register</button></div>
                    
                </div>
                <div class="container" style="background-color: #f1f1f1;padding:5%;margin-top:5%">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="login">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    </nav>
    
        
    <div id="id01" class="modal" style="padding-left:30%;padding-right:30%;">
			<form class="modal-content animate" action="<?php echo base_url('UserController/signin') ?>" style="padding-top:5%;padding-bottom:5%;" method="post">
				<div class="imgcontainer" style="text-align: center;">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
					</span>
					<img src="<?php echo base_url('assets/img_avatar2.png') ?>" alt="Avatar" class="avatar" style="width:15%;border-radius:50%;margin-bottom:2%">
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
          <span class="psw" style="text-align:;">Belum punya akun?. daftar <a onclick="showregister()" href="#">Disini?</a></span>
          </div>
				</div>	
			</form>
        </div>

        
        

        
</body>
<script>
        function showlogin() {
            return document.getElementById('id01').style.display='block';
        }
        function showregister() {
            document.getElementById('id02').style.display='block';
            document.getElementById('id01').style.display='none';
        }
        var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Matching';
    document.getElementById('regist').removeAttribute("disabled");
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Not Matching, Please Re-Enter!';
    document.getElementById('regist').setAttribute("disabled","");
  }
}
    </script>

</html>
<?php 
        if ($this->session->flashdata('alert')){
            $this->load->view('errors/errLogin');
        }
    ?>
