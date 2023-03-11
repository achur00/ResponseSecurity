<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{Config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="@yield('title')" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/css/uicons-solid-straight.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
     

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('assets/plugins/css/style.css')}}"> --}}

    {{-- partners-slider --}}
        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}

</head>

<body>
      <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


     <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    
                    <small>{{$contact->address}}</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>{{$contact->email}}</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <a href='tel:{{$contact->phone_no1}}'>
                        <small>{{$contact->phone_no1}}</small>
                    </a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <a href='tel:{{$contact->phone_no1}}'>
                        <small>{{$contact->phone_no2}}</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    {{-- new top bar --}}
  {{-- new top bar end --}}

    <!-- Navbar Start -->
    {{-- {{dd($servicexr)}} --}}
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5 ">
        <img src="{{asset('assets/img/responseLogo.png')}}" class="navbar-brand d-flex align-items-center d-lg-inline-flex d-sm-inline-flex animated slideInDown" />
         
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse animated slideInDown" id="navbarCollapse">
            {{-- dflex align-center makes the button align --}}
            <div class="navbar-nav ms-auto py-4 py-lg-0 d-flex align-items-center ">

                @foreach ( $servicexr as $menus )
                    
                    {{-- <a href="{{url("$menus->page_url")}}" class="nav-item nav-link ">{{$menus->page_name}}</a> --}}
                    
                    {{-- @if(count($menus->service_product)) --}}
                        {{-- <ul> --}}
                            {{-- @foreach ($menus->service_product as $submenu)   
                                <li><a href="">{{$submenu->title}}</a></li>
                            @endforeach --}}

                             {{-- @foreach ($menus->service_product as $submenu)   
                                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                                    <a href="" class="dropdown-item">{{$submenu->title}}</a>
                                </div>
                            @endforeach --}}

                        {{-- </ul> --}}

                        <div class="navbar-collapse" id="main_nav">
                            <ul class="navbar-nav">
                                <li class="{{$menus->nav_style}}" id="myDropdown">
                                <a class="{{$menus->nav_toggle}}" href="{{url("$menus->page_url")}}" data-bs-toggle="">  {{$menus->page_name}}  </a>

                             @if(count($menus->service_product))

                                 <ul class="dropdown-menu">
                                    @foreach ($menus->service_product as $submenu)
                                     <li> <a class="dropdown-item" href="{{url('products/'.$submenu->id)}}"> {{$submenu->title}} </a></li>
                                    @endforeach
                                 </ul>
                              
                            @endif
                      </li>
                    </ul>
                </div>

                @endforeach

                {{-- <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                <a href="{{url('services')}}" class="nav-item nav-link">Service</a>
                <a href="{{url('project')}}" class="nav-item nav-link">Project</a> --}}

                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                {{-- <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a> --}}
                <a href="{{URL('/#my_quote')}}" class="btn btn-primary  rounded-pill py-md-3 px-md-3 small animated ">Get A Quote</a>
            </div>
            {{-- <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div> --}}
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')
    @yield('quote_cta')
    @yield('brochure')
    @yield('partners')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <div class="row">
                    <div class="col-1 mb-2"><i class="fa fa-map-marker-alt me-3"></i></div><div class="col-6">Howbury House Thames Road Crayford DA1 4RQ</p></div></div>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>08455190249</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>01322553105</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@responseuksecurity.co.uk</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square 
                        btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Business Security</a>
                    <a class="btn btn-link" href="">Fire Detection</a>
                    <a class="btn btn-link" href="">Alarm Systems</a>
                    <a class="btn btn-link" href="">CCTV & Video</a>
                    <a class="btn btn-link" href="">Smart Home</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5 rounded-pill" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 rounded-pill">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


  
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            {{-- <div class="row"> --}}

                <div class="text-center">
                    
                   &copy;<?= date('Y') ?> <span class="text-danger">Response Security</span><br> Designed By <a class=" text-info" href="">Arkuz</a> 
                </div>
            {{-- </div> --}}
        </div>
    </div>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
     <script>

        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
</body>

</html>