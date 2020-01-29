@extends('layout')

@section('content')

<h1>Admin Page</h1>


<h2>Skis Table</h2>
<a class="btn btn-success" href="/skis/create">Add New</a>
<div class="uper mb-5">
    @include('partials.error')
    <div class="shadow rounded">
        @if(count($skis) > 0 )
        <table class="table table-striped ">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Brand</td>
                    <td>Model</td>
                    <td>Type</td>
                    <td>Length</td>
                    <td>Rental Price</td>
                    <td colspan="2">Action</td>
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
                    <td><a href="{{ route('skis.edit',$ski->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('skis.destroy', $ski->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        @else

        <div class="w-100 p-4 text-center">No data...</div>

        @endif
    </div>
</div>

<h2>Snowboards Table</h2>
<a class="btn btn-success" href="/snowboards/create">Add New</a>
<div class="uper mb-5">
    @include('partials.error')
    <div class="shadow rounded">
        @if(count($snowboards) > 0 )
        <table class="table table-striped shadow rounded">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Brand</td>
                    <td>Model</td>
                    <td>Type</td>
                    <td>Length</td>
                    <td>Rental Price</td>
                    <td colspan="2">Action</td>
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
                    <td><a href="{{ route('snowboards.edit',$snowboard->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('snowboards.destroy', $snowboard->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <div class="w-100 p-4 text-center">No data...</div>

        @endif

    </div>
</div>
<h2>Skiboots Table</h2>
<a class="btn btn-success" href="/skiboots/create">Add New</a>
<div class="uper mb-5">
    @include('partials.error')
    <div class="shadow rounded">
        @if(count($skiboots) > 0 )
        <table class="table table-striped shadow rounded">
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
        @else

        <div class="w-100 p-4 text-center">No data...</div>

        @endif
    </div>
</div>
<h2>Boots Table</h2>
<a class="btn btn-success" href="/boots/create">Add New</a>
<div class="uper mb-5">
    @include('partials.error')
    <div class="shadow rounded">
        @if(count($boots) > 0 )
        <table class="table table-striped shadow rounded">
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
                @foreach($boots as $boot)
                <tr>
                    <td>{{$boot->id}}</td>
                    <td>{{$boot->brand}}</td>
                    <td>{{$boot->model}}</td>
                    <td>{{$boot->type}}</td>
                    <td>{{$boot->mondopoint}}</td>
                    <td>{{$boot->rentalprice}}</td>
                    <td><a href="{{ route('boots.edit',$boot->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('boots.destroy', $boot->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <div class="w-100 p-4 text-center">No data...</div>

        @endif
    </div>
</div>

@endsection