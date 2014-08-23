@extends('master')
@section('titulo')
Listado de Juicios
@stop
@section('breadcrumb')
<li><a href="#">Juicios</a></li>
<li class="active">Listados de  Juicios</li>
@stop

@section('container')
<table class="table" id="">
    <thead>
        <th>Partes</th>
        <th>Nro de Expediente</th>
        <th>Proxima Fecha de Caducidad</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($juicios as $juicio)
            <tr>
                <td>{{ $juicio->partes  }}</td>
                <td>{{ $juicio->nro_expediente  }}</td>
                <td>{{ $juicio->getCaducidades->fecha or ' '  }}</td>
                <td><a href="{{ route('juicios.show',$juicio->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> Ver</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('scripts')
    {{ HTML::script('assets/js/juicios.js') }}
@stop