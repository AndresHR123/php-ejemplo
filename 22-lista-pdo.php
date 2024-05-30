<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    
    <center><h1>Busqueda de Pacientes</h1>
    </center>
    <table style="border: 1px solid black;">
    <form action="22.1-consulta-pdo.php" method="GET">
    <label for="nombre">NOPMBRE O APELLIDO </label>
    <input type="text" name="search_query" placeholder="Buscar por nombre..."><br>
    
    <label id="tos" name="tos">Tos</label>
    <input type="checkbox" for="tos">
    <label id="fiebre" name="fiebre">fiebre</label>
    <input type="checkbox" for="fiebre">
    <label id="Disnea" name="Disnea">fiebre</label>
    <input type="checkbox" for="Disnea">
    <button type="submit">Buscar</button>

    <form action="23.1-consulta-pdo.php" method="post">
    <input type="submit" value="Ir a otra interfaz">
    
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>
        
    </table>
    </form>
</body>
</html>