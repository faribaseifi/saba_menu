<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <title>مترونیک | صفحه ورود 1</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('admin//css/pages/login/login-1.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global تم Styles(used by all pages)-->
    <link href="{{asset('admin//plugins/global/plugins.bundle.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin//plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin//css/style.bundle.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global تم Styles-->

    <!--begin::Layout تمs(used by all pages)-->

    <link href="{{asset('admin//css/themes/layout/header/base/light.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin//css/themes/layout/header/menu/light.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin//css/themes/layout/brand/dark.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin//css/themes/layout/aside/dark.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>        <!--end::Layout تمs-->

    <link rel="shortcut icon" href="{{asset('admin/media/logos/favicon.ico')}}"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-10">
                    <img src="{{asset('admin/media/logos/logo-letter-1.png')}}" class="max-h-70px" alt=""/>
                </a>
                <!--end::Aside header-->

                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">
                    کشف مترونیک شگفت انگیز<br/>
                    با ابزار ساخت عالی
                </h3>
                <!--end::Aside title-->
            </div>
            <!--end::Aside Top-->

            <!--begin::Aside Bottom-->
            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{asset('admin/media/svg/illustrations/login-visual-1.svg')}})"></div>
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->

        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                @yield('content')

            </div>
            <!--end::Content body-->

            <!--begin::Content footer-->
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <a href="#" class="text-primary font-weight-bolder font-size-h5">مقررات</a>
                <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">برنامه ها</a>
                <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">تماس با ما</a>
            </div>
            <!--end::Content footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->


<script>var HOST_URL  = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global تم Bundle(used by all pages)-->
<script src="{{asset('admin/plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
<script src="{{asset('admin/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
<script src="{{asset('admin/js/scripts.bundle.js?v=7.0.6')}}"></script>
<!--end::Global تم Bundle-->


<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('admin/js/pages/custom/login/login-general.js?v=7.0.6')}}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
