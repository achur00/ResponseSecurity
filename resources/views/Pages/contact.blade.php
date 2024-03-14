 @extends('Layouts.master')

@section('title', 'Contact us at response Security on phone: 0208 226 2177')

@section('content')
      <div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2485.6903842004604!2d0.1824383152805845!3d51.46384082170883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHowbury%20House%20Thames%20Road%20Crayford%20DA1%204RQ!5e0!3m2!1sen!2sng!4v1679449176672!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


 <!-- Contact Start -->
 
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            
            <div class="row justify-content-center g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                   
                        <div class="p-lg-5 ps-lg-0">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4">Contact Us</h1>
                            </div>
                            <div class="row">
                                <div class="col-6"> 
                                    <blockquote>
                                    <small class="text-light"><small class="fa fa-map-marker-alt text-white p-2"></small> Howbury House Thames Road Crayford DA1 4RQ
                                    </small>
                                    </blockquote>
                                </div>
                                <div class="col-6"> 
                                    
                                    <small class="fa fa-envelope-open text-white text-white p-2 text-light"></small>
                                    <a href="mailto:info@responseuksecurity.co.uk" class="text-light"> 
                                    <small>info@responseuksecurity.co.uk</small>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="row pb-5">
                                <div class="col-6"> 
                                    
                                        <span ><small class="fa fa-phone-alt text-light"></small>
                                        <a href="tel:08455190249">
                                            <small class="text-light">01322553105</small>
                                        </a>
                                    </span>
                                    
                                </div>
                                <div class="col-6"> 
                                    
                                        <small><small class="fa fa-phone-alt text-light"></small>
                                        <a href="tel:08455190249">
                                            <span class="text-light">01322553105</small>
                                        </a>
                                        </span>

                                </div>
                            </div>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn achur-primary w-100 py-3 rounded-pill" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                <div class="col-lg-6 pe-lg-0 align-self-end" style="">
                    <img src="{{asset('assets/img/center-2022-12-07-22-10-45-utc.png')}}" alt="" class="w-100 p-md-5">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection