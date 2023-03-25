@extends('Layouts.productslayout')

@section('header-breadcrumb')
    <!-- Page Header Start -->
                <div class="container-fluid page-header-about py-5 mb-5">
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
    <div class="container-fluid bg-light overflow-hidden px-lg-0" id='my_quote'>
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/quote.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">Request Quote</h1>
                        {{-- <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p> --}}
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Company Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;" required>
                                </div>
                                 
                                 <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Address" style="height: 55px;" required>
                                </div>
                                
                               
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" required>
                                        <option selected>Select A Service</option>
                                        <option value="1"> Corporate Guarding</option>
                                        <option value="2">Retail Guarding</option>
                                        <option value="3">CCTV Monitoring and Installation</option>
                                        <option value="3">Door Supervision</option>
                                        <option value="3">Events</option>
                                        <option value="3">Building Sites</option>
                                        <option value="3">Consultancy</option>
                                        <option value="3">Others</option>
                                    </select>
                                   

                                </div>

                                 <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" required>
                                        <option selected >Number of Security </option>
                                        <?php 
                                        for($i=1; $i<=19; $i++ ){
                                           echo"<option value=$i> $i</option>";
                                        }
                                        ?>   
                                    </select>
                                 </div>

                                 <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Location" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Start Date" onfocus="(this.type = 'date')" style="height: 55px;" id="achur-date1" required>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="End Date" onfocus="(this.type = 'date')" style="height: 55px;" id="achur-date2" required>
                                </div>
                                
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <input class="form-control border-0" placeholder="How did you find us?"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn achur-primary rounded-pill  w-100 py-3" type="submit">
                                        Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    
@endsection

