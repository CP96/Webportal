@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h1>Edit Skiboot</h1>
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
      <form method="post" action="{{ route('skiboots.update', $skiboot->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="brand">Brand:</label>
          <input type="text" class="form-control" name="brand" value="{{ $skiboot->brand }}" />
        </div>
        <div class="form-group">
          <label for="model">Model:</label>
          <input type="text" class="form-control" name="model" value="{{ $skiboot->model }}" />
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <input type="text" class="form-control" name="type" value="{{ $skiboot->type }}" />
        </div>
        <div class="form-group">
          <label for="mondopoint">Mondo Ponit:</label>
          <input type="number" class="form-control" name="mondopoint" value="{{ $skiboot->mondopoint }}" />
        </div>
        <div class="form-group">
          <label for="rentalprice">Rental Price:</label>
          <input type="number" class="form-control" name="rentalprice" value="{{ $skiboot->rentalprice }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection