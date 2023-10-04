@extends('layouts_new.base')

@section('css')
    <!-- selectize -->
    <link href="{{ asset('css/selectize.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card sombra">
                    {!! Form::model($limit, ['route' => ['limits.update', $limit], 'method' => 'put', 'autocomplete' => 'off']) !!}
                    @include('admin.configuracion.limites.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @include('admin.configuracion.limites.js.js')
@endsection
