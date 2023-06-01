@extends('main')

@section('content')
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="key" placeholder="Cari Tugas" aria-label="Tambahkan " aria-describedby="basic-addon2">
    </div>
    
    <div class="list" id="container-list">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <h2>menyapu</h2>
                        <div class="col-md-9 text-end">
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <button class="btn btn-success btn-sm " type="button">
                                    <i class="fas fa-check-circle "></i>
                                </button>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ url('tododetail') }}" class="btn btn-outline-secondary btn-info text-light" type="submit"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                                <button class="btn btn-danger btn-sm" type="button"><i class="fas fa-trash-alt   "></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ms-auto">
                <form class="mx-lg-auto">
                    <legend class="text-light">Tambah Tugas</legend>
                    <div class="mb-3">
                        <label for="judul" class="form-label text-light">Judul</label>
                        <input type="text" class="form-control" id="judul">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label text-light">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-light text-light">Submit</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection
