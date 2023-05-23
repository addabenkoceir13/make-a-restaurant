@extends('layouts.app')

@section('content')
<div class="page-wrapper bg-blue p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>
                <form  method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-6 col-sm-12">
                            <input class="input--style-2 @error('fname') is-invalid @enderror" value="{{ old('fname') }}" type="text" placeholder="First Name" name="fname">
                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="input--style-2 @error('lname') is-invalid @enderror" value="{{ old('lname') }}" type="text" placeholder="Last Name" name="lname">
                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="input--style-2  @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="your-email@example.dz">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="password" class="input--style-2  @error('password') is-invalid @enderror" id="showpassword" name="password" placeholder="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input  class="input--style-2" id="showpassword1" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" onclick="functionshowpassword()" id="shwo">
                            <label class="form-check-label" for="shwo">
                                Shwo password
                            </label>
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Register</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div> --}}
@endsection

@section('scripts')
    <script>
        const showpassword = document.getElementById("showpassword");
        const showpassword1 = document.getElementById("showpassword1");

        function functionshowpassword()
        {
            if (showpassword.type == "password" || showpassword1.type == "password")
            {
                showpassword.type = "text"
                showpassword1.type = "text"
            }
            else
            {
                showpassword.type = "password"
                showpassword1.type = "password"
            }
        }
    </script>
@endsection
