@extends('Layout.header');


@section('content')


<form action={{route('FooterStore')}} method="POST" enctype="multipart/form-data">
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
                <label for="fname" class="col-md-5">Footer name:</label>
                <input type="text" id="name" name="name" class="col-md-7">
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-5">Status:</label>
                <select id="status" name="status" class="col-md-7">
                <option value="Enabled">Enabled</option>
                <option value="Disabled">Disabled</option>
                </select>
            </div>

            <div class="row mb-3">
                <label for="fname" class="col-md-5">FooterItem Link:</label>
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
