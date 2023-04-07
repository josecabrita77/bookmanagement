<h1 style="text-align:center;text-weight:bold;text-shadow: 2px 2px gray">BOOK MANAGEMENT</h1>
@isset($update_comment)
<br>
@if($update_comment == 1)
<h2 style="background-color:green;color:white;padding:8px;text-align:center;">Update with Success</h2>
@else
<h2 style="background-color:red;color:white;padding:8px;text-align:center;">Update with Error</h2>
@endif


@endisset

<script src="{!! url('assets/jquery-3.6.4.js') !!}"></script>

<!-- Data Table    -->

<link href="{!! url('assets/DataTables/datatables.min.css') !!}" rel="stylesheet"/>

<script src="{!! url('assets/DataTables/datatables.min.js') !!}"></script>
<!--
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
-->

<table id="listManagement" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        @if(!empty($list))  
        @foreach($list as $item)
                <tr>
                <td>{{ $item->firstName }}</td>
                <td>{{ $item->lasName }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->telephone }}</td>
                <td>{{ $item->email }}</td>
                <td><a href="/editar/{{$item->id}}">Editar</a></td>
                <td></td>
                </tr>

        @endforeach
        @endif  


        </tbody>
        <tfoot>
            <tr>
            <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
</table>
<br>
<button id="teste">Aqui</button>

<script>

        $(document).ready(function () {

                $('#teste').click(function(){
                        alert("Ola");
                });
    $('#listManagement').DataTable();

});

</script>



