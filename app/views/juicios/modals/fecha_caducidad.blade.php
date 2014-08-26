<div class="modal fade" id="fechaCaducidadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Fecha de Caducidad</h4>
            </div>
            <div class="modal-body">
                <div id="msg_fechaCaducidad"></div>
                {{ Form::model(isset($audiencia) ? $audiencia:null,isset($form_data_tarea) ? $form_data_tarea:array("method"=>"POST","route"=>"fechas_caducidad.store","data-remote","id"=>"fechaCaducidadFrm")) }}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('fecha', 'Fecha') }}
                        {{ Form::text( 'fecha', null, array('placeholder' => '', 'class' =>'form-control datepicker','required'=>'required')) }}
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar »</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>