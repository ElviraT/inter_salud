@extends('layouts_new.base')
@section('css')
    @include('admin.configuracion.roles.css.css')
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>{{ __('List Roles') }}</h3>
                        </div>
                        <div class="col-md-1">
                            @can('role-create')
                                <a href="{{ route('roles.create') }}" type="button" class="btn-transition btn btn-outline-primary"
                                    title="{{ __('Add Role') }}">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i data-feather="plus-circle" class="feather-icon"></i>
                                    </span>
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    @if (count($roles) == 0)
                        <br>
                        <p class="text-center">No se encontraron registros coincidentes</p>
                    @else
                        <div class="col-md-12 mt-3">
                            <table id="AllDataTable" class="table table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th width="80%">{{ __('Name') }}</th>
                                        <th width="20%">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->name }}</td>

                                            <td>
                                                @can('role-edit')
                                                    <a href="{{ route('roles.edit', $role) }}" type="button"
                                                        class="btn-transition btn btn-outline-success">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i data-feather="edit-3" class="feather-icon"></i>
                                                        </span>
                                                    </a>
                                                @endcan
                                                @can('role-delete')
                                                    <a href="#" type="button" data-toggle="modal"
                                                        data-target="#confirm-delete15" data-record-id="{{ $role->id }}"
                                                        data-record-title="{{ $role->name }}"
                                                        class="btn-transition btn btn-outline-danger">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i data-feather="trash-2" class="feather-icon"></i>
                                                        </span>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('admin.modales.elimina_rol')
@endsection

@section('js')
    @include('admin.configuracion.roles.js.js')
@endsection
