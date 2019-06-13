<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
           
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">SIGNUP</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" 
                            novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" 
                                    name="uname1" id="uname1" required="">
                                   
                                </div>
                                <br> 
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" 
                                    id="pwd1" required="" autocomplete="new-password">
                              
                                </div>
                                <br> 
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" 
                                    id="pwd1" required="" autocomplete="new-password">
                              
                                </div>
                                <br> 
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" 
                                    name="uname1" id="uname1" required="">
                              
                                </div>

                                <div class="form-group">
                                          
                                        <a href="/logo" class="btn btn-success btn-lg float-center"
                                                        role="button">NEXT</a>
                                                     
                                           
                                         </div>
                                         <br>        


                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
</body>
</html>