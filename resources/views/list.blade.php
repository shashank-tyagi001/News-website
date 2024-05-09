 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>showNews</title>
</head>
 <link rel="stylesheet" href={{ asset('assest/css/bootstrap.rtl.min.css') }}>
<link rel="stylesheet" href={{ asset('assest/css/dataTables.bootstrap5.css') }}>




<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Area</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registers as $register)
            <tr>
                <td>{{$register['fname']}}</td>
                <td>{{$register['lname']}}</td>
                <td>{{$register['email']}}</td>
                <td>{{$register['area']}}</td>
                <td>{{$register['title']}}</td>
                <td>{{$register['description']}}</td>
                <td> <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo" /></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <script src={{asset('assest/js/custom.js')}} ></script>
    <script src={{ asset('assest/js/dataTables.js') }}></script>
    <script src={{ asset('assest/js/dataTables.bootstrap5.js') }}></script>
    <script src={{ asset('assest/js/jquery-3.7.1.js') }}></script>
    <script src={{ asset('assest/js/bootstrap.bundle.min.js') }}></script>



</body>
</html> --}}

@extends('Layout.header');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/dataTables.bootstrap5.css') }}">

<style>
    body {
         background-color: rgb(80, 205, 117);
    }
</style>

</head>

@section('content')
<body>
    <h2 style="text-align: center;">All Content</h2>

    <div class="container">
      <div class="row">
        @if (session('success'))
            <p class="alert alert-success text-center">{{ session('success') }}</p>
          @endif
          @if (session('update'))
            <p class="alert alert-success text-center">{{ session('update') }}</p>
          @endif
        <div class="col-xs-12">

        <div class="table-responsive">
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive" id="example">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Area</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($registers as $register)
                        <tr>
                         <td>{{$register['fname']}}</td>
                    <td>{{$register['lname']}}</td>
                    <td>{{$register['email']}}</td>
                    <td>{{$register['area']}}</td>
                    <td>{{$register['title']}}</td>
                    <td>@php echo $register->description @endphp</td>
                    <td> <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo" /></td>
                    <td> <a class="btn btn-primary" href={{route('edit' , $register->id)}}>Update</a>&nbsp;<a class="btn btn-primary" href={{route('deleteNews' , $register->id)}}>Delete</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
        </div>

        </div>
      </div>
    </div>
      </div>
    </body>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assest/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assest/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assest/js/dataTables.js') }}"></script>
    <script src="{{ asset('assest/js/dataTables.bootstrap5.js') }}"></script>
    <script src={{asset('assest/js/custom.js')}} ></script>

@include('Layout.footer');
    @endsection
