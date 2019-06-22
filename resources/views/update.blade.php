<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
      <div class="col-md-12">
          <div class="form-area">  
            <form role="form" method="post" action="{{ route('client.update', 
            $client->id)}}" accept-charset="UTF-8">

              <div class="alert alert-success hide"></div>
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

              <div class="alert alert-danger hide"></div>

              <div class="form-group">
                <input type="number" class="form-control" id="id" name="id" 
                value="{{$client->id}}" placeholder="id"/>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" 
                value="{{$client->name}}" placeholder="Name"/>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" id="name" name="address" 
                value="{{$client->address}}" placeholder="Address"/>
              </div>
     
               <div class="form-group">
                <input type="number" class="form-control" 
                id="contact" name="contact" value="{{ $client->contact }}" placeholder="Contact" />
              </div>

              <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">
              Submit Client</button>

            </form>
          </div>
        </div>
     </form>
     </body>
     </html>