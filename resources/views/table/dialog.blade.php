 <!--Modal--> 
 @if(empty($table))
<div class="modal fade" id="myModal" role="dialog">
@else
<div class="modal fade" id="myModal{{$table->id}}" role="dialog">
@endif
    <div class="modal-dialog">

         <!--Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="title">Editando Mesa</h4>
            </div>
            <div class="modal-body">
               
                @if(empty($table))
                                {{ Form::model(null, ['route' => ['table.update',0],'method' => 'put']) }}
                @else
                {{ Form::model($table, ['route' => ['table.update', $table->id],'method' => 'put']) }}
                @endif
                <div class="form-group">
                {{ Form::label('plaza', 'Nº de plazas que dispone la mesa ') }}
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

<!--<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">The Sun Also Rises</h4>
      </div>
      <div class="modal-body">
        <p>
        Please confirm you would like to add 
        <b><span id="fav-title">The Sun Also Rises</span></b> 
        to your favorites list.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span>
      </div>
    </div>
  </div>
</div>-->