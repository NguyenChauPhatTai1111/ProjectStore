@extends('layouts.app')
@section('content')

  <!-- Main content -->
  
  <section class="bread-crumb">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul class="breadcrumb">
            <li class="home">
              <a href="../index.html">
                <span>
                  <i class="fa fa-home">
                  </i>
                  Trang chủ
                </span>
              </a>
              <span>
                <i class="fa fa-angle-right">
                </i>
              </span>
            </li>
            <li>
              <strong>
                Đăng nhập tài khoản
              </strong>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
  </script>
  <script type="application/ld+json">
    @php
    echo '
    {
      "@context": "http://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@id": "https://theme-furniture-2.mysapo.net",
          "name": "Trang chủ"
        }
      },

      ]
    }';
    @endphp
  </script>
  <div class="container margin-bottom-20">
    <h1 class="title-head">
      <span>
        Đăng nhập tài khoản
      </span>
    </h1>
    <div class="row">
      <div class="col-lg-6">
        <div class="page-login margin-bottom-30">
          <div id="login">
            <div class="social-login text-left margin-bottom-30">
              <style>
                .social-login a { display: inline-block; }
              </style>
              <script>
                function loginFacebook() {
                  var a = {
                    client_id: "947410958642584",
                    redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                    state: JSON.stringify({
                      redirect_url: window.location.href
                    }),
                    scope: "email",
                    response_type: "code"
                  },
                  b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                  window.location.href = b
                }
                function loginGoogle() {
                  var a = {
                    client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                    redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                    scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                    access_type: "online",
                    state: JSON.stringify({
                      redirect_url: window.location.href
                    }),
                    response_type: "code"
                  },
                  b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                  window.location.href = b
                }
                function encodeURIParams(a, b) {
                  var c = [];
                  for (var d in a) if (a.hasOwnProperty(d)) {
                    var e = a[d];
                    null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                  }
                  return 0 == c.length ? "": (b ? "?": "") + c.join("&")
                }
              </script>
              <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()">
                <img width="129px" height="37px" alt="facebook-login-button" src="http://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg">
              </a>
              <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()">
                <img width="129px" height="37px" alt="google-login-button" src="http://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg">
              </a>
            </div>
            <span>
              Nếu bạn đã có tài khoản, đăng nhập tại đây.
            </span>
            <form method="POST" id="loginForm"
            id="customer_login" accept-charset="UTF-8">
                @csrf
              <input name="FormType" type="hidden" value="customer_login" />
              <input name="utf8" type="hidden" value="true" />
              <div class="form-signup errors">
              </div>
              <div class="form-signup clearfix">
                <fieldset class="form-group">
                  <label>
                    Email
                    <span class="required">
                      *
                    </span>
                  </label>
                  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                  class="form-control form-control-lg" value="" name="email" id="email"
                  placeholder="Email" Required>
                </fieldset>
                <fieldset class="form-group">
                  <label>
                    Mật khẩu
                    <span class="required">
                      *
                    </span>
                  </label>
                  <input type="password" class="form-control form-control-lg" value="" name="password"
                  id="password" placeholder="Mật khẩu" Required>
                </fieldset>
               @if(session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error') }}',
                        confirmButtonColor: '#d33'
                    });
                </script>
                @endif
                <div class="pull-xs-left" style="margin-top: 25px; display: flex; justify-content: center; text-align: center;">
                    <div class="button">
                    <button class="btn btn-style btn-primary" type="submit" value="Đăng nhập" 
                    >
                    Đăng nhập
                    </div>
                    <a href="register.html" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">
                    Đăng ký
                    </a>
                </div>
              </div>
            </form>
            <div id="message"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div id="recover-password" class="form-signup">
          <span>
            Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
          </span>
          <form method="post" action="https://theme-furniture-2.mysapo.net/account/recover"
          id="recover_customer_password" accept-charset="UTF-8">
            <input name="FormType" type="hidden" value="recover_customer_password"
            />
            <input name="utf8" type="hidden" value="true" />
            <div class="form-signup aaaaaaaa">
            </div>
            <div class="form-signup clearfix">
              <fieldset class="form-group">
                <label>
                  Email
                  <span class="required">
                    *
                  </span>
                </label>
                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                class="form-control form-control-lg" value="" name="Email" id="recover-email"
                placeholder="Email" Required>
              </fieldset>
            </div>
            <div class="action_bottom">
              <input class="btn btn-style btn-dark" style="margin-top: 25px;" type="submit"
              value="Lấy lại mật khẩu" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function showRecoverPasswordForm() {
      document.getElementById('recover-password').style.display = 'block';
      document.getElementById('login').style.display = 'none';
    }

    function hideRecoverPasswordForm() {
      document.getElementById('recover-password').style.display = 'none';
      document.getElementById('login').style.display = 'block';
    }
  </script>

@endsection