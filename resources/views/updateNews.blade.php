<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form for Submission</title>

    <link rel="stylesheet" href={{ asset('assest/css/bootstrap.rtl.min.css') }}>
    <link href={{ asset('assest/js/slick/slick.css') }} rel="stylesheet">

    <style>
        .dropdown-menu li {
            text-align: left;
        }
    </style>
    <style>
        .bg-dark {
            background-color: #20B2AA !important;
        }

        body {
            background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045);

        }
    </style>

</head>

<body>
    @if (session('success'))
        <p class="alert alert-success text-center">{{ session('success') }}</p>
    @endif
    @if (session('update'))
        <p class="alert alert-success text-center">{{ session('update') }}</p>
    @endif

    <div class="container">
        <form class="needs-validation" action={{ route('updateNews',$registers->id) }} method="POST" enctype="multipart/form-data"
            novalidate>
            @csrf
            <div class="mt-3">
                <div class="bg-dark py-3">
                    <div class="container">
                        <div class="h4 text-white">Fill The Form</div>
                    </div>
                </div>

                <input type="hidden" id="id" name="id" value="3487">

                <label for="name" class="form-label">First name</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="name"
                    name="fname" aria-describedby="emailHelp" pattern="[A-Z a-z\s]{3,30}"
                    placeholder="Enter Your Name" value={{$registers->fname}} required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>

            <div class=" mb-3">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationTooltip02"
                    placeholder="Last name" name="lname"  value={{$registers->lname}}  required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="email" required class="form-control" name="email" id="email"  value={{$registers->email}}
                    placeholder="Enter Your Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="validationCustom03">News Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationCustom03"
                    placeholder="Title" value="{{$registers->title}}" name="title" required></input>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="city">Area</label>
                <select name="area" id="area" class="form-control" required>
                    <option value="Sports" {{ $registers->area == 'Sports' ? 'selected' : '' }}>Sports</option>
                    <option value="Business" {{ $registers->area == 'Business' ? 'selected' : '' }}>Business</option>
                    <option value="Technology" {{ $registers->area == 'Technology' ? 'selected' : '' }}>Technology</option>
                    <option value="Entertainment" {{ $registers->area == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="validationCustom03">Description</label>
                <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="validationCustom03"
                    placeholder="description" name="description"  required>{{$registers->description}}</textarea>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-3">
                Image
                <input type="file" class="form-control @error('title') is-invalid @enderror" id="image"  value={{$registers->image}}
                    name="image">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3" name="save">Submit</button>

        </form>
    </div>
    <script src={{ asset('assest/js/jquery-3.7.1.js') }}></script>
    <script src={{ asset('assest/js/bootstrap.bundle.min.js') }}></script>
    <script src={{asset('assest/js/custom.js')}} ></script>
</body>

</html>
