@extends('layouts.app')

@section('content')

<div class="card uper">
  <div class="card-header">
    <h1>Edit Ski</h1>
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
      <form method="post" action="{{ route('skis.update', $ski->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="brand">Brand:</label>
          <input type="text" class="form-control" name="brand" value="{{ $ski->brand }}" />
        </div>
        <div class="form-group">
          <label for="model">Model:</label>
          <input type="text" class="form-control" name="model" value="{{ $ski->model }}" />
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <input type="text" class="form-control" name="type" value="{{ $ski->type }}" />
        </div>
        <div class="form-group">
          <label for="length">Length:</label>
          <input type="number" class="form-control" name="length" value="{{ $ski->length }}" />
        </div>
        <div class="form-group">
          <label for="rentalprice">Rental Price:</label>
          <input type="number" class="form-control" name="rentalprice" value="{{ $ski->rentalprice }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection