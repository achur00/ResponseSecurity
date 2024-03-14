    @extends('Layouts.dashboardlayout')

    @section('title', 'dashboard')
    @section('content')
    
    
      <!-- main area -->
    
    {{-- FRONT END FOR TABLE --}}
     
        {{-- @if(Session::has('loggedId'))
        
            {{$data['userInfo']['name']}}
        @endIf  --}}

        {{-- data table commented --}}
        {{-- <div class="page-title">
          <div class="title">Datatables</div>
          <div class="sub-title">UI datatables</div>
        </div>
        <div class="card bg-white">
          <div class="card-header">
            Datatables
          </div>
          <div class="card-block">
            <table class="table table-bordered table-condensed datatable m-b-0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start Date</th>
                </tr>
              </thead>
            </table>
          </div>
        </div> --}}
      
  
        {{-- <div class=" py-5">
         
          
          
          
          --}}

          <div class="row">
            
            <div class="col-lg-4">
              <div class="card mb-4  bg-white" style="border-radius:3%;padding:10%; ">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">John Smith</h5>
                  <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                  <div class="d-flex justify-content-center mb-2" style="margin-bottom: 5%; ">
                    <button type="button" class="btn btn-primary">Follow</button>
                    <button type="button " class="btn btn-outline-primary ms-1">Message</button>
                  </div>
                </div>
              </div>
            
            </div>

            <div class="col-lg-8 container   ">
              <div class="card mb-4 mb-lg-0" style="border-radius: 3%;">

                <div class="card-body p-0"  >
                

                  <ul class="notifications bg-white" style="border-radius: 3%;"> 
                    <li class="notifications-header">
                      <p class="text-muted small">You have 3 new messages</p>
                    </li>
                    <li>
                      <ul class="notifications-list">
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-success text-white">
                                <i class="icon-bulb"></i>
                              </div>
                            </div>
                            <span class="notification-message"><b>Sean</b> launched a new application</span>
                            <span class="time">2s</span>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-danger text-white">
                                <i class="icon-cursor"></i>
                              </div>
                            </div>
                            <span class="notification-message"><b>Removed calendar</b> from app list</span>
                            <span class="time">4h</span>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-primary text-white">
                                <i class="icon-basket"></i>
                              </div>
                            </div>
                            <span class="notification-message"><b>Denise</b> bought <b>Urban Admin Kit</b></span>
                            <span class="time">2d</span>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-info text-white">
                                <i class="icon-bubble"></i>
                              </div>
                            </div>
                            <span class="notification-message"><b>Vincent commented</b> on an item</span>
                            <span class="time">2s</span>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="notification-icon">
                            <img src="images/face3.jpg" class="avatar img-circle" alt="">
                            </span>
                            <span class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list</span>
                            <span class="time">9d</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
                <div class="col-sm-6">
                  <div class="card card-block no-border bg-primary text-white">
                    <h6 class="m-a-0">NEW USERS</h6>
                    <h1 class="m-a-0">785</h1>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card card-block no-border bg-dark text-white">
                    <h6 class="m-a-0">PAGE VIEWS</h6>
                    <h1 class="m-a-0">381</h1>
                  </div>
                </div>
        </div>

     
      </div>
       
    @endsection