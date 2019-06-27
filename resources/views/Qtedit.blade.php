<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<hr>
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('quotes') }}">View All Qoutes</a></li>
        <li><a href="{{ URL::to('quotes/create') }}">Create a qoute</a>
    </ul>
</nav>

<h1><u>Edit Page:</u> Qoute ID- {{ $qt->Qid }}</h1>

<div class="container">
  <form method="POST" action="{{route('quotes.update', $qt)}}">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">

     <div class="form-group row">   
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Itemname</label>
      <div class="col-sm-10">
        <input type="text" placeholder="name" 
        name="name" value={{$qt->Itemname}}>
      </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Quantity</label>
      <div class="col-sm-10">
        <input type="text" placeholder="Quantity" 
        name="name" value={{$qt->Qty}}>
      </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Price</label>
      <div class="col-sm-10">
        <input type="text" placeholder="Price" 
        name="name" value={{$qt->Price}}>
      </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Tax</label>
      <div class="col-sm-10">
        <input type="text" placeholder="Tax" 
        name="name" value={{$qt->Tax}}>
      </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Total</label>
      <div class="col-sm-10">
        <input type="text" placeholder="Total" 
        name="name" value={{$qt->Total}}>
      </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">GrandTotal</label>
      <div class="col-sm-10">
        <input type="text" placeholder="Grandtotal" 
        name="name" value={{$qt->GrandTotal}}>
      </div>
    </div>

   <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>

</body>
</html>