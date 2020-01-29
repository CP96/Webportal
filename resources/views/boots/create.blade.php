@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Boots
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form method="post" action="{{ route('boots.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">Brand:</label>
                <input type="text" class="form-control" name="brand" />
            </div>
            <div class="form-group">
                <label for="price">Model:</label>
                <input type="text" class="form-control" name="model" />
            </div>
            <div class="form-group">
                <label for="quantity">Type:</label>
                <input type="text" class="form-control" name="type" />
            </div>
            <div class="form-group">
                <label for="quantity">Mondo Point:</label>
                <input type="text" class="form-control" name="mondopoint" />
            </div>
            <div class="form-group">
                <label for="quantity">Rental Price:</label>
                <input type="text" class="form-control" name="rentalprice" />
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection