@extends('Lord.regis')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        body {
            background: #a1c4fd;

        }

        .gradient-custom-2 {
            /* fallback for old browsers */

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
        }

        .bg-indigo {
            background-color: #4835d4;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>

    <script>
        // Check
        document.getElementById("flexCheckDefault").checked = true;

        // Uncheck
        document.getElementById("flexCheckDefault").checked = false;
    </script>
@endsection

@section('content')
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <form action="{{ route('regis.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- forf-store --}}
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                                            <div class="row">
                                                <div class="col-md mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <label for="formFile" class="form-label">Default file input
                                                            example</label>
                                                        <input class="form-control" name="image" type="file"
                                                            id="formFile">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="text" id="name"
                                                            class="form-control form-control-lg" name="name" />
                                                        <label class="form-label" for="name" placeholder="Name">
                                                            <i class="bi bi-person-circle"></i>&nbsp;Full
                                                            Name</label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="password" id="form3Examplev2"
                                                            class="form-control form-control-lg" name="password" />
                                                        <label class="form-label" for="form3Examplev2" placeholder="Name">
                                                            <i class="bi bi-three-dots"></i>&nbsp;Password</label>
                                                    </div>

                                                </div>

                                            </div>

                                            {{-- <div class="mb-4 pb-2">
                                            <select class="select">
                                                <option value="1">Position</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </div> --}}

                                            {{-- <div class="mb-4 pb-2">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev4"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev4">Position</label>
                                            </div>
                                        </div> --}}

                                            <div class="row">
                                                <div class="col-md mb-4 pb-2 mb-md-0 pb-md-0">

                                                    <div class="form-outline">
                                                        <input type="email" id="form3Examplev5"
                                                            class="form-control form-control-lg" name="email" />
                                                        <label class="form-label" for="form3Examplev5">
                                                            <i class="bi bi-envelope"></i>&nbsp;Email</label>
                                                    </div>

                                                </div>
                                                {{-- <div class="col-md-6">

                                                <select class="select">
                                                    <option value="1">Employees</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    <option value="4">Four</option>
                                                </select>

                                            </div> --}}
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 bg-indigo text-white">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Contact Details</h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2"
                                                        class="form-control form-control-lg" name="alamat" />
                                                    <label class="form-label" for="form3Examplea2">
                                                        <i class="bi bi-building"></i>&nbsp;Alamat</label>
                                                </div>
                                            </div>



                                            <div class="row">

                                                <div class="mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="number" id="form3Examplea6"
                                                            class="form-control form-control-lg" name="kode_pos" />
                                                        <label class="form-label" for="form3Examplea6">Kode Pos</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="number" id="form3Examplea6"
                                                            class="form-control form-control-lg" name="phone" />
                                                        <label class="form-label" for="form3Examplea6">
                                                            <i class="bi bi-telephone"></i>&nbsp;Nomor Telephone</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="setuju" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Anda Setuju Informasi ini akan diguhnakan dalam aplikasi ini
                                                </label>
                                            </div>
                                            <br>






                                            <button type="submit" class="btn btn-light btn-lg"
                                                data-mdb-ripple-color="dark">Register</button>

                                        </div>
                                    </div>

                                </div>

                            </form>

                            {{-- forf-store --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('jsDown')
@endsection
