

// en este archivo se detallaran los eventos 

$(window).ready(function () {

    // evento destinado a capturar los inputs en caso de existir mas de un input submit en un formulario en tal caso debera ser detallado en el name la funcion que correra en el controlador
    $('.asincr>input[type=submit]').on('click',function(event){
        
        // si tiene un nombre el input procesaremos 
        if( $(this).attr('name') != undefined) {
            // cancelamos el submit para enviarlo por ajax y asi evitar recargar la pagina
            event.preventDefault()
            // obtenemos el nombre de la funcion que llemaremos en el controlador definido en el form
            fn = $(this).attr('name')
            // nombre del form
            name = $(this).parent().attr('name')
            // action del form
            action = $(this).parent().attr('data-action')
            // creamos un action nuevo -> controldor/fn
            $('form[name='+name+']').attr('action',action + "/" + fn)
            // enviamos el formulario
            $('form[name='+name+']').submit()
        }

    })

    // evento encargado de capturar el envio de los formularios.asincr, peticiones que deseamos procesar sin recargar la pagina
    $('.asincr').on('submit', function(event) {
        // cancelamos el submit para enviarlo por ajax y asi evitar recargar la pagina
        event.preventDefault()
        //Obtenemos el nombre del formulario
        var name = $(this).attr("name")
        // convertimos el id si existe en el mismo que el name para evitar errores en server.js
        $(this).attr("id", name)
        // utilizamos el objeto que creamos para enviar la peticion
        serverSend(name,$(this).attr("action"),$(this).serialize())
        // no devolvemos nada
        return false;           
    });

    // evento destinado a mostrar la ayuda(.form-help) en los formularios
    $('.form-group').on('click', function(event) {
        // removeremos todas las clases on de las secciones de los formularios
        $('.form-group').removeClass('on')
        // agregaremos la clase on a la seccion dentro del form en la que estemos haciendo focus
        // para asi por css mostrar la ayuda .form-group.on>.form-help{display:block}
        $(this).addClass('on')
    })
})