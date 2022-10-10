function validar() {
	var $valido = true;
	document.getElementById("ci_info").innerHTML = "";
	document.getElementById("nombre_completo_info").innerHTML = "";
	document.getElementById("fecha_de_nacimiento_info").innerHTML = "";
	document.getElementById("departamento_info").innerHTML = "";

	var ci = document.getElementById("ci").value;
	var nombre_completo = document.getElementById("nombre_completo").value;
	var fecha_de_nacimiento = document.getElementById("fecha_de_nacimiento").value;
	var departamento = document.getElementById("departamento")	;
	var departamento_value = departamento.value;
var departamento_text = departamento.options[departamento.selectedIndex].text;
	if (ci == "") {
		document.getElementById("ci_info").innerHTML = "requerido";
        document.getElementById("ci_info").removeAttribute("display: none");
		$valido = false;
	}
	if (nombre_completo == "") {
        document.getElementById("nombre_completo_info").removeAttribute("display: none");
		document.getElementById("nombre_completo_info").innerHTML = "requerido";
		$valido = false;
	}
	const regex = /\d{4}[-\/]\d{2}[-\/]\d{2}/;
	if (fecha_de_nacimiento.match(regex)==null ) {
        document.getElementById("fecha_de_nacimiento_info").removeAttribute("display: none");
		document.getElementById("fecha_de_nacimiento_info").innerHTML = "debe ser de la forma YYYY/MM/DD";
		$valido = false;
	}
	if (fecha_de_nacimiento == "" ) {
        document.getElementById("fecha_de_nacimiento_info").removeAttribute("display: none");
		document.getElementById("fecha_de_nacimiento_info").innerHTML = "requerido";
		$valido = false;
	}
	if (departamento_value == null || departamento_value=="" || departamento_text=="Elija el departamento") {
        document.getElementById("departamento_info").removeAttribute("display: none");
		document.getElementById("departamento_info").innerHTML = "requerido";
		$valido = false;
	}
	return $valido;
}