@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Foundation</h4>
        <br>
        <p class="card-description">  </p>
        <form action="{{route("category.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="description">Icon</label>
            <input type="text" class="form-control" name="icon">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description">
          </div>
          <div class="form-group">
            <label for="with_doses">With Does</label>
            <select name="with_doses" class="form-control">
                <option value="1" >Yes</option>
                <option value="0">No</option>
            
            </select>
          </div>
     
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection