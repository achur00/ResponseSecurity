 @extends('Layouts.master')

@section('title', 'Response UK Security Ltd are specialists at delivering bespoke security and surveillance services, like Retail Security Services, etc. With over 50 years’ experience working within the security industry, our management team is committed to guaranteeing your peace of mind.')

@section('content')

        <!-- Page Header Start -->
    <div class="container-fluid page-header-about py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- About Start -->
    {{-- <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/about.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">About Us</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{asset('assets/img/icon/icon-1.png')}}" alt="Icon">
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
                                        <img class="img-fluid" src="{{asset('assets/img/icon/icon-5.png')}}" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium text-primary mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->

    
    <div class="container-fluid pt-5 pb-5 mb-5 mt-5 ">
            <div class="row justify-content-center no-gutters">

                                <div class="col-md-6 col-lg-4 d-flex flex-row mb-3 ">
									<div class="mu-about-left">
										<img class="img-fluid" src="{{asset('assets/img/about-us.jpg')}}"  alt="img">
									</div>
								</div>
                                
								<div class="col-md-6 col-lg-4  d-flex flex-row mb-3 ">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3 class="blockquote text-danger">Our Mission</h3>
												<p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
											<li>
												<h3 class="blockquote text-danger">Our Vision</h3>
												<p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
											<li>
												<h3 class="blockquote text-danger">Our Value</h3>
												<p class='small'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
										</ul>
									</div>
								</div>

                        </div>
                    </div>



    <section id="main-container" class="main-container mb-5 p-5" style="background:#008bca;">
            <div class="container">
                
                <div class="row justify-content-around">


                    
                    <div class="col-lg-5">
                    <h3 class="column-title text-light mt-4">{{$about->title_f}}</h3>

                    <hr class="text-light lead mt-0"> <p class="small text-light">{{$about->f_content}}</p>
            

              </div><!-- Col end -->

                    <div class="col-lg-5 mt-5 mt-lg-0">
                    <h3 class="column-title text-light mt-4">{{$about->title_s}}</h3>
                    <hr class="text-light lead mt-0">
                    <p class="small text-light">{{$about->s_content}}</p>      

            <div class="row-fluid ">

           
                    <div class="row-fluid mb-md-4">
                        
                    <div class="span12 ">
                        <div class="container row  p-5   mx-auto   ">
                            <a href="{{URL('/')}}" class="btn achur-danger rounded-pill py-md-3 px-md-5 py-sm-3 px-sm-5 animated "><span><b>Our Service</b><span></a>
                           
                            
                                                </div>
                    </div> <!-- tarlent -->
                    </div>
                    </div>
                    <!--</div>-->
                    
                    
            </div>

           



          </div>
        

        </div><!-- Col end -->
    </div><!-- Content row end -->


    
    </section><!-- Main container end -->
  </div><!-- Container end -->

  
{{-- 
                                            <div class="container">

                                                <div class="row">
                                                	<div class="col-md-6">
                                                        <div class="mu-single-team">
                                                            <div class="mu-single-team-img">
                                                                <img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Services</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

                                            <div class="col-md-6    ">
                                                        <div class="mu-single-team">
                                                            <div class="mu-single-team-img">
                                                                <img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Hannah Torres</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

                                        </div>
                                    </div> --}}
            @endsection

        @section('brochure')
      <div class="container-fluid mb-5 p-5">
            <div class="row justify-content-center no-gutters">

                            <div class="col-md-6 col-lg-4 d-flex flex-row mb-3 ">
									<div class="mu-about-left">
										<img class="img-fluid" src="{{asset('assets/img/about-us.jpg')}}"  alt="img">
									</div>
								</div>
								<div class="col-md-6 col-lg-4  d-flex flex-row mb-3 ">
									<div class="mu-about-right m-md-5">
									
											
												<h3 class="blockquote text-danger">Download Our Brochure</h3>
												<p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                                <a href="{{URL('/#my_quote')}}" class="btn btn-primary  rounded-pill py-md-3 px-md-5 animated ">Download</a>
											
											
									</div>
								</div>

            </div>
     </div>
@endsection
      
@section('partners')
{{-- partner's slider --}}
    <div class="container ">
    <h2>Our Partners</h2>
    <section class="customer-logos slider">
        <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
        </div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
        </div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
        <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
        </div>
        <div class="slide"><img
                src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
    </section>
</div>
<script>
    $(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});
</script>
@endsection