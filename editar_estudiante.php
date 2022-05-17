<?php
?>
<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["dni"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="dni" value="<?php echo $_GET["dni"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input value="<?php echo $estudiante->apellido ?>" name="apellido" required type="text" id="apellido" class="form-control" placeholder="apellido">
            </div>
            <div class="form-group">
                <label for="DNI">DNI</label>
                <input value="<?php echo $estudiante->dni ?>" name="dni" required type="num" id="dni" class="form-control" placeholder="DNI">
            </div>
            <div class="form-group">
                <label for="CUIL">CUIL</label>
                <input value="<?php echo $estudiante->cuil ?>" name="cuil" required type="num" id="cuil" class="form-control" placeholder="CUIL">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio</label>
                <input value="<?php echo $estudiante->domicilio ?>" name="domicilio" required type="text" id="domicilio" class="form-control" placeholder="Domicilio">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input value="<?php echo $estudiante->telefono ?>" name="telefono" required type="num" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $estudiante->email ?>" name="email" required type="text" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>