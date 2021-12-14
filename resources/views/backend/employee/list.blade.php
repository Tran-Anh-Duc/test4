<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a href="" type="button"><button>ADD</button></a>

    <div class="card">

    <table border="1px" class="table table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Phone</th>
            <th>Number Card</th>
            <th>Email</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $key=> $employee)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$employee->role}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->sex}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->numbercard}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->address}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
