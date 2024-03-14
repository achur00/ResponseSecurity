
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets1/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets1/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme17.css')}}">
</head>
<body>
    <div class="form-body without-side">

        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('assets1/images/graphic3.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                
                <div class="form-content">

                    <div class="website-logo">
                        <a href="{{url('/')}}">
                            <div class="">
                                <img class="logo-size" src="{{asset('assets1/images/responseLogo.png')}}" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="form-items">
                        <h3 class="">Register New Account</h3>
                        <p class="">Please fill the required information to get started</p>
                        <form action="{{route('auth.submit')}}" method="POST">
                       @csrf
                        <div class="row justify-content-between">
                        
                            
                            <input class="col-6 form-control" type="text" name="name" placeholder="Full-Name" value="{{old('name')}}" required>
                      

                            <input class="col-5 form-control" type="email" name="email" placeholder="Email-Address" value="{{old('email')}}" required>
                          
                        </div>
                        
                        <div class="row justify-content-between mb-3">                
                           <span class="col-6 text-danger"> @error ('name'){{$message}}@enderror</span>
                           <span class="col-5 text-danger">@error ('email'){{$message}}@enderror</span>
                        </div>
                        

                         <div class="row justify-content-between">   
                            <input class="col-6 form-control" type="password" name="password" placeholder="password"  required>
                            <input class="col-5 form-control" type="password" name=" password_confirmation" placeholder="Confirm Password" required>  
                         </div>
                         
                        <div class="row justify-content-between">
                            <span class="col-6 text-danger"> @error('password'){{$message}}@enderror </span>
                            <span class="col-5 text-danger">  @error(' password_confirmation'){{$message}}@enderror </span>
                        </div>
                        

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Sign Up</button> 
                                {{-- <a href="forget17.html">Forget password?</a> --}}
                            </div>
                        
                        </form>
                        <div class="other-links">
                            <div class="text">Or login with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="{{url('/login')}}">Login Your Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('assets1/js/jquery.min.js')}}"></script>
<script src="{{asset('assets1/js/popper.min.js')}}"></script>
<script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets1/js/main.js')}}"></script>
</body>
</html>