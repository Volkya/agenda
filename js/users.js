
// objeto encargado de las funcniones propias del usuario
var user = {
	// si se valido correctamente 
	valid:function(){
		// esta funcion esperara 1 segundo y medio y se ejecutara redireccionando al perfil del usuario
		setTimeout(function() {
	                location.href = $('#base').val()
	            }, 1500);
	}
}

// esta funcion se ejecuta desde server.js cuando la validacion es exitosa
function userLoginValid(){
	user.valid()
}