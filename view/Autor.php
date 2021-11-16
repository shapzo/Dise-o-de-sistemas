<?php
    echo '<table class="table table-striped table-hover">
    <tr>
        <th>Clave Material</th>
        <th>Clave Autor</th>
        <th>Nombre Autor</th>
        <th>Apellido</th>
    </tr>';

    foreach ($autores as $autor) {
        # codigo...
        echo "<tr>";
        echo "<td>".$autor['id_material']."</td>";
        echo "<td>".$autor['id_autor']."</td>";
        echo "<td>".$autor['nombre']."</td>";
        echo '<td>"'.$autor['apellido'].'"</td>';
        echo "</tr>";
    }
    echo "</table>";
    //mysqli_close($conexion);
?>