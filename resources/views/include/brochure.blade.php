
      <div class="container-fluid mb-5 mt-5 p-5">
            <div class="row justify-content-center no-gutters">

                            <div class="col-md-6 col-lg-4 d-flex flex-row mb-3 ">
									<div class="mu-about-left">
										<img class="img-thumbnail" src="{{asset('assets/img/response_brochure.png')}}"  alt="img">
									</div>
								</div>
								<div class="col-md-6 col-lg-3  d-flex flex-row mb-3 ">
									<div class="mu-about-right m-md-5">
									
											
												<h3 class="blockquote text-danger">{{$brochure->title}}</h3>
												<p class="small text-dark">{{$brochure->content}}</p>
												<div class="row"></div>
                                                <a  href="{{asset('assets/files/Response-Security-Brochure.pdf')}}" class="btn btn-primary  rounded-pill py-md-3 px-md-5 animated" download>Download</a>
											
											
									</div>
								</div>
								<div class="col-md-6 col-lg-3  d-flex flex-row mb-3 ">
									<div class="mu-about-right m-md-5">
									
											
												<h3 class="blockquote text-danger">{{$Application->title}}</h3>
												<p class="small text-dark">{{$Application->content}}</p>
												<div class="row"></div>
                                                <a  href="{{asset('assets/files/Response-Security-Brochure.pdf')}}" class="btn btn-primary  rounded-pill py-md-3 px-md-5 animated" download>Download</a>
											
											
									</div>
								</div>
									
            </div>
     </div>

