@extends('layouts.app')
@section('content')
    <!--begin::Signin-->
    <div class="login-form login-signin">
        <!--begin::Form-->
        <form class="form" action="{{route('login.store')}}" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger text-align-right">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--begin::Form group-->
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark">نام کاربری</label>
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username"/>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <div class="d-flex justify-content-between mt-n5">
                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">کلمه عبور</label>
                </div>

                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password"/>
            </div>
            <!--end::Form group-->

            <!--begin::اکشن-->
            <div class="pb-lg-0 pb-5">
                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">ورود</button>

            </div>
            <!--end::اکشن-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->



@endsection

