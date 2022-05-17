<?php
?>
<?php 
include("conexion.php");
include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiante</h1>
        <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="Legajo">Legajo</label>
                <input name="Legajo" required type="num" id="legajo" class="form-control" placeholder="Legajo">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" required type="text" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input name="dni" required type="num" id="dni" class="form-control" placeholder="DNI">
            </div>
            <div class="form-group">
                <label for="cuil">CUIL</label>
                <input name="cuil" required type="num" id="cuil" class="form-control" placeholder="CUIL">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio</label>
                <input name="domicilio" required type="text" id="domicilio" class="form-control" placeholder="Domicilio">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input name="telefono" required type="num" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" required type="text" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
            <div>
            </div>
        </form>
    </div>
</div>
<?php 
include "pie.php" 
?>