@extends('merchant.auth.master')

@section('title' , 'merchant | Verify Email')

@section('content')
    <!-- Register -->
    <div class="card">
        <div class="card-body">

            @include('merchant.auth.partials.logo')

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 text-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="btn btn-primary">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('merchant.logout') }}" class="text-center mt-2">
                    @csrf

                    <button type="submit" class="btn btn-danger">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
    <!-- /Register -->
@endsection
