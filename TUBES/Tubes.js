function validasipass(){
	var psw1 = document.getElementById("psw1");
	var psw2 = document.getElementById("psw2");
	if (psw1 != psw20){
		document.getElementById("psw1").setCustomValidity("Passwords Tidak Sama");
	}
}
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
  }
window.onclick = function(event){
	var modal1 = document.getElementById('id01');
	if (event.target == modal1) {
		modal1.style.display = "none";
	}	
	var modal2 = document.getElementById('id02');
	if (event.target == modal2) {
		modal2.style.display = "none";
	}	
	var modal3 = document.getElementById('mysidenav');
	if (event.target == modal3) {
		modal3.style.display = "none";
	}	
}
