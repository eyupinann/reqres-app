<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>

</head>
<body>
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Avatar</th>
        <th> Detail</th>
        <th> Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
    <tr>
        <td>{{$datas['id']}}</td>
        <td>{{$datas['email']}}</td>
        <td>{{$datas['first_name']}}</td>
        <td>{{$datas['last_name']}}</td>
        <td><img src="{{$datas['avatar']}}" alt="" class="col-6"></td>
        <td> <a href="{{route('detail',$datas['id'])}}" class="btn btn-success">Detail</a></td>
        <td> <a href="{{route('edit_view',$datas['id'])}}" class="btn btn-warning">Edit</a></td>
        <td> <a href="{{route('destroy',$datas['id'])}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach

    </tbody>

</table>
</div>
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
