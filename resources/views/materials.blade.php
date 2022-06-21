@extends('layouts.main')
@section('title','Materials')

@section('content')

@foreach( $material_enters as $Material_enter)

    <p> {{$Material_enter->Description}}</p>

@endforeach
@endsection