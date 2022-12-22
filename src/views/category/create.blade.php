@extends('category::layout')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex flex-row justify-content-between">
          <h3>Add New Category</h3>
          <a href="{{url('category')}}" class="btn btn-primary align-self-center">Back to All</a>
        </div>
        <div class="card-body">
       
          <form action="{{url('category')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
              <label for="">Name</label>
              <input type="text" class="form-control" name="category">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Save">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection