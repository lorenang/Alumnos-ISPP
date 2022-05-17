<?php
?>
<?php
include_once "conexion.php";
class Estudiante {
    private $legajo, $nombre, $apellido, $dni, $cuil, $domicilio, $observaciones, $telefono, $correoelec;
    
    public function __construct($legajo, $nombre, $apellido, $dni, $cuil, $domicilio, $observaciones, $telefono, $correoelec = null) {
        $this->legajo = $legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->cuil = $cuil;
        $this->domicilio = $domicilio;
        $this->observaciones = $observaciones;
        $this->telefono = $telefono;
        $this->correoelec = $correoelec;
    }

    public function guardar() {
        global $conn;
        $sentencia = $conn->prepare("INSERT INTO estudiantes
            (legajo, nombre, apellido, dni, cuil, domicilio, observaciones, telefono, correoelec)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssi", 
                                    $this->legajo, 
                                    $this->nombre,
                                    $this->apellido,
                                    $this->dni, 
                                    $this->cuil, 
                                    $this->domicilio, 
                                    $this->observaciones, 
                                    $this->telefono, 
                                    $this->correoelec);
        $sentencia->execute();
    }

    public static function obtener() {
        global $conn;
        if ($execquery = $conn->query("SELECT * FROM estudiantes")) {
            $result = $execquery->fetch_all(MYSQLI_ASSOC);
            return $result;
        }
    }

    public static function obtenerUno($dni) {
        global $conn;
        $sentencia = $conn->prepare("SELECT legajo, nombre, apellido, cuil, domicilio, observaciones, telefono, correoelec FROM estudiantes WHERE dni = ?");
        $sentencia->bind_param("dni", $dni);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }

    public function actualizar() {
        global $conn;
        $sentencia = $conn->prepare("update estudiantes set legajo = ?, nombre = ?, apellido = ?, dni = ?, cuil = ?, domicilio = ?, observaciones = ?, telefono = ?, correoelec = ?, where dni = ?");
        $sentencia->bind_param("ssi", $this->legajo, $this->nombre, $this->apellido, $this->dni, $this->cuil, $this->domicilio, $this->observaciones, $this->telefono, $this->correoelec);
        $sentencia->execute();
    }

    public static function eliminar($dni) {
        global $conn;
        $sentencia = $conn->prepare("DELETE FROM estudiantes WHERE dni = ?");
        $sentencia->bind_param("dni", $dni);
        $sentencia->execute();
    }
}
