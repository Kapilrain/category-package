@extends('category::layout')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex flex-row justify-content-between">
          <h3>All Categories</h3>
          <a href="{{url('category/create')}}" class="btn btn-primary align-self-center">Add New</a>
        </div>
        <div class="card-body">
          @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
          @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if($category->isNotEmpty())
                    @foreach($category as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td>
                        <a href="{{url('category/'.$row->id.'/edit')}}" class="btn btn-primary" >Edit</a>
                        <form class="d-inline-block" action="{{url('category/'.$row->id)}}" method="POST">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="3" align="center">No record found</td>
                    </tr>
                  @endif
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection