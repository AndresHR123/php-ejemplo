function iniciarSesion() {
    // Obtener los valores de usuario y contraseña del formulario
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Crear objeto con los datos a enviar
    let datos = {
        username: username,
        password: password
    };

    // Realizar petición AJAX para iniciar sesión
    $.ajax({
        url: "login2.php", // URL del archivo PHP que maneja la autenticación
        type: "POST",
        data: datos,
        dataType: "json", // Tipo de datos que se espera recibir del servidor
        success: function(response) {
            // Manejar la respuesta del servidor
            if (response.status === "success") {
                alert("¡Sesión iniciada correctamente!");
                window.location.href = "trabajo-tareas-interfaz.php"; // Redirigir a la página de trabajo
            } else {
                alert(response.message); // Mostrar mensaje de error si falla la autenticación
            }
        },
        error: function(xhr, status, error) {
            alert("Hubo un error al iniciar sesión.");
            console.error(error);
        }
    });
}