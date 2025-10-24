<section class="py-4 px-4 depth-2">
    <h2>Listado de Clientes</h2>
</section>
<section class="WWList">
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            {{foreach clientes}}
            <tr>
                <td>{{codigo}}</td>
                <td>{{nombre}}</td>
                <td>{{direccion}}</td>
                <td>{{telefono}}</td>
                <td>{{correo}}</td>
                <td>{{estado}}</td>
                <td>{{grade}} | {{nota}}</td>
            </tr>
            {{endfor clientes}}
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="right">
                    Registros: {{total}}
                </td>
                <td>Nota Total: {{totalNota}}</td>
            </tr>
        </tfoot>
    </table>
</section>