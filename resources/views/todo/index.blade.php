@extends('main')

@section('content')
    <div class="input-group mb-3 ">
        <input type="text" class="form-control" id="key" placeholder="Cari Tugas" aria-label="Tambahkan " aria-describedby="basic-addon2">
        <div class="d-flex justify-content-end">
            <a href="{{ url('todomodal') }}" class="btn btn-outline-secondary btn-dark text-light" type="submit">Tambah</a>
        </div>
    </div>
    
    <div class="list" id="container-list">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                <div class="col-md-6">
                    <h2>menyapu</h2>
                </div>
                <div class="col-md-6 text-end">
                    <div class="btn-group" role="group" aria-label="Basic Example">
                        <button class="btn btn-success btn-sm" type="button">Selesai</button>
                        <button class="btn btn-warning btn-sm" type="button">Edit</button>
                        <button class="btn btn-danger btn-sm" type="button">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
