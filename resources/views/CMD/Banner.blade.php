@extends('Layout.header');


@section('content')


<form action={{route('BannerStore')}} method="POST" enctype="multipart/form-data">
    @csrf
    @if (session()->has('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
    <div class="container">
    <div class="row pt-5 pb-5 mt-2 mb-2">
        <div class="col-md-5 mx-auto">
        <div class="card p-4">

            <div class="row mb-3">
                <label for="heading" class="col-md-5">Heading:</label>
                <input type="text" id="heading" name="heading" class="col-md-7">
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-5">Description:</label>
                <input type="text" id="description" name="description" class="col-md-7">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="banner" name="banner">
                <label class="input-group-text" for="banner">Upload</label>
              </div>

            <div class="row mb-3">
                <button type="submit" class="btn btn-secondary ">Submit</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</form>


@include('Layout.footer')

@endsection
