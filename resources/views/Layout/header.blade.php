<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>News 24 - Free News Website Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href={{asset('assest/js/slick/slick.css')}} rel="stylesheet">
        <link href={{asset('assest/js/slick/slick-theme.css')}} rel="stylesheet">
        <link href={{asset('assest/css/style.css')}} rel="stylesheet">
        <link href={{asset('assest/css/custom.css')}} rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        $(document).ready(function () {
            $('#search').keyup(function () {
                var query = $(this).val();
                if (query !== '') {
                    $.ajax({
                        url: ' route{{('SearchEngine') }}',
                        method: 'GET',
                        data: {search: query},
                        success: function (data) {
                            $('#searchResults').html(data);
                        }
                    });
                } else {
                    $('#searchResults').empty();
                }
            });
        });
    </script>


        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="">
                                <img src={{asset('assest/img/logo.png')}} alt="Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4">
                        <form action={{route('SearchEngine')}} method="GET" enctype="multipart/form-data">
                        <div class="search">
                            <input type="text" placeholder="Search Category News" name="search" id="search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                     </form>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="social">
                            @foreach ($media as $social)
                            <a href={{$social->link}}><i class="{{$social->icon}}"></i></a>
                            @endforeach
                            {{-- <a href="https://www.facebook.com/news24channel/"><i class="fab fa-facebook"></i></a>
                            <a href="https://in.linkedin.com/company/news24official"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/news24official/?hl=en"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw"><i class="fab fa-youtube"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->


        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                              @foreach ($menuItem as $item)
{{-- @dd($item); --}}

                             @if(count($item->submenus) > 0)
                             <div class="nav-item dropdown">
                                <a href={{$item->link}} class="nav-link dropdown-toggle" data-toggle="dropdown">{{$item->name}}</a>

                                <div class="dropdown-menu">

                                    @foreach ($item->submenus as $submenu)
                                    <a href={{$submenu->link}} class="dropdown-item">{{$submenu->name}}</a>
                                    @endforeach
                                    {{-- <a href={{'addNews'}} class="dropdown-item">ADD NEWS</a>
                                    <a href={{'list'}} class="dropdown-item">Table</a> --}}
                                </div>
                            </div>
                              @else
                              <a href={{$item->link}} class="nav-item nav-link ">{{$item->name}}</a>
                              @endif
                              @endforeach

{{--
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Content</a>
                                <div class="dropdown-menu">
                                    <a href={{'addNews'}} class="dropdown-item">ADD NEWS</a>
                                    <a href={{'list'}} class="dropdown-item">Table</a>
                                </div>
                            </div> --}}
                            {{-- <a href={{'latestNews'}} class="nav-item nav-link">Latest News</a>
                            <a href={{'contact'}} class="nav-item nav-link">Contact Us</a> --}}

                         </div>
                    </div>
                </nav>
            </div>
        </div>

    @yield('content')
