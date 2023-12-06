
$(document).ready(function () {
    $('#enviar').on('click', function () {
        // Recolectar datos del formulario
        var formData = {
            'name': $('#name').val(),
            'email': $('#email').val(),
            'password': $('#password').val(),
        };

        // Enviar datos a la API utilizando Ajax
        $.ajax({
            type: 'POST',
            url: registerUrl,
            data: formData,
            success: function (data) {
                // Manejar la respuesta de la API
                console.log(data);
                // window.location.href = vista;
            },
            
            error: function (error) {
                // Manejar errores
                console.log(error.responseJSON);
            }
        });
    });
});
