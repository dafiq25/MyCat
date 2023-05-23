@extends('layouts.mainadmin')

@section('container')

        <!-- Section-->
        <section class="py-5">
        <div class="container">
            <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                <div class="col-sm-4">
                    <h2>My <b>Order</b></h2>
                </div>
                </div>
            </div>
                
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Barang</th>
                    <!-- <th>Location</th> -->
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Total Harga</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($history as $h)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$h->nama_produk}}</td>
                    <td>{{$h->tanggal_pemesanan}}</td>
                    @if($h->status == 0)
                    <td><span class="status text-danger">&bull;</span>Unpaid</td>
                    @elseif($h->status == 1)
                    <td><span class="status text-warning">&bull;</span>Pending</td>
                    @elseif($h->status == 2)
                    <td><span class="status text-info">&bull;</span>Shipped</td>
                    @elseif($h->status == 3)
                    <td><span class="status text-success">&bull;</span>Delivered</td>
                    @else
                    <td><span class="status text-success">&bull;</span>Done</td>

                    @endif
                    <td>{{$h->total_harga}}</td>
                    <td><i><a class='far fa-arrow-alt-circle-right' style='font-size:24px' href="/detail-order/{{$h->id_cart}}"></a></i></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- <div class="clearfix">
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
            </div> -->
            </div>
        </div>
        </section>
@endsection
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