@extends('layouts.mainuser')

@section('container')


    <section class="h-100 h-custom">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <form action="/checkout/{{$data[0]->id_product}}" method="POST">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Shopping Bag</th>
                <th scope="col">Categories</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="/storage/{{$data[0]->foto_product}}"
                      style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">{{$data[0]->nama_produk}}</p>
                      <p class="mb-0"></p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">Dry Food</p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <!-- <button class="btn btn-link px-2" id="minus"
                      onclick="this.parentNode.querySelector('input[type=number').stepDown(); logNewValue()">
                      <i class="fas fa-minus"></i>
                    </button> -->
                    @csrf
                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm parameter" style="width: 50px;" />

                    <!-- <button class="btn btn-link px-2" id="plus"
                    onclick="this.parentNode.querySelector('input[type=number').stepUp(); logNewValue()">
                      <i class="fas fa-plus"></i>
                    </button> -->
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0 total" id="hargatotal" style="font-weight: 500;">Rp {{$data[0]->harga}}</p>
                  <input type="hidden" value="{{$data[0]->harga}}" id="hargaproduk">
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
          <div class="card-body p-4">

            <div class="row">
              <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <form>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                        value="GO-PAY" required aria-label="..."/>
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <img class="mt-1" src="{{URL::to('/')}}/assets/gopay.png" style="height: 24px " alt=...></i>GO-PAY
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                        value="DANA" aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <img class="mt-1" src="{{URL::to('/')}}/assets/logo dana.png" style="height: 24px " alt=...></i> DANA </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                        value="OVO" aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <img class="mt-1" src="{{URL::to('/')}}/assets/logo ovo.jpg" style="height: 24px " alt=...></i>OVO
                      </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                    <label class="form-label" for="typeName">Name</label>
                      <input type="text" id="typeName" name="nama_user" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" class="form-control form-control-lg" siez="17"
                        placeholder="Name" />
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                    <label class="form-label" for="typeText">Phone Number</label>
                      <input type="number" id="typeText" name="notelp" value="{{Auth::user()->notelp}}" class="form-control form-control-lg" siez="17"
                        placeholder="08xxxxxxxxxx" minlength="11" maxlength="12" />
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                    <label class="form-label" for="typeName">Address</label>
                    <input type="text" id="typeExp" name="alamat" value="{{Auth::user()->alamat}}" class="form-control form-control-lg" placeholder="Address"
                          size="7"/>
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                    <label class="form-label" for="typeName">Shipping</label>
                    <select name="shipping" id="shipping" class="form-control form-control-lg" required>
                        <option value="" selected>Pilih kurir pengiriman</option>
                        <option value="JNE">JNE</option>
                        <option value="JNT">JNT</option>
                        <option value="ID Express">ID Express</option>
                        <option value="Ninja Express">NINJA Express</option>
                    </select>
                    <!-- <input type="text" id="typeExp" name="alamat" class="form-control form-control-lg" placeholder="Address"
                          size="7"/> -->
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-2">Subtotal</p>
                  <span class="mb-2" id="hargatotal1">Rp {{$data[0]->harga}}</span>
                </div>

                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-0">Shipping</p>
                  <p class="mb-0">Free</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                  <p class="mb-2">Total</p>
                  <span class="mb-2" id="hargatotal2">Rp {{$data[0]->harga}}</span>
                </div>

                <div class="checkout">
                
                <button type="submit" class="btn btn-dark btn-block btn-lg">
                  Checkout
                </button>
               </div>

               </form>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1a60c45adc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function calculate(){
            var total= ($("#form1").val() * $("#hargaproduk").val())
            $("#hargatotal").text(total);
            $("#hargatotal1").text(total);
            $("#hargatotal2").text(total);
            // console.log(document.getElementById('hargatotal').value);
        }
        $(function()
        {
            $(".parameter").on("change keyup",calculate)
            console.log(document.getElementById('form1').value);
        })

        // const input = document.querySelector('input');
        // const logNewValue = () => {
        // console.log(document.querySelector('input').value);
        // };
        // document.querySelector('div + button').addEventListener('click', logNewValue);
        // input.addEventListener('change', function(){
        //     input.addEventListener("change keyup",calculate)
        // });
    </script>