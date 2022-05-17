<?php
?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Legajo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>CUIL</th>
                    <th>Domicilio</th>
                    <th>Observaciones</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["legajo"] ?></td>
                        <td><?php echo $estudiante["nombre"] ?></td>
                        <td><?php echo $estudiante["apellido"] ?></td>
                        <td><?php echo $estudiante["dni"] ?></td>
                        <td><?php echo $estudiante["cuil"] ?></td>
                        <td><?php echo $estudiante["domicilio"] ?></td>
                        <td><?php echo $estudiante["observaciones"] ?></td>
                        <td><?php echo $estudiante["telefono"] ?></td>
                        <td><?php echo $estudiante["correoelec"] ?></td>

                        <td>
                            <a href="editar_estudiante.php?id=<?php echo $estudiante["dni"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_estudiante.php?id=<?php echo $estudiante["dni"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";
