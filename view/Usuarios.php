<?php
//https://getbootstrap.com/docs/4.6/content/tables/
    echo '<table class="table table-striped table-bordered table-info table-hover">
    <tr>
        <th>Clave</th>
        <th>Tipo De Usuario</th>
    </tr>
    ';

    foreach($relacion as $valor){
        echo "<tr>";
        echo "<td>".$valor['id_tipo_usuario']."</td>";
        echo "<td>".$valor['descripcion']."</td>";
        echo "</tr>";
    }
    echo '</table>';
    //mysqli_close($conexion);
?>