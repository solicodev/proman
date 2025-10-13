@extends('admin.index')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin') }}">
                        داشبورد
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('services.index') }}">
                        خدمات
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    ویرایش خدمت
                </li>
            </ol>
        </nav>
    </div>
    <hr>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ایجاد خدمت جدید</h5>
            <hr />
            <form action='{{route('services.update',$service->slug)}}'  method="post" class="form-body mt-4 needs-validation" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="title" class="form-label">نام خدمت</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{$service->title}}" required>
                            <div class="invalid-feedback">نام خدمت الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="slug" class="form-label">نامک خدمت</label>
                            <input type="text" name="slug" class="form-control" id="slug" value="{{$service->slug}}" required>
                            <div class="invalid-feedback">نامک خدمت الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="category_id" class="form-label">دسته بندی خدمات</label>
                            <select class="form-select" name="category_id" id="inputProductType" required>
                                @foreach($categoryServices as $category)
                                    <option value="{{$category->id}}" @if($service->category_id == $category->id) selected @endif>{{$category->title}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">دسته بندی خدمت الزامی است</div>
                        </div>
                        <div class="col-md-12">
                            <label for="short_text" class="form-label">توضیحات کوتاه</label>
                            <input type="text" name="short_text" class="form-control" id="short_text" value="{{$service->short_text}}" required>
                            <div class="invalid-feedback">توضیحات کوتاه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="title" class="form-label">عنوان سئو</label>
                            <input type="text" name="meta_title" class="form-control" value="{{$service->meta_title}}" id="title">
                        </div>
                        <div class="col-md-8">
                            <label for="meta_description" class="form-label">توضیحات سئو</label>
                            <input type="text" name="meta_description" class="form-control" id="meta_description" value="{{$service->meta_description}}">
                        </div>
                        <hr>
                        <div class="col-md-5">
                            <label for="icon" class="form-label">آیکن خدمت</label>
                            <input type="file" name="icon" class="form-control" id="icon" accept="image/*"
                                   @if(!$service->icon)   required @endif>
                            <div class="invalid-feedback">آیکن خدمت الزامی است</div>
                        </div>
                        <div class="col-md-1">
                            <img src="{{ url($service->icon) }}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <label for="iconAlt" class="form-label">توضیح آیکن</label>
                            <input type="text" name="icon_alt" class="form-control" id="iconAlt" value="{{$service->icon_alt}}">
                        </div>
                        <div class="col-md-5">
                            <label for="image" class="form-label">تصویر شاخص خدمت</label>
                            <input type="file" name="main_image" class="form-control" id="image" accept="image/*"
                                   @if(!$service->photo) required @endif>
                            <div class="invalid-feedback">تصویر شاخص خدمت الزامی است</div>
                        </div>
                        <div class="col-md-1">
                            <img src="{{ url($service->photo) }}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <label for="imageAlt" class="form-label">توضیح تصویر شاخص</label>
                            <input type="text" name="photo_alt" class="form-control" id="imageAlt"  value="{{$service->photo_alt}}">
                        </div>
                        <div class="col-11">
                            <label for="banner" class="form-label">بنر خدمت</label>
                            <input type="file" name="banner_image" class="form-control" id="banner" accept="image/*">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ url($service->banner) }}" class="img-fluid">
                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="textOne" class="form-label">توضیحات</label>
                            <textarea name="description" id="textOne" cols="30" rows="10"> {{$service->description}}</textarea>
                        </div>
                        <hr>
                        <label class="form-label">مراحل</label>
                        <div class="col-12 steps">
                            @if(count($service->widgets)>0)
                                @foreach($service->widgets as $widget)
                                    <div class="step card">
                                        <div class='card-body row g-3'>
                                            <div class="col-md-3">
                                                <label for="stepTitle" class="form-label">عنوان مرحله</label>
                                                <input type="text" name="widget_title[]" class="form-control" value="{{$widget->title}}" id="stepTitle"
                                                       accept="image/*" required>
                                                <div class="invalid-feedback">عنوان مرحله الزامی است</div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="stepIcon" class="form-label">آیکن مرحله</label>
                                                <input type="file" name="widget_photo[]" class="form-control" id="stepIcon"
                                                       accept="image/*" @if(!$widget->photo) required @endif>
                                                <div class="invalid-feedback">آیکن مرحله الزامی است</div>
                                            </div>
                                            <div class="col-md-1">
                                                @if($widget->photo)
                                                    <img src="{{ url($widget->photo) }}" class="img-fluid">
                                                @endif
                                            </div>
                                            <div class="col-md-5">
                                                <label for="stepDescription" class="form-label">توضیح کوتاه</label>
                                                <input type="text" name="widget_description[]" class="form-control" id="stepDescription" value="{{$widget->description}}"
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
                                @endforeach
                            @else
                                <div class="step card">
                                    <div class='card-body row g-3'>
                                        <div class="col-md-3">
                                            <label for="stepTitle" class="form-label">عنوان مرحله</label>
                                            <input type="text" name="widget_title[]" class="form-control" value="{{old('widget_title')}}" id="stepTitle"
                                                   accept="image/*">
                                            <div class="invalid-feedback">عنوان مرحله الزامی است</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="stepIcon" class="form-label">آیکن مرحله</label>
                                            <input type="file" name="widget_photo[]" class="form-control" id="stepIcon"
                                                   accept="image/*" >
                                            <div class="invalid-feedback">آیکن مرحله الزامی است</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stepDescription" class="form-label">توضیح کوتاه</label>
                                            <input type="text" name="widget_description[]" class="form-control" id="stepDescription" value="{{old('widget_description')}}"
                                            >
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
                            @endif
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-info btn-sm" onclick='addStep()'>
                                افزودن مرحله
                            </button>
                        </div>
                        <hr>
                        <label class="form-label">سوالات متداول</label>
                        <div class="col-12 faqs">
                            @if(count($service->faqs)>0)
                                @foreach($service->faqs as $faq)
                                    <div class="faq card">
                                        <div class='card-body row g-3'>
                                            <div class="col-12">
                                                <label for="faqQuestion" class="form-label">سوال</label>
                                                <input type="text" name="faq_question[]" class="form-control" value="{{$faq->question}}" id="faqQuestion"
                                                       required>
                                                <div class="invalid-feedback">سوال الزامی است</div>
                                            </div>
                                            <div class="col-md-11">
                                                <label for="faqAnswer" class="form-label">پاسخ</label>
                                                <textarea name="faq_answer[]" id="faqAnswer" class='form-control' required>value="{{$faq->answer}}"</textarea>
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
                                @endforeach
                            @else
                                <div class="faq card">
                                    <div class='card-body row g-3'>
                                        <div class="col-12">
                                            <label for="faqQuestion" class="form-label">سوال</label>
                                            <input type="text" name="faq_question[]" class="form-control" value="{{old('faq_question')}}" id="faqQuestion"
                                            >
                                            <div class="invalid-feedback">سوال الزامی است</div>
                                        </div>
                                        <div class="col-md-11">
                                            <label for="faqAnswer" class="form-label">پاسخ</label>
                                            <textarea name="faq_answer[]" id="faqAnswer" class='form-control' >{{old('faq_answer')}}</textarea>
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
                            @endif
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-info btn-sm" onclick='addFaq()'>
                                افزودن سوال
                            </button>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-success">
                                    ویرایش خدمت
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

                                    <div class="col-md-6">
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
                                        <textarea name="faq_answer[]" id="faqAnswer" class='form-control' required>value="{{old('faq_answer')}}"</textarea>
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
