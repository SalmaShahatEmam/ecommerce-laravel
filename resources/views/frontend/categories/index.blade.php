@extends('frontend.layouts.dashboard')

@section('title')

show all categories

@endsection

@section('page_header')

<div class="section-header">
  <h1>Categories</h1>
  <div class="section-header-button">
    <a href="{{route('dashboard.categories.create')}}" class="btn btn-primary">Add New Category</a>
  </div>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">categories</a></div>
    <div class="breadcrumb-item">All categories</div>
  </div>
</div>
@endsection

@section('page_content')
<div class="section-body">
  <div class="row mt-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>All Categories</h4>
        </div>
        <div class="card-body">
          <div>
            <form method="post" action="">
              @csrf
              <div class="input-group">
                <input name="serch-word" type="text" class="form-control" placeholder="Search" />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>

          <div class="clearfix mb-3"></div>

          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category Parent</th>
                <th>Created At</th>
              </tr>
              @foreach($categories as $category)
              <tr>
                <td>{{$category->name}}
                </td>
                <td>
                  {{$category->description}}
                </td>
                <td>
                  {{$category->category_id}}
                </td>
                <td>
                  {{$category->created_at}}
                </td>
              </tr>
              <div class="table-links">
                    <a href="#">View</a>
                    <div class="bullet"></div>
                    <a href="#">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                  </div>
              @endforeach
            </table>
          </div>
          <div class="float-right">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection