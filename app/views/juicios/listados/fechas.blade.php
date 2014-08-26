@foreach ($fechas as $fecha)
<tr>
    <td>{{ $fecha->fecha }}</td>
    <td>
        <a href="#" class="btn btn-default"><i class="fa fa-trash-o"></i> Eliminar</a>
    </td>
</tr>
@endforeach