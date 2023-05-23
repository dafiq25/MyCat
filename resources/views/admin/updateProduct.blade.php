@extends('layouts.mainadmin')
@section('container')
    <style>     
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

    </style>    
    <div class="container mt-5">
        <h1 class="text-center mb-5">Update Product {{$data[0]->nama_produk}}</h1>
        <a href="/product-view/{{$id}}" class="btn btn-primary btn-lg mb-3">Data Product</a>
        <div class="card-body">
            <form action="/update-product/{{$id}}/{{$data[0]->id_product}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" class="form-control" value="{{$data[0]->id_product}}" name=id_product>
                <div class="mb-3">
                    <label for="nama_product" class="form-label">Nama Product</label>
                    <input type="text" class="form-control" value="{{$data[0]->nama_produk}}" name=nama_product>
                </div>

                <div class="mb-3">
                    <label for="berat_product" class="form-label">Berat Product</label>
                    <input type="number" id="berat_product" class="form-control" value="{{$data[0]->berat}}" name=berat_product step=".01">
                </div>

                <div class="mb-3">
                    <label for="deskripsi_product" class="form-label">Deskripsi Product</label>
                    <input type="text" class="form-control" value="{{$data[0]->deskripsi}}" name=deskripsi_product>
                </div>

                <div class="mb-3">
                    <label for="harga_product" class="form-label">Harga Product</label>
                    <input type="number" class="form-control" value="{{$data[0]->harga}}" name=harga_product>
                </div>

                <div class="mb-3">
                    <label for="foto_product" class="form-label">Foto Product</label>
                    <input class="form-control" id="foto_product" type="hidden" value="{{$data[0]->foto_product}}" name="foto_product">
                    <input class="form-control" id="foto_product" type="file" name="foto_product">
                </div>

                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>

@endsection
