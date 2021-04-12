@extends('layouts.default')
@section('content')

    <h1> {{$empleado->nombre}} </h1>
    <p>{{ $empleado->id}}</p>
    <p>{{ $empleado->codigo }}</p>
    <p>{{ $empleado->nombre }}</p>
    <p>{{ $empleado->lugar_nacimiento }}</p>
    <p>{{ $empleado->fecha_nacimiento }}</p>

@stop