<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE DATA SEND</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

</head>
<body>
<div class="container">
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
</form>
</div>

<br> <br>
<div class="container">
<div class="panel panel-footer"> 
<table class="table table-bordered">
<thead>
<tr> 
            <th>ItemName</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Tax</th>
            <th>Total</th>
            <th><a href="#" class="addRow"> <i class="glyphicon glyphicon-plus"> </i> </a></th>
</tr>
</thead>
<tbody>
<tr>
<td> <input type="text" name="item_name[]" class="form-control" required=""> </td>
<td> <input type="text" name="quantity[]" class="form-control quantity" required=""> </td>
<td> <input type="text" name="price[]" class="form-control price" required=""> </td>
<td> <input type="text" name="tax[]" class="form-control tax required="> </td>
<td> <input type="text" name="total[]" class="form-control total"> </td>

<td> <a href="#" class="btn btn-danger remove">
     <i class="glyphicon glyphicon-remove"> </i> </a> </td> 
</tr>
</tbody>
<tfoot> 
<tr>
            <td style="border : none"></td>
            <td style="border : none"></td>
            <td style="border : none"></td>
           
            <td>GrandTotal</td>
            <td><b class="Grandtotal"></b>
            <td style="border : none"></td>
            <input type="submit" name="" value="submit" class="btn btn-success"></td>
</tr>
</tfoot>
</div>
</div>


 <script type="text/javascript">
 $('tbody').delegate('.quantity,.price,.tax','keyup',
 function(){
            var tr=$(this).parent().parent();
            var a=tr.find('.quantity').val();
            var b=tr.find('.price').val();
            var c=tr.find('.tax').val(); 
            var total=(a * b* c/100 + a * b);
            tr.find('.total').val(total); 
            Grandtotal();  
 });
 function Grandtotal(){
   var Grandtotal=0;
   $('.total').each(function(i,e){
     var total=$(this).val()-0;
     Grandtotal+=total;
   });
   $('.Grandtotal').html(Grandtotal);
}

$('.addRow').on('click',function()
 {
   addRow();

 });
 function addRow()
 {
   var tr='<tr>'+
   '<td> <input type="text" name="item_name[]" class="form-control" required=""> </td>'+
   '<td> <input type="text" name="quantity[]" class="form-control quantity" required=""> </td>'+
'<td><input type="text" name="price[]" class="form-control price" required=""> </td>'+
'<td> <input type="text" name="tax[]" class="form-control tax required="> </td>'+
'<td>  <input type="text" name="total[]" class="form-control total"> </td>'+
'<td> <a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i> </a> </td>'+
'</tr>';

 $('tbody').append(tr);
 };
 
 $('.remove').live('click',function()
 {
   var last=$('tbody tr').length;
 
   if(last==1)
   {
     alert("u can't delete last row");
   }
   else{
          $(this).parent().parent().remove();
   }
 });
 </script>

</body>
</html>



           
