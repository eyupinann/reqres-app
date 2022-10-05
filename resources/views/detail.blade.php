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
    <div class="row">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$res['data']['avatar']}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$res['data']['first_name']}} {{$res['data']['last_name']}}</h5>
            <p class="card-text">{{$res['support']['text']}}</p>
            <a href="#" class="btn btn-primary">{{$res['data']['email']}} </a>
        </div>
    </div>
    </div>
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
