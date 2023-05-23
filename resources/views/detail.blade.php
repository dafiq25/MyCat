<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Shop</title>
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/assets/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
          <!-- Navigation-->
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container px-4 px-lg-5">
                <img class="mt-1" src="{{URL::to('/')}}/assets/logofix.png" style="height: 40px " alt=...>
                <a class="navbar-brand text-light ms-3" href="/dashboard">MyCat</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-navy me-auto mb-2 mb-lg-0 ms-lg-4" >
                      <li class="nav-item"><a class="nav-link text-light">Detail Cart</a></li>
                    </ul>
                  
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fa-solid fa-bag-shopping btn-dark fa-xl" href="/cart"></a></i>
                  </form>
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fas fa-user-alt btn-dark" href="/Profile" style="font-size:24px"></a></i>
                  </form>
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fas fa-sharp fa-solid fa-right-from-bracket btn-dark" href="/logout" style="font-size:24px"></a></i>
                  </form>
                </div>
            </div>
        </nav>
  
<div class="container-fluid">

<div class="container">
  
  <!-- Title -->
  <div class="d-flex justify-content-between align-items-center py-3">
    <!-- <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #16123222</h2> -->
  </div>

  <!-- Main content -->
  <div class="row">
    <div class="col-lg-8">
      <!-- Details -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="mb-3 d-flex justify-content-between">
            <div>
              <span class="me-3">{{$data[0]->tanggal_pemesanan}}</span>
            </div>
            <div class="d-flex">
              @if($data[0]->status == 0)
                <span class="badge rounded-pill bg-danger">UNPAID</span>
              @elseif($data[0]->status == 1)
                <span class="badge rounded-pill bg-warning">PENDING</span>
              @elseif($data[0]->status == 2)
                <span class="badge rounded-pill bg-info">SHIPPED</span>
              @else
                <span class="badge rounded-pill bg-success">DELIVERED</span>
              @endif
              <!-- <div class="dropdown">
                <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                  <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  <div class="d-flex mb-2">
                    <div class="flex-shrink-0">
                      <img src="/storage/{{$data[0]->foto_product}}" alt="" width="35" class="img-fluid">
                    </div>
                    <div class="flex-lg-grow-1 ms-3">
                      <h6 class="small mb-0"><p class="text-reset">{{$data[0]->nama_produk}}</p></h6>
                    </div>
                  </div>
                </td>
                <td>{{$data[0]->jumlah_barang}}</td>
                <td class="text-end">Rp {{$data[0]->harga}}</td>
              </tr>
              
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">Subtotal</td>
                <td class="text-end">Rp {{$data[0]->total_harga}}</td>
              </tr>
              <tr>
                <td colspan="2">Shipping</td>
                <td class="text-end">Free</td>
              </tr>
             
              <tr class="fw-bold">
                <td colspan="2">TOTAL</td>
                <td class="text-end">Rp {{$data[0]->total_harga}}</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- Payment -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="h6">Payment Method</h3>
              <p>{{$data[0]->jenis_pembayaran}}<br>
              @if($data[0]->status_bayar == 0)
              Total: Rp {{$data[0]->total_harga}} <span class="badge bg-danger rounded-pill">UNPAID</span></p>
              @elseif($data[0]->status_bayar == 1)
              Total: Rp {{$data[0]->total_harga}} <span class="badge bg-warning rounded-pill">PENDING</span></p>
              @else
              Total: Rp {{$data[0]->total_harga}} <span class="badge bg-success rounded-pill">PAID</span></p>
              @endif
            </div>
            <div class="col-lg-6">
              <h3 class="h6">Billing address</h3>
              <address>
                <strong>{{$data[0]->nama}}</strong><br>
                {{$data[0]->alamat}}<br>
                <!-- Gedangan, Sidoarjo 61254<br> -->
                <abbr title="Phone"></abbr> {{$data[0]->notelp}}
              </address>
            </div>
          </div>
        </div>
      </div>
      @if($data[0]->status_bayar == 0)
      <!-- instruksi payment -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="flex-shrink-0">
                @if($data[0]->jenis_pembayaran == "GO-PAY")
                <img src="{{URL::to('/')}}/assets/gopay.png" alt="" width="40" class="img-fluid" style="margin-right:6px; margin-bottom:17px"><span>GO-PAY</span>
                @elseif($data[0]->jenis_pembayaran == "OVO")
                <img src="{{URL::to('/')}}/assets/logo ovo.jpg" alt="" width="40" class="img-fluid" style="margin-right:6px; margin-bottom:17px"><span>OVO</span>
                @elseif($data[0]->jenis_pembayaran == "DANA")
                <img src="{{URL::to('/')}}/assets/logo dana.png" alt="" width="40" class="img-fluid" style="margin-right:6px; margin-bottom:17px"><span>DANA</span>
                @endif
              </div>
              <div style="margin-left:17px">
                <h3 class="h6">No. Rekening:</h3>
                <h3 style="font-size:20px; color: green">7128 1273 0019</h3>
                <h5 style="font-size:13px">*Proses verifikasi sekitar 10 menit dari setelah upload bukti bayar</h5>
                <h6>Bayar pesanan ke nomor rekening diatas sesuai dengan total belanja.</h6>
              </div>
              <!-- <p>{{$data[0]->jenis_pembayaran}}<br>
              Total: Rp 125.000 <span class="badge bg-danger rounded-pill">UNPAID</span></p> -->
            </div>
            <div class="col-lg-6">
              <h3 class="h6">Upload bukti bayar</h3>
              <form action="/uploadBukti/{{$data[0]->id_cart}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="bukti_bayar">
                <button type="submit" class="btn btn-success">Upload</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
    <div class="col-lg-4">
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6">Shipping Information</h3>
          <h3 class="h6">Address</h3>
          <address>
            <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong><br>
            {{Auth::user()->alamat}}<br>
            <!-- Gedangan, Sidoarjo 61254<br> -->
            <abbr title="Phone"></abbr> {{Auth::user()->notelp}}
          </address>
          <hr>
          <div class="filter-group">
            <label>Shipping Company</label>
            <br>
            <input type="text" disabled class="form-control" value="{{$data[0]->shipping}}">
            
            </div>
            <div class="form-outline mb-4 mb-xl-4">
                <label class="form-label" for="typeName">Tracking Number</label>
                  <input type="text" class="form-control" siez="17" value="123891230" disabled>
            </div>
          
        </div>
      </div>
            <!-- Customer Notes -->
            <div class="card mb-4">
                <div class="card-body">
                  <h3 class="h6">Status</h3>
                  @if($data[0]->status == 0)
                  <input type="text" disabled class="form-control" value="UNPAID">
                  @elseif($data[0]->status == 1)
                  <input type="text" disabled class="form-control" value="PENDING">
                  @elseif($data[0]->status == 2)
                  <input type="text" disabled class="form-control" value="SHIPPED">
                  @else
                  <input type="text" disabled class="form-control" value="DELIVERED">
                  @endif
                  <!-- <div class="filter-group">
                    <label>Status</label>
                    <select class="form-control">
                    <option>choose..</option>
                    <option>Done</option>
                    <option>Delivered</option>
                    <option>Shipped</option>
                    <option>Pending</option>
                    <option>Cancelled</option>
                    </select>
                    </div> -->
                </div>
              </div>
              <!-- <div class="p-3 mb-3" style="display: flex; justify-content:center;">
              <a class="btn btn-dark" href="/neworder">Save Changes</a>
              </div> -->
              {{-- <div class="checkout">
                <button type="button" class="btn btn-dark btn-block btn-lg">
                  <div class="d-flex justify-content-between">
                    <span>Save Changes</span>
                  </div>
          </div> --}}

    </div>
</div>
  </div>
</div>
</body>
  <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>
  
          <p>
          MyCat is an online shop that provides for your cat's need at home.
          </p>
          <p>
          We provide goods with high quality but at an affordable price.
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
        
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">operational hour</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Fri </td>
                <td>08.00 - 20.00</td>
              </tr>
              <tr>
                <td>Sat - Sun </td>
                <td>08.00 - 12.00</td>
              </tr>
              <tr>
              </tr>
            </tbody>
          </table>
          <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jl. Pucang Anom Timur II No. 44 Surabaya</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">mycat@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">0898-9739-434</span>
        </div>
         <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Search something</h5>
  
          <div class="form-outline form-white mb-4">
            <input type="text" id="formControlLg" class="form-control form-control-lg">
            <label class="form-label" for="formControlLg" style="margin-left: 0px;"></label>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
      </div>
      <!--Grid row-->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://MyCat.com/">MyCat.com</a>
    </div>
    
    <!-- Copyright -->
    <script src="https://kit.fontawesome.com/1a60c45adc.js" crossorigin="anonymous"></script>
  </footer>
<style type="text/css">
body{
    background:#eee;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}
.text-reset {
    --bs-text-opacity: 1;
    color: inherit!important;
}
a {
    color: #5465ff;
    text-decoration: none;
}
</style>

<script type="text/javascript">

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>