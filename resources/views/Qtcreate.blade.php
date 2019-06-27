<!DOCTYPE html>
<html lang="en">
  <head>
    <title>New quote</title>
    <link rel="stylesheet" href="/home/pooja/Desktop/billing/css/dup.css" type="text/css">
    <link rel="stylesheet" href="/home/pooja/Desktop/billing/css/billll.css" type="text/css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
  </head>
  <body>
  <form method="post" action="{{ route('quotes.store')}}" accept-charset="UTF-8">
      @csrf
        <div class="container bg">
                <div class="bg-info">
                  <h1 class="text-center text-dark display-4 mt-4"><u> New Quote</u></h1>
                </div>
                <form>   
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <select name="id" class="form-control">
                          @foreach($clients as $client)
                      <option value="{{ $client->Cid }}"> {{$client->name}} </option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                  <input type="button" id="addmorePOIbutton" value="Add" onclick="insRow()"/>

    <hr>
    <table  class='table table-sm table-responsive' id="POITable">
        <tr>
            
            <th>Itemname</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Tax</th>
            <th>Total</th>
            <th>Delete</th>
        </tr>
      
        <tr>     
          
          <td><input type="text" name="Itemname" id="name" ></td>
          <td><input type="text" name="Qty" id="Qty"></td>
          <td><input type="text" name="Price" id="Price"/></td>
          <td><input type="text" name="Tax" id="Tax"></td>
          <td><input  type="text" name="Total" id="Total"/></td>
          <td><input type="button" id="delPOIbutton" value="Delete" onclick="deleteRow(this)"/></td>
        </tr>
    </table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}


function insRow()
{
    console.log( 'hi');
    var x=document.getElementById('POITable');
    var new_row = x.rows[1].cloneNode(true);
    x.appendChild( new_row );
}
  </script>
<hr>
<div class="form-row">
        <div class="form-group col-md-6">
          <label>GrandTotal</label>
          <input type="text" name="" id="">          
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">

          <button type="submit" class="btn btn-success btn-lg" role="button">Submit Quote</a>
        </div>
      </div>
    </form>
  </div>
  
</body>
</html>


           
