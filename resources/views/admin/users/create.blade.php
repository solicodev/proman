@extends('admin.index')

@section('content')
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
                            <label for="first_name" class="form-label">نام کاربر</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{old('first_name')}}" required>
                            <div class="invalid-feedback">نام کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="title" class="form-label">نام خانوادگی کاربر</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{old('last_name')}}" required>
                            <div class="invalid-feedback">نام خانوادگی کاربر الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="personal_id" class="form-label">کد پرسنلی</label>
                            <input type="text" name="personal_id" class="form-control" id="personal_id" value="{{old('personal_id')}}" required>
                            <div class="invalid-feedback">کد پرسنلی الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="mobile" class="form-label">شماره موبایل</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" value="{{old('mobile')}}" required>
                            <div class="invalid-feedback">شماره موبایل الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="position_id" class="form-label">پوزیشن شغلی کاربر</label>
                            <select class="form-select" name="position_id" id="inputProductType" required>
                                <option> انتخاب کنید </option>
                                @foreach($positions as $position)
                                    <option value="{{$position->id}}">{{$position->title}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پوزیشن کاری کاربر الزامی است</div>
                        </div>
                        <div class="col-md-12">
                            <label for="short_text" class="form-label">توضیحات کوتاه</label>
                            <input type="text" name="short_text" class="form-control" id="short_text" value="{{old('short_text')}}" required>
                            <div class="invalid-feedback">توضیحات کوتاه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="title" class="form-label">عنوان سئو</label>
                            <input type="text" name="meta_title" class="form-control" value="{{old('meta_title')}}" id="title">
                        </div>
                        <div class="col-md-8">
                            <label for="meta_description" class="form-label">توضیحات سئو</label>
                            <input type="text" name="meta_description" class="form-control" id="meta_description" value="{{old('meta_description')}}" >
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <label for="icon" class="form-label">آیکن کاربر</label>
                            <input type="file" name="icon" class="form-control" id="icon" accept="image/*"
                                   required>
                            <div class="invalid-feedback">آیکن کاربر الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="iconAlt" class="form-label">توضیح آیکن</label>
                            <input type="text" name="icon_alt" class="form-control" id="iconAlt" value="{{old('icon_alt')}}">
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label">تصویر شاخص کاربر</label>
                            <input type="file" name="main_image" class="form-control" id="image" accept="image/*"
                                   required>
                            <div class="invalid-feedback">تصویر شاخص کاربر الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="imageAlt" class="form-label">توضیح تصویر شاخص</label>
                            <input type="text" name="photo_alt" class="form-control" id="imageAlt" value="{{old('photo_alt')}}">
                        </div>
                        <div class="col-12">
                            <label for="banner" class="form-label">بنر کاربر</label>
                            <input type="file" name="banner_image" class="form-control" id="banner" accept="image/*">
                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="textOne" class="form-label">توضیحات</label>
                            <textarea name="description" id="textOne" cols="30" rows="10">{{old('description')}}</textarea>
                        </div>
                        <hr>
                        <label class="form-label">مراحل</label>
                        <div class="col-12 steps">
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
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-info btn-sm" onclick='addStep()'>
                                افزودن مرحله
                            </button>
                        </div>
                        <hr>
                        <label class="form-label">سوالات متداول</label>
                        <div class="col-12 faqs">
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
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-info btn-sm" onclick='addFaq()'>
                                افزودن سوال
                            </button>
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
