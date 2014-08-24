@foreach ($movimientos as $movimiento)
<tr>
    <td>{{ $movimiento->fecha }}</td>
    <td>{{ $movimiento->descripcion }}</td>
    <td>
        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
    </td>
</tr>
@endforeach