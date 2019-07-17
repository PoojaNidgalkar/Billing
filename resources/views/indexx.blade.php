<h1>All the Client</h1>
 
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<a href="{{ route('clients.create') }}">New</a>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Contact</td>
            <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($Clients as $cli)

        <tr>
            <td>{{ $cli->Cid}}</td>
            <td>{{ $cli->name }}</td>
            <td>{{ $cli->address }}</td>
            <td>{{ $cli->contact}}</td>
            <td><a href="{{route('clients.show', $cli)}}" class="btn">Show</a></td>
            <td><a href="{{route('clients.edit', $cli)}}" class="btn">edit</a></td>
            
            <td>
                       <form action="{{route('clients.destroy', $cli)}}" method="POST"></a>
                       {{csrf_field()}}
                       <input name="_method" type="hidden" value="DELETE">
                       <button class="btn btn-danger" type="submit">Delete</button>
            </td>
          </form>

           <td>
           <a href='quotes/create'>Generate Quote</a>
           </td>
           
        
        
          </form>
        </tr>
    @endforeach
    </tbody>
</table>
