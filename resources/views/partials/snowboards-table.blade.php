<h2>Snowboards Table</h2>
@auth
<a class="btn btn-success" href="/snowboards/create">Add New</a>
@endauth
<div class="uper mb-5">
    
    <div class="shadow rounded">
        @if(count($snowboards) > 0 )
        <table class="table table-striped shadow rounded">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Brand</td>
                    <td>Model</td>
                    <td>Type</td>
                    <td>Length</td>
                    <td>Rental Price</td>
                    @auth
                    <td colspan="2">Action</td>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($snowboards as $snowboard)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$snowboard->brand}}</td>
                    <td>{{$snowboard->model}}</td>
                    <td>{{$snowboard->type}}</td>
                    <td>{{$snowboard->length}}</td>
                    <td>{{$snowboard->rentalprice}}</td>
                    @auth
                    <td><a href="{{ route('snowboards.edit',$snowboard->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('snowboards.destroy', $snowboard->id)}}" method="post">
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