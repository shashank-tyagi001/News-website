@extends('Layout.header');


@section('content')


<form action={{route('iframeStore')}} method="POST" enctype="multipart/form-data">
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
                <label for="iframe" class="col-md-5">Iframe:</label>
                <select id="iframe" name="iframe" class="col-md-7">
                <option value="Youtube">Youtube</option>
                <option value="Map">Map</option>
                </select>
            </div>

            <div class="row mb-3">
                <label for="fname" class="col-md-5">Iframe Link:</label>
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
