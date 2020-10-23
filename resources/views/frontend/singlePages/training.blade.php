@extends('frontend/layouts.master')
@section('content')

<!-- Project  section start -->
<section class="project bg-success">

{{-- container start --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-light text-center mt-5 mb-3">
            <h2>Md.Makbul Hosen's Training List</h2>
        </div>
    </div>
   <div class="row">
     <div class="col-md-12 text-light mb-5">
          @foreach ($trainings as $training)
          <h3><b class="text-dark">Training_Name : </b> {{$training->training_name}}</h3>
          <h3><b class="text-dark"> Institute_name : </b>{{$training->institute_name}}</h3>
          <h3 class="mb-5"><b class="text-dark">Institute_Location : </b>  {{$training->institute_location}}</h3>
          @endforeach

      </div>
   </div>
</div>
{{-- container end --}}
</section>
<!-- Project us section end -->
@endsection







