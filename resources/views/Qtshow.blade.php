<h1>Showing Client {{ $qt->Qid }} Details</h1>
<form method="PATCH">
<table class="table">
  <thead>
  <tr>
  <tr>
      <th scope="col">QID</th>
      <th scope="col">ITEMNAME</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">PRICE</th>
      <th scope="col">TAX</th>
      <th scope="col">TOTAL</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{$qt->Qid}}</td>
      <td>{{$qt->Itemname}}</td>
      <td>{{$qt->Qty}}</td>
      <td>{{$qt->Price}}</td>
      <td>{{$qt->Tax}}</td>
      <td>{{$qt->Total}}</td>

    </tr>
  </tbody>
 
      
</table>

</form>
