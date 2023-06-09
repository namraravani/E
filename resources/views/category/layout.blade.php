@extends('dashboard')
@section('category-content')
<!DOCTYPE html>
<html>
<head>
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
{{--     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
{{--     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> --}}
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
{{--     <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
{{--     <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> --}}
<script src="https://kit.fontawesome.com/d98a6653af.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Datatable CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href={{ asset('assests/css/create_category.css')}} class="css">

    <script>
        $(document).ready(function() {
          $('#table').DataTable();
      });
</script>

</head>
<body>

<div class="container">
    @yield('content')
</div>
@endsection

</body>
</html>
