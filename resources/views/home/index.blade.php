@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded" style="margin-top:50px;">
        @auth
        @if(auth()->user()->email_verified_at == null)
                <div class="bg-light p-5 rounded">
                <h1>Dashboard</h1>
                
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        A fresh verification link has been sent to your email address.
                    </div>
                @endif

                Before proceeding, please check your email for a verification link. If you did not receive the email,
                <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="d-inline btn btn-link p-0">
                        click here to request another
                    </button>.
                </form>
            </div>
        @else

        @isset($editar)
        @include('layouts.editar')
        @else
        @include('layouts.bookmanagement')
        @endisset

        @endif

        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection