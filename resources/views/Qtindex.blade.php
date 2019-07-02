<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quote</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<a href="{{ route('quotes.create') }}">New</a>
<body>
    <div class="container">
        <h1 class="text-center text-dark display-4"> Quote</h1>
       
        <table class="table "> 
        <thead> 
          <tr> 
              <th>QId</th>
              
              <th>ItemName</th>
              
              <th>Total</th>
              <th colspan="3">Actions</th>
           </tr> 
       </thead>
       <tbody>
       </tr>
       @foreach($qoutes as $quo)
       <tr>
            <td>{{ $quo->Qid}}</td>
            <td>{{ $quo->Itemname }}</td>
            <td>{{ $quo->Total }}</td>
            <td><a href="{{route('Qtshow', $quo)}}" class="btn">Show</a></td>
            <td><a href="{{route('Qtedit', $quo)}}" class="btn">edit</a></td>
            <td>
                       <form action="{{route('quotes.destroy', $quo)}}" method="POST"></a>
                       {{csrf_field()}}
                       <input name="_method" type="hidden" value="DELETE">
                       <button class="btn btn-danger" type="submit">Delete</button>
            </td>
</form>
           <td>
           <a href='bills/create'>Generate bill</a>
          
         </td>  
       @endforeach

    </body>
    </html>

                          
                    




