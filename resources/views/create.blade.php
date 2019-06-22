
<h1>Client</h1>
 
<!-- will be used to show any messages -->
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
<form method="post" action="{{ route('clients.store')}}" accept-charset="UTF-8">
  <div class="col-md-12">
	  <div class="form-area">
      <div class="alert alert-success hide"></div>
      
	   <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
	  <div class="alert alert-danger hide"></div>
      
      
      <div class="form-group">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" 
        placeholder="Name"/>
		@if ($errors->has('name'))
		<span class="alert-danger">dssssss</span>
		@endif
      </div>
      <br>
      
	  <div class="form-group">
      <input type="text" class="form-control" name="address" 
        placeholder="Address"/>
      </div>
      <br>
	  
    <div class="form-group">
       <input type="" class="form-control" name="contact" 
         placeholder="Contact">
    </textarea>               
      </div>
      
      <br>
      <button type="submit" class="btn btn-primary pull-right">
          Submit Clients</button>

	  </div>
	</div>
 </form>