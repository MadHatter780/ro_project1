@extends('Lord.lord', ['title' => 'RoU Home'])
@section('css')
    <link rel="stylesheet" type="css" href="">
@endsection

@section('content')
    @include('sweetalert::alert')
    <div class="row align-items-md-stretch">
        <div class="col">
            <div class="h-100 p-5 text-white bg-dark ">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                    mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
        </div>

    </div>

    {{-- isi --}}
    <div class="row mt-4 text-center">
        <div class="container">
            <div class="col">
                <div class="col-md-6 offset-md-3">
                    <h1>Wellcome User</h1>
                </div>
                <div class="col-md-6 offset-md-3">
                    <hr class="my-3">
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2></h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="row">

    </div>
@endsection
