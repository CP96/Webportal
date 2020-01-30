@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<h1>Skis Table</h1>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <div class="shadow rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Brand</td>
                    <td>Model</td>
                    <td>Type</td>
                    <td>Length</td>
                    <td>Rental Price</td>
                </tr>
            </thead>
            <tbody>
                @foreach($skis as $ski)
                <tr>
                    <td>{{$ski->id}}</td>
                    <td>{{$ski->brand}}</td>
                    <td>{{$ski->model}}</td>
                    <td>{{$ski->type}}</td>
                    <td>{{$ski->length}}</td>
                    <td>{{$ski->rentalprice}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection