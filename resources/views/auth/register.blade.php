{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection --}}



















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
                            <h2 class="log-title">register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                  <label class="control-label" for="input">First &amp; Last Name</label><i
                                        class="mtrl-select"></i>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                    <label class="control-label" for="input">Email</label><i
                                        class="mtrl-select"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                              
                                <div class="form-group">
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password" autofocus>

                                    {{-- <input type="password" ="" > --}}
                                    <label class="control-label" for="input">Password</label><i
                                        class="mtrl-select"></i>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" name="password_confirmation"  autocomplete="new-password">
                           
                                    {{-- <input type="password" ="" > --}}
                                    <label class="control-label" for="input">Password Confirm</label><i
                                        class="mtrl-select"></i>

                                </div>

                              
                                <div class="form-radio">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender_type" ><i
                                                class="check-box"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender_type"><i class="check-box"></i>Female
                                        </label>
                                    </div>
                                    @error('gender_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>Accept
                                        Terms &amp; Conditions ?
                                    </label>
                                </div>
                                <a href="{{route('login')}}" title="" class="already-have">Already have an account</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signup" type="submit"><span>Register</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___
    <script src="{{asset('/front/')}}/js/script.js"></script>
   
</body>

</html>
