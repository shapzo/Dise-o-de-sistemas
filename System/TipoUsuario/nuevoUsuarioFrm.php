<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php require('../includes/cabeceras.php'); ?>
</head>

<body>
    <?php
     $activa='nuevoUsuarioFrm.php">Nuevo Usuario <span class="sr-only">(current)</span>';
     global $activa;
     require('../includes/menus.php'); 
     ?>
    <h1>Nuevo Usuario</h1>
    <?php
            require('../includes/confbd.php');
            global $conexion;
            $sql1="SELECT * FROM tipousuario ORDER BY id_tipo_usuario ASC";
            $ejecucionTipoUsuario=@mysqli_query($conexion,$sql1);
            $opcionTipoUsuario="";
            while ($registro = @mysqli_fetch_array($ejecucionTipoUsuario,MYSQLI_ASSOC)) {
                $opcionTipoUsuario.="<option value=".$registro['id_tipo_usuario'].">".$registro['descripcion']."</option>";
            }   
    ?>

    <?php
            require('../includes/confbd.php');
            global $conexion;
            $sql2="SELECT * FROM carrera ORDER BY id_carrera ASC";
            $ejecucionCarrera=@mysqli_query($conexion,$sql2);
            $opcionCarrera="";
            while ($registro2 = @mysqli_fetch_array($ejecucionCarrera,MYSQLI_ASSOC)) {
                $opcionCarrera.="<option value=".$registro2['id_carrera'].">".$registro2['descripcion']."</option>";
            }   
    ?>
    <form action="../Controllers/usuariosController.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_usuario">Clave</label>
            <input type="text" class="form-control" name="id_usuario" id="id_usuario">
        </div>
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label class="form-label" for="titulo">Apellido</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos">
        </div>
        <div class="form-group">
            <label class="form-label" for="nombre">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="form-label" for="nombre">Contrasenia</label>
            <input type="text" class="form-control" name="contrasena" id="contrasena">
        </div>
        <div class="form-group">
            <label class="form-label" for="id_tipo_usuario">Tipo de usuario</label>
            <select class="form-select" id="id_tipo_usuario" name="id_tipo_usuario">
                <?php
                        echo $opcionTipoUsuario;
                    ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="id_carrera">Carrera</label>
            <select class="form-select" id="id_carrera" name="id_carrera">
                <?php
                            echo $opcionCarrera;
                        ?>
            </select>
        </div>
        <input type="hidden" name="tipoMovimiento" value="nuevo">
        <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
        <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
        <!--button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Submit</button>-->
    </form>
</body>

</html>