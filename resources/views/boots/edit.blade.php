@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Boot
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
      <form method="post" action="{{ route('boots.update', $boot->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="brand">Brand:</label>
          <input type="text" class="form-control" name="brand" value={{ $boot->brand }} />
        </div>
        <div class="form-group">
          <label for="model">Model:</label>
          <input type="text" class="form-control" name="model" value={{ $boot->model }} />
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <input type="text" class="form-control" name="type" value={{ $boot->type }} />
        </div>
        <div class="form-group">
          <label for="mondopoint">Mondo Ponit:</label>
          <input type="text" class="form-control" name="mondopoint" value={{ $boot->mondopoint }} />
        </div>
        <div class="form-group">
          <label for="rentalprice">Rental Price:</label>
          <input type="text" class="form-control" name="rentalprice" value={{ $boot->rentalprice }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection