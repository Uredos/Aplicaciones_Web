<html>
<?php
    
    $limite = $_POST['limite'];
    $orden = $_POST['orden'];
    
    require("datos.php");
    $dato = new Datos($limite);
    echo "<h1>Actividad 2</h1>";

    $dato->muestra();echo "<br>";     
    if ($orden == "Ordenar") {
        $dato->ordena();echo "<br><br>";
    }    
    $dato->medvar();echo "<br><br>";
    $dato->cuenta();echo "<br><br>";


    echo "<a href='index.html'>Inicio</a>";
?>
</html>