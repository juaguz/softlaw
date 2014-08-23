<div class="modal fade" id="fueroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $action }} Fuero </h4>
            </div>
            <div class="modal-body">
                <div id="msg_fuero"></div>
                {{ Form::model(isset($fuero)? $fuero:null,isset($form_data_fuero)? $form_data_fuero : array("method"=>"POST","route"=>"fueros.store","data-remote","id"=>"fueroFrm")) }}
                {{ Form::label('descripcion','Nombre del Fuero') }}
                {{ Form::text( 'descripcion',null,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar »</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>