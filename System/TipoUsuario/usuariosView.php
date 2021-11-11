<?php
echo '<table class="table table-hover">
    <tr>
        <th>Cuenta</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>E-mail</th>
        <th>id_tipo_usuario</th>
        <th>id_carrera</th>
    </tr>';

foreach ($relacion as $registro) {
    echo "<tr>";
    echo "<td>" . $registro['id_usuario'] . "</td>";
    echo "<td>" . $registro['nombre'] . "</td>";
    echo "<td>" . $registro['apellidos'] . "</td>";
    echo "<td>" . $registro['email'] . "</td>";
    echo "<td>" . $registro['id_tipo_usuario'] . "</td>";
    echo "<td>" . $registro['id_carerra'] . "</td>";
    echo "</tr>";
}

echo "</table>";
        //mysqli_close($conexion);
?>