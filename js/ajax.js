function modificarUsuario(usuario) {
    $.ajax({
        type:'POST',
        data:{accion:"modificar",
            nombre:$("#nombre" + usuario).val(),
                edad: $("#edad" + usuario).val(),
                correo: $("#correo" + usuario).val()
            },
        url: "controlador/datos_controlador.php",
        success: function (response) {
            $("#contenido").html(response);
        },
        error: function (error) {
            console.log(error);
        },
    });
}