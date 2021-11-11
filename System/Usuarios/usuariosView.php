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
    echo "<td>" . $valor['id_usuario'] . "</td>";
    echo "<td>" . $valor['nombre'] . "</td>";
    echo "<td>" . $valor['apellidos'] . "</td>";
    echo "<td>" . $valor['email'] . "</td>";
    echo "<td>" . $valor['id_tipo_usuario'] . "</td>";
    echo "<td>" . $valor['id_carerra'] . "</td>";
    echo "</tr>";
}

echo "</table>";
        //mysqli_close($conexion);
?>