
@extends('layouts.frontend')
@section('contenido')

@livewire('vernoticias', ['slug' => $slug])

@stop