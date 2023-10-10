<div class="form-group col-md-12">
    {!! Form::open([
        'route' => ['usersm.store'],
        'method' => 'post',
        'autocomplete' => 'off',
        'files' => true,
        'id' => 'registra_usuarioM',
    ]) !!}
    <input type="hidden" name="id" value="{{ isset($medico) ? $medico->id : null }}">
    <input type="hidden" name="idUser" value="{{ isset($medico) ? $medico->idUser : null }}">
    <input type="hidden" name="step" value="1">
    <div class="row">
        <div class="col-md-12 col-lg-8 p-2">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>{{ __('Name') }}</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombres"
                        autofocus onkeypress='return soloLetras(event)'
                        value="{{ isset($medico) ? $medico->Nombres_Medico : null }}" required maxlength="150">
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ __('Last Name') }}</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos"
                        onkeypress='return soloLetras(event)'
                        value="{{ isset($medico) ? $medico->Apellidos_Medicos : null }}" required maxlength="150">
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label>{{ 'Cedula' }}</label>
                    <div class="row">
                        <div class="col-md-4" style="padding-right: 0.5px !important">
                            {!! Form::select('idPrefix', $prefijo, isset($medico) ? $medico->Prefijo_CIDNI_id : null, [
                                'placeholder' => '...',
                                'class' => 'pickerSelectClass otro',
                                'id' => 'idPrefix',
                                'required' => 'required',
                            ]) !!}
                        </div>
                        <div class="col-md-8" style="padding-left: 0.5px !important">
                            <input type="text" class="form-control" name="dni" id="dni"
                                placeholder="Cedula" onkeypress='return SoloNumeros(event)'
                                value="{{ isset($medico) ? $medico->CIDNI : null }}" required maxlength="20">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Fecha de nacimiento' }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i data-feather="calendar" class="feather-icon"></i>
                            </span>
                        </div>
                        {!! Form::text('brithday', isset($medico) ? $medico->brithday : null, [
                            'id' => 'brithday',
                            'placeholder' => 'Y-M-D',
                            'class' => 'form-control pull-right datepicker',
                            'required' => 'required',
                        ]) !!}
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Registro MPPS' }}</label>
                    <input type="text" class="form-control" name="register" id="register"
                        placeholder="Registro MPPS"
                        value="{{ isset($medico) ? $medico->Registro_MPPS : null }}"required maxlength="30">
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Número del colegio de medicos' }}</label>
                    <input type="text" class="form-control" name="ncolegio" id="ncolegio"
                        placeholder="Número del colegio de medicos"
                        value="{{ isset($medico) ? $medico->Numero_Colegio_de_Medico : null }}" required
                        maxlength="50">
                </div>
                <div class="col-md-6 mb-3">
                    {!! Form::label('sexo', 'Sexo:') !!}
                    {!! Form::select('idSex', $sexo, isset($medico) ? $medico->Sexo_id : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass otro',
                        'id' => 'idSex',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Estado Civil' }}</label>
                    {!! Form::select('idMaritalState', $estadoC, isset($medico) ? $medico->Civil_id : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass otro',
                        'id' => 'idMaritalState',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ 'Lugar de Nacimiento' }}</label>
                    {!! Form::select('idCountry', $nacionalidad, isset($medico) ? $medico->Pais_id : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass otro',
                        'id' => 'idCountry',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ __('menu.State') }}:</label>
                    {!! Form::select('idState', $estado, isset($medico) ? $medico->id_Estado : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass',
                        'id' => 'idState',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ __('menu.Municipality') }}:</label>
                    {!! Form::select('idMunicipality', $municipio, isset($medico) ? $medico->id_Municipio : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass',
                        'id' => 'idMunicipality',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ __('menu.City') }}:</label>
                    {!! Form::select('idCity', $ciudad, isset($medico) ? $medico->id_Ciudad : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass',
                        'id' => 'idCity',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{ __('menu.Parish') }}:</label>
                    {!! Form::select('idParish', $parroquia, isset($medico) ? $medico->id_Parroquia : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass',
                        'id' => 'idParish',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!! Form::label('statusm', 'Status:') !!}
                    {!! Form::select('idStatus', $status, isset($medico) ? $medico->Status_Medico_id : null, [
                        'placeholder' => 'Seleccione',
                        'class' => 'pickerSelectClass otro',
                        'id' => 'idStatus',
                        'required' => 'required',
                    ]) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 p-2">
            <div class="row">
                <div class="col-md-12">
                    <label>{{ 'Imagen de Perfil' }}</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ route('usersm.index') }}" class="mt-1 btn btn-outline-secondary">
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
    {!! Form::close() !!}
</div>
