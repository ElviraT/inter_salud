<div class="col-12 m-2">
    <h3>{{ 'Agregar Límite de Registro de Usuarios' }}</h3>
</div>

<div class="row" style="padding: 30px;">
    <div class="form-group">
        <div class="col-md-12">
            <div class="row">

                <input type="hidden" name="id" value="{{ isset($limit) ? $limit->id : null }}">
                <div class="col-md-6 mb-3">
                    <label>{{ 'Administrativo' }}</label>
                    <input type="text" name="administrativo" class="form-control" id="administrativo"
                        placeholder="administrativo" value="{{ isset($limit) ? $limit->administrativo : null }}"
                        required onkeypress='return SoloNumeros(event)' autofocus="true">
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Medico' }}</label>
                    <input type="text" name="medico" class="form-control" id="medico" placeholder="Medico"
                        value="{{ isset($limit) ? $limit->medico : null }}" required
                        onkeypress='return SoloNumeros(event)'>
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Asistente' }}</label>
                    <input type="text" name="asistente" class="form-control" id="asistente" placeholder="Asistente"
                        value="{{ isset($limit) ? $limit->asistente : null }}" required
                        onkeypress='return SoloNumeros(event)'>
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Paciente' }}</label>
                    <input type="text" name="paciente" class="form-control" id="paciente" placeholder="Paciente"
                        value="{{ isset($limit) ? $limit->paciente : null }}" required
                        onkeypress='return SoloNumeros(event)'>
                </div>
                <div class="col-md-6 mb-3">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('status', $status, isset($limit) ? $limit->status : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass form-control',
                        'id' => 'status',
                        'required' => 'required',
                    ]) !!}

                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <a href="{{ route('limits.index') }}" class="mt-1 btn btn-outline-secondary">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="ri-arrow-go-back-line" aria-hidden="true"></i>
            </span>{{ 'Volver' }}
        </a>
        <button type="submit" class="mt-1 btn-transition btn btn-outline-primary">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="ri-save-3-line"></i>
            </span>{{ 'Guardar' }}
        </button>
    </div>
</div>
