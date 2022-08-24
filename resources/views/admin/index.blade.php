@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Manage Jordan Foundation   </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foundation Name tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>
                 
                      
                  
                  <tr>
                    <th>Foundation Name </th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>With Doses </th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($categorys as $category)
                  <tr>
                    <td><label class="badge badge-success">{{$category->name}}</label></td>
                    <td>{{$category->description}}</</td>
                    <td>{{$category->icon}}</</td>
                    <td>{{$category->with_doses}}</</td>
                   
                    <td>
                      <form action = "{{route("category.destroy" , $category->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("category.edit" , $category->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("category.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a> 
            </div>
          </div>
        </div>
       
    
@endsection