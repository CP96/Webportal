@extends('layouts.app')

@section('content')

<h1>Admin Page</h1>
@include('partials.error')

@include('partials.ski-table')

@include('partials.snowboards-table')

@include('partials.skiboots-table')

@include('partials.boots-table')
@endsection