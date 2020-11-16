<?php

class BaseDatos
{
    public $usuarioBD = "root";
    public $passwordBD = "";

    public function _construct()
    {
    }

    public function conectarBD()
    {

        try {
            $datosBD = "mysql:host=localhost;dbname=tiendaweb1";
            $conexionBD = new PDO($datosBD, $this->usuarioBD, $this->passwordBD);
            return ($conexionBD);

            
        } catch (PDOexception $error) {

            echo ($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();
        $insertarDatos = $conexionBD->prepare($consultaSQL);
        $resultado = $insertarDatos->execute();
        if ($resultado) {
            echo ("usuario agregado");
        } else {
            echo ("error");
        }
    }
    public function consultarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();
        $consultarDatos = $conexionBD->prepare($consultaSQL);
        $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);
        $consultarDatos->execute();
        return ($consultarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();
        $eliminarDatos = $conexionBD->prepare($consultaSQL);
        $resultado =  $eliminarDatos->execute();
        if ($resultado) {
            echo ("usuario eliminado");
        } else
            echo ("error");
    }
    public function editarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();
        $editarDatos = $conexionBD->prepare($consultaSQL);
        $resultado = $editarDatos->execute();
        if ($resultado) {
            echo ("usuario Editado");
        } else {
            echo ("error");
        }
    }
}
