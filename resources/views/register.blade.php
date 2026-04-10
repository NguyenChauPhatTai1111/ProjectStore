@extends('layouts.app')
@section('content')	
		<!-- Main content -->

		<section class="bread-crumb">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<ul class="breadcrumb">	

					<li class="home">
						<a   href="../index.html" ><span ><i class="fa fa-home"></i> Trang chủ</span></a>						
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					<li><strong >Đăng ký tài khoản</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="application/ld+json">
    @php
    echo '
        {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": 
        [
            {
                "@type": "ListItem",
                "position": 1,
                "item": 
                {
                  "@id": "https://theme-furniture-2.mysapo.net",
                  "name": "Trang chủ"
                }
            },
        ]
        }
        '
        @endphp
</script>
 
<div class="container margin-bottom-20">
	<h1 class="title-head"><a href="#">Đăng ký tài khoản</a></h1>
	<div class="row">
		<div class="col-lg-12 ">
			<div class="page-login">
				<div id="login">
					<div class="social-login text-left margin-bottom-30">
						<style>.social-login a {
							display: inline-block;
						}</style>
						<script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script> 
						<a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="http://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a> 
						<a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="http://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
					</div>
					<span>Nếu chưa có tài khoản vui lòng đăng ký tại đây</span>
					
					<form  method="POST" action="{{ route('register') }}" id="customer_register" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_register"/><input name="utf8" type="hidden" value="true"/><input type="hidden" id="Token-7c96a788b8ca4290b733eeb390c6ff97" name="Token" /><script src="../../www.google.com/recaptcha/apif78f.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "customer_register"}).then(function(token) {document.getElementById("Token-7c96a788b8ca4290b733eeb390c6ff97").value = token});});</script>
					<div class="form-signup" >
                        @csrf
						
					</div>
					<div class="form-signup clearfix">
						<div class="row">
							<div class="col-md-6">
								<fieldset class="form-group">
									<label> Họ<span class="required">*</span></label>
									<input type="text" class="form-control form-control-lg" value="" name="name" id="lastName"  placeholder="" required >
								</fieldset>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<fieldset class="form-group">
									<label>Email <span class="required">*</span></label>
									<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="" name="email" id="email"  placeholder="" required="">
								</fieldset>
							</div>
							<div class="col-md-6">

								<fieldset class="form-group">
									<label>Mật khẩu <span class="required">*</span> </label>
									<input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="" required >
								</fieldset>
							</div>
						</div>


						<div class="col-xs-12 text-xs-left" style="margin-top:30px; padding: 0">
							<button type="summit" value="Đăng ký" class="btn  btn-style btn-primary">Đăng ký</button>
							<a href="{{ route('login') }}" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">Đăng nhập</a>
						</div>
					</div>
                    @if(session('success'))
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công',
                        text: "{{ session('success') }}",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    </script>
                    @endif

                    @if($errors->any())
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: "{{ $errors->first() }}",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    </script>
                    @endif
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection