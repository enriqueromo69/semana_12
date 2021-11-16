@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div id="app" class="content">
            <!--La equita id debe ser app, como hemos visto en app.js-->
            <example-component></example-component>
            <!--Añadimos nuestro componente vuejs-->
        </div>

        <div id="app1" class="content">
            <primer-component></primer-component>
        </div>

        <div id="app2" class="content">
            <busqueda-component></busqueda-component>
        </div>

        <div id="app3" class="content">
        <condicional-component></condicional-component>
        </div>

        <div id="app4" class="content">
        <bucle-component></bucle-component>
        </div>


    </div>


    </div>
</div>
@endsection
