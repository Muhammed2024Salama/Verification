@extends('merchant.auth.master')

@section('title', 'merchant | Register')

@section('content')

    <!-- Register Card -->
    <div class="card">
        <div class="card-body">

            @include('merchant.auth.partials.logo')

            <h4 class="mb-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Make your app management easy and fun!</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('merchant.register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="name"
                        placeholder="Enter your username"
                        autofocus
                    />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
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


                <button class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('merchant.login') }}">
                    <span>Sign in instead</span>
                </a>
            </p>
        </div>
    </div>
    <!-- Register Card -->

@endsection
