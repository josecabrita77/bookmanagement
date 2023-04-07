@extends('layouts.app-master')

@section('create')
    <div class="bg-light p-5 rounded" style="margin-top:50px;">
        @auth

        <h1 style="text-align:center;font-weight:bold;color:blue;">New Contact</h1><br>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ url('/adicionar') }}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="row col col-md-6 offset-md-3">
          <label for="InputFirstName" class="col-form-label text-primary">First Name</label>
          <input type="text" class="form-control" id="InputFirstName" name="InputFirstName">   
        </div>
        <div class="row col col-md-6 offset-md-3">
          <label for="InputLastName" class="col-form-label text-primary">Last Name</label>
          <input type="text" class="form-control" id="InputLasName" name="InputLasName">   
        </div>
        <div class="row col col-md-6 offset-md-3">
          <label for="InputAddress" class="col-form-label text-primary">Address</label>
          <input type="text" class="form-control" id="InputAddress" name="InputAddress">
        </div>
        <div class="row col col-md-6 offset-md-3">
          <label for="InputTelephone" class="col-form-label text-primary">Telephone</label>
          <input type="text" class="form-control" id="InputTelephone" name="InputTelephone">
        </div>
        <div class="row col col-md-6 offset-md-3 mb-3">
          <label for="InputEmail" class="col-form-label text-primary">Email address</label>
          <input type="email" class="form-control" id="InputEmail" name="InputEmail">
        </div>
        
        <div class="row col col-md-3 offset-md-3">
          <input type="submit" class="form-control bg-warning rounded" id="InputSubmit" value="Submit">
        </div>

        

</form>



        @endauth
</div>


@endsection