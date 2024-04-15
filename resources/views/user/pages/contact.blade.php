@extends('user.layout')
@section('content')



	<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{ route('user.index')}}" style="color: white">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Giới thiệu</li>
					</ul>
				</div>
			</div>

		</div>
	<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<br>
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3" style="margin-top: -80px;">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Liên Hệ</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Chúng tôi luôn mong chờ những đóng góp của bạn.</p>





				@include('user/layout/contact')
				<!-- contact-->
				<div class="contact_grid_right contact section-title" >
					<form action="{{route('user.mailcontact')}}" method="POST" class="">
					@csrf
						<div class="contact_left_grid">
							
							<div class="col-md-6 d-flex text-left">
								<div class="info">
									<div class="address">
									<i class="bi bi-geo-alt"></i>
									<h4>Địa chỉ:</h4>
									<p>182 Lê Duẩn, Bến Thủy, TP.Vinh, Nghệ An</p>
								</div>

								<div class="email">
									<i class="bi bi-envelope"></i>
									<h4>Email:</h4>
									<p>tranvanquyenx4@gmail.com</p>
								</div>

								<div class="phone">
									<i class="bi bi-phone"></i>
									<h4>SĐT:</h4>
									<p>+83 368835167</p>
								</div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.110347779378!2d105.6957497!3d18.659043600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1712905734653!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 290px;"></iframe>
							</div>
							<div class="col-md-6 align-center" role="form" class="">
								<div class="form-group ">
									<label class="my-2">Họ và tên</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="">
								</div>
							
								<div class="form-group">
									<label>Nội dung</label>
									<textarea id="textarea" name="Content" placeholder="" required=""></textarea>
								</div>
								<input class="form-control contact-form" type="submit" value="Gửi liên hệ">

							</div>
							
						</div>
          			</div>
              	</div>

          		</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script>
	window.onload = function(){
	var element = document.getElementById("nav-contact");
	element.classList.add("active");
	}
	</script>
@stop

