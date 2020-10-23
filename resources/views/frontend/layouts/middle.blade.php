
<!-- Portfolio Section-->
    <section class="page-section bg-success portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-light mb-0">{{$dev->name}}</h2>
            <br>
            <h2 class="page-section-heading text-center text-uppercase text-light mb-0 display-4">{{$dev->profession}}</h2>
            <br/>
            <h4 class="text-center text-lowercace text-light mb-0 ">{{$dev->description}}</h4>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <img src="{{asset('upload/user_images/'.$dev->image)}}" width="600px" height="600px" class="rounded-circle" alt="Cinque Terre">
                </div>
            </div>
       </div>
    {{-- end container --}}
    </section>



