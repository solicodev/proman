<x-layout>
 @include('layouts.message')

    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">
            <div class="d-flex flex-stack flex-row-fluid">
                <div class="d-flex flex-column flex-row-fluid">
                    <div class="page-title d-flex align-items-center me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                            <span>لیست تیکت ها</span>
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
                            تیکت ها
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-self-center flex-center flex-shrink-0">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-sm btn-light-success fw-bold fs-8 fs-lg-base">ایجاد تیکت<i class="ki-outline ki-plus-square fs-2 ps-5"></i> </a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content  flex-column-fluid " >
            <div class="card mb-12">
                <div class="card-body flex-column p-5">
                    <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                        <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                            <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">شاید مشکل شما در بین پاسخ های قبلی باشد!</h1>
                            <div class="position-relative w-100">
                                <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px" name="search" value="" placeholder="جستجو کنید ..."/>
                                <i class="ki-outline ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8"></i>
                            </div>
                        </div>
                        <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                            <img src="{{url('panel/assets/media/illustrations/sketchy-1/20.png')}}" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12"/>
                        </div>
                    </div>
                    <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                        <ul class="nav flex-wrap border-transparent fw-bold">
                            <li class="nav-item my-1">
                                <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                                      @if(request()->getUri() == route('dashboard.ticket.index')) active @endif" href="{{route('dashboard.ticket.index')}}">
                                    لیست تیکت ها
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                                    " href="">

                                    سوالات متداول (FAQ)
                                </a>
                            </li>
                        </ul>
                        <!--end::Nav-->

                        <!--begin::Action-->
                        <!--end::Action-->
                    </div>
                    <!--end::Hero nav-->
                </div>
                <!--end::Hero body-->
            </div>
            <!--end::Hero card-->

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">

                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                                        <thead class="fs-7 text-gray-500 text-uppercase text-start">
                                        <tr>
                                            <th class="text-start">ردیف</th>
                                            <th class="text-start">عکس</th>
                                            <th class="text-start">کاربر</th>
                                            <th class="text-start">متن کامنت</th>
                                            <th class="text-start">تاریخ</th>
                                        </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                        @foreach($tickets as $ticket)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td class="text-start">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-5 position-relative">
                                                            <div class="symbol symbol-35px symbol-circle">
{{--                                                                @if($resultComment['user']['photo_id'])--}}
{{--                                                                    <img alt="Pic" src="{{route('home')}}/{{$resultComment['user']['photo']['path']}}" />--}}
{{--                                                                @else--}}
{{--                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">{{ mb_substr($resultComment['user']['Name'], 0, 1) }}</span>--}}
{{--                                                                @endif--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-start"></td>
                                                <td class="text-start"></td>
                                                <td class="text-start"></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                        </div>
                        <!--end::Content-->

                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">




                            <!--begin::More channels-->
                            <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                                <!--begin::Title-->
                                <h2 class="text-gray-900 fw-bold mb-11">More Channels</h2>
                                <!--end::Title-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-calendar fs-1 text-primary me-5"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <h5 class="text-gray-800 fw-bold">Project Briefing</h5>

                                        <!--begin::Section-->
                                        <div class="fw-semibold">
                                            <!--begin::Desc-->
                                            <span class="text-muted">Check out our</span>
                                            <!--end::Desc-->

                                            <!--begin::Link-->
                                            <a href="#" class="link-primary">Support Policy</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-notification-status fs-1 text-primary me-5"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <h5 class="text-gray-800 fw-bold">More to discuss?</h5>

                                        <!--begin::Section-->
                                        <div class="fw-semibold">
                                            <!--begin::Desc-->
                                            <span class="text-muted">Email us to</span>
                                            <!--end::Desc-->

                                            <!--begin::Link-->
                                            <a href="#" class="link-primary">support@keenthemes.com</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-10">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-twitter fs-1 text-primary me-5"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <h5 class="text-gray-800 fw-bold">Latest News</h5>

                                        <!--begin::Section-->
                                        <div class="fw-semibold">
                                            <!--begin::Desc-->
                                            <span class="text-muted">Follow us at</span>
                                            <!--end::Desc-->

                                            <!--begin::Link-->
                                            <a href="#" class="link-primary">KeenThemes Twitter </a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center ">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-github fs-1 text-primary me-5"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <h5 class="text-gray-800 fw-bold">Github Access</h5>

                                        <!--begin::Section-->
                                        <div class="fw-semibold">
                                            <!--begin::Desc-->
                                            <span class="text-muted">Our github repo</span>
                                            <!--end::Desc-->

                                            <!--begin::Link-->
                                            <a href="#" class="link-primary">KeenThemes Github</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::More channels-->




                            <!--begin::Documentations-->
                            <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-900 mb-9">
                                    Documentation
                                </h1>
                                <!--end::Title-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Angular Admin            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        React Admin            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Vue Dashboard            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Niche Theme            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Dashboard Admin            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Dorsey Front-end            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        CRM Admin            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Admin Dashbaord            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center ">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-right fs-2 ms-n1 me-3"></i>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">
                                        Intranet Admin            </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Documentations-->












                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->


            <!--begin::Modal - Support Center - Create Ticket-->
            <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <!--begin::Modal content-->
                    <div class="modal-content rounded">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>                </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->

                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form id="kt_modal_new_ticket_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Create Ticket</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-500 fw-semibold fs-5">
                                        If you need more info, please check <a href="#" class="fw-bold link-primary">Support Guidelines</a>.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Subject</span>

                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a subject for your issue">
                                <i class="ki-outline ki-information fs-7"></i>                            </span>
                                    </label>
                                    <!--end::Label-->

                                    <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject"/>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Product</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
                                            <option value="">Select a product...</option>
                                            <option value="1">HTML Theme</option>
                                            <option value="1">Angular App</option>
                                            <option value="1">Vue App</option>
                                            <option value="1">React Theme</option>
                                            <option value="1">Figma UI Kit</option>
                                            <option value="3">Laravel App</option>
                                            <option value="4">Blazor App</option>
                                            <option value="5">Django App</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Assign</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
                                            <option value="">Select a user...</option>
                                            <option value="1">Karina Clark</option>
                                            <option value="2">Robert Doe</option>
                                            <option value="3">Niel Owen</option>
                                            <option value="4">Olivia Wild</option>
                                            <option value="5">Sean Bean</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Status</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
                                            <option value=""></option>
                                            <option value="1" selected>Open</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Resolved</option>
                                            <option value="3">Closed</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                    <span class="symbol-label bg-secondary">
                                        <i class="ki-outline ki-element-11"></i>                                    </span>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date"/>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Description</label>

                                    <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description">
                        </textarea>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-8">
                                    <label class="fs-6 fw-semibold mb-2">Attachments</label>

                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick align-items-center">
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx text-primary"></i>                                <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                <span class="fw-semibold fs-7 text-gray-500">Upload up to 10 files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="fw-semibold me-5">
                                            <label class="fs-6">Notifications</label>

                                            <div class="fs-7 text-gray-500">Allow Notifications by Phone or Email</div>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Checkboxes-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked"/>

                                                <span class="form-check-label fw-semibold">
                                        Email
                                    </span>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone"/>

                                                <span class="form-check-label fw-semibold">
                                        Phone
                                    </span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                                        <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Support Center - Create Ticket-->
        </div>
        <!--end::Content-->

    </div>

</x-layout>
