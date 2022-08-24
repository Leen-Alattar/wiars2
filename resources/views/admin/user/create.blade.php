@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add User</h4>
        <br>
        <p class="card-description">  </p>
        



        <form action="{{route("user.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="description">email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="description">date_of_birth</label>
            <input type="text" class="form-control"  name="date_of_birth">
          </div>
          <div class="form-group">
            <label for="name">national_num</label>
            <input type="number" class="form-control" name="national_num">
          </div>
          <div class="form-group">
            <label for="name">password</label>
            <input type="text" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label for="with_doses">Role</label>
            @foreach($roles as $role)
            <select name="role_id" class="form-control">
                <option value="{{$role->id}}" >{{$role->name}}</option>
                
            </select>
            @endforeach
          </div>
          <div class="form-group">
            <label for="with_doses">Vaccine Status</label>
            <select name="is_vaccine" class="form-control">
                <option value="1" >Yes</option>
                <option value="0" >No</option>
                
            </select>
          </div>
     
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection