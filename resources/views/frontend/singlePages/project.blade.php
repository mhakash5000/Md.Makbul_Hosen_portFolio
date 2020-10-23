@extends('frontend/layouts.master')
@section('content')

<!-- Project  section start -->
<section class="project bg-success">

{{-- container start --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-light text-center mt-5">
            <h2>ALL PROJECT LIST IN GITHUB</h2>
        </div>
    </div>
   <div class="row">
     <div class="col-md-12 text-light mb-5">
          @foreach ($projects as $key=> $project)
          <h3 class="pt-3">{{$key+1}}. {{$project->title}}</h3>
          <a class="btn btn-outline-dark" href="{{$project->project_link}}" title="Github Project Link" terget="_blank"><i class="fab fa-github"></i> CLICK ME TO GET PROJECT LINK</a>

          @endforeach

      </div>
   </div>
</div>
{{-- container end --}}
</section>
<!-- Project us section end -->
@endsection







