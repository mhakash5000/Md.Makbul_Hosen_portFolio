@extends('frontend/layouts.master')
@section('content')

<!-- Project  section start -->
<section class="project bg-success">

{{-- container start --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-light text-center mt-5 mb-3">
            <h2>Md.Makbul Hosen's Experience</h2>
        </div>
    </div>
   <div class="row">
     <div class="col-md-12 text-light mb-5">
          @foreach ($experiences as $experience)
          <h3><b class="text-dark">Designation : </b> {{$experience->designation}}</h3>
          <h3> <b class="text-dark"> Period : </b>{{$experience->date}}</h3>
          <h3><b class="text-dark">Company's Name :</b>  {{$experience->company_name}}</h3>
          <h3><b class="text-dark">Company's Address : </b> {{$experience->company_address}}</h3>
          <h3><a class="btn btn-outline-dark mb-4" href="{{$experience->company_website}}" title="" terget="_blank">CLICK ME TO GET COMPANY'S WEBSITE</a></h3>
          @endforeach

      </div>
   </div>
</div>
{{-- container end --}}
</section>
<!-- Project us section end -->
@endsection







