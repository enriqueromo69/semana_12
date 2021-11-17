@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registrando paciente usando VUE</div>
                <div class="card-body">
                <div id="app">
                    <paciente></paciente>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
