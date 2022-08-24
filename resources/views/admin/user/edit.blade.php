@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit User Info </h4>
        <p class="card-description">  </p>
        <form action="{{route("user.update", $user->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value={{$user->name}}>
              </div>
              <div class="form-group">
                <label for="description">email</label>
                <input type="email" class="form-control" name="email" value={{$user->email}}>
              </div>
              <div class="form-group">
                <label for="description">date_of_birth</label>
                <input type="text" class="form-control"  name="date_of_birth" value={{$user->date_of_birth}}>
              </div>
              <div class="form-group">
                <label for="name">national_num</label>
                <input type="number" class="form-control" name="national_num" value={{$user->national_num}}>
              </div>
    
          <div class="form-group">
            <label for="role">Role</label>
            <select name="role_id" class="form-control">
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection