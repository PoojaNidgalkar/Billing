<h1>All the Client</h1>
 
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
 
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Contact</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($Clients as $key => $cli)
        <tr>
            <td>{{ $cli->id }}</td>
            <td>{{ $cli->name }}</td>
            <td>{{ $cli->address }}</td>
            <td>{{ $cli->contact}}</td>
 
        </tr>
    @endforeach
    </tbody>
</table>