<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sports Section</title>
</head>

<body>



    @foreach($registers as $register)
    @if($register['area']== 'Sports')


    <div class="card mt-5 ml-5" style="width:90%">
        <div class="row center">
            <div class="col-sm-6">
                <img src="{{url('uploads/newsImage/' .$register->image)}}" class="card-img-top" alt="..." style="width:90%;height:90%">
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <h5 class="card-title">{{ $register['title'] }}</h5>
                    <p class="card-text">@php echo  $register['description']  @endphp</p>
                    {{-- <p class="card-text"><small class="text-muted"> Publish Date:
                            {{ date('d-m-Y', strtotime($news['publishedAt']));  }}</small></p>
                    <p class="card-text"><small class="text-muted"> Author: {{ $news['author'] }}</small></p> --}}

                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
