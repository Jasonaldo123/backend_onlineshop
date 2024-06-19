@extends('layouts.auth', ['title' => 'Register'])

@section('content')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="img-logo text-center mt-5">
                    <img src="{{ asset('assets/img/juntak_star.png') }}"
                        style="width: 120px;">
                </div>
                <div class="card o-hidden border-0 shadow-lg mb-1 mt-3">
                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="text-center">
                            <h1 class="h5 text-gray-900 mb-3">REGISTER ADMIN</h1>
                        </div>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name">
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password">
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                            <hr>
            
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
            
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection