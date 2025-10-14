
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.7
Purchase: https://1.envato.market/Vm7VRE
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en"  dir="rtl" direction="rtl" style="direction:rtl;" >
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo23/rtl/authentication/layouts/corporate/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2024 08:39:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>ورود به داشبورد مدیریت پروژه ها</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo23/assets/media/logos/favicon.ico"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{my_asset('panel/assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{my_asset('panel/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{my_asset('panel/assets/css/main.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="app-blank" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">

    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-500px p-10">
                    <!-- ======================= Login start ======================== -->

                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="loginForm" data-kt-redirect-url="/metronic8/demo23/rtl/index.html" action="#">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <h1 class="text-gray-900 fw-bolder mb-3">
                                ورود
                            </h1>
                            <div class="text-gray-500 fw-semibold fs-6">
                                Your Social Campaigns
                            </div>
                            <!--end::Subtitle--->
                        </div>
                        <!--begin::Heading-->

                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">یا با ایمیل</span>
                        </div>

                        <div class="fv-row mb-8">
                            <input type="text" placeholder="شماره موبایل " name="mobile" autocomplete="off" class="form-control bg-transparent"
                                   inputmode="numeric"
                                   pattern="^09\d{9}$"
                                   oninput="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                   required/>
                            <div class="invalid-feedback">
                                شماره موبایل الزامی است
                            </div>
                        </div>
{{--                        <div class="fv-row mb-8">--}}
{{--                            <input type="text" placeholder="رمز عبور * " name="password" autocomplete="off" class="form-control bg-transparent"--}}
{{--                                   oninput="this.value = this.value.replace(/\s/g, '')" required/>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                رمز عبور الزامی است--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">--}}
{{--                            <div></div>--}}

{{--                            <a href="reset-password.html" class="link-primary">--}}
{{--                                Forgot Password ?--}}
{{--                            </a>--}}
{{--                        </div>--}}

                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                <span class="indicator-label">دریافت کد یکبار مصرف</span>
                                <span class="indicator-progress">
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
      <!--end::Submit button-->

                    </form>
                    <!-- ======================= Login End ======================== -->

                </div>
            </div>
        </div>
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(../../../../assets/media/misc/auth-bg.png)">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <!--begin::Logo-->
                <a href="../../../index.html" class="mb-0 mb-lg-12">
                    <img alt="Logo" src="{{my_asset('panel/assets/media/logos/custom-1.png')}}" class="h-60px h-lg-75px"/>
                </a>
                <!--end::Logo-->

                <!--begin::Image-->
                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{my_asset('panel/assets/media/misc/auth-screens.png')}}" alt=""/>
                <!--end::Image-->

                <!--begin::Title-->
                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                    Project Manager for Solico Group
                </h1>
                <!--end::Title-->

                <!--begin::Text-->
                <div class="d-none d-lg-block text-white fs-base text-center">
                    داشبورد مدیریت اختصاصی  <a href="#" class="opacity-75-hover text-warning fw-bold me-1">solico group</a>
                    با استفاده از این داشبورد میتوانید پروژه ها و تسک های خود را مدیریت کنید
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
    </div>


    <div class="modal fade" id="codeModal" tabindex="-1" aria-labelledby="codeModal" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog login-pop-form" role="document">
            <div class="modal-content">
                <div class="modal-headers">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <h4 class="m-0 ft-medium">وارد کردن کد یکبار مصرف</h4>
                    </div>

                    <div id="alert" role="alert"></div>

                    <form id="confirmForm" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <input class="d-none" type="text" name="mobile" id="confirmMobile">
                        <div class="text-center">شماره شما: <span id="currentMobile"></span> <button
                                class="btn btn-sm btn-link p-0" data-bs-dismiss="modal"><i
                                    class="fa fa-edit"></i></button></div>
                        <div class="col-12">
                            <small class="text-danger">*در حین وارد
                                کردن کد تایید کیبورد خود را انگلیسی کنید</small>
                            <input type="number" id="code" name="confirm_code"
                                   class="form-control rounded" placeholder="کد یکبار مصرف" required>
                            <div class="invalid-feedback" id="code_feedback">
                                وارد کردن کد یکبار مصرف الزامی است
                            </div>
                        </div>

                        <div class="w-100 d-flex justify-content-center">
                            <span class="register-timeout"></span>
                            <button type="button" class="resend-btn" style="display:none;" id="resend">ارسال مجدد
                            </button>
                        </div>
                        <button type="submit" class="btn btn-sm full-width bg-sky text-light rounded ft-medium">
                            ثبت رمز
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Root-->

<!--begin::Javascript-->
<script>
    var hostUrl = "https://preview.keenthemes.com/metronic8/demo23/assets/";
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{my_asset('panel/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{my_asset('panel/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<script>
    function updateMobile(e) {
        $('#confirmMobile').val($(e).val());
        $('#currentMobile').text($(e).val());
    }
</script>

<script>
    $('#code').on('input', function() {
        $('#code_feedback').text('وارد کردن کد یکبار مصرف الزامی است');
        document.getElementById('code').setCustomValidity('');
    })

    // Countdown timer functionality START
    var registerInterval;

    function countdownRegister() {
        clearInterval(registerInterval);
        $('.resend-btn').hide();
        $('.register-timeout').text("2:00");
        $('.register-timeout').show();
        registerInterval = setInterval(function() {
            var timer = $('.register-timeout').html();
            timer = timer.split(':');
            var minutes = timer[0];
            var seconds = timer[1];
            seconds -= 1;
            if (minutes < 0) return;
            else if (seconds < 0 && minutes != 0) {
                minutes -= 1;
                seconds = 59;
            } else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

            $('.register-timeout').html(minutes + ':' + seconds);

            if (minutes == 0 && seconds == 0) {
                clearInterval(registerInterval);
                $('.register-timeout').hide();
                $('.resend-btn').show();
            }
        }, 1000);
    }

    // Countdown timer functionality END

    // Resend confirmation code btn START
    $('#resend').click(function(e) {
        e.preventDefault();
        countdownRegister();
    });
    // Resend confirmation code btn END

    // Login form submit functionality START
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        if (!$(this).hasClass('invalid-form')) {
            // Run the login functionality and show the submit code modal
            const formData = new FormData(e.target);
            $.ajax({
                method: "POST",
                url: "{{ route('login') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.status) {
                        $('#alert').removeAttr('class').addClass('alert alert-success text-center')
                            .text(response.message);
                    } else {
                        $('#alert').removeAttr('class').addClass('alert alert-danger text-center')
                            .text(response.message);
                    }
                },
                fail: function(response) {
                    $('#alert').removeAttr('class').addClass('alert alert-danger text-center').text(
                        response.message);
                }
            })
            $('#codeModal').modal('show');
            countdownRegister();
        }
    });
    // Login form submit functionality END

    // Register form submit functionality START
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        if (!$(this).hasClass('invalid-form')) {
            // Run the register functionality and show the submit code modal
            const formData = new FormData(e.target);
            $.ajax({
                method: "POST",
                url: "{{ route('register') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                }
            })
            $('#codeModal').modal('show');
            countdownRegister();
        }
    });
    // Register form submit functionality END

    // Confirm code form submit functionality START
    $('#confirmForm').submit(function(e) {
        e.preventDefault();
        if (!$(this).hasClass('invalid-form')) {
            // Run the confirm code functionality
            const formData = new FormData(e.target);
            $.ajax({
                method: "POST",
                url: "{{ route('MobileCheck') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.status) {
                        $('#alert').removeAttr('class').addClass('alert alert-success text-center')
                            .text(response.message);
                        switch (response.user_type) {
                            case 'Super Admin':
                                window.location.replace('{{ route('admin.index') }}');
                                return;
                            case 'Manager':
                                window.location.replace('{{ route('dashboard.index') }}');
                                return;
                            default:
                                return false;
                        }
                    } else {
                        $('#alert').removeAttr('class').addClass('alert alert-danger text-center')
                            .text(response.message);
                        document.getElementById('code').setCustomValidity('invalid');
                        $('#code_feedback').text(response.message);
                    }
                },
                error: function(response) {
                    document.getElementById('code').setCustomValidity('invalid');
                    $('#code_feedback').text(response.message);
                }
            })
        }
    });
    // Confirm code form submit functionality END

    // Stop countdown timer START
    document.getElementById('codeModal').addEventListener('hidden.bs.modal', event => {
        $('.register-timeout').text("2:00");
        clearInterval(registerInterval);
    })
    // Stop countdown timer END
</script>

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{my_asset('panel/assets/js/custom/authentication/sign-in/general.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo23/rtl/authentication/layouts/corporate/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2024 08:39:17 GMT -->
</html>
