@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h1>Edit Snowboard</h1>
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
      <form method="post" action="{{ route('snowboards.update', $snowboard->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="brand">Brand:</label>
          <input type="text" class="form-control" name="brand" value="{{ $snowboard->brand }}" />
        </div>
        <div class="form-group">
          <label for="model">Model:</label>
          <input type="text" class="form-control" name="model" value="{{ $snowboard->model }}" />
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <input type="text" class="form-control" name="type" value="{{ $snowboard->type }}" />
        </div>
        <div class="form-group">
          <label for="length">Length:</label>
          <input type="number" class="form-control" name="length" value="{{ $snowboard->length }}" />
        </div>
        <div class="form-group">
          <label for="rentalprice">Rental Price:</label>
          <input type="number" class="form-control" name="rentalprice" value="{{ $snowboard->rentalprice }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection