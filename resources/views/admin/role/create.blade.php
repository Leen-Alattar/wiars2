@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Role</h4>
        <br>
        <p class="card-description">  </p>
        <form action="{{route("role.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
          </div>     
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection