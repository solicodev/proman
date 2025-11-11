<x-layout>
    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-135-nh5p">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">
            <div class="d-flex flex-stack flex-row-fluid">
                <div class="d-flex flex-column flex-row-fluid">
                    <div class="page-title d-flex align-items-center me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                            <span>افزودن تیکت</span>
                        </h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="{{route('dashboard.index')}}" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            تیکت های من
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            ایجاد تیکت
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content  flex-column-fluid " data-select2-id="select2-data-kt_app_content">
            <div class="card" data-select2-id="select2-data-134-tiwj">
                <div class="card-body" data-select2-id="select2-data-133-kmb7">
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper">
                        <form action="{{ route('dashboard.ticket.store') }}" method="post" enctype="multipart/form-data"
                              class="mx-auto mw-100 w-100 pt-15 pb-10 fv-plugins-bootstrap5 fv-plugins-framework needs-validation"
                              novalidate id="kt_docs_formvalidation_text" autocomplete="off">
                            @csrf

                            <div class="row">
                                <div class="col-lg-8 col-md-7 card shadow-sm p-4">
                                    <div class="pb-10 pb-lg-12">
                                        <h2 class="fw-bold text-gray-900">جزئیات تیکت</h2>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="form-label required">نام تیکت</label>
                                        <input name="name" value="{{ old('name') }}" class="form-control form-control-lg form-control-solid"
                                               placeholder="نام تیکت" required>
                                    </div>


                                    <div class="row g-3 mb-8">
                                        <div class="col-md-6 fv-row">
                                            <div class="fv-row mb-8">
                                                <label class="form-label required">دپارتمان</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                        data-placeholder="دپارتمان را انتخاب کنید" name="department_id" required>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 fv-row">
                                            <label class="form-label required">دسته بندی</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="دپارتمان را انتخاب کنید" name="category_id" required>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="form-label">توضیحات تیکت</label>
                                        <textarea name="description" class="form-control form-control-lg form-control-solid"
                                                  rows="3">{{ old('description') }}</textarea>
                                    </div>


                                </div>

                                <div class="col-lg-4 col-md-5">
                                    <div class="card shadow-sm p-4">
                                        <h5 class="fw-bold mb-4">فایل‌های تیکت</h5>
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
                                        {{--                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">فایل های مربوط به تیکت</h3>--}}
                                        {{--                                                    <span class="fs-7 fw-semibold text-gray-500">آپلود</span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <!--end::Info-->--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="fv-row mb-8">
                                            <div class="row g-3 images">
                                                <div class="col-12 d-flex image align-items-center">
                                                    <input class='form-control form-control-lg form-control-solid' type="file" name="photos[]" accept="image/*">
                                                    <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
                                                            onclick='removeImage(this)'>
                                                        <i class="ki-outline ki-trash fs-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <button type="button" class="btn btn-sm btn-bg-light btn-active-color-primary" onclick='addImage()'>
                                                    افزودن فایل<i class="ki-outline ki-plus-square fs-3 px-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm"> ثبت تیکت<i class="ki-outline ki-plus-square fs-3 px-2"></i></button>
                            </div>
                        </form>

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
    @endpush
</x-layout>

