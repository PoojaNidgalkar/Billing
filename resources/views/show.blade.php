<h1>Showing Client {{ $client->id }} Details</h1>
<form method="PATCH">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CONTACT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$client->Cid}}</td>
      <td>{{$client->name}}</td>
      <td>{{$client->address}}</td>
      <td>{{$client->contact}}</td>
    </tr>
  </tbody>
</table>
</form>