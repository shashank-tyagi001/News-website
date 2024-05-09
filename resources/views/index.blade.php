@extends('Layout.header')
        <!-- Header End -->

@section('content')

{{-- For promoting ads --}}
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        @foreach ($banner as $item)


        <div class="carousel-item active" >
            <div class="container">
               <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{$item->heading}}</h1>
                    <p>{{$item->description}}</p>
                </div>
               </div>
            </div>
            <img src="{{url('uploads/newsImage/' .$item->banner)}}"  class="d-block w-100" alt="...">
          </div>
        @endforeach
{{--
      <div class="carousel-item">
        <img src={{asset('uploads/newsImage/Ads2.jpg')}}  class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src={{asset('uploads/newsImage/ads3.jpg')}} class="d-block w-100" alt="...">
      </div> --}}

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


   <!-- Top News Start-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6 tn-left">
                        <div class="tn-img">
                            @foreach ($youtube as $item)
                            <iframe width="630" height="440" src="https://www.youtube.com/embed/{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6 tn-right">
                        <div class="row">

                            <div class="col-md-6">
                                <marquee direction="left" style="color: red;">
                                    This goes to be very viral Our market is get crashed very soon in 2024.
                                </marquee>
                                <img src={{asset('uploads/newsImage/breakingNews.jpg')}} alt="breaking" width="100%"></img>
                            </div>

                            <div class="col-md-6">
                                <marquee direction="left" style="color: red;">
                                This goes to be very viral Our market is get crashed very soon in 2024.
                                </marquee>
                                <img src={{asset('uploads/newsImage/breakingNews.jpg')}} alt="breaking" width="100%"></img>
                            </div>

                            <div class="col-md-6">
                                <marquee direction="left" style="color: red;">
                                    This goes to be very viral Our market is get crashed very soon in 2024.
                                </marquee>
                                <img src={{asset('uploads/newsImage/breakingNews.jpg')}} alt="breaking" width="100%"></img>
                            </div>

                            <div class="col-md-6">
                                <marquee direction="left" style="color: red;">
                                    This goes to be very viral Our market is get crashed very soon in 2024.
                                </marquee>
                                <img src={{asset('uploads/newsImage/breakingNews.jpg')}} alt="breaking" width="100%"></img>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top News End-->




        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Sports</h2>
                        <div class="row cn-slider">
                        @foreach ($registers as $register )
                        @if($register['area'] == 'Sports')
                            <div class="col-md-6">
                                    <div class="cn-img">
                                    <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-title" href="{{ url('/singlePage/' . $register->id) }}">{{ $register->title }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                         @endforeach
                        </div>
                    </div>


                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Technology</h2>
                        <div class="row cn-slider">
                            @foreach($registers as $register)
                            @if($register['area'] == 'Technology')
                            <div class="col-md-6">
                                <div class="cn-img tn-content">
                                    <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo"/>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href={{route('singlePage',$register->id)}}>{{$register['title']}}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Business</h2>
                        <div class="row cn-slider">
                            @foreach($registers as $register)
                            @if ($register['area'] == 'Business')
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo"/>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href={{route('singlePage',$register->id)}}>{{$register['title']}}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Entertainment</h2>
                        <div class="row cn-slider">
                            @foreach($registers as $register)
                            @if ($register['area'] == 'Entertainment')
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{url('uploads/newsImage/' .$register->image)}}" alt="Logo"/>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href={{route('singlePage',$register->id)}}>{{$register['title']}}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Main News Start-->
        <div class="main-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                                <div class="row ">
                                    <div class="col-lg-6  latest_data_top">

                                    </div>

                                    <div class="col-lg-6 latest_data">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                                <div class="row">
                                    <div class="col-lg-6 popular_data_top">

                                    </div>

                                    <div class="col-lg-6 popular_data">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Category</h2>
                                <div class="category">
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href={{'sportsApi'}}>Sports</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href={{'technologyApi'}}>Technology</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href={{'businessApi'}}>Business</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href={{'entertainmentApi'}}>Entertainment</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Tags</h2>
                                <div class="tags">
                                    <a href={{'sportsApi'}}>Sports</a>
                                    <a href={{'technologyApi'}}>Technology</a>
                                    <a href={{'businessApi'}}>Business</a>
                                    <a href={{'entertainmentApi'}}>Entertainment</a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                                <div class="image">
                                    <a href=""><img src={{asset('assest/img/adds-1.jpg')}} alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                                <div class="image">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href=""><img src={{asset('assest/img/adds-2.jpg')}}  alt="Image"></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><img src={{asset('assest/img/adds-2.jpg')}}  alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->
        @include('Layout.footer')
        @endsection
