<div id="modal_entidad" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-consulta="{{ action('Admin\configuracion\EntidadesUSDController@edit') }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Entidad USD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => ['entidad.add'],  'method' => 'post', 'autocomplete' =>'off' ]) !!}
            <div class="modal-body">
                {{ Form::hidden('id', 0, ['class'=>'modal_registro_entidad_id'] ) }}
                
                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">{{'Nombre'}}</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required autofocus="true" maxlength="150">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">{{'Referencia'}}</label>
                    <input type="text" name="referencia" class="form-control" id="referencia" placeholder="Referencia" onkeypress = 'return SoloNumeros(event)' required maxlength="11">
                </div>
                 <div class="col-md-12 mb-3">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('status',$status, null, [
                        'placeholder' => 'Seleccione', 
                        'class' => 'pickerSelectClass',
                        'id' => 'status',
                        'required'=>'required'
                        ]) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mt-1 btn-transition btn btn-outline-secondary" data-dismiss="modal">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                     <i class="ti-back-left"></i>
                    </span>{{'Volver'}}
                </button>
                <button type="submit" class="mt-1 btn-transition btn btn-outline-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                     <i class="ti-save"></i>
                    </span>{{'Guardar'}}
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>