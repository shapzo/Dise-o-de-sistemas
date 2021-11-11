<?php
echo '<table class="table table-hover">
    <tr>
        <th>Clave</th>
        <th>Tipo de usuario</th>
    </tr>';

foreach ($relacion as $registro) {
    echo "<tr>";
    echo "<td>" . $valor['id_tipo_usuario'] . "</td>";
    echo "<td>" . $valor['descripcion'] . "</td>";
    echo "</tr>";
}

echo "</table>";
        //mysqli_close($conexion);
?>