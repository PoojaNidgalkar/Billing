<!DOCTYPE html>
<html lang="en">
<head>
  <title>Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
   <div class="container pt-5">
     <div class="row pt-5">
       <div class="col-md-4">

             <button type="button" class="btn btn-primary float-center" data-toggle="modal" data-target="#exampleModal">
                  Pending
                 </button>
                 
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Wait....,Process is going on</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                      
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                       </div>
                     </div>
                   </div>
                 </div>
            </div>

          <div class="col-md-4">
            
              <a href="/logo" class="btn btn-success"
              role="button">Success</a>
       </div>

       <div class="col-md-4">
        
          <button type="button" class="btn btn-danger float-center" data-toggle="modal" data-target="#exampleModal1">
            Error
             </button>
             
             <!-- Modal -->
             <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Network Error</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                  
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                   </div>
                 </div>
               </div>
             </div>
        </div>

       
     </div>
   </div>
</body>
</html>