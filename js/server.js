
// objeto encargado de la comunicacion, reportar estado y distribucion  de respuesta del servidor 
var server = {
    send:function(name,url,data){
        // enviamos ademas un codigo de control de pagina para evitar ataque xxs 
        //data['userKey'] = $('#userKey').val()

        // funcion para realizar peticiones
        $.ajax({
            url:  url,
            // obtenemos el metodo declarado en el formulario
            type: $("form[name="+name+"]").attr('method'),
            data: data,
            // operacion satisfactoria
            success: function(){
                $(".form-status").html("Enviando...").fadeIn();
            },
            // para manejo de informacion un poco pesada
            xhr: function () {
                var xhr = $.ajaxSettings.xhr();
                // controlamos el estado de la descarga en proceso
                xhr.onprogress = function e() {
                    // For downloads
                    if (e.lengthComputable) {
                        $("#" + name + " .progress").html((e.loaded / e.total * 100) + "%")
                    }
                };
                // controlamos el estado de la subida en proceso 
                xhr.upload.onprogress = function (e) {
                    // For uploads
                    if (e.lengthComputable) {
                        $("#" + name + " .progress").html((e.loaded / e.total * 100) + "%")
                    }
                };
                return xhr;
            }
        }).done(function (e) {
                // a modo de control mostramos en la consola lo que responde el servidor
                console.log(e)
                // limpiamos y quitamos las clases de alert
                serverResult.init()
                // convertimos el objeto respuesta del server en un array para trabajar con el
                e = JSON.parse(e);
                // enviamos informacion para luego procesar el envio con la informacion recibida
                serverResult.name = name
                serverResult.data = e.out
                serverResult.error = e.error
                // ejecutamos la funcion luego del envio correspondiente al formulario
                serverResult[name]()

        }).fail(function (e) {
            // Do something
        });
    }
}

// funcion creada para llamar al objeto desde otros archivos
function serverSend(name,url,data){
    server.send(name,url,data)
}


/* AFTER SEND */
// objeto que procesa luego del envio .. trabaja con la respuesta del servidor brindando el estado que este responde(error o respuesta) y ejecutando la funcion correspondiente al formulario
var serverResult = {
    // variables utilizadas por el objeto
    status:'Realizado',
    error:'',
    data:'',
    name:'',
    // inicializacion de variables
    init:function(){
        this.status = ':) Realizado! ';
        this.error = '';
        this.data = '';
    },
    statusReset:function(){
        // limipamos el alert del formulario que estamos usando 
        $('.form-status').html('')
        // le quitamos las clases correspondientes a exitoso y error
        $('.form-status').attr('class','form-status')
    },
    statusPrint:function(){
        // si no existe el nodo para mostrar las alertas de este formulario lo crearemos
        if(!$("form[name="+this.name+"] .form-status").length){
            $("form[name="+this.name+"]").prepend('<div id="'+this.name+'-out" class="form-status"></div>')
        }
        // este es el texto que mostrara el alert
        out = this.status
        // la clase definida cuando no hay errores
        color = 'success'
        if(this.error != ''){
            // colocamos el error en el texto del alert si es que existe
            out = this.error
            // la clase definida cuando no hay errores
            color = 'danger'
        }else{
            // si no hay errores limpiaremos todos los input que no sean del tipo submit
            $("form[name="+this.name+"] input:not(input[type=submit])").val('')
        }
        // escribimos el texto en el alert del formulario correspondiente
        $('#' + this.name + '-out').html(out)
        // agregamos la clase en el alert del formulario correspondiente
        $('#' + this.name + '-out').attr('class','form-status alert-' + color)
    },
    // en esta funcion definimos que haremos con la respuesta que recibimos al enviar el formulario name=userLogin
    userLogin:function(){
        // si no hay errores y se inicio la sesion 
        if(this.error == "" && this.data == 'Sesion Iniciada'){
            // copiamos la respuesta en el estado para luego mostrar en el alert
            this.status = this.data
            // ejecutamos en user la funcion definida para cuando es exitoso el logueo
            userLoginValid()
        }else{
            // si el usuario es creado sin ningun error
            if(this.data == 'Usuario Creado' && this.error == ''){
                // copiamos la respuesta en el estado para luego mostrar en el alert
                this.status = this.data
            }
        }
        // esta funcion se encarga de generar la respuesta que preparamos en this.status y this.error en el alert del formulario correspondiente
        this.statusPrint()
    }
}