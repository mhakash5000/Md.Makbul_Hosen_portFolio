@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-muted">
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
                    <h5 class="display-5">Edit JobExperinece</h5>
                    <a href="{{route('experience.view')}}" class="btn btn-warning text-dark">JobExperience List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('experience.update',$experienceId->id)}} " method="POST">
                @csrf
                @if(Session::has('success'))
                <div class="btn btn-success">{{Session::get('success')}} </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif
               <div class="form-group">
                <label for="my-input">Designation</label>
                <input type="text" name="designation" value="{{$experienceId->designation}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <font style="color:red">{{($errors->has('designation'))?($errors->first('designation')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Date</label>
                    <input type="text" name="date" value="{{$experienceId->date}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Company_Name</label>
                    <input type="text" name="company_name" value="{{$experienceId->company_name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('company_name'))?($errors->first('company_name')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Company_Address</label>
                    <input type="text" name="company_address" value="{{$experienceId->company_address}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('company_address'))?($errors->first('company_address')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Company_Website</label>
                    <input type="text" name="company_website" value="{{$experienceId->company_website}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('company_website'))?($errors->first('company_website')):''}} </font>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Updated</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
