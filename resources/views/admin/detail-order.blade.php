@extends('layouts.mainadmin')
@section('container')
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
              Total: Rp 125.000 <span class="badge bg-danger rounded-pill">UNPAID</span></p>
              @elseif($data[0]->status_bayar == 1)
              Total: Rp 125.000 <span class="badge bg-warning rounded-pill">PENDING</span></p>
              @else
              Total: Rp 125.000 <span class="badge bg-success rounded-pill">PAID</span></p>
              @endif
              <a type="button" href="/storage/{{$data[0]->foto_bukti_bayar}}" class="btn btn-info" target="_blank">Lihat bukti bayar</a>
            </div>
            <div class="col-lg-6">
              <h3 class="h6">Billing address</h3>
              <address>
                <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong><br>
                {{Auth::user()->alamat}}<br>
                <!-- Gedangan, Sidoarjo 61254<br> -->
                <abbr title="Phone"></abbr> {{Auth::user()->notelp}}
              </address>
            </div>
          </div>
        </div>
      </div>
    
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
                <form action="/update-order/{{$data[0]->id_cart}}" method="post">
                @csrf
                  <h3 class="h6">Status</h3>
                    @if($data[0]->status == 0)
                    <select class="form-select" name="status" disabled aria-label="Default select example">
                        <option selected value="0">UNPAID</option>
                    </select>
                    @else
                    <select class="form-select" name="status" aria-label="Default select example">
                        @if($data[0]->status == 1)
                        <option selected value="1">PENDING</option>
                        <option value="2">SHIPPED</option>
                        <option value="3">DELIVERED</option>
                        @elseif($data[0]->status == 2)
                        <option selected value="2">SHIPPED</option>
                        <option value="1">PENDING</option>
                        <option value="3">DELIVERED</option>
                        @else
                        <option selected value="3">DELIVERED</option>
                        <option value="1">PENDING</option>
                        <option value="2">SHIPPED</option>
                        @endif
                    </select>
                    @endif
                   <h6 style="margin-top:10px">Status bayar</h6>
                    @if($data[0]->status_bayar == 0)
                    <select class="form-select" name="status_bayar" disabled aria-label="Default select example">
                        <option selected value="0">UNPAID</option>
                    </select>
                    @else
                    <select class="form-select" name="status_bayar" aria-label="Default select example">
                        @if($data[0]->status_bayar == 1)
                        <option selected value="1">PENDING</option>
                        <option value="2">PAID</option>
                        @elseif($data[0]->status_bayar == 2)
                        <option selected value="2">PAID</option>
                        <option value="1">PENDING</option>
                        @endif
                    </select>
                    @endif
                    <button class="btn btn-success" type="submit" style="margin-top: 10px">Simpan</button>
                </form>
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
@endsection