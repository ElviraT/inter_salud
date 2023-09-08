<div id="modal_pais" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar País</h5>
                <button type="button" class="btn btn-ligth close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => ['countries.store'], 'method' => 'post', 'autocomplete' => 'off']) !!}
            <div class="modal-body">
                {{ Form::hidden('id', 0, ['class' => 'modal_registro_pais_id']) }}

                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">{{ __('Name') }}</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
                        required onkeypress='return soloLetras(event)' maxlength="128">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mt-1 btn-transition btn btn-outline-secondary" data-dismiss="modal">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="ti-back-left"></i>
                    </span>{{ 'Volver' }}
                </button>
                <button type="submit" class="mt-1 btn-transition btn btn-outline-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="ti-save"></i>
                    </span>{{ 'Guardar' }}
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
