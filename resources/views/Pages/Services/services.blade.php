@extends('Layouts.serviceslayout')
@section('content')

    <div class="container-fluid page-header-services py-5 mb-5 pb-5">
    
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">
                             {{$home_service->Page->page_name}}
                        </li>
                    </ol>
                </nav>
            </div>
    </div>



    <!-- Service Start -->
    <div class="container mb-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="title mb-2 display-5 pt-5">{{$home_service->title}}</h4>
                    <p class="text-muted para-desc mx-auto mb-0">{{$home_service->content}}</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
       
            
       
        <div class="row">
             @foreach ($service_products as $service )
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeIn" data-wow-delay="0.1s">
                <div class="card service-wrapper rounded border-0 shadow p-4">
                    <div class="icon text-center text-custom h1 shadow rounded bg-white">
                        <span class="uim-svg" style="" >{!! $service->svg !!}</span>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">{{$service->title}}</h5>
                        <p class="text-muted mt-3 mb-0">{{$service->content}}</p>
                        <div class="mt-3">
                            <a href="{{url('products/'.$service->id)}}" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                            
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
@endsection

@section('quote_cta')

    <div class="row justify-content-around bg-primary p-5 wow fadeIn mt-5 mb-5" data-wow-delay="1.8s">

        <div class="col-4 text-light "><p>{{$quote_cta->content}}<p></div>
        <div class="col-4"><a href="{{URL('/#my_quote')}}" class="btn btn-light  rounded-pill py-md-3 px-md-5 animated ">{{$quote_cta->cta}}</a></div>
    </div>

@endsection

@section('brochure')
      <div class="container-fluid mb-5 pt-5 mt-5">
            <div class="row justify-content-center no-gutters wow fadeIn mb-5" data-wow-delay="2.0s">

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


