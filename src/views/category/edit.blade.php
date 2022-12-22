@extends('category::layout')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex flex-row justify-content-between">
          <h3>Edit Category</h3>
          <a href="{{url('category')}}" class="btn btn-primary align-self-center">Back to All</a>
        </div>
        <div class="card-body">
       
          <form action="{{url('category/'.$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
              <label for="">Name</label>
              <input type="text" class="form-control" name="category" value="{{$category->name}}">
            </div>
            <div class="form-group mb-3">
              <label for="">Status</label>
              <select name="status" class="form-control">
                <option value="1" @if($category->status == '1') selected @endif >Active</option>
                <option value="0" @if($category->status == '0') selected @endif >Inactive</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection