<?php
    echo '<table class="table table-striped table-bordered table-info table-hover">
    <tr>
        <th>Clave</th>
        <th>Describcion</th>
    </tr>';

    foreach ($menus as $menu) {
        # codigo...
        echo "<tr>";
        echo "<td>".$menu['id_licenciatura']."</td>";
        echo "<td>".$menu['describcion']."</td>";
        echo "</tr>";

    }
    echo "</table>";
    //mysqli_close($conexion);
?>
