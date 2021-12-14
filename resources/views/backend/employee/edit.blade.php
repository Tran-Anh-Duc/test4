<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card" style="width: 1000px;background-color: #180f0f">
    <form action="" method="post">
        <h1 style="color: #00b0ff">Add Employee</h1>
        @csrf
        <div>
            <label>
                <input style="width: 1000px;height: 30px ;font-size: 30px"  value="{{$employee->role}}" class="alert alert-primary"
                       role="alert" type="text" name="role">
            </label>
            {{--        @error('name')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>
        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px"  value="{{$employee->name}}" class="alert alert-primary"
                       role="alert" type="text" name="name">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>

        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px"  value="{{$employee->sex}}" class="alert alert-primary"
                       role="alert" type="text" name="sex">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>

        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px"  value="{{$employee->phone}}" class="alert alert-primary"
                       role="alert" type="text" name="phone">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>

        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px" value="{{$employee->numbercard}}" class="alert alert-primary"
                       role="alert" type="text" name="numbercard">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>


        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px" value="{{$employee->email}}" class="alert alert-primary"
                       role="alert" type="text" name="email">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>


        <div>
            <label>
                <input style="width: 1000px;height: 30px;font-size: 30px" value="{{$employee->address}}" class="alert alert-primary"
                       role="alert" type="text" name="address">
            </label>
            {{--        @error('description')--}}
            {{--        <p class="text text-danger">{{$message}}</p>--}}
            {{--        @enderror--}}
        </div>




        <button class="btn btn-success" type="submit">Add</button>
        <a class="btn btn-success" type="button" href="{{route('employees.index')}}">back</a>

    </form>
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
