@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                    <h5 class="display-5">Developer List</h5>
                    @if($users<1)
                  <a href="{{route('developerInfo.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create Developer</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
            <table id="example2" class="table table-bordered table-hover text-center">
                {{-- table start --}}
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($developers as $key=> $developer)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$developer->name}}</td>
                        <td>{{$developer->profession}}</td>
                        <td>{{$developer->description}}</td>
                        <td><img src="{{asset('upload/user_images/'.$developer->image)}}" width="60px";height='60px' alt=""></td>


                        <td>
                            <a href="{{route('developerInfo.edit',$developer->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                            <a href="{{route('developerInfo.destroy',$developer->id)}} " id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- table end --}}



</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
