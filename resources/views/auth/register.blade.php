@extends('layouts.app')
@section('content')
    <!--begin::ثبت نام-->
    <div class="login-form login-">
        <!--begin::Form-->
        <form class="form" action="{{route('register.store')}}" method="post">
            @csrf
            <!--begin::Title-->
            <div class="pb-13 pt-lg-0 pt-5">
                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">ثبت نام</h3>
                <p class="text-muted font-weight-bold font-size-h4">برای ایجاد حساب کاربری ، جزئیات خود را وارد کنید</p>
            </div>
            <!--end::Title-->

            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="نام و ناو خانوادگی" name="name" autocomplete="off"/>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="نام کاربری" name="username" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="کلمه عبور" name="password" autocomplete="off"/>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="تکرار کلمه عبور" name="cpassword" autocomplete="off"/>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <label class="checkbox mb-0">
                    <input type="checkbox" name="agree"/>می پذیرم <a href="#">قوانین و مقررات</a>.
                    <span></span>
                </label>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">ارسال</button>
            </div>
            <!--end::Form group-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::ثبت نام-->

@endsection

