<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicaciones web</title>
</head>
<body>   
    <h1>Actividad 2</h1>    
    <form action="interface.php" method="post">
        <input type="text" name="limite" placeholder="Ingrese n" required>
        <select name="orden" id="orden">
            <option value="Ordenar">Ordenar el arreglo</option>
            <option value="NoOrdenar">No ordenar el arreglo</option>
        </select>        
        <input type="submit" value="Enviar">

    </form>
</body>
</html>