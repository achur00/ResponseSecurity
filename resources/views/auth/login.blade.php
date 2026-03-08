
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
        <div class="website-logo">
            <a href="{{url('/')}}">
                <div class="">
                    <img class="logo-size" src="{{asset('assets1/images/responseLogo.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('assets1/images/graphic3.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        @if(Session::has('fail'))
                        <div class="alert-warning"> {{Session::get('fail')}}</div>
                        @endif
                        <h3 >Login to account</h3>
                        <p>Welcome back.</p>
                        <form action="{{route('auth.login')}}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget17.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <div class="text">Or login with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="register17.html">Register new account</a>
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