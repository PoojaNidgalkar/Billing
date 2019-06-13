<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bill list</title>

  <link rel="stylesheet" href="/home/pooja/Desktop/billing/css/billll.css" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg">
    <form>
        
      
      <div class="bg-info">
        <h1 class="text-center text-dark display-4 mt-4"><u>Bill List</u></h1>
      </div>
       
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Client Name</label>
          <select id="inputState" class="form-control">
            <option>abc</option>
            <option>xyz</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">GSTIN NO</label>
          <select id="inputState" class="form-control">
            <option>29RFVTG5678B9Z4</option>
            <option>28YHNUJ7654D5Z3</option>
          </select>
        </div>
        </div>
     
        <div class="form-group">
            <label for="inputAddress">Item Name</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div>

          <div class="form-group">
                <label for="inputAddress">Description</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
              </div>
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Quantity</label>
                        <input type="" class="form-control form-control-sm rounded-4" 
                        name="uname1" id="uname1" required="">
                    </div>
                    </div>

      <div class="form-row">
          <div class="form-group col-md-6">
              <label>Price</label>
              <input type="" class="form-control form-control-sm rounded-4" 
              name="uname1" id="uname1" required="">
          </div>
          </div>

         
        
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label>Tax</label>
                      <input type="" class="form-control form-control-sm rounded-4" 
                      name="uname1" id="uname1" required="">
                  </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Total</label>
                          <input type="" class="form-control form-control-sm rounded-4" 
                          name="uname1" id="uname1" required="">
                      </div>
                      </div>
        
          
       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                          <a href="/bill" class="btn btn-success btn-lg"
                          role="button">Done</a>
                          </div>
                        </div>
                          
           
        
        
        
      </form>
      </div>

</body>
</html>
