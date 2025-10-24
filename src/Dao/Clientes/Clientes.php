<?php

namespace Dao\Clientes;

use Dao\Table;

class Clientes extends Table
{
    public static function obtenerClientes(): array
    {
        return [
            [
                "codigo" => "123456",
                "nombre" => "Orlando Betancourth",
                "direccion" => "En algun lugar de la galaxia",
                "telefono" => "0000-0000",
                "correo" => "obetancourthunicah@gmail.com",
                "estado" => "ACT",
                "evaluacion" => 70
            ],
            [
                "codigo" => "123457",
                "nombre" => "Mengano Betancourth",
                "direccion" => "En algun lugar de la galaxia 2",
                "telefono" => "0000-0002",
                "correo" => "uncorreo@gmail.com",
                "estado" => "ACT",
                "evaluacion" => 90
            ],
            [
                "codigo" => "123458",
                "nombre" => "Julio del Castillo",
                "direccion" => "En algun lugar de la galaxia 3",
                "telefono" => "0000-0003",
                "correo" => "otrocorreo@gmail.com",
                "estado" => "INA",
                "evaluacion" => 10
            ]
        ];
    }
}
