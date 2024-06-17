<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Tareas del Equipo</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div>
    <h2>Registrar Tareas del EQUIPO</h2>    
    <form action="trabajo-registrar.php" method="POST">
        <label for="tarea">Tarea:</label><br>
        <input type="text" id="tarea" name="tarea" required ><br><br>
        <label for="realizada">¿Realizada?</label>
        <input type="checkbox" id="realizada" name="realizada" value="1"><br><br>
        <input type="submit" value="Registrar Tarea">
    </form>
    </div>

    <h3>BUSCAR TAREAS</h3> 
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <button type="button" onclick="buscarTareas();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>completado</td>
            <td>Accion</td>
            <td>Accion</td>            
        </tr>          
    </table>

    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="trabajo-ajax.js"></script>

    <form action="generar_informe.php" method="post">
        <input type="submit" value="Generar Informe en PDF">
    </form>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">ACTUALIZAR</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="nombre2" class="form-label">Nombre de la Tarea:</label>
                <input type="text" class="form-control" id="nombre2" name="nombre2">
                
                <label for="completada2" class="form-label">¿Completada?</label>
                <select class="form-select" id="completada2" name="completada2">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>

                <input type="hidden" id="id" name="id">
                
                <button type="button" class="btn btn-primary" onclick="actualizar();">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">ELIMINAR</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="nombre3" class="form-label">Nombre de la Tarea:</label>
                <input type="text" class="form-control" id="nombre3" name="nombre3">
                
                <input type="hidden" id="id2" name="id">
                
                <button type="button" class="btn btn-primary" onclick="ejecutar();">confirmar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>