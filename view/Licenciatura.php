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
            <img class="img-fluid rounded girls" loading="lazy" src="../img/table1.png" width="60%">
        </div>
        <div>
            <table class="table table-striped table-hover">
                <thead class="thed">
                    <tr id="tr">
                        <th id="th">Clave</th>
                        <th id="th">Describcion</th>
                    </tr>
                </thead>
                <tbody id="body">
                    <?php
                    foreach ($menus as $menu) {
                        echo "<tr>";
                        echo "<td>" . $menu['id_carrera'] . "</td>";
                        echo "<td>" . $menu['descripcion'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <div align="right">
            <img class="img-fluid rounded girls" loading="lazy" src="../img/table1.png" width="60%">
        </div>

    </div>

</body>