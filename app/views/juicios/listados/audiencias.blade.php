@foreach ($audiencias as $audiencia)
<tr>
    <td>{{ $audiencia->created_at }}</td>
    <td>{{ $audiencia->fecha  }}</td>
    <td>{{ $audiencia->hora  }}</td>
    <td>{{ $audiencia->descripcion  }}</td>
    <td>
        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
    </td>
</tr>
@endforeach