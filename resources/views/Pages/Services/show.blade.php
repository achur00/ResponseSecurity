@extends('Layouts.productslayout')

@section('header-breadcrumb')
    <!-- Page Header Start -->
                <div class="container-fluid  py-5 mb-5" style=' background: linear-gradient(rgba(22, 22, 22, 0.7), rgba(22, 22, 22, 0.7)),url({{asset('assets/img/'.$product->service_img)}})
         center center
            no-repeat;
    background-size: cover;
    background-position:{{$product->img_position}}'>
                    <div class="container py-5">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Services</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">{{$product->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
@endsection

@section('content')


            <div class="col-md-7 col-sm-7 col-xs-5 ml-xs-5 px-sm-5 ">  
                
                    
                
                        <div class=" pb-2 wow fadeInUp" data-wow-delay="1.0s">
                            {{-- TITLE --}}
                            <h4 class="  display-6">{{$product->title}}</h4>
                            <div class="mx-auto  mb-2"><hr></div> 
                              {{-- CONTENT  --}}
                            <p class="text-muted para-desc mb-0 small">{!! $product->long_content !!}</p>
                            
                    <div class="mt-3 bigscreen">
                        <div class="mo-right pt-3">
                            {{-- IMAGE --}}
                                            <img class="img-fluid img-content justify-content-center"    src="{{asset('assets/img/'.$product->service_img)}}"  alt="img">
                        </div>

                        <div class="mo-left pt-3 ">
                            {{-- PRODUCT SECOND CONTENT --}}
                                            <p>{{$product->content}}</p>
                        </div>
                    </div>
                </div>
                        
                        

            </div>
        </div>
    </div>



        <!-- Quote Start -->
   @include('include.quote')
    <!-- Quote End -->
    
    
@endsection

