@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Foundation</h4>
        <p class="card-description">  </p>
        <form action="{{route("category.update", $category->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="name">Exam Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
          </div>
          <div class="form-group">
            <label for="description">Exam Description</label>
            <input type="text" class="form-control" name="description" value="{{$category->description}}">
          </div>
          <div class="form-group">
            <label for="icon">icon</label>
            <input type="text" class="form-control" name="icon" value="{{$category->icon}}">
          </div>
          <div class="form-group">
            <label for="description">Doses</label>
            <select name="with_doses" class="form-control">
                @if($category->with_doses == 1)
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
                @endif
                @if($category->with_doses == 0)
                <option value="1" >Yes</option>
                <option value="0" selected>No</option>
                @endif
            
            </select>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection