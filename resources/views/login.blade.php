<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>login</title>
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
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                                   <br>
                                            <button type="submit" class="btn btn-success btn-lg float-right"
                                           id="btnLogin">Forgot Passsword</button>
                                          
                                          
                                </div>
                                <br> 
                                <div class="form-group">
                                        <a href="/logo" class="btn btn-success btn-lg float-right"
                                        role="button">Login</a>
                                </div>
                                   <br> 
                                     

                                         <div class="form-group">
                                          
                                        <a href="/signup" class="btn btn-success btn-lg float-right"
                                                        role="button">Signup</a>
                                                     
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