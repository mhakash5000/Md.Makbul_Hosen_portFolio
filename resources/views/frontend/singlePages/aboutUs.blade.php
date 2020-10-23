@extends('frontend/layouts.master')
@section('content')

<!-- about us section start -->
<section class="about-us bg-success">

{{-- container start --}}
<div class="container">
   <div class="row">
     <div class="col-md-6">
       <h3 style="padding-top: 10px; padding-bottom: 5px; border-bottom:black solid 2px; width:340px;">{{$about_us->title}}</h3>
       <p>{{$about_us->description}} </p>
     </div>
     <div class="col-md-6">
        <img src="{{asset('upload/user_images/'.$about_us->image)}}" width="350px" height="350px" class="rounded-circle" alt="Cinque Terre">
      </div>
   </div>
</div>
{{-- container end --}}
</section>
<!-- about us section end -->
@endsection







