@extends('layouts.mainadmin')
@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Create New Categories</h1>
        <a href="/categoryadm" class="btn btn-primary btn-lg mb-3">Data Categories</a>
        <div class="card-body">
            <form action="/category_create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" name=nama_kategori required>
                </div>

                <div class="mb-3">
                    <label for="foto_kategori" class="form-label">Gambar</label>
                    <input class="form-control" id="foto_kategori" type="file" name="foto_kategori" required>
                </div>

                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>
@endsection
