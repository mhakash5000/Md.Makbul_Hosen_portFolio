@extends('frontend/layouts.master')
@section('content')


<!-- Project  section start -->
<section class="project bg-success">

{{-- container start --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-light text-center mt-5 mb-3">
            <h2>Md.Makbul Hosen's Skills</h2>
        </div>
    </div>
   <div class="row">
     <div class="col-md-12  text-light justify-content-center mb-5">
          @foreach ($skills as $key=> $skill)
          <h3>{{$skill->skill}}</h3>
          <div class="progress">
            <div class="progress-bar bg-dark progress-bar-striped" title="{{$skill->title}} " style="width:{{$skill->percentage}} "></div>
          </div>
          @endforeach

      </div>
   </div>


</div>
{{-- container end --}}
</section>
<!-- Project us section end -->
@endsection







