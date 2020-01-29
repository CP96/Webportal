@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<h1>Boots Table</h1>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Brand</td>
                <td>Model</td>
                <td>Type</td>
                <td>Mondo Point</td>
                <td>Rental Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach($boots as $boot)
            <tr>
                <td>{{$boot->id}}</td>
                <td>{{$boot->brand}}</td>
                <td>{{$boot->model}}</td>
                <td>{{$boot->type}}</td>
                <td>{{$boot->mondopoint}}</td>
                <td>{{$boot->rentalprice}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
@endsection