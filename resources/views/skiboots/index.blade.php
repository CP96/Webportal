@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<h1>Skiboots Table</h1>
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
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($skiboots as $skiboot)
            <tr>
                <td>{{$skiboot->id}}</td>
                <td>{{$skiboot->brand}}</td>
                <td>{{$skiboot->model}}</td>
                <td>{{$skiboot->type}}</td>
                <td>{{$skiboot->mondopoint}}</td>
                <td>{{$skiboot->rentalprice}}</td>
                <td><a href="{{ route('skiboots.edit',$skiboot->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('skiboots.destroy', $skiboot->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
@endsection