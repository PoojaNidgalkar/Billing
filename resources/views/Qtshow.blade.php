<form method="PATCH">
<h1>Showing Client {{ $qoutes->Qid }} Details</h1>
<table class="table">
  <thead>
  <tr>
  <tr>
      <th>QID</th>
      <th>ITEMNAME</th>
      <th>QUANTITY</th>
      <th>PRICE</th>
      <th>TAX</th>
      <th>TOTAL</th>
    </tr>
  </thead>
  @foreach ($collection as $qoutes)
    {{ $qoutes->Qid }}
  <tbody>
    <tr>
      <td>{{$qoutes->Qid}}</td>
      <td>{{$qoutes->Itemname}}</td>
      <td>{{$qoutes->Qty}}</td>
      <td>{{$qoutes->Price}}</td>
      <td>{{$qoutes->Tax}}</td>
      <td>{{$qoutes->Total}}</td>
    </tr>
  </tbody>
  @endforeach
</table>

</form>

