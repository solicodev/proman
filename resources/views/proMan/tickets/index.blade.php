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
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
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
                                </div>
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>


            <!--begin::Modal - Support Center - Create Ticket-->
            <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <div class="modal-content rounded">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>                </div>
                        </div>
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <form id="kt_modal_new_ticket_form" class="form" action="{{route('dashboard.ticket.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">ثبت تیکت جدید</h1>
                                </div>
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">موضوع تیکت</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" title="یک موضوع برای درخواست خود بنویسید">
                                            <i class="ki-outline ki-information fs-7"></i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="عنوان تیکت" value="{{old('subject')}}" name="subject"/>
                                </div>
                                <div class="row g-9 mb-8">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">دپارتمان</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="دپارتمان مورد نظر را انتخاب کنید" name="department_id">
                                            <option></option>
                                            @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">اولویت</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="اولویت رسیدگی به تیکت را تعیین کنید" data-hide-search="true">
                                            <option></option>
                                            <option value="low">کم</option>
                                            <option value="medium">متوسط</option>
                                            <option value="high">زیاد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">متن تیکت</label>
                                    <textarea class="form-control form-control-solid" rows="4" name="message" placeholder="درخواست خود را شرح دهید">
                                        {{old('message')}}
                                    </textarea>
                                </div>
                                <div class="fv-row mb-8">
                                    <label class="fs-6 fw-semibold mb-2">فایل</label>
                                    <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                        <div class="dz-message needsclick align-items-center">
                                            <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">فایل های مربوط به تیکت خود را آپلود کنید</h3>
                                                <span class="fw-semibold fs-7 text-gray-500">حداکثر 10 فایل</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit"  class="btn btn-sm btn-light-primary">
                                        <span class="indicator-label">
                                            ثبت تیکت
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@push('scripts')
        <script>
            const uploadUrl = "{{ route('dashboard.upload') }}";
        </script>
    <script src="{{asset('panel/assets/js/custom/apps/support-center/tickets/create.js')}}"></script>
@endpush
</x-layout>
