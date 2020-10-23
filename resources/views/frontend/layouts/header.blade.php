@php
    $count=0;
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coding Duck</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('public')}}/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('public')}}/frontend/css/style.css">
        <link rel="stylesheet" href="{{asset('public')}}/frontend/css/styles.css">

    <body id="page-top">
            <!-- header section start -->
            <section class="header">
                 {{-- container start --}}

                    <!-- Navigation-->
                    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                        <div class="container">
                            <a class="navbar-brand js-scroll-trigger" href="#page-top" ><img src="{{asset('upload/user_images/'.$logo->image)}}" style=" height: 54px; width: 68px;" alt=""> Coding Duck</a>
                            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                Menu
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('skill')}}">Skill</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('project')}}">Project</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('experience')}} ">Experience</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('training')}} ">Training</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}">Home</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('aboutUs')}}">About</a></li>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('contactUs')}} ">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

        </section>
        <!-- header section end -->

       <!-- Slider Section start -->
     <section class="slider pt-5">
           <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                 @foreach($sliders as $key=> $slider)
               <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($count==0){ active } @endif"></li>
                @endforeach
             </ol>
             <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $slider)
               <div class="carousel-item @if($count==0){ active } @endif " style="background-image: url('{{asset('upload/user_images/'.$slider->image)}}">
                 <div class="carousel-caption d-none d-md-block">
                   <h2 class="display-4">{{$slider->sort_title}}</h2>
                   <p class="lead" >{{$slider->long_title}}</p>
                 </div>
             </div>
               @php
                   $count++
               @endphp
               @endforeach
             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
        </div>
   </section>
    <!-- slider section end -->
