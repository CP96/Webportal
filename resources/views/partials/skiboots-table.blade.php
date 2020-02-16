<h2>Skiboots Table</h2>
@auth
<a class="btn btn-success" href="/skiboots/create">Add New</a>
@endauth
<div class="uper mb-5">
    
    <div class="shadow rounded">
        @if(count($skiboots) > 0 )
        <table class="table table-striped shadow rounded">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Brand</td>
                    <td>Model</td>
                    <td>Type</td>
                    <td>Mondo Point</td>
                    <td>Rental Price</td>
                    @auth
                    <td colspan="2">Action</td>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($skiboots as $skiboot)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$skiboot->brand}}</td>
                    <td>{{$skiboot->model}}</td>
                    <td>{{$skiboot->type}}</td>
                    <td>{{$skiboot->mondopoint}}</td>
                    <td>{{$skiboot->rentalprice}}</td>
                    @auth
                    <td><a href="{{ route('skiboots.edit',$skiboot->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('skiboots.destroy', $skiboot->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <div class="w-100 p-4 text-center">No data...</div>

        @endif
    </div>
</div>