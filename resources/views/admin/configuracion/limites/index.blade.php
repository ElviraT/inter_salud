@extends('layouts_new.base')
@section('css')
    @include('admin.configuracion.limites.css.css')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card sombra p-2">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>{{ __('List Limits') }}</h3>
                        </div>
                        <div class="col-md-1">
                            @can('limits.create')
                                <button type="button" class="btn-transition btn btn-outline-primary" data-toggle="modal"
                                    data-action="{{ route('limits.store') }}" data-target=".bd-example-modal-sm">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i data-feather="plus-circle" class="feather-icon"></i>
                                    </span>
                                </button>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card sombra p-2">
                    @if (count($limits) == 0)
                        <br>
                        <p class="text-center">{{ __('No matching records found') }}</p>
                    @else
                        <div class="col-md-12 mt-3">
                            <table id="AllDataTable" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>{{ 'Administrativo' }}</th>
                                        <th>{{ 'Medico' }}</th>
                                        <th>{{ 'Asistente' }}</th>
                                        <th>{{ 'Paciente' }}</th>
                                        <th>{{ 'Status' }}</th>
                                        <th>{{ 'Acción' }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($limites as $limite)
                                        <tr>
                                            <td>{{ $limite->administrativo }}</td>
                                            <td>{{ $limite->medico }}</td>
                                            <td>{{ $limite->asistente }}</td>
                                            <td>{{ $limite->paciente }}</td>
                                            <td style="background-color: {{ $limite->Status->color }}; color: #fff">
                                                {{ $limite->Status->Status }}</td>
                                            <td width="20">
                                                <a href="{{ route('limites.edit', $limite) }}" type="button"
                                                    class="btn-transition btn btn-outline-success"
                                                    onclick="loading_show();">
                                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                                        <i class="ti-pencil"></i>
                                                    </span>
                                                    {{ 'Editar' }}
                                                </a>
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
    @include('admin.configuracion.limites.js.js')
@endsection
