<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('web/images/favicon.png')}}">
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                     @endif

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">{{ __('Reset Password') }}</h4>
                                    <hr>
                                    <form method="POST" action="{{ route('password.email') }}">
                                      @csrf
                                        <div class="form-group">
                                             <label><strong>Email</strong></label>
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                             @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                      
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">
                                              {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('web/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('web/js/quixnav-init.js')}}"></script>
    <script src="{{asset('web/js/custom.min.js')}}"></script>
</body>
</html>