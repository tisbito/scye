
<h1>Clientes Registrados:</h1>
    <p>

    </p>
        <table border="1px">
        <thead>
            <tr>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Correo</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Núm. Empleados</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
                @foreach($array_clientes as $item)

        <tbody>
            <tr>
                <td>{{ $item-> identificacion }}</td>
                <td>{{ $item-> nombreCliente }}</td>
                <td>{{ $item-> direccion }}</td>
                <td>{{ $item-> correo }}</td>
                <td>{{ $item-> ciudad }}</td>
                <td>{{ $item-> telefono }}</td>
                <td>{{ $item-> numEmpleados }}</td>
                <td> <a href="{{ route('Clientes.edit', $item->id) }}">Ver</a> </td>
            </tr>
                @endforeach
        </tbody>
        </table>