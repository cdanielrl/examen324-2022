function validar() {
	var $valido = true;
	document.getElementById("usuario_info").innerHTML = "";
	document.getElementById("pass_info").innerHTML = "";

	var userName = document.getElementById("user_name").value;
	var password = document.getElementById("password").value;
	if (userName == "") {
		document.getElementById("usuario_info").innerHTML = "requerido";
        document.getElementById("usuario_info").removeAttribute("display: none");
		$valido = false;
	}
	if (password == "") {
        document.getElementById("pass_info").removeAttribute("display: none");
		document.getElementById("pass_info").innerHTML = "requerido";
		$valido = false;
	}
	return $valido;
}