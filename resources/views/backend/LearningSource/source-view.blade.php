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
                    <h5 class="display-5">LearningSource List</h5>
                    @if($users<1)
                  <a href="{{route('source.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create LearningSource</a>

                  @endif
                </div>
            </div>
        </div>
    </div>
            <table id="example2" class="table table-bordered table-hover text-center">
                {{-- table start --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Google</th>
                        <th>Youtube</th>
                        <th>PHP</th>
                        <th>Laravel</th>
                        <th>React.js</th>
                        <th>Stackoverflow</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($LeaningSources as $key=> $LeaningSource)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$LeaningSource->title}}</td>
                        <td>{{$LeaningSource->google}}</td>
                        <td>{{$LeaningSource->youtube}}</td>
                        <td>{{$LeaningSource->laravel}}</td>
                        <td>{{$LeaningSource->php}}</td>
                        <td>{{$LeaningSource->react}}</td>
                        <td>{{$LeaningSource->stackoverflow}}</td>
                        {{-- <td><img src="{{asset('upload/user_images/'.$LeaningSource->image)}}" width="60px";height='60px' alt=""></td> --}}


                        <td>
                            <a href="{{route('source.edit',$LeaningSource->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                            <a href="{{route('source.destroy',$LeaningSource->id)}}" id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
