<?php

namespace Dao\Clientes;

use Dao\Table;

class Clientes extends Table
{
    public static function obtenerClientes(): array
    {
        $sqlstr = "SELECT * from clientes;";
        return  self::obtenerRegistros($sqlstr, []);
    }
}
