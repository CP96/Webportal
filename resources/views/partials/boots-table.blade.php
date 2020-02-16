<h2>Boots Table</h2>
@auth
<a class="btn btn-success" href="/boots/create">Add New</a>
@endauth
<div class="uper mb-5">
    
    <div class="shadow rounded">
        @if(count($boots) > 0 )
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
                @foreach($boots as $boot)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$boot->brand}}</td>
                    <td>{{$boot->model}}</td>
                    <td>{{$boot->type}}</td>
                    <td>{{$boot->mondopoint}}</td>
                    <td>{{$boot->rentalprice}}</td>
                    @auth
                    <td><a href="{{ route('boots.edit',$boot->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('boots.destroy', $boot->id)}}" method="post">
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