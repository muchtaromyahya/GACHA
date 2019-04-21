
        <div id="id02" class="modal" style="padding-left:30%;padding-right:30%;overflow-y:scroll;" >
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;
                    </span>
                    <img src="assets/img_avatar2.png" alt="Avatar" class="avatar">
                    <div></div>
                    <div><label class="login">Register</label></div>
                </div>
                <div class="container">
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
                    <div><input type="password" name="psw" placeholder="Enter Password" required></div>
                    <div><label for="psw" id="psw2"><b>Konfirmasi Password</label></div>
                    <div><input type="password" name="psw" placeholder="Enter Password" required="validasipass()"></div>
                    <div><button class="login" type="submit" >Regist</button></div>
                </div>
                <div class="container" style="background-color: #f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    <script>
        function validasipass(){
	        var psw1 = document.getElementById("psw1");
	        var psw2 = document.getElementById("psw2");
	        if (psw1 != psw20){
		        document.getElementById("psw1").setCustomValidity("Passwords Tidak Sama");
	        }
}
    </script>
