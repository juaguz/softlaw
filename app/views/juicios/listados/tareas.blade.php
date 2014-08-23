@foreach ($tareas as $tarea)
{{ dd($tarea);}}
<tr>
    <td>{{ $tarea->created_at }}</td>
    <td>{{ $tarea->fecha_vto  }}</td>
    <td>{{ $tarea->hora_vto  }}</td>
    <td>{{ $tarea->tipoTarea }}</td>
    <td>{{ $tarea->descripcion }}</td>
    <td>{{ $tarea->user->nombre }} {{ $tarea->user->apellido }} </td>
    <td>
        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
        <a href="#" class="btn btn-danger"><i class="fa fa-check-square"></i>Marcar como Realizada</a>
    </td>
</tr>
@endforeach