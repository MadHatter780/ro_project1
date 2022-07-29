@extends('lord.lord')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                    class="btn btn-outline-primary">Add New Barang</button>
            </div>
        </div>
        <div class="row mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        {{-- <th scope="col">Slug Produk</th> --}}
                        {{-- <th scope="col">Deskripsi Produk</th> --}}
                        <th scope="col">Kuantitas Produk</th>
                        <th scope="col">Satuan Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Status Produk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{-- <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td></td> --}}
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('barang.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User</label>
                            <input type="text" name="user" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kuantitas</label>
                            <input type="text" name="kuantitas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" name="status" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" sb class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- modal --}}
@endsection
