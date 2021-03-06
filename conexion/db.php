<?php
class claseBD {


    private $servidor   = 'sql504.main-hosting.eu';
    private $usuario    = 'u540256914_bmxbo';
    private $pass       = 'Bielito1234';
    private $bd         = 'u540256914_projectebmxbo';
    private $con;

    // se carga en el constructor la conexión
    function __construct() {
        $this->iniciarConexion();
    }

    // funcion que creará conexión con mysqli_connect y se guarda en variable $con
    function iniciarConexion() {
        $this->con = mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->pass,
            $this->bd
        );

        if ($this->con) {
            mysqli_set_charset($this->con,'utf8');
        } else {
            die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
        }
    }

    // para utilizar la conexión en cualquier archivo y poder hacer las consultas
    function obtenerConexion() {
        return $this->con;
    }
}
?>
