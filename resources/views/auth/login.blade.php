@extends('layouts.auth-master')

@section('content')


    <form style="border:1px solid blue;border-radius:5px;margin-top:50px;box-shadow: 5px 10px #888888;padding:10px;" method="post" action="{{ route('login.perform') }}" class="col-md-4 offset-md-4">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!--
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
-->
        <span style="color:blue;"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
<!--
        <div class="form-group form-floating mb-3">
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" value="1">
        </div>
-->
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        
       
    </form>
    <br>
    <a href="/forget-password" role="button"><u>Forgot Password</u></a>
    <br>
    <br>
    @include('auth.partials.copy')
@endsection