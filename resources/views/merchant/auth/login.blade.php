@extends('merchant.auth.master')

@section('title' , 'merchant | Login')

@section('content')
    <!-- Register -->
    <div class="card">
        <div class="card-body">

            @include('merchant.auth.partials.logo')

            <h4 class="mb-2">Welcome to {{ config('app.name') }}! 👋</h4>
            <p class="mb-4">Please sign In to your account and start the adventure</p>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form id="formAuthentication" class="mb-3" action="{{ route('merchant.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        autofocus
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">

                    <div class="input-group input-group-merge">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                        />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />

                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                        @error('remember')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>

            <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('merchant.register') }}">
                    <span>Create an account</span>
                </a>
            </p>
        </div>
    </div>
    <!-- /Register -->
@endsection
