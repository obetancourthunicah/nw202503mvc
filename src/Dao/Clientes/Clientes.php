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
    public static function obtenerClientePorCodigo(string $codigo): array
    {
        $sqlstr = "SELECT * from clientes where codigo=:codigo;";
        return self::obtenerUnRegistro($sqlstr, ["codigo" => $codigo]);
    }
}
