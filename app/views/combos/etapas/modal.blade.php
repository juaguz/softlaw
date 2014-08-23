<div class="modal fade" id="etapaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Etapa </h4>
            </div>
            <div class="modal-body">
                <div id="msg_etapa"></div>
                {{ Form::model(isset($etapas)? $etapas:null,isset($form_data_etapa) ? $form_data_etapa : array("method"=>"POST","route"=>"etapas.store","data-remote","id"=>"etapasFrm"))  }}
                {{ Form::label('descripcion', 'Nombre de la Etapa') }}
                {{ Form::text( 'descripcion', null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar »</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>