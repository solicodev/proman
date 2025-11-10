<x-layout>
    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-135-nh5p">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">

            <!--begin::Toolbar container-->
            <div class="d-flex flex-stack flex-row-fluid">
                <!--begin::Toolbar container-->
                <div class="d-flex flex-column flex-row-fluid">
                    <!--begin::Toolbar wrapper-->

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                            <span>ویرایش پروژه  <small>{{$project->project_code}}</small></span>


                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="{{route('dashboard.index')}}" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="{{route('dashboard.project.index')}}" class="text-white text-hover-primary">
                                پروژه های من
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            ویرایش پروژه
                        </li>
                        <!--end::Item-->



                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar container-->

                <!--begin::Actions-->
                {{--                <div class="d-flex align-self-center flex-center flex-shrink-0">--}}
                {{--                    <a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">--}}
                {{--                        <i class="ki-outline ki-plus-square fs-2"></i>--}}
                {{--                        <span>Invite</span>--}}
                {{--                    </a>--}}

                {{--                    <a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">--}}
                {{--                        Create <span class="d-none d-sm-inline">Target</span>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content  flex-column-fluid " data-select2-id="select2-data-kt_app_content">
            <div class="card" data-select2-id="select2-data-134-tiwj">
                <div class="card-body" data-select2-id="select2-data-133-kmb7">
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper">
                        <div class="card shadow-sm p-4">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-project-info">جزئیات پروژه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-project-options">آپشن‌ها / جزئیات</a>
                                </li>
                            </ul>

                            <!-- Tab Contents -->
                            <div class="tab-content">

                                <!-- تب اول: فرم جزئیات پروژه -->
                                <div class="tab-pane fade show active" id="tab-project-info" role="tabpanel">

                                    <form action="{{ route('dashboard.project.update' , $project->id) }}"
                                          method="POST" enctype="multipart/form-data"
                                          class="pt-3" autocomplete="off">
                                        @csrf
                                        @method('PUT')

                                        <div class="row">
                                            <div class="col-lg-8 col-md-7 card shadow-sm p-4">
                                                <div class="pb-10 pb-lg-12">
                                                    <h2 class="fw-bold text-gray-900">جزئیات پروژه</h2>
                                                </div>

                                                <div class="fv-row mb-10">
                                                    <label class="form-label required">نام پروژه</label>
                                                    <input name="name" value="{{ $project->name }}" class="form-control form-control-lg form-control-solid"
                                                           placeholder="نام پروژه" required>
                                                </div>

                                                <div class="row g-3 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-semibold mb-2">تاریخ شروع</label>
                                                        <div class="position-relative d-flex align-items-center">
                                                            <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                                            <input name="start_date"
                                                                   class="result form-control form-control-solid ps-12"
                                                                   type="text"
                                                                   data-jdp
                                                                   placeholder="تاریخ شروع پروژه"
                                                                   autocomplete="off"
                                                                   value="{{ $project->start_date }}"
                                                                   required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-semibold mb-2">تاریخ پایان</label>
                                                        <div class="position-relative d-flex align-items-center">
                                                            <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                                            <input name="end_date"
                                                                   class="result form-control form-control-solid ps-12"
                                                                   type="text"
                                                                   data-jdp
                                                                   placeholder="تاریخ پایان پروژه"
                                                                   autocomplete="off"
                                                                   value="{{ $project->end_date }}"
                                                                   required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fv-row mb-8">
                                                    <label class="form-label required">برند</label>
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                            data-placeholder="برند را انتخاب کنید" name="brand_id" required>
                                                        <option></option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{ $brand->id }}" @if($project->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                {{--                                    <div class="row g-3 mb-8">--}}
                                                {{--                                        <div class="col-md-6 fv-row">--}}
                                                {{--                                            <label class="form-label required">مدیر پروژه</label>--}}
                                                {{--                                            <select class="form-select form-select-solid" data-control="select2"--}}
                                                {{--                                                    data-placeholder="مدیر پروژه را انتخاب کنید" name="manager_id" required>--}}
                                                {{--                                                <option></option>--}}
                                                {{--                                                @foreach($managers as $manager)--}}
                                                {{--                                                    <option value="{{ $manager->id }}">{{ $manager->Name }} - نقش:--}}
                                                {{--                                                        {{ role_name($manager->roles()->first()->name) }}--}}
                                                {{--                                                    </option>--}}
                                                {{--                                                @endforeach--}}
                                                {{--                                            </select>--}}
                                                {{--                                        </div>--}}

                                                {{--                                        <div class="col-md-6 fv-row">--}}
                                                {{--                                            <label class="form-label required">برند</label>--}}
                                                {{--                                            <select class="form-select form-select-solid" data-control="select2"--}}
                                                {{--                                                    data-placeholder="برند را انتخاب کنید" name="brand_id" required>--}}
                                                {{--                                                <option></option>--}}
                                                {{--                                                @foreach($brands as $brand)--}}
                                                {{--                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>--}}
                                                {{--                                                @endforeach--}}
                                                {{--                                            </select>--}}
                                                {{--                                        </div>--}}
                                                {{--                                    </div>--}}
                                                <div class="fv-row mb-8">
                                                    <label class="form-label required">اعضای پروژه</label>
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                            multiple name="members[]" data-placeholder="اعضای پروژه را انتخاب کنید" required>
                                                        <option></option>
                                                        @foreach($members as $member)
                                                            <option value="{{ $member->id }}" @if($project->members->contains('id', $member->id)) selected @endif>{{ $member->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row g-3 mb-8">
                                                    <div class="col-md-6 fv-row">
                                                        <div class="fv-row mb-8">
                                                            <label class="form-label required">دپارتمان</label>
                                                            <select class="form-select form-select-solid" data-control="select2"
                                                                    data-placeholder="دپارتمان را انتخاب کنید" name="department_id" required>
                                                                <option></option>
                                                                @foreach($departments as $department)
                                                                    <option value="{{ $department->id }}" @if($project->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 fv-row">
                                                        <label class="form-label required">دسته بندی</label>
                                                        <select class="form-select form-select-solid" data-control="select2"
                                                                data-placeholder="دپارتمان را انتخاب کنید" name="category_id" required>
                                                            <option></option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" @if($project->category_id == $category->id) selected @endif>{{$category->title}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="fv-row mb-10">
                                                    <label class="form-label">توضیحات پروژه</label>
                                                    <textarea name="description" class="form-control form-control-lg form-control-solid"
                                                              rows="3">{{ $project->description }}</textarea>
                                                </div>


                                            </div>

                                            <div class="col-lg-4 col-md-5">
                                                <div class="card shadow-sm p-4">
                                                    <h5 class="fw-bold mb-4">فایل‌های پروژه</h5>
                                                    {{--                                        <input type="hidden" name="photos[]" id="pro-photo">--}}
                                                    {{--                                        <div class="dropzone" id="kt_dropzonejs_example_1">--}}
                                                    {{--                                            <!--begin::Message-->--}}
                                                    {{--                                            <div class="dz-message needsclick">--}}
                                                    {{--                                                <i class="ki-duotone ki-file-up fs-3x text-primary">--}}
                                                    {{--                                                    <span class="path1"></span>--}}
                                                    {{--                                                    <span class="path2"></span>--}}
                                                    {{--                                                </i>--}}

                                                    {{--                                                <!--begin::Info-->--}}
                                                    {{--                                                <div class="ms-4">--}}
                                                    {{--                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">فایل های مربوط به پروژه</h3>--}}
                                                    {{--                                                    <span class="fs-7 fw-semibold text-gray-500">آپلود</span>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                                <!--end::Info-->--}}
                                                    {{--                                            </div>--}}
                                                    {{--                                        </div>--}}
                                                    <div class="fv-row mb-8">
                                                        <div class="row g-3 images">
                                                            @if(count($project->photos) > 0)
                                                                @foreach($project->photos as $photo)
                                                                    <div class="col-12 d-flex image align-items-center">
                                                                        <input class='form-control form-control-lg form-control-solid' type="file" name="photos[]" accept="image/*">
                                                                        <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                                                                onclick='removeImage(this)'>
                                                                            <i class="ki-outline ki-trash fs-1"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-md-2 d-flex image">
                                                                        <img src="{{ url($photo->path) }}" class="img-fluid">
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div class="col-12 d-flex image align-items-center">
                                                                    <input class='form-control form-control-lg form-control-solid' type="file" name="photos[]" accept="image/*">
                                                                    <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                                                            onclick='removeImage(this)'>
                                                                        <i class="ki-outline ki-trash fs-1"></i>
                                                                    </button>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-3">
                                                            <button type="button" class="btn btn-sm btn-bg-light btn-active-color-primary" onclick='addImage()'>
                                                                افزودن فایل<i class="ki-outline ki-plus-square fs-3 px-2"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    {{--                                        <div class="fv-row mb-8">--}}
                                                    {{--                                            <div class="row g-3 dependencies">--}}
                                                    {{--                                                <div class="form-group depndency align-items-center">--}}
                                                    {{--                                                    <div class="dep">--}}
                                                    {{--                                                        <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">--}}
                                                    {{--                                                            <div class="mb-10">--}}
                                                    {{--                                                                <div class="form-check">--}}
                                                    {{--                                                                    <input class="form-check-input" type="radio" value="Pr" id="flexCheckDefault1" name="radio2">--}}
                                                    {{--                                                                    <label class="form-check-label" for="flexCheckDefault1">--}}
                                                    {{--                                                                        Pr--}}
                                                    {{--                                                                    </label>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                            <div class="mb-10">--}}
                                                    {{--                                                                <div class="form-check">--}}
                                                    {{--                                                                    <input class="form-check-input" type="radio" value="Po" id="flexCheckDefault1" name="radio2">--}}
                                                    {{--                                                                    <label class="form-check-label" for="flexCheckDefault1">--}}
                                                    {{--                                                                        Po--}}
                                                    {{--                                                                    </label>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                            <div class="mb-10">--}}
                                                    {{--                                                                <div class="form-check">--}}
                                                    {{--                                                                    <input class="form-check-input" type="radio" value="Gr" id="flexCheckDefault1" name="radio2">--}}
                                                    {{--                                                                    <label class="form-check-label" for="flexCheckDefault1">--}}
                                                    {{--                                                                        Gr--}}
                                                    {{--                                                                    </label>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <label class="form-label">عنوان:</label>--}}
                                                    {{--                                                        <input class='form-control form-control-lg form-control-solid mx-1' type="text" name="title_dependencies[]" placeholder="عنوان" accept="image/*">--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <label class="form-label">توضیحات:</label>--}}
                                                    {{--                                                        <textarea class='form-control form-control-lg form-control-solid' type="text" rows="1" name="description_dependencies[]" placeholder="توضیحات"> </textarea>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="d-flex justify-content-end">--}}
                                                    {{--                                                    <button type="button" class="btn btn-link text-danger ms-2" title='حذف'--}}
                                                    {{--                                                            onclick='removeDependency(this)'>--}}
                                                    {{--                                                        <i class="ki-outline ki-trash fs-1"></i>--}}
                                                    {{--                                                    </button>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                            </div>--}}
                                                    {{--                                            <div class="d-flex justify-content-end mt-3">--}}
                                                    {{--                                                <button type="button" class="btn btn-outline-info btn-sm" onclick='addDependency()'>--}}
                                                    {{--                                                    افزودن آپشن یا جزییات به پروژه<i class="ki-outline ki-plus fs-3"></i>--}}
                                                    {{--                                                </button>--}}
                                                    {{--                                            </div>--}}
                                                    {{--                                        </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-sm"> ذخیره تغییرات پروژه<i class="ki-outline ki-plus-square fs-3 px-2"></i></button>
                                        </div>
                                    </form>
                                </div>

                                <!-- تب دوم: فرم آپشن‌ها -->
                                <div class="tab-pane fade" id="tab-project-options" role="tabpanel">

                                    <form action="{{ route('dashboard.project.options', $project->id) }}"
                                          method="POST" class="pt-3" autocomplete="off">
                                        @csrf
                                        @method('PUT')

                                        <h4 class="fw-bold mb-4 text-gray-900">آپشن‌ها و جزئیات پروژه</h4>

                                        <div class="fv-row mb-8">

                                            @if(count($project->dependencies)>0)
                                                <div class="row g-3 dependencies">
                                                    @foreach($project->dependencies as $dependency)
                                                        <div class="form-group col-4 depndency align-items-center">
                                                            {{--                                                    <div class="dep">--}}
                                                            {{--                                                        <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">--}}
                                                            {{--                                                            <div class="mb-10">--}}
                                                            {{--                                                                <input class="form-check-input" type="radio" value="Pr" name="radio2">--}}
                                                            {{--                                                                <label class="form-check-label">Pr</label>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div class="mb-10">--}}
                                                            {{--                                                                <input class="form-check-input" type="radio" value="Po" name="radio2">--}}
                                                            {{--                                                                <label class="form-check-label">Po</label>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div class="mb-10">--}}
                                                            {{--                                                                <input class="form-check-input" type="radio" value="Gr" name="radio2">--}}
                                                            {{--                                                                <label class="form-check-label">Gr</label>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                        </div>--}}
                                                            {{--                                                    </div>--}}

                                                            <div class="form-group">
                                                                <label class="form-label">آپشن:</label>
                                                                <input class='form-control form-control-lg form-control-solid mx-1' type="text"
                                                                       name="title_dependencies[]" value="{{ $dependency->title ?? null }}" placeholder="مثال : PR code">
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label">جزییات:</label>
                                                                <textarea class='form-control form-control-lg form-control-solid'
                                                                          rows="1" name="description_dependencies[]"
                                                                          placeholder="جزییات آپشن مربوط به پروژه">{{ $dependency->description ?? null }}</textarea>
                                                            </div>

                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                                                        onclick='removeDependency(this)'>
                                                                    <i class="ki-outline ki-trash fs-1"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <div class="row g-3 dependencies">
                                                    <div class="form-group col-4 depndency align-items-center">
                                                        <div class="form-group">
                                                            <label class="form-label">آپشن:</label>
                                                            <input class='form-control form-control-lg form-control-solid mx-1' type="text"
                                                                   name="title_dependencies[]"  placeholder="مثال : PR code">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">جزییات:</label>
                                                            <textarea class='form-control form-control-lg form-control-solid'
                                                                      rows="1" name="description_dependencies[]"
                                                                      placeholder="جزییات آپشن مربوط به پروژه"></textarea>
                                                        </div>

                                                        <div class="d-flex justify-content-end">
                                                            <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                                                    onclick='removeDependency(this)'>
                                                                <i class="ki-outline ki-trash fs-1"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="d-flex justify-content-end mt-3">
                                                <button type="button" class="btn btn-sm btn-bg-light btn-active-color-primary" onclick='addDependency()'>
                                                    افزودن آپشن جدید <i class="ki-outline ki-plus-square fs-3 px-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-sm"> ذخیره جزئیات<i class="ki-outline ki-plus-square fs-3 px-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Content-->

    </div>
    @push('scripts')

        <script>
            jalaliDatepicker.startWatch({
                showTodayBtn: true,
                showEmptyBtn: true,
                time: true,
                topSpace: 10,
                bottomSpace: 30,
                dayRendering(opt, input) {
                    return {
                        isHollyDay: opt.day == 1,
                    };
                },
            });

        </script>
        <script>
            $(".datepicker").pickadate({
                selectMonths: true,
                selectYears: true,
            }),
                $(".timepicker").pickatime();
        </script>
        <script>
            $(function () {
                $("#date-time").bootstrapMaterialDatePicker({
                    format: "YYYY-MM-DD HH:mm",
                });
                $("#date").bootstrapMaterialDatePicker({
                    time: false,
                });
                $("#time").bootstrapMaterialDatePicker({
                    date: false,
                    format: "HH:mm",
                    cancelText: "انصراف",
                    okText: "خب",
                });
            });
            $("#kt_datepicker_3").flatpickr({
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            // Define form element
            const form = document.getElementById('kt_docs_formvalidation_text');

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            var validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'text_input': {
                            validators: {
                                notEmpty: {
                                    message: 'Text input is required'
                                }
                            }
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Submit button handler
            const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
            submitButton.addEventListener('click', function (e) {
                // Prevent default button action
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click
                            submitButton.disabled = true;

                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function () {
                                // Remove loading indication
                                submitButton.removeAttribute('data-kt-indicator');

                                // Enable button
                                submitButton.disabled = false;

                                // Show popup confirmation
                                Swal.fire({
                                    text: "Form has been successfully submitted!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });

                                //form.submit(); // Submit form
                            }, 2000);
                        }
                    });
                }
            });

            function addImage() {
                $('.images').append(`
                <div class="col-12 d-flex image">
                    <input class='form-control form-control-lg form-control-solid' type="file" name="photos[]" accept="image/*">
                    <button type="button" class="btn btn-link text-danger" title='حذف '
                        onclick='removeImage(this)'>
                        <i class="ki-outline ki-trash fs-1"></i>
                    </button>
                </div>
            `);
            }

            function removeImage(el) {
                $(el).closest('.image').remove();
            }


            function addDependency() {
                $('.dependencies').append(`
                    <div class="form-group col-4 depndency align-items-center">
                        <div class="form-group">
                            <label class="form-label">آپشن:</label>
                            <input class='form-control form-control-lg form-control-solid mx-1' type="text"
                                   name="title_dependencies[]" placeholder="مثال : PR code">
                        </div>
                        <div class="form-group">
                            <label class="form-label">جزییات:</label>
                            <textarea class='form-control form-control-lg form-control-solid'
                                      rows="1" name="description_dependencies[]"
                                      placeholder="جزییات آپشن مربوط به پروژه"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                onclick='removeDependency(this)'>
                            <i class="ki-outline ki-trash fs-1"></i>
                        </button>
                        </div>
                    </div>
            `);
            }

            function removeDependency(el) {
                $(el).closest('.depndency').remove();
            }

        </script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>

    @endpush
</x-layout>

