<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin</title>
<!--
    <script src="{!! url('assets/DataTables/jQuery-3.6.0/jquery-3.6.0.js') !!}"></script>
-->
    <script src="{!! url('assets/jquery-3.6.4.js') !!}"></script>

        <!-- Data Table    -->
<!--
        <link href="{!! url('assets/DataTables/DataTables-1.13.4/css/jquery.dataTables.min.css') !!}" rel="stylesheet"/>

 <script src="{!! url('assets/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js') !!}"></script>

 <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
-->

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
<!--
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
-->

    <link href="{!! url('assets/font-awesome-4.7.0/css/font-awesome.min.css') !!}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/fontawesome.min.js"></script>

    <!--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" rel="stylesheet">
--> 
<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
-->
  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      i{
            font-size: 50px !important;
            padding: 10px;
        }

      
    </style>

    
    <!-- Custom styles for this template -->
    <!--
    <link href="signin.css" rel="stylesheet">
    -->
</head>
<body class="text-center">
    
    <main class="form-signin">

        @yield('content')
        @yield('forget')
        @yield('link')
        
    </main>
    

</body>
</html>