<div class="modal fade" id="tareasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Tarea</h4>
            </div>
            <div class="modal-body">
                <div id="msg_tarea"></div>
                {{ Form::model(isset($tarea) ? $tarea:null,isset($form_data_tarea) ? $form_data_tarea:array("method"=>"POST","route"=>"tareas.store","data-remote","id"=>"tareaFrm")) }}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('fecha_vto', 'Fecha Vto') }}
                        {{ Form::text( 'fecha_vto', null, array('placeholder' => '', 'class' =>'form-control datepicker','required'=>'required')) }}
                    </div>
                    <div class="col-md-4 input-group bootstrap-timepicker">
                        {{ Form::label('hora_vto', 'Hora Vto') }}
                        {{ Form::text( 'hora_vto', null, array('placeholder' => '', 'class' =>'form-control timepicker','required'=>'required')) }}


                    </div>
                </div>

                {{ Form::label('id_tipo_tarea', 'Tipo de Tarea') }}
                {{ Form::select('id_tipo_tarea',$tareasCombo,null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
                {{ Form::label('id_usuario_asignado', 'Asignar a') }}
                {{ Form::select( 'id_usuario_asignado',$usuariosCombo,null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
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