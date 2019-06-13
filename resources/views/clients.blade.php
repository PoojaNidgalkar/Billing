<!DOCTYPE html>
<html lang="en">
<head>
  <title>client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="container">
        <h1 class="text-center text-dark display-4">Client Page</h1>
        <table class="table "> 
        <thead> 
          <tr> 
          <th>C.id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
          </tr> 
          <tr>
            <td>1</td>
            <td>abc</td>
            <td>789</td>
            <td>abc@abc</td>
           
            <td>
                <a href="/view" class="btn btn-primary" role="button">View</a>
                <a href="/edit" class="btn btn-info" role="button">Edit</a>
              <button class="btn btn-danger">Delete</button>

            </td>
          </tr>
        </thead> 
        <tbody> 
         
                <div class="form-group">
                                      <a href="/logo" class="btn btn-info" role="button">Create</a>
                                  
                                      <a href="/dashboard" class="btn btn-success btn-lg float-right mb-4"
                                      role="button">Generate Quote</a>
                                      
                                   
                           </div>
        
       
        </tbody> 
        </table>
      </div>
    </div>
    </body>
    </html>

                          
                    







