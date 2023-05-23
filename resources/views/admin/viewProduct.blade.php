@extends('layouts.mainadmin')

@section('container')
<h1 class="text-center my-5">Categories {{$category[0]->nama_kategori}}</h1>

<div class="container">
</div>
<a href="/categoryadm" class="btn btn-primary btn-lg mb-3" style="margin-left:50px">Data Categories</a>
<a href="/createproduct/{{$id}}" class="btn btn-success btn-lg mb-3" style="margin-left:">Add New Product</a>
<h5 class="container">Jumlah Product : {{ $data->count() }}</h5>

<section>
    <!-- Related items section-->
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                @foreach ($data as $d )
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="width:100%; height:60%" src="{{URL::to('/')}}/storage/{{$d->foto_product}}">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $d->nama_produk }}</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="d-grid gap-2 d-md-flex mb-2 justify-content-md-center">
                                <!-- <a href="/category-view/{{$d->id_product}}" class="btn btn-secondary" type="button">View</a> -->
                                <a  href="/product-edit/{{ $d->id_product }}/{{ $d->id_category }}" class="btn btn-warning" type="button">Update</a>
                                    <form action="/product-delete/{{$id}}/{{$d->id_product}}" method="Post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
