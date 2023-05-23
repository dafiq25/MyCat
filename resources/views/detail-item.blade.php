@extends('layouts.mainuser')

@section('container')
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/storage/{{$data[0]->foto_product}}" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">{{$data[0]->nama_produk}}</h1>
                        <div class="small mb-1">Netto {{$data[0]->berat}} kg</div>
                        <div class="fs-5 mb-5">
                            <span>Rp {{$data[0]->harga}}</span>
                        </div>
                        <p class="lead {styles.css:490} ">{{$data[0]->deskripsi}}</p>
                        <div class="d-flex">
                            <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> -->
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkout/{{$data[0]->nama_produk}}">Checkout</a></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
