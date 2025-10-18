@extends('admin.index')

@section('content')
    @include('layouts.message ')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">
                        داشبورد
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.user.index') }}">
                        کاربر
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    افزودن کاربر
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ایجاد کاربر جدید</h5>
            <hr/>
            <form action='{{route('admin.user.store')}}' method="post" class="form-body mt-4 needs-validation"
                  enctype="multipart/form-data" novalidate>
                @csrf
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">نام </label>
                            <input type="text" name="first_name" class="form-control" id="first_name"
                                   value="{{old('first_name')}}" placeholder="نام" required>
                            <div class="invalid-feedback">نام کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="title" class="form-label">نام خانوادگی </label>
                            <input type="text" name="last_name" class="form-control" placeholder="نام خانوادگی" id="last_name"
                                   value="{{old('last_name')}}" required>
                            <div class="invalid-feedback">نام خانوادگی کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="personal_id" class="form-label">کد پرسنلی</label>
                            <input type="text" name="personal_id" class="form-control" placeholder="کد پرسنلی" id="personal_id"
                                   value="{{old('personal_id')}}" required>
                            <div class="invalid-feedback">کد پرسنلی الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="mobile" class="form-label">شماره موبایل</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="شماره موبایل" value="{{old('mobile')}}"
                                   required>
                            <div class="invalid-feedback">شماره موبایل الزامی است</div>
                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="آدرس ایمیل" value="{{old('email')}}"
                                   required>
                            <div class="invalid-feedback">آدرس ایمیل الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="password" class="form-label">رمز عبور کاربر</label>
                            <input type="password" name="password" class="form-control" placeholder="رمز عبور" id="password"
                                   value="{{old('password')}}" required>
                            <div class="invalid-feedback">رمز عبور کاربرالزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="position_id" class="form-label">پوزیشن شغلی کاربر</label>
                            <select class="form-select" name="position_id" id="inputProductType" required>
                                <option>پوزیشن کاربر را انتخاب کنید</option>
                                @foreach($positions as $position)
                                    <option value="{{$position->id}}">{{$position->title}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پوزیشن کاری کاربر الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="role_id" class="form-label">نقش کاربر</label>
                            <select class="form-select" name="role_id" id="inputProductType"  required>
                                <option>نقش کاربر را انتخاب کنید</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{role_name($role->name)}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">نقش کاربرالزامی است</div>
                        </div>
{{--                        <div class="col-md-12">--}}
{{--                            <label for="techStacks" class="form-label">دسترسی های کاربر</label>--}}
{{--                            <select class="form-select" id="techStacks" name="permission_id[]" data-placeholder="انتخاب کنید" multiple required>--}}
{{--                                @foreach($permissions as $permission)--}}
{{--                                    <option value="{{$permission->id}}">{{permission_name($permission->name)}} </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <div class="invalid-feedback">دسترسی های کاربر الزامی است</div>--}}
{{--                        </div>--}}
                        <div class="col-12 mt-5">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-success">
                                    ثبت کاربر
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
            $(function() {
            $('#textOne').summernote();
        });
            $(function() {
            $('#techStacks').select2({
                theme: "bootstrap-5"
            });
        });

    </script>
@endpush
