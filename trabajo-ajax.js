function buscarTareas() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"buscar_tarea-ajax.php",
        type : "post",
        data : datos,
        success : function(result) {
            debugger;
            console.log(result);
            const tareas=$.parseJSON(result);
            tareas.forEach(item => {
                agregarFilas("#tabla",item);
            });
 
        }
    })
 
 
    return;
}

function agregarFilas(id, tarea) {
    // Definir el símbolo según el valor de tarea.completada
    let completadaSymbol = tarea.completada == "1" ? "✔️" : "❌";

    // Construir el HTML de la fila con el símbolo correspondiente
    const html =
        "<tr>" +
        "<td>" + tarea.id + "</td>" +
        "<td>" + tarea.nombre + "</td>" +
        "<td>" + completadaSymbol + "</td>" + // Mostrar el símbolo en lugar de 1 o 0
        "<td><button type='button' onclick=editar('" + tarea.id + "','" + tarea.nombre + "','" + tarea.completada + "');>Editar</button></td>" +
        "<td><button type='button' onclick=eliminar('" + tarea.id + "','" + tarea.nombre + "');>Eliminar</button></td>" +
        "</tr>";

    // Insertar la fila en la tabla
    $(id + " tr:last").after(html);
}
//////
function editar(id, nombre, completada) {
    $('#exampleModal').modal('show');    
    $("#nombre2").val(nombre);
    $("#completada2").val(completada);
    $("#id").val(id);
}


function actualizar() {
    // Crear objeto con los datos a enviar
    const $id = $("#id").val();
    const $nombre = $("#nombre2").val();
    const $completada = $("#completada2").val();
   
    let datos ={
        id : $id,
        nombre : $nombre,
        completada : $completada
    };

    // Realizar petición AJAX para actualizar la tarea
    $.ajax({
        url: "editar_tarea-ajax.php",
        type: "POST",
        data: datos,
        success: function(result) {
            // Manejar la respuesta del servidor, si es necesario
            console.log(result);
        },
    })

    return;
}
////////////////
function cancelar() {
    $('#exampleModal').modal('hide');    
}
///////////////////////
function eliminar(id, nombre) {
    $('#exampleModal2').modal('show');    
    $("#nombre3").val(nombre);
    $("#id2").val(id);
}



function ejecutar() {
    const $id = $("#id2").val();
    const $nombre = $("#nombre3").val();
   
    let datos ={
        nombre : $nombre,
        id : $id
    };

    $.ajax({
        url: "eliminar_tarea-ajax.php",
        type: "POST",
        data: datos,
        success: function(result) {
            alert(result); // Mostrar mensaje de éxito o error
            // Actualizar la vista de las tareas si es necesario
            // Por ejemplo, recargar la página o eliminar la fila de la tabla
        },
    });
}