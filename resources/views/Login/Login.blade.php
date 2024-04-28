<!DOCTYPE html>
<html lang="zxx">
@include('Login.LoginCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<body>
<!-- 
<div class="login-wrap" style="background-image: url(user/images/background-login.jpg);">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng Nhập</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng Kí</label>
		<div class="login-form">
			<div class="sign-in-htm" style="padding-top:30px">
		<form class="sign-in-htm" action="{{ route('getLogin') }}" method="post">
			{{ csrf_field() }}
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="Email" type="text" class="input" name="txtEmail">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="pass" type="password" class="input" data-type="password" name="txtMatKhau">
					@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Nhớ mật khẩu </label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Đăng Nhập">
				</div>
				<div class="hr"></div>
				
				<div class="foot-lnk" style="margin-top:25px">
					<a href="/" style="color:white;"><i class="fas fa-home"></i> Trang chủ</a>
				</div>
		</form>
			</div>



		<form class="sign-up-htm" action="{{ route('getregister') }}" method="post">
			{{ csrf_field() }}
			<div class="sign-up-htm" style="padding-top:30px">
				<div class="group">
					<label for="user" class="label">Họ Tên</label>
					<input id="user" type="text" class="input" name="HoTen">
				</div>
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input" name="Email">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Xác thực mật khẩu</label>
					<input id="pass" type="password" class="input" data-type="password" name="repassword">
				</div>
				@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<div class="group">
					<input type="submit" class="button" value="Đăng Kí">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Bạn đã có tài khoản? Đăng nhập.</a>
				</div>
			</div>
		</form>
		
		</div>
	</div>
</div> -->

	<div class="container" id="container">
		
		<div class="form-container sign-in login-html">
			<form class="sign-in-htm" action="{{ route('getLogin') }}" method="post">
			{{ csrf_field() }}
                <h1>Đăng Nhập</h1>
				<span>Vui lòng nhập Email và Mật khẩu để sử dụng dịch vụ</span>
                <div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span></span>
				<div class="group">
					<input id="Email" type="text" class="input" name="txtEmail" placeholder="Email">
				</div>
                <div class="group">
					<input id="pass" type="password" class="input" data-type="password" name="txtMatKhau" placeholder="Password">
					@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
				</div>

				<a href="#"></a>
				<div class="group">
					<input type="submit" class="button" value="Đăng Nhập">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk" style="margin-top:25px">
					<a href="/" style="font-size: 15px; color: black" onMouseOver="this.style.color='#ff4e00'" onMouseOut="this.style.color='#333'"><i class="fas fa-home"></i> Quay lại trang chủ</a>
				</div>
			</form>
        </div>
        <div class="toggle-container">
			<div class="toggle">
				<div class="toggle-panel toggle-left">
					<h1>Xin Chào !</h1>
                    <p>Chào mừng bạn đến với HRT Books
					<br>Đăng nhập ngay để sử dụng dịch vụ của Website</p>
                    <button class="hidden" id="login">Đăng Nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
					<h1>Bạn chưa có tài khoản ?</h1>
                    <p>Tạo tài khoản để sử dụng dịch vụ của Website</p>
                    <button class="hidden" id="register">Đăng ký</button>
                </div>
            </div>
        </div>



		<div class="form-container sign-up">
			<form class="sign-up-htm" action="{{ route('getregister') }}" method="post">
			{{ csrf_field() }}
				<h1>Tạo tài khoản</h1>
				<div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>
				<span></span>
				<div class="group">
					<input id="user" type="text" class="input" name="HoTen" placeholder="Tên đăng nhập">
				</div>
				<div class="group">
					<input id="user" type="text" class="input" name="Email" placeholder="Email">
				</div>
				<div class="group">
					<input id="pass" type="password" class="input" data-type="password" name="password" placeholder="Mật khẩu">
				</div>
				<div class="group">
					<input id="pass" type="password" class="input" data-type="password" name="repassword" placeholder="Xác thực mật khẩu">
				</div>
				@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<div class="group">
					<input type="submit" class="button" value="Đăng Ký">
				</div>
				<div class="hr"></div>
			</form>
		</div>
    </div>
	
	
	
	
    
	<script>
		const container = document.getElementById('container');
		const registerBtn = document.getElementById('register');
		const loginBtn = document.getElementById('login');

		registerBtn.addEventListener('click', () => {
			container.classList.add("active");
		});

		loginBtn.addEventListener('click', () => {
			container.classList.remove("active");
		});
	</script>
</body>

</html>
