@extends('layouts.app')

@section('content')
<style>

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center><img src="{{asset('images/logo/logo.png')}}" class="img-fluid">

                </div>
                <h4 class="mt-3"><center> {{ __('Sign up for MIBA') }}</center></h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('accountregister') }}">
                        @csrf

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
                                <label for="name" class="col-form-label" style="color:#000;">{{ __('Fullname') }}</label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" type="text" class="form-control @error('fullname') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
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
                                <label for="name" class="col-form-label" style="color:#000;">{{ __('Phone') }}</label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="email" class="col-form-label" style="color:#000;">{{ __('Email Address') }}</label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password" class="col-form-label" style="color:#000;">{{ __('Password') }}</label>
                                <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label" style="color:#000;">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0" style="color: #000;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn" style="border:1px solid rgb(99, 95, 95);">
                                    <font style="color:000;">{{ __('Sign Up') }}</font>
                                </button>&nbsp;&nbsp;
                                Already a member? <a href="{{route('login')}}" style="text-decoration: none;color:#000"> Sign in</a>
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
