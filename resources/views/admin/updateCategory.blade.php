@extends('layouts.mainadmin')
@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Update Categories {{$data[0]->nama_kategori}}</h1>
        <a href="/categoryadm" class="btn btn-primary btn-lg mb-3">Data Categories</a>
        <div class="card-body">
            <form action="/category_update" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$data[0]->id_category}}" name="id">
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" value="{{$data[0]->nama_kategori}}" class="form-control" name=nama_kategori>
                </div>

                <div class="mb-3">
                    <label for="foto_kategori" class="form-label">Gambar</label>
                    <input type="hidden" id="foto_kategori" name="foto_kategori" value="{{$data[0]->foto_kategori}}">
                    <input class="form-control" id="foto_kategori" type="file" name="foto_kategori">
                </div>

                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>
@endsection
