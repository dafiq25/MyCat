<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>order details - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
    
    <div class="container">
      <!-- Title -->
      <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #16123222</h2>
      </div>
    
      <!-- Main content -->
      <div class="row">
        <div class="col-lg-8">
          <!-- Details -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="mb-3 d-flex justify-content-between">
                <div>
                  <span class="me-3">22-11-2021</span>
                </div>
                <div class="d-flex">
                    <span class="badge rounded-pill bg-warning">PENDING</span>
                  <div class="dropdown">
                    <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                      <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex mb-2">
                        <div class="flex-shrink-0">
                          <img src="https://via.placeholder.com/280x280/87CEFA/000000" alt="" width="35" class="img-fluid">
                        </div>
                        <div class="flex-lg-grow-1 ms-3">
                          <h6 class="small mb-0"><a href="#" class="text-reset">Happy Cat Minkas Junior Care</a></h6>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td class="text-end">Rp 170.000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex mb-2">
                        <div class="flex-shrink-0">
                          <img src="https://via.placeholder.com/280x280/FF69B4/000000" alt="" width="35" class="img-fluid">
                        </div>
                        <div class="flex-lg-grow-1 ms-3">
                          <h6 class="small mb-0"><a href="#" class="text-reset">Happy Cat Sensitive Skin & Coat</a></h6>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td class="text-end">Rp 60.000</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2">Subtotal</td>
                    <td class="text-end">Rp 230.000</td>
                  </tr>
                  <tr>
                    <td colspan="2">Shipping</td>
                    <td class="text-end">Free</td>
                  </tr>
                  <tr>
                    <td colspan="2">Discount (Code: NEWYEAR)</td>
                    <td class="text-danger text-end">-Rp 50.000</td>
                  </tr>
                  <tr class="fw-bold">
                    <td colspan="2">TOTAL</td>
                    <td class="text-end">Rp 180.000</td>
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
                  <p>OVO<br>
                  Total: Rp 180.000 <span class="badge bg-success rounded-pill">PAID</span></p>
                </div>
                <div class="col-lg-6">
                  <h3 class="h6">Billing address</h3>
                  <address>
                    <strong>Adinda dina</strong><br>
                    Jl. Bugenfil 01/03 Ketajen<br>
                    Gedangan, Sidoarjo 61254<br>
                    <abbr title="Phone"></abbr> 085155561177
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
              <div class="filter-group">
                <label>Shipping Company</label>
                <br>
                <select class="form-control">
                <option>choose..</option>
                <option>JNE</option>
                <option>JNT</option>
                <option>ID Express</option>
                <option>Ninja Express</option>
                </select>
                </div>
                <div class="form-outline mb-4 mb-xl-4">
                    <label class="form-label" for="typeName">Tracking Number</label>
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        placeholder="Input Tracking Number" />
                </div>
            <i class="bi bi-box-arrow-up-right"></i> </span>
              <hr>
              <h3 class="h6">Address</h3>
              <address>
                <strong>Adinda dina</strong><br>
                Jl. Bugenfil 01/03 Ketajen<br>
                Gedangan, Sidoarjo 61254<br>
                <abbr title="Phone"></abbr> 085155561177
              </address>
            </div>
          </div>
                <!-- Customer Notes -->
                <div class="card mb-4">
                    <div class="card-body">
                      <h3 class="h6">Status</h3>
                      <div class="filter-group">
                        <label>Set Status</label>
                        <select class="form-control">
                        <option>choose..</option>
                        <option>Delivered</option>
                        <option>Shipped</option>
                        <option>Pending</option>
                        <option>Cancelled</option>
                        </select>
                        </div>
                    </div>
                  </div>
                  <div class="checkout">
                    <button type="button" class="btn btn-dark btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>Save Changes</span>
                        <span></span>
                      </div>
              </div>
        </div>
    </div>
      </div>
    
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
    </body>
                
        
        <!-- Footer-->
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
        </div>
</html>