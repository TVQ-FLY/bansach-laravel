@extends('admin.layout')
@section('content')
<style>
.row {
    padding-top: 20px !important;
}
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12" style="margin-left: 80px; padding-right:70px">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">THÊM MÃ GIẢM GIÁ</h3>
                </div>
                <div class="col-12" style="padding-top:10px;">
                    <ul class="breadcrumb" style="border: none">
                        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                        <li>/</li>
                        <li><a href="{{route('magiamgia.index')}}">Quản lý mã giảm giá</a></li>
                        <li>/</li>
                        <li>Thêm mã giảm giá</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- form start -->
            <form action=" {{route('magiamgia.store')}} " method="POST" enctype="multipart/form-data"
                onsubmit="return CheckInput();">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Mã Giảm giá</label>
                        <input class="form-control" type="text" name="Code" id="Code" placeholder="Mã giảm giá">
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Số Lượng</label>
                        <input class="form-control" type="text" name="SoLuong" id="SoLuong" placeholder="Số lượng">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Chiết khấu</label>
                        <input class="form-control" type="text" name="ChietKhau" id="ChietKhau" placeholder="Chiết khấu">
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Trạng Thái</label>
                        <input class="form-control" type="text" name="TrangThai" id="TrangThai" placeholder="Trạng thái">
                    </div>
                    <!-- <div class="col-lg-6">
                        <label for="exampleInputTitle">Loại khuyến mãi</label>
                        <input class="form-control" type="text" name="LoaiKM" id="LoaiKM" placeholder="Loại khuyến mãi">
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Ngày bắt đầu</label>
                        <input class="form-control" type="date" name="NgayBĐ" id="NgayBĐ" placeholder="Ngày bắt đầu">
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputTitle">Ngày kết thúc</label>
                        <input class="form-control" type="date" name="NgayKT" id="NgayKT" placeholder="Ngày kết thúc">
                    </div>
                </div>
                
                <div class="row" style="float:right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button> &nbsp;
                    <a class="btn btn-secondary" href="{{route('magiamgia.index')}}"
                        style="margin-left: 15px;margin-right: 30px; color:white"><i
                            class="fas fa-window-close"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop