<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
    include('../includes/cabeceras3.php');
    ?>
</head>

<body>
    <div class="divs">
        <div align="left">
            <img class="img-fluid rounded girls animacionLogo" loading="lazy" src="../img/table1.png" width="60%">
        </div>
        <div>
            <table class="table table-striped table-hover">
                <thead class="thed">
                    <tr id="tr">
                        <th id="th">Clave</th>
                        <th id="th">Clave Autor</th>
                        <th id="th">Nombre autor</th>
                        <th id="th">Apellido</th>
                    </tr>
                </thead>
                <tbody id="body">
                    <?php
                    foreach ($menus as $menu) {
                        echo "<tr>";
        echo "<td>".$autor['id_material']."</td>";
        echo "<td>".$autor['id_autor']."</td>";
        echo "<td>".$autor['nombre']."</td>";
        echo '<td>"'.$autor['apellido'].'"</td>';
        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <div align="right">
            <img class="img-fluid rounded girls animacionLogo" loading="lazy" src="../img/table1.png" width="60%">
        </div>

    </div>

</body>