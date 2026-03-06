 <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0" id='my_quote'>
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
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                             {{Session::get('success')}}
                        </div>
                          @endif

                        <h1 class="display-5 mb-5">Request Quote</h1>
                        {{-- <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p> --}}
                        <form action="{{url('/quote')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name='name' required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Company Name" style="height: 55px;"  name='comp_name' required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;"  name='email' required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;"  name='mobile'required>
                                </div>

                                 <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Address" style="height: 55px;"  name='address' required>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;"  name='service_type' required>
                                        <option selected>Select A Service</option>
                                        {{-- variable from AppService proider --}}
                                        @foreach ( $services as $service )
                                         <option>{{$service->title}}</option>
                                        @endforeach

                                    </select>

                                </div>

                                 <div class="col-12 col-sm-6">

                                    <select class="form-select border-0" style="height: 55px;"   name='security_no'required>
                                        <option selected >Number of Security </option>
                                        <?php
                                        for($i=1; $i<=19; $i++ ){
                                           echo"<option value=$i> $i</option>";
                                        }
                                        ?>
                                    </select>

                                 </div>

                                 <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Location" style="height: 55px;" name='location'>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Start Date" onfocus="(this.type = 'date')" style="height: 55px;" id="achur-date1"  name='start_date' required>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="End Date" onfocus="(this.type = 'date')" style="height: 55px;" id="achur-date2"  name='end_date' required>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"  name='note'></textarea>
                                </div>
                                <div class="col-12">
                                    <input class="form-control border-0" placeholder="How did you find us?"  name='ref_src'></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn achur-primary rounded-pill  w-100 py-3 g-recaptcha" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                                    data-callback="onSubmit"
                                    data-action="submitContact">
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

