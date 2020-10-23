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
                    <h5 class="display-5">Edit LearningSource</h5>
                    <a href="{{route('source.view')}}" class="btn btn-warning text-dark">Learning Source List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('source.update',$sourceId->id)}} " method="POST" enctype="multipart/form-data" >
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
                <label for="my-input">Title</label>
                <input type="text" name="title" value="{{$sourceId->title}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Google</label>
                    <input type="text" name="google" value="{{$sourceId->google}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('google'))?($errors->first('google')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Youtube</label>
                    <input type="text" name="youtube" value="{{$sourceId->youtube}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('youtube'))?($errors->first('youtube')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">PHP</label>
                    <input type="text" name="php" value="{{$sourceId->php}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('php'))?($errors->first('php')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Laravel</label>
                    <input type="text" name="laravel" value="{{$sourceId->laravel}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('laravel'))?($errors->first('laravel')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">React.js</label>
                    <input type="text" name="react" value="{{$sourceId->react}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('react'))?($errors->first('react')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Stackoverflow</label>
                    <input type="text" name="stackoverflow" value="{{$sourceId->stackoverflow}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <font style="color:red">{{($errors->has('stackoverflow'))?($errors->first('stackoverflow')):''}} </font>
                </div>
                {{-- <div class="form-group">
                    <label for="my-input">Image</label>
                    <img src="{{asset('upload/user_images/'.$sourceId->image)}}" id="image" style="width:460px;height:238px">
                    <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
                </div> --}}
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
