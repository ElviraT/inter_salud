@extends('layouts_new.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card sombra p-2">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>{{ __('List User Doctots') }}</h3>
                        </div>
                        <div class="col-md-1">
                            @can('usersm.create')
                                <a class="btn-transition btn btn-outline-primary" href="{{ route('usersm.create') }}">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i data-feather="plus-circle" class="feather-icon"></i>
                                    </span>
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card sombra p-2">
                    @if (count($usersm) == 0)
                        <br>
                        <p class="text-center">{{ __('No matching records found') }}</p>
                    @else
                        <div class="col-md-12 mt-3">
                            <table id="AllDataTable" class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Avatar') }}</th>
                                        <th>{{ 'N° Colegio de Médicos' }}</th>
                                        <th>{{ 'Registro MPPS' }}</th>
                                        <th>{{ 'Status' }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersm as $resultado)
                                        <tr>
                                            <td>{{ $resultado->user->first_name . ' ' . $resultado->user->last_name }}</td>
                                            <td class="avatar"><img alt="avatar"
                                                    @if ($resultado->user->avatar == '') src="{{ Avatar::create($resultado->user->first_name . ' ' . $resultado->user->last_name)->toBase64() }}" @else src="{{ 'avatars/' . str_replace('\\', '/', $resultado->user->avatar) }}" @endif>
                                            </td>
                                            <td>{{ $resultado->ncolegio }}</td>
                                            <td>{{ $resultado->register }}</td>
                                            <td style="background-color: {{ $resultado->status->color }}; color: #fff">
                                                {{ $resultado->status->name }}</td>
                                            <td width="20">
                                                @can('usersm.edit')
                                                    <a href="{{ route('usersm.edit', $resultado) }}" type="button"
                                                        class="btn-transition btn btn-outline-success">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i data-feather="edit-3" class="feather-icon"></i>
                                                        </span>
                                                    </a>
                                                @endcan
                                                @can('usersm.destroy')
                                                    <a href="#" type="button" data-toggle="modal"
                                                        data-target="#confirm-delete" data-record-id="{{ $resultado->id }}"
                                                        data-record-title="{{ 'el médico ' }}{{ $resultado->first_name . ' ' . $resultado->last_name }}"
                                                        data-action="{{ route('usersm.destroy', $resultado->id) }}"
                                                        title="{{ __('Delete Doctor') }}"
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
@section('js')
    @include('admin.configuracion.usuarios.userm.js.js')
@endsection
