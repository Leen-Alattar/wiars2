@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Role</h4>
        <p class="card-description">  </p>
        <form action="{{route("role.update", $role->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" class="form-control" name="name" value="{{$role->name}}">
          </div>
   
     
   
          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection