@extends('layouts_new.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card sombra p-2">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>{{ __('List Limit') }}</h3>
                        </div>
                        <div class="col-md-1">
                            @can('limits.create')
                                <a class="btn-transition btn btn-outline-primary" href="{{ route('limits.create') }}">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i data-feather="plus-circle" class="feather-icon"></i>
                                    </span>
                                </a>
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
                            <table id="AllDataTable" class="table table-bordered" width="100%">
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
                                    @foreach ($limits as $limite)
                                        <tr>
                                            <td>{{ $limite->administrativo }}</td>
                                            <td>{{ $limite->medico }}</td>
                                            <td>{{ $limite->asistente }}</td>
                                            <td>{{ $limite->paciente }}</td>
                                            <td style="background-color: {{ $limite->Status->color }}; color: #fff">
                                                {{ $limite->Status->name }}</td>
                                            <td width="20">
                                                @can('limits.edit')
                                                    <a href="{{ route('limits.edit', $limite) }}" type="button"
                                                        class="btn-transition btn btn-outline-success">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i data-feather="edit-3" class="feather-icon"></i>
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
    @include('admin.configuracion.limites.js.js')
@endsection
