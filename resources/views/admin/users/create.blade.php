@extends('admin.index')

@section('content')
    @include('layout.message ')
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
            <hr />
            <form action='{{route('admin.user.store')}}' method="post" class="form-body mt-4 needs-validation" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">نام </label>
                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{old('first_name')}}" required>
                            <div class="invalid-feedback">نام کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="title" class="form-label">نام خانوادگی </label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{old('last_name')}}" required>
                            <div class="invalid-feedback">نام خانوادگی کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="personal_id" class="form-label">کد پرسنلی</label>
                            <input type="text" name="personal_id" class="form-control" id="personal_id" value="{{old('personal_id')}}" required>
                            <div class="invalid-feedback">کد پرسنلی الزامی است</div>
                        </div>
                        <div class="col-md-3">
                            <label for="mobile" class="form-label">شماره موبایل</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" value="{{old('mobile')}}" required>
                            <div class="invalid-feedback">شماره موبایل الزامی است</div>
                        </div>
                        <div class="col-md-3">
                            <label for="position_id" class="form-label">پوزیشن شغلی کاربر</label>
                            <select class="form-select" name="position_id" id="inputProductType" required>
                                <option> انتخاب کنید </option>
                                @foreach($positions as $position)
                                    <option value="{{$position->id}}">{{$position->title}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پوزیشن کاری کاربر الزامی است</div>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}" required>
                            <div class="invalid-feedback">آدرس ایمیل الزامی است</div>
                        </div>
                        <div class="col-md-3">
                            <label for="password" class="form-label">رمز عبور کاربر</label>
                            <input type="password" name="password" class="form-control" id="password" value="{{old('password')}}" required>
                            <div class="invalid-feedback">رمز عبور کاربرالزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="role_id" class="form-label">نقض کاربر</label>
                            <select class="form-select" name="role_id" id="inputProductType" required>
                                <option>  </option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{role_name($role->name)}} </option>
                                @endforeach
                            </select>
{{--                            <input type="text" name="role_id" class="form-control" id="role_id" value="{{old('role_id')}}" required>--}}
                            <div class="invalid-feedback">نقش کاربرالزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="permission_id" class="form-label">دسترسی های کاربر</label>
                            <select class="form-select" name="permission_id" id="inputProductType" required>
                                <option> </option>
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->id}}">{{permission_name($per->name)}} </option>
                                @endforeach
                            </select>
{{--                            <input type="text" name="permission_id" class="form-control" id="permission_id" value="{{old('permission_id')}}" required>--}}
                            <div class="invalid-feedback">دسترسی های کاربرالزامی است</div>
                        </div>
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
    <script>
        function addStep() {
            $('.steps').append(`
                <div class="step card">
                    <div class='card-body row g-3'>
                        <div class="col-md-3">
                            <label for="stepTitle" class="form-label">عنوان مرحله</label>
                            <input type="text" name="widget_title[]" class="form-control" value="{{old('widget_title')}}" id="stepTitle"
                                   accept="image/*" required>
                            <div class="invalid-feedback">عنوان مرحله الزامی است</div>
                        </div>
                        <div class="col-md-3">
                            <label for="stepIcon" class="form-label">آیکن مرحله</label>
                            <input type="file" name="widget_photo[]" class="form-control" id="stepIcon"
                                   accept="image/*" required>
                            <div class="invalid-feedback">آیکن مرحله الزامی است</div>
                        </div>
                        <div class="col-md-5">
                            <label for="stepDescription" class="form-label">توضیح کوتاه</label>
                            <input type="text" name="widget_description[]" class="form-control" id="stepDescription" value="{{old('widget_description')}}"
                                   required>
                            <div class="invalid-feedback">توضیح کوتاه الزامی است</div>
                        </div>
                        <div class="col-md-1 d-flex align-items-end justify-content-end">
                            <button type="button" class="btn btn-link text-danger" title='حذف مرحله'
                                    onclick='removeStep(this)'>
                                <i class="bx bxs-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `);
        }

        function removeStep(el) {
            $(el).closest('.step').remove();
        }

        function addFaq() {
            $('.faqs').append(`
                <div class="faq card">
                    <div class='card-body row g-3'>
                        <div class="col-12">
                            <label for="faqQuestion" class="form-label">سوال</label>
                            <input type="text" name="faq_question[]" class="form-control" value="{{old('faq_question')}}" id="faqQuestion"
                                required>
                            <div class="invalid-feedback">سوال الزامی است</div>
                        </div>
                        <div class="col-md-11">
                            <label for="faqAnswer" class="form-label">پاسخ</label>
                            <textarea name="faq_answer[]" id="faqAnswer" class='form-control' required>{{old('faq_answer')}}</textarea>
                            <div class="invalid-feedback">پاسخ الزامی است</div>
                        </div>
                        <div class="col-md-1 d-flex align-items-end justify-content-end">
                            <button type="button" class="btn btn-link text-danger" title='حذف سوال'
                                onclick='removeFaq(this)'>
                                <i class="bx bxs-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `);
        }

        function removeFaq(el) {
            $(el).closest('.faq').remove();
        }

        $(function() {
            $('#textOne').summernote();
            $('#textTwo').summernote();
        });
    </script>
@endpush
