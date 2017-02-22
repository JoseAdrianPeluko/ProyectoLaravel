
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Titulo variable</h4>
            </div>
            <div class="modal-body">
                {{ Form::model(['route' => 'table.update','method' => 'put']) }}
                <div class="form-group">
                {{ Form::label('plazas', 'Nº de plazas que dispone la mesa ') }}
                {{Form::selectRange('plazas', 2, 8)}}
                </div>
                <div class="form-group">
                {{ Form::label('reservado', 'disponible la mesa? ') }}
                {{Form::checkbox('reservado')}}
              
                </div>
                
            </div>
            <div class="modal-footer text-center">
                {{ Form::submit("Enviar",['class' => 'btn btn-primary'])}}    
            </div>
{{ Form::close() }}
        </div>

    </div>
</div>