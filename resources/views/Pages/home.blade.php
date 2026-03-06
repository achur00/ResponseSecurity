@extends('Layouts.master')

@section('title', 'One of the major Security Companies In London, Response UK Security Ltd. provide a broad range of Professional Security Services and surveillance services to large, medium and small corporate organizations and businesses across London, the South East and the UK')

@section('content')
  

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">

            @foreach ( $home_banners as $banner)
            <div class="owl-carousel-item position-relative">
               
                <img class="img-fluid" src="{{asset('assets/img/'.$banner->image)}}" alt="">
   
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                 
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{$banner->title}}</h1>
                                <p class="fs-5 text-white mb-4 pb-2">{{$banner->content}}</p>
                               
                                <a href="{{url("products/".$banner->id)}}" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"> Read More</a>
                              
                                <a href="{{url('/#my_quote')}}" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">request Quote</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach
                  
            
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                @foreach ($home_qualities as $quality )
                    
               
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{$quality->anim_delay}}">
                    <div class="h-100 bg-dark p-4 p-xl-5 rounded">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="{{ asset('assets/img/icon/'.$quality->image) }}" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #383838;"><img class="img-fluid" src="{{ asset('assets/img/icon/'.$quality->image2) }}" alt="Icon"></h1>
                        </div>
                        <h5 class="text-white">{{$quality->title}}</h5>
                        <hr class="w-25">
                        <span style="color:whitesmoke;">{{$quality->content}}</span>
                    </div>
                </div>
                 @endforeach

            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/about2.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">{{$home_about->title}}</h1>
                        <p class="mb-4 pb-2 text-light">{{$home_about->content}}</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{asset('assets/img/emoji-smile.png')}}" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium text-primary mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{asset ('assets/img/emoji-security.png')}}" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium text-primary mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/about')}}" class="btn achur-primary rounded-pill py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="title mb-2 display-5 pt-5">{{$home_service->title}}</h4>
                    <p class="text-dark para-desc mx-auto mb-0">{{$home_service->content}}</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
       
            
       
        <div class="row">
             @foreach ($service_products->take(6) as $service )
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeIn" data-wow-delay="0.1s">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                        <span class="uim-svg" style="" >{!! $service->svg !!}</span>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">{{$service->title}}</h5>
                        <p class="text-dark mt-3 mb-0">{{$service->content}}</p>
                        <div class="mt-3">
                            <a href="{{url( "products/".$service->id)}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="big-icon h1 text-custom">
                        <span class="uim-svg" style=""></span>
                    </div>
                </div>  
            </div><!--end col-->
             @endforeach
        </div>
               </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <a href="{{url('services')}}"> <button type="button" class="btn btn-primary rounded-pill mt-4 mw-50 py-3 px-5">More Service</button></a></div>
        </div>
    <!--end row-->
    </div>       
    <!-- Service End -->


    <div class="p-3"></div>

    <!--why choose us -->
    <div class="container-fluid bg-light overflow-hidden mt-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">{{$home_why_choose->title}}</h1>
                        <p class="mb-4 pb-2 text-white">{{$home_why_choose->content}}</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" style="width: 50px; height: 50px;" src="{{asset('assets/img/icon/guarantee.png')}}" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Trusted</p>
                                        <h5 class="mb-0">Security</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid"style="width: 50px; height: 50px;" src="{{asset('assets/img/icon/shield-1.png')}}" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset("assets/img/$home_why_choose->img")}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    
   @include('include.brochure')


    <!-- Quote Start -->
   @include('include.quote')
    <!-- Quote End -->
    


    
@endsection

 
    