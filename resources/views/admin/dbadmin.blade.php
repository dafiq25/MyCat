@extends('layouts.mainadmin')

@section('container')
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-danger panel-colorful">
                            <div class="panel-body text-center">
                                <p class="text-uppercase mar-btm text-sm">New Order</p>
                                <a href="/listorder-new"><i class="fa fa-shopping-cart btn-light fa-5x"></i></a>
                                <hr>
                                <p class="h2 text-thin">{{$new}}</p>
                                <small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> {{$new}}</span> Need action Orders</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-primary panel-colorful">
                            <div class="panel-body text-center">
                                <p class="text-uppercase mar-btm text-sm">Finished</p>
                                <a href="/listorder-finished"><i class="fa fa-history btn-light fa-5x"></i></a>
                                <hr>
                                <p class="h2 text-thin">{{$finish}}</p>
                                <small><span class="text-semibold"><i class="fa fa-history fa-fw"></i> {{$finish}}</span> Finished Orders</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-primary panel-colorful">
                            <div class="panel-body text-center">
                                <p class="text-uppercase mar-btm text-sm">Product's</p>
                                <a href="/categoryadm"><i class="fa-sharp fa-solid fa-folder-open btn-light fa-5x"></i></a>
                                <hr>
                                <p class="h2 text-thin">{{$produk}}</p>
                                <small><span class="text-semibold"><i class="fa fa-history fa-fw"></i> {{$produk}}</span> Data Product's</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
                <!-- Footer-->
@endsection

