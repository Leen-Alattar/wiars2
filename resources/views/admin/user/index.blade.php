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
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>date_of_birth</th>
                    <th>Nationality ID</th>
                    <th>With Doses </th>
                    <th>Role Name</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td><label class="badge badge-success">{{$user->id}}</label></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->date_of_birth}}</td>
                    <td>{{$user->national_num}}</td>
                    <td>{{$user->is_vaccine}}</td>
                    <td>{{$user->role_id}}</td>
                   
                    <td>
                      <form action = "{{route("user.destroy" , $user->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("user.edit" , $user->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("user.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a> 
            </div>
          </div>
        </div>
       
    
@endsection