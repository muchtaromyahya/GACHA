window.onclick = function(event){
	var modal = document.getElementById('id01');
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
function validasipass(){
	var psw1 = document.getElementById("psw1");
	var psw2 = document.getElementById("psw2");
	if (psw1 != psw20{
		document.getElementById("psw1").setCustomValidity("Passwords Tidak Sama");
	}
}