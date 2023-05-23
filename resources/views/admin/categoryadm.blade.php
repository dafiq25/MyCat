@extends('layouts.mainadmin')

@section('container')
<h1 class="text-center my-5">Categories Product</h1>

<div class="container">
</div>
<a href="/createcategory" class="btn btn-success btn-lg my-3" style="margin-left: 53px">+Create New Categories</a>
<h5 class="container">Jumlah Kategori : {{ $categories->count() }}</h5>

<section>
    <!-- Related items section-->
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                @foreach ($categories as $category )
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="width:100%; height:60%" src="storage/{{$category->foto_kategori}}">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $category->nama_kategori }}</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="d-grid gap-2 d-md-flex mb-2 justify-content-md-center">
                                <a href="/product-view/{{$category->id_category}}" class="btn btn-secondary" type="button">View</a>
                                <a  href="/categoryedit/{{ $category->id_category }}" class="btn btn-warning" type="button">Update</a>
                                    <form action="/category-delete/{{$category->id_category}}" method="Post">
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
