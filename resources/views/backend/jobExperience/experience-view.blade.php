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
                    <h5 class="display-5">JobExperience List</h5>
                    {{-- @if($users<1) --}}
                  <a href="{{route('experience.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create JobExperience</a>

                  {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
            <table id="example2" class="table table-bordered table-hover text-center">
                {{-- table start --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Designation</th>
                        <th>Date</th>
                        <th>Company_Name</th>
                        <th>Company_Address</th>
                        <th>Company_Website</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($JobExperiences as $key=> $Jobexperience)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$Jobexperience->designation}}</td>
                        <td>{{$Jobexperience->date}}</td>
                        <td>{{$Jobexperience->company_name}}</td>
                        <td>{{$Jobexperience->company_address}}</td>
                        <td>{{$Jobexperience->company_website}}</td>
                        <td>
                            <a href="{{route('experience.edit',$Jobexperience->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                            <a href="{{route('experience.destroy',$Jobexperience->id)}}" id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
