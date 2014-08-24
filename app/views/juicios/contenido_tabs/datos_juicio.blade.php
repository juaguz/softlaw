<div class="row">
    <div class ="col-md-6">
        <table class="table table-bordered table-responsive box box-success">
            <tr>
                <th>Partes</th><td>{{ $juicio->partes }}</td>
            </tr>
            <tr>
                <th>Fuero</th><td>{{ $juicio->getFuero->descripcion }}</td>
            </tr>
            <tr>
                <th>Juzgado</th><td>{{ $juicio->getJuzgado->descripcion }}</td>
            </tr>
            <tr>
                <th>Piso</th><td>{{ $juicio->piso }}</td>
            </tr>
        </table>
    </div>
    <div class ="col-md-6">
        <table class="table table-bordered table-responsive box box-success">
            <tr>
                <th>Nro de Expediente</th><td>{{ $juicio->nro_expediente }}</td>
            </tr>
            <tr>
                <th>Depto Judicial</th><td>{{ $juicio->getDeptoJud->descripcion }}</td>
            </tr>
            <tr>
                <th>Etapa</th><td>{{ $juicio->getEtapa->descripcion }}</td>
            </tr>
            <tr>
                <th>Carpeta</th><td>{{ $juicio->carp }}</td>
            </tr>

        </table>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-responsive box box-success">
            <thead>
                <tr>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $juicio->observaciones }}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-responsive box box-danger">
            <thead>
            <tr>
                <th>Fechas de Caducidades</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tr>
                <td>{{ $juicio->observaciones }}</td>
                <td><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a></td>
            </tr>

        </table>
        <a class="btn btn-default"> Cargar Fecha de Caducidad </a>
    </div>


</div>