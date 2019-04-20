<html>
    <head>
        <link rel="stylesheet" type="text/css" href="application/views/akun/login.css">
		
    </head>
    <body>
            <!-<button type="button"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Login</button>-->
        <div id="id01" class="modal">
			<form class="modal-content animate" action="/action_page.php">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
					</span>
					<img src="assets/img_avatar2.png" alt="Avatar" class="avatar">
					<div></div>
					<div><label class="login">Login</label></div> 	
				</div>
				<div class="container">
					<div><label for="uname" ><b>Username</label></div>
					<div><input type="text" name="uname" placeholder="Enter Username" required></div>
					<div><label for="psw"><b>Password</label></div>
					<div><input type="password" name="psw" placeholder="Enter Password" required></div>
					<div><button class="login" type="submit" >Login</button></div>
				</div>
				<div class="container" style="background-color: #f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>	
			</form>
		</div>
    </body>
    <script>
        window.onclick = function(event){
	        var modal1 = document.getElementById('id01');
	        if (event.target == modal1) {
		        modal1.style.display = "none";
	        }		
}
    </script>
</html>