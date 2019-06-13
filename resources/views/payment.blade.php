<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 
  <div class="container-fluid mt-3">
                            
    <div class="container">
       <div class="row">
        <div class="col-md-12">
       <div class="container col-bp-3">
                    <h1 class="text-center text-dark display-4">PaymentMode</h1>
      </div>
        
         <div class="container p-5 ml-4">
         <div class="row">
         <div class="col-md-4">
                    <div class="form-group">
              
             <a href="/cheque" class="btn btn-info"
                    role="button">Cheque</a>
                    </div>
          </div> 
          <div class="col-md-4 pl-5">
              <div class="form-group">
                  <a href="/cash" class="btn btn-info"
                     role="button">Cash</a>
              </div>
         </div>
          <div class="navbar-nav text center">
            <div class="dropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-info px-2"
                     href="#" id="navbarDropdown" 
                      data-toggle="dropdown" aria-haspopup="true" 
                      aria-expanded="false">card
                    </a>
                    <div class="dropdown-menu" 
                    aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" 
                      href="/debitcard">Debit card</a>
                      <a class="dropdown-item" 
                      href="/creditcard">Credit card</a>
                    </div>
              </div>
        </div>
         </div>
       </div>
        </div>
       </div>
       </div>
     </div>
     </div>
</body>
</html>



