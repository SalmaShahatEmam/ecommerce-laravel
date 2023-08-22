@extends('dashboard')
@section('content')


 <div class="container p-4 m-5">
        <div class="card p-2 pr-5">
            <div class="card-stats">
<form action="{{route('update.category')}}" method="PUT">
	@csrf
	<div class="m-2">
		<h5>Edit Category</h5>
					 
		@if ($errors->any())
		    <div class="alert alert-warning">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	</div>
	<div class="container mt-3">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
	    <div class="col-sm-10">
	     <input type="text" name="name" value="{{$category->name}}" class="form-control" id="emailPassword" required>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
	    <div class="col-sm-10">
	      <input type="text" name="description" value="{{$category->description}}" class="form-control" id="inputPassword" required>
	    </div>
	  </div>
	</div>
	<button type="submit" class="btn btn-primary m-4 ">Update</button>
</form>

</div></div></div>

@endsection