<h2>Skis Table</h2>
@auth
<a class="btn btn-success" href="/skis/create">Add New</a>
@endauth
<div class="uper mb-5">
    
    <div class="shadow rounded">
        @if(count($skis) > 0 )
        <table class="table table-striped ">
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

                @foreach($skis as $ski)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$ski->brand}}</td>
                    <td>{{$ski->model}}</td>
                    <td>{{$ski->type}}</td>
                    <td>{{$ski->length}}</td>
                    <td>{{$ski->rentalprice}}</td>
                    @auth
                    <td><a href="{{ route('skis.edit',$ski->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('skis.destroy', $ski->id)}}" method="post">
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