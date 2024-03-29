<div class="form-group col-md-12">
    {!! Form::open([
        'route' => ['usersm.store'],
        'method' => 'post',
        'autocomplete' => 'off',
        'id' => 'registra_usuarioM',
    ]) !!}
    <input type="hidden" name="step" value="2">

    <input type="hidden" name="nombre_usuario"
        value="{{ isset(Session::get('medico')->Nombres_Medico) ? Session::get('medico')->Nombres_Medico . ' ' . Session::get('medico')->Apellidos_Medicos : null }}">
    <input type="hidden" name="id"
        value="{{ isset(Session::get('medico')->Nombres_Medico) ? Session::get('medico')->id_Medico : null }}">
    <input type="hidden" name="idL" value="{{ isset($login) ? $login->id_Login_Trabajador : null }}">
    <input type="hidden" name="statusm"
        value="{{ isset(Session::get('medico')->Status_Medico_id) ? Session::get('medico')->Status_Medico_id : null }}">

    <div class="row">
        <div class="col-md-3 mb-3">
            <label>{{ 'Correo' }}</label>
            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo"
                value="{{ isset($login) ? $login->Correo : null }}" required>
        </div>
        <div class="col-md-3 mb-3">
            {!! Form::label('roles', 'Rol:') !!}
            {!! Form::select('rol', $roles, isset($rol[0]) ? $rol[0]->role_id : null, [
                'placeholder' => 'Seleccione',
                'class' => 'pickerSelectClass otro',
                'id' => 'rol',
                'required' => 'required',
            ]) !!}
        </div>
        <div class="col-md-3 mb-3">
            <label>{{ 'Contraseña' }}</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
        </div>
        <div class="col-md-3 mb-3">
            <label>{{ 'Confirma Contraseña' }}</label>
            <input type="password" class="form-control" name="contrasena2" id="contrasena2"
                placeholder="Confirma Contraseña">
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
