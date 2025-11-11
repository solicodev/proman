<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column {{ session('theme_mode') === 'dark' ? 'dark-mode' : 'light-mode' }}" data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_toggle">

    <!--begin::Sidebar nav-->
    <div class=" app-sidebar-wrapper py-8 py-lg-10 pe-5"  data-kt-scroll="true"
         data-kt-scroll-height="{default: '100px', lg: '100vh'}" id="kt_app_sidebar_wrapper">
        <!--begin::Nav wrapper-->
        <div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column px-8 px-lg-10 hover-scroll-y"
             data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
             data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}"
             data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_wrapper"
             data-kt-scroll-offset="{default: '10px', lg: '40px'}">

            <!--begin::Stats-->
            <div class="d-flex mb-8 mb-lg-10">
                <!--begin::Stat-->
                <div
                    class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-500 fw-bold">تسک ها</span>
                    <!--end::Date-->
                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-success">{{count($user_tasks)}}</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div
                    class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 ">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-500 fw-bold">پروژه ها</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fs-2 fw-bold text-info">{{count($user_projects)}}</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->

            </div>
            <!--end::Stats-->

            <!--begin::Links-->
            <div class="mb-0">
                <!--begin::Title-->
                <h3 class="text-gray-800 fw-bold mb-8">دسترسی سریع</h3>
                <!--end::Title-->

                <!--begin::Row-->
                <div class="row g-5" data-kt-buttons="true"
                     data-kt-buttons-target="[data-kt-button]">
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{route('dashboard.project.index')}}"
                           class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
                           data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="ki-outline ki-chart-line-star fs-1"></i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">پروژه های من</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{route('dashboard.task.index')}}"
                           class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
                           data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="ki-outline ki-tablet-book fs-1"></i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">تسک های من</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href="{{route('dashboard.ticket.index')}}"
                           class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
                           data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                <i class="ki-outline ki-message-minus fs-1"></i>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">تیکت ها</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <div class="col-6">
                        <!--begin::Link-->
                        <a href=""
                           class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
                           data-kt-button="true">
                            <!--begin::Icon-->
                            <span class="mb-2">
                                    <i class="ki-outline ki-receipt-square fs-1"></i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <span class="fs-7 fw-bold">گزارشات</span>
                            <!--end::Label-->
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->
            </div>
            <!--end::Links-->
        </div>
    </div>
</div>
<!--end::Sidebar-->
