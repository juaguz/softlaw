<div class="modal fade" id="audienciasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Audiencia</h4>
            </div>
            <div class="modal-body">
                <div id="msg_audiencia"></div>
                {{ Form::model(isset($audiencia) ? $audiencia:null,isset($form_data_tarea) ? $form_data_tarea:array("method"=>"POST","route"=>"audiencias.store","data-remote","id"=>"audienciaFrm")) }}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('fecha', 'Fecha') }}
                        {{ Form::text( 'fecha', null, array('placeholder' => '', 'class' =>'form-control datepicker','required'=>'required')) }}
                    </div>
                    <div class="col-md-4 input-group bootstrap-timepicker">
                        {{ Form::label('hora', 'Hora') }}
                        {{ Form::text( 'hora', null, array('placeholder' => '', 'class' =>'form-control timepicker','required'=>'required')) }}
                    </div>
                </div>
                {{ Form::label('descripcion', 'Descripcion') }}
                {{ Form::textarea( 'descripcion',null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar »</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>