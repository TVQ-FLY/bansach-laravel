@extends('admin.layout')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <marquee><h3 class="font-weight-bold p-2">CHÀO MỪNG ĐẾN VỚI KHO TÀNG KIẾN THỨC NHÂN LOẠI - HỆ THỐNG QUẢN TRỊ HRT BOOKS</h3></marquee>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="images/dashboard/people.png" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent mt-4">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body m-4">
                                <p class="mb-4 font-weight-bold">Thống Kê Theo Đơn Hàng Trong Tháng</p>
                                <p class="fs-30 mb-2 font-weight-bold">{{number_format($totalMoneyInMonth,0,",",",")}} VND</p>
                                <p>{{number_format($totalMoneyInMonth,0,",",",")}} VND (1 Tháng)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body m-4">
                                <p class="mb-4 font-weight-bold">Tổng Số Khách Hàng Trong Tháng</p>
                                <p class="fs-30 mb-2 font-weight-bold">{{$totalAccountInMonth}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body m-4">
                                <p class="mb-4 font-weight-bold">Tổng Đơn Hàng Trong Tháng</p>
                                <p class="fs-30 mb-2 font-weight-bold">{{$totalBillInMonth}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body m-4">
                                <p class="mb-4 font-weight-bold">Tổng Số Sản Phẩm</p>
                                <p class="fs-30 mb-2 font-weight-bold">{{$app_product}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">HRT Books © 2024. Premium <a
                    href="https://www.bootstrapdash.com/" target="_blank">Thiết kế bởi Tran Van Quyen</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i
                    class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@include('admin.pages.dashboardChart')

@stop
