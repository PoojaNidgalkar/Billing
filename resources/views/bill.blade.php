<!DOCTYPE html>
<html lang="en">
<head>
  <title>listBill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
      <h1 class="text-center text-dark display-4">ListBill</h1>
     
      <table class="table "> 
      <thead> 
        <tr> 
            <th>Sno</th>
            <th>ItemName</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
         </tr> 
         <tr>
          <td>1</td>
          <td>xyz</td>
          <td>70</td>
          <td>100</td>
          
         
          <td>
              <a href="/viewbill" class="btn btn-primary" role="button">View</a>
              <a href="/editbill" class="btn btn-info" role="button">Edit</a>
            <button class="btn btn-danger">Delete</button>

          </td>
        </tr>

      </thead> 
      <tbody> 
       
              <div class="form-group">
                                    <a href="/billlist" class="btn btn-info" role="button">Create</a>
                                    <a href="/payment" class="btn btn-success mb-4 float-right"
                                    role="button">Payment</a>
              </div>

      
     
      </tbody> 
      </table>
    </div>
  </div>
  </body>
  </html>
