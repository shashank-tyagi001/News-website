
@extends('Layout.header')


@section('content')

<form action={{route('SocialStore')}} method="POST" enctype="multipart/form-data">
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
                <label for="icon" class="col-md-5">Icon name:</label>
                <select id="icon" name="icon" class="col-md-7">
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-facebook">Facebook</option>
                <option value="fab fa-linkedin">linkedIn</option>
                <option value="fab fa-instagram">Instagram</option>
                <option value="fab fa-youtube">Youtube</option>
                </select>
            </div>

            <div class="row mb-3">
                <label for="fname" class="col-md-5">Link:</label>
                <input type="text" id="link" name="link" class="col-md-7">
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
