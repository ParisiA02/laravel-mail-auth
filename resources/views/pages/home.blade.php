@extends('layouts.main-layout')
@section('content')
    <div id="app">
        <videogames-component user="{{Auth::check()}}" />
    </div>
@endsection