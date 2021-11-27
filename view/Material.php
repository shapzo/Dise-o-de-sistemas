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
                        <th id="th">Id de material</th>
                        <th id="th">Titulo</th>
                        
                        <th id="th">Isbn</th>
                        <th id="th">pagina web</th>
                        <!--<th id="th">Archivo</th>-->
                        <th id="th">Licencia</th>
                    </tr>
                </thead>
                <tbody id="body">
                    <?php
                    foreach ($menus as $menu) {
                        echo "<tr>";
                        echo "<td>" . $menu['id_material'] . "</td>";
                        echo "<td>" . $menu['titulo'] . "</td>";
                        
                        echo "<td>" . $menu['isbn_issn'] . "</td>";
                        echo "<td>" . $menu['sitio_web'] . "</td>";
                        /*echo "<td>" . $menu['archivo'] . "</td>";*/
                        echo "<td>" . $menu['licencia'] . "</td>";
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