@extends('layouts.mainuser')

@section('container')


        <!-- Header-->
  <div class="container my-3">
  <!-- Grid container -->
    <div class="container p-4">
      <img class="card-img-top" src="assets/poster.jpeg" alt="...">
        <div class="container px-4 px-lg-5 my-5"></div>
    </div>
  </div>
        <section>
        <!-- Related items section-->
            <div class="container px-4 px-lg-5 mt-3">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($data as $d)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="width:100%; height:50%" src="storage/{{$d->foto_kategori}}"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$d->nama_kategori}}</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/shop/{{$d->nama_kategori}}">SHOP NOW</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
