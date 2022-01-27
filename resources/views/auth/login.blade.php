
<html lang="en" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{asset('/front/')}}/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('/front/')}}/css/main.min.css">
    <link rel="stylesheet" href="{{asset('/front/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('/front/')}}/css/color.css">
    <link rel="stylesheet" href="{{asset('/front/')}}/css/responsive.css">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <h1>Winku</h1>
                         
                            <div class="friend-logo">
                                <span><img src="{{asset('/front/')}}/images/wink.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-reg-bg show">
                    
                        <div class="log-reg-area reg">
                            <h2 class="log-title">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label class="control-label" for="input">Email</label><i
                                        class="mtrl-select"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                              
                                <div class="form-group">
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                    {{-- <input type="password" required="required" > --}}
                                    <label class="control-label" for="input">Password</label><i
                                        class="mtrl-select"></i>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="submit-btns">
                                    <button class="mtr-btn signup" type="submit"><span>Login</span></button>
                              
                                    <a href="{{route('register')}}" style="display: inherit;">
                                        <div class="submit-btns">
                                            <button class="mtr-btn signup" type="button"><span>register</span></button>
                                        </div>
                                    </a>
                                </div>

                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/front/')}}/js/script.js"></script>
   
</body>

</html>


