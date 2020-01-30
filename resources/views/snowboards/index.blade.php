@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<h1>Snowboards Table</h1>
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
                @foreach($snowboards as $snowboard)
                <tr>
                    <td>{{$snowboard->id}}</td>
                    <td>{{$snowboard->brand}}</td>
                    <td>{{$snowboard->model}}</td>
                    <td>{{$snowboard->type}}</td>
                    <td>{{$snowboard->length}}</td>
                    <td>{{$snowboard->rentalprice}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection