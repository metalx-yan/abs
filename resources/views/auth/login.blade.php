@extends('auth.layouts.main')

@section('content')

<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                <h1><i class="fa fa-user icon"><h1>Kesiswaan</h1></i></h1>
                @csrf
                <h5>Login Form</h5>
                <div>

                    {{-- <input type="text" class="form-control" placeholder="Username" required="" /> --}}
                    <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                </div>
                <br>
                <div>

                    {{-- <input type="password" class="form-control" placeholder="Password" required="" /> --}}
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                </div>
                <div>

                    {{-- <a class="btn btn-default submit" href="index.html">Log in</a> --}}
                    <button type="submit" class="btn btn-default submit">
                        {{ __('Login') }}
                    </button>


                  {{--   <a class="reset_pass" href="#">Lost your password?</a> --}}
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>


                </div>

                <div class="clearfix"></div>

                
            </form>
        </section>
    </div>
</div>
@endsection