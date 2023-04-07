<h1 style="font-weight:bold;text-align:center;margin-bottom:50px;">Edit Contact</h1>

<form action="/update" method="POST" enctype="multipart/form-data" class="col col-md-6 offset-3" style="border:2px solid blue;border-radius:5px;padding:8px;">
    @csrf
<table class="table">
    <tr><td>First Name</td><td><input style="background-color:#ccccff;color:#000080;" type="text" name="firstName" value="{{ $editar->firstName}}" ></td></tr>
    <tr><td>Last Name</td><td><input style="background-color:#ccccff;color:#000080;" type="text" name="lasName" value="{{$editar->lasName}}" ></td></tr>
    <tr><td>Address</td><td><input style="background-color:#ccccff;color:#000080;" type="text" name="address" value="{{$editar->address}}"></td></tr>
    <tr><td>Telephone</td><td><input style="background-color:#ccccff;color:#000080;" type="text" name="telephone" value="{{$editar->telephone}}"></td></tr>
    <tr><td>Email</td><td><input style="background-color:#ccccff;color:#000080;" type="email" name="email" value="{{$editar->email}}"></td></tr>
    <tr><td><input type="submit" value="Submit"></td><td><input type="hidden" name="id" value="{{$editar->id}}"></td></tr>

</table>
</form>


<?php 


//dd($editar);

?>
