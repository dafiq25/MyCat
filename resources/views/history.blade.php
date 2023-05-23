<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div class="container px-4 px-lg-5">
              <img class="mt-1" src="assets/logofix.png" style="height: 40px " alt=...>
              <a class="navbar-brand text-light ms-3" href="/DBadmin">MyCat</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-navy me-auto mb-2 mb-lg-0 ms-lg-4">
                    <a class="navbar-brand text-light ms-6">Admin Dashboard</a>
                      <li class="nav-item dropdown"></li>
                  </ul>
                
                  <form class="d-flex  mb-lg-0 ms-lg-4">
                      <i><a class="fas fa-user-alt btn-dark" href="/PRadmin" style="font-size:24px"></a></i>
                  </form>
              </div>
          </div>
      </nav>

        <!-- Section-->
        <section class="py-5">
        </head>
        <body>
        <div class="container">
        <div class="table-wrapper">
        <div class="table-title">
        <div class="row">
        <div class="col-sm-4">
        <h2>New <b>Order</b></h2>
        </div>
        <div class="col-sm-8">
            <a href="#" class="btn btn-primary"><i class="fa fa-refresh" style="font-size: 18px"></i></i><span>Refresh List</span></a>
            <a href="#" class="btn btn-info"><i class="fa fa-file fa-s" style="font-size: 18px"></i></i><span>Export to Excel</span></a>
        </div>
        </div>
        </div>
        <div class="table-filter">
        <div class="row">
        <div class="col-sm-3">
        <div class="show-entries">
        <span>Show</span>
        <select class="form-control">
        <option>5</option>
        <option>10</option>
        <option>15</option>
        <option>20</option>
        </select>
        <span>entries</span>
        </div>
        </div>
        <div class="col-sm-9">
        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
        <div class="filter-group">
        <label>Name</label>
        <input type="text" class="form-control">
        </div>
        <div class="filter-group">
        <label>Location</label>
        <select class="form-control">
        <option>All</option>
        <option>DI Yogyakarta</option>
        <option>DKI Jakarta</option>
        <option>Jawa Barat</option>
        <option>Jawa Tengah</option>
        <option>Jawa Timur</option>
        </select>
        </div>
        <div class="filter-group">
        <label>Status</label>
        <select class="form-control">
        <option>Any</option>
        <option>Shipped</option>
        <option>Pending</option>
        </select>
        </div>
        <span class="filter-icon"><i class="fa fa-filter"></i></span>
        </div>
        </div>
        </div>
        <table class="table table-striped table-hover">
        <thead>
        <tr>
        <th>#</th>
        <th>Customer</th>
        <th>Location</th>
        <th>Order Date</th>
        <th>Status</th>
        <th>Net Amount</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="#"> Adinda dina</a></td>
                <td>Jawa Timur</td>
                <td>Jun 15, 2022</td>
                <td><span class="status text-success">&bull;</span> Delivered</td>
                <td>200000</td>
                <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail"></a></i></td>
                </tr>
                <tr>
                <td>2</td>
                <td><a href="#"> Aurela Sasongko</a></td>
                <td>Banten</td>
                <td>Jun 21, 2022</td>
                <td><span class="status text-success">&bull;</span> Delivered</td>
                <td>260000</td>
                <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail"></a></i></td>
                </tr>
                <tr>
                <td>3</td>
                <td><a href="#"> Andi Kurniawan</a></td>
                <td>Jawa Timur</td>
                <td>Jul 04, 2022</td>
                <td><span class="status text-danger">&bull;</span> Cancelled</td>
                <td>350000</td>
                <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail"></a></i></td>
                </tr>
                <tr>
                <td>4</td>
                <td><a href="#"> Daniesa Ningsih</a></td>
                <td>Jawa Barat</td>
                <td>Jul 17, 2022</td>
                <td><span class="status text-danger">&bull;</span> Cancelled</td>
                <td>157200</td>
                <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail"></a></i></td>
                </tr>
                <tr>
                <td>5</td>
                <td><a href="#"> Aloysius </a></td>
                <td>DI Yogyakarta</td>
                <td>Aug 04, 2022</td>
                <td><span class="status text-success">&bull;</span> Delivered</td>
                <td>580000</td>
                <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail"></a></i></td>
                </tr>
        </tbody>
        </table>
        <div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
        <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item active"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">6</a></li>
        <li class="page-item"><a href="#" class="page-link">7</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
        </div>
        </div>
        </div>
    </section>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
</body>

</div>
</html>
<style type="text/css">
    body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
    }
    .table-wrapper {
    background: #fff;
    padding: 20px 25px;
    margin: 30px auto;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-wrapper .btn {
    float: right;
    color: #333;
    background-color: #fff;
    border-radius: 3px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    }
    .table-wrapper .btn:hover {
    color: #333;
    background: #f2f2f2;
    }
    .table-wrapper .btn.btn-primary {
    color: #fff;
    background: #03A9F4;
    }
    .table-wrapper .btn.btn-primary:hover {
    background: #03a3e7;
    }
    .table-title .btn {
    font-size: 13px;
    border: none;
    }
    .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
    }
    .table-title .btn span {
    float: left;
    margin-top: 2px;
    }
    .table-title {
    color: #fff;
    background: #4b5366;
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
    }
    .show-entries select.form-control {
    width: 60px;
    margin: 0 5px;
    }
    .table-filter .filter-group {
    float: right;
    margin-left: 15px;
    }
    .table-filter input, .table-filter select {
    height: 34px;
    border-radius: 3px;
    border-color: #ddd;
    box-shadow: none;
    }
    .table-filter {
    padding: 5px 0 15px;
    border-bottom: 1px solid #e9e9e9;
    margin-bottom: 5px;
    }
    .table-filter .btn {
    height: 34px;
    }
    .table-filter label {
    font-weight: normal;
    margin-left: 10px;
    }
    .table-filter select, .table-filter input {
    display: inline-block;
    margin-left: 5px;
    }
    .table-filter input {
    width: 200px;
    display: inline-block;
    }
    .filter-group select.form-control {
    width: 110px;
    }
    .filter-icon {
    float: right;
    margin-top: 7px;
    }
    .filter-icon i {
    font-size: 18px;
    opacity: 0.7;
    }
    table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
    table.table tr th:first-child {
    width: 60px;
    }
    table.table tr th:last-child {
    width: 80px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
    }
    table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
    }
    table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    }
    table.table td a:hover {
    color: #2196F3;
    }
    table.table td a.view {
    width: 30px;
    height: 30px;
    color: #2196F3;
    border: 2px solid;
    border-radius: 30px;
    text-align: center;
    }
    table.table td a.view i {
    font-size: 22px;
    margin: 2px 0 0 1px;
    }
    table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
    }
    .status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
    }
    .text-success {
    color: #10c469;
    }
    .text-info {
    color: #62c9e8;
    }
    .text-warning {
    color: #FFC107;
    }
    .text-danger {
    color: #ff5b5b;
    }
    .pagination {
    float: right;
    margin: 0 0 5px;
    }
    .pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
    }
    .pagination li a:hover {
    color: #666;
    }
    .pagination li.active a {
    background: #03A9F4;
    }
    .pagination li.active a:hover {
    background: #0397d6;
    }
    .pagination li.disabled i {
    color: #ccc;
    }
    .pagination li i {
    font-size: 16px;
    padding-top: 6px
    }
    .hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
    }
    </style>