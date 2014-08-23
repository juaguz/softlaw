<div class="modal fade" id="dptoJudicialModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Depto Judicial</h4>
            </div>
            <div class="modal-body">
                <div id="msg_deptoJudicial"></div>
                {{ Form::model(isset($deptoJudicial) ? $deptoJudicial:null,isset($form_data_dptoJud) ? $form_data_dptoJud:array("method"=>"POST","route"=>"deptoJudicial.store","data-remote","id"=>"deptoJudicialFrm")) }}
                {{ Form::label('descripcion', 'Nombre del Dpto Judicial') }}
                {{ Form::text( 'descripcion', null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar »</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>