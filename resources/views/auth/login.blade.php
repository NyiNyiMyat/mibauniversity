@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center><img src="{{asset('images/logo/logo.png')}}" class="img-fluid"></center>
                    {{-- {{ __('Login') }} --}}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4 class="mt-3"><center> {{ __('Sign in to MIBA') }}</center></h4>
                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="{{ url('/google-login') }}" class="form-control btn btn btn-block" style="border:1px solid #000;">
                                    <img src="https://img.icons8.com/color/28/000000/google-logo.png"/> Login with Google</a>

                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="" class="form-control btn btn-primary btn-block">
                                <img src="https://img.icons8.com/color/25/000000/facebook-new.png"/> Login with Facebook</a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                        <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <label for="email" class="col-form-label" style="color:#000">{{ __('Email Address') }}</label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                        <div class="col-md-3"></div>


                            <div class="col-md-6">
                                <label for="password" class="col-form-label text-md-end" style="color:#000">{{ __('Password') }}</label>
                                <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" style="border:1px solid rgb(100, 98, 98);" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:#000">
                                        {{ __('Keep me signed in') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none;color:#000">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif<br><br>
                            <font style="color: #000;">Not a member? &nbsp;
                                <a href="{{route('register')}}" style="text-decoration: none;color:#000"> Register</a>
                            </font>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // Check for SweetAlert success message
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('sweet_success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('sweet_success') }}',
                icon: 'success',
                timer: 3000, // Set the timer to close the alert after 3 seconds
                showConfirmButton: false
            });
        @endif
    });
</script>

@endsection
