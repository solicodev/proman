@extends('layout.admin')

@section('content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">مدیریت کاربران</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb" dir="ltr">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">افزودن کاربر</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                            <div class="col-md-6">
                                <label for="first_name" class="form-label">نام</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" required value="{{ old('first_name') }}">
                                <div class="invalid-feedback">لطفا نام خود را وارد کنید</div>
                            </div>

                            <div class="col-md-6">
                                <label for="last_name" class="form-label">نام خانوادگی</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" required value="{{ old('last_name') }}">
                                <div class="invalid-feedback">لطفا نام خانوادگی را وارد کنید</div>
                            </div>

                            <div class="col-md-6">
                                <label for="mobile" class="form-label">شماره تماس</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" required value="{{ old('mobile') }}">
                                <div class="invalid-feedback">لطفا شماره تماس را وارد کنید</div>
                            </div>

                            <div id="role" class="col-md-6">
                                <label for="role" class="form-label">نقش</label>
                                <select name="role" class="form-control" required>
                                    <option label="انتخاب کنید"></option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}" @if(old('role') == $role->name) selected @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">لطفا نقش را انتخاب کنید</div>
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">وضعیت</label>
                                <select name="account_status" class="form-control" required>
                                    <option label="انتخاب کنید"></option>
                                    <option value="active" @if(old('status') == 'active') selected @endif>فعال</option>
                                    <option value="inactive" @if(old('status') == 'inactive') selected @endif>غیر فعال</option>
                                </select>
                                <div class="invalid-feedback">لطفا وضعیت را انتخاب کنید</div>
                            </div>

                            <div class="col-md-6">
                                <label for="password" class="form-label">رمز عبور</label>
                                <input type="password" name="password" class="form-control" id="password" required value="{{ old('password') }}">
                                <div class="invalid-feedback">لطفا رمز عبور را وارد کنید</div>
                            </div>

                            <div class="col-md-12">
                                <label for="photo" class="form-label">تصویر پروفایل</label>
                                <input type="file" name="photo" class="form-control" aria-label="تصویر پروفایل" accept="image/*">
                                <div class="invalid-feedback">لطفا یک تصویر انتخاب کنید</div>
                            </div>

                            <div class="col-12 mt-4">
                                <button class="btn btn-primary" type="submit">ارسال فرم</button>
                                @csrf
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->


    </div>
@endsection

@push('scripts')
    <script>
        // const role_show = (selector) => {
        //     if($(selector).find("option:selected").val() == "admin")
        //     {
        //         $("#role").removeClass("d-none");
        //         $("#role select").attr("required","required");
        //     }else{
        //         $("#role").addClass("d-none");
        //         $("#role select").removeAttr("required");
        //     }
        // }
    </script>
@endpush
