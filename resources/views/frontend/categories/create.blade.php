@extends('frontend.layouts.dashboard')
@section('title')

create new category

@endsection

@section('page_header')

 <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">Categories</a></div>
              <div class="breadcrumb-item">Create Category</div>
            </div>
          </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create Category</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{route('dashboard.categories.store')}}">
                    @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category parent</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="category_id " class="form-control selectric">
                          <option value="">Category</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">category description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
@section('content')

 <div class="container p-4 m-5">
        <div class="card p-2 pr-5">
            <div class="card-stats">
<form action="" method="POST">
	@csrf
	<div class="m-2">
		<h5>Add Category</h5>
					 
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
	     <input type="text" name="name" class="form-control" id="emailPassword" required>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
	    <div class="col-sm-10">
	      <input type="text" name="description" class="form-control" id="inputPassword" required>
	    </div>
	  </div>
	</div>
	<button type="submit" class="btn btn-primary m-4 ">Add Category</button>
</form>

</div></div></div>

@endsection