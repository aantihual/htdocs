function login()
{
	var usuario = document.getElementById("usuario").value;
	var clave = document.getElementById("clave").value;

	if (usuario == 'admin' && clave == 'admin') {
	
		
	}
	else {

		alert("revisar los datos");
        return false;
	}
}
