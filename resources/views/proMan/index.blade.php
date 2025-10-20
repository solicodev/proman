@extends('layouts.panel')

@section('content')
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
                    <h1
                        class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                        <span><span class="fw-light">خوش آمدی</span>,&nbsp;فرتاش</span>

                        <!--begin::Description-->
                        <span class="page-desc text-gray-600 fs-base fw-semibold">
                                                    شما با دسترسی مدیر وارد شدید.</span>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->


            </div>
            <!--end::Toolbar container-->

            <!--begin::Actions-->
            <div class="d-flex align-self-center flex-center flex-shrink-0">
                <a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3"
                   data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                    <i class="ki-outline ki-plus-square fs-2"></i>
                    <span>ایجاد پروژه</span>
                </a>

                <a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_target">
                    <span class="d-none d-sm-inline">پروژه ها</span>
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-0">
            <!--begin::Col-->
            <div class="col-md-4 mb-xl-10">
                <!--begin::Card widget 28-->
                <div class="card card-flush ">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Card title-->
                        <div class="card-title flex-stack flex-row-fluid">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px me-5">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-outline ki-instagram fs-2x text-gray-800"></i>
                                                        </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Wrapper-->
                            <div class="me-n2">
                                <!--begin::Badge-->
                                <span
                                    class="badge badge-light-success align-self-center fs-base">
                                                            <i
                                                                class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                            2.2%
                                                        </span>
                                <!--end::Badge-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <span class="fw-bolder fs-2x text-gray-900">$65,209.00</span>
                            <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 28-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-4 mb-xl-10">
                <!--begin::Card widget 28-->
                <div class="card card-flush ">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Card title-->
                        <div class="card-title flex-stack flex-row-fluid">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px me-5">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-outline ki-microsoft fs-2x text-gray-800"></i>
                                                        </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Wrapper-->
                            <div class="me-n2">
                                <!--begin::Badge-->
                                <span
                                    class="badge badge-light-danger align-self-center fs-base">
                                                            <i
                                                                class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                                            2.5% </span>
                                <!--end::Badge-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <span class="fw-bolder fs-2x text-gray-900">$6,526.00</span>
                            <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 28-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-4 mb-xl-10">
                <!--begin::Card widget 28-->
                <div class="card card-flush ">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Card title-->
                        <div class="card-title flex-stack flex-row-fluid">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px me-5">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-outline ki-apple fs-2x text-gray-800"></i>
                                                        </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Wrapper-->
                            <div class="me-n2">
                                <!--begin::Badge-->
                                <span
                                    class="badge badge-light-success align-self-center fs-base">
                                                            <i
                                                                class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                            2.7%
                                                        </span>
                                <!--end::Badge-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <span class="fw-bolder fs-2x text-gray-900">$45,142.00</span>
                            <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 28-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6">

                <!--begin::List widget 23-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Lading Teams</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social
                                                        visitors</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Items-->
                        <div class="">

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/atica.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                            Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    2.6%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/telegram-2.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Binford
                                            Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Media</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                                                    0.4%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/balloon.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Barone
                                            LLC.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    0.2%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                            Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                                                    Channel</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    4.1%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/vimeo.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                            Enterprises</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    8.3%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/plurk.svg"
                                         class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Big
                                            Kahuna Burger</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    1.9%
                                                                </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->


                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List widget 23-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xxl-6 mb-5 mb-xl-10">
                <!--begin::Chart widget 8-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Performance Overview</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav" id="kt_chart_widget_8_tabs">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                       data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle"
                                       href="#kt_chart_widget_8_week_tab">Month</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                       data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle"
                                       href="#kt_chart_widget_8_month_tab">Week</a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-6">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                                <!--begin::Statistics-->
                                <div class="mb-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>

                                        <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>

                                        <span class="badge badge-light-success fs-base">
                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                            4,8%
                        </span>
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->

                                <!--begin::Chart-->
                                <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto"
                                     style="height: 425px"></div>
                                <!--end::Chart-->

                                <!--begin::Items-->
                                <div class="d-flex flex-wrap pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-<gray-600 fs-6">Google Ads</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-column pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Items-->
                            </div>
                            <!--end::Tab pane-->

                            <!--begin::Tab pane-->
                            <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
                                <!--begin::Statistics-->
                                <div class="mb-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>

                                        <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>

                                        <span class="badge badge-light-success fs-base">
                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                            2.2%
                        </span>

                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->

                                <!--begin::Chart-->
                                <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto"
                                     style="height: 425px"></div>
                                <!--end::Chart-->

                                <!--begin::Items-->
                                <div class="d-flex flex-wrap pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-column pt-sm-3 pt-6">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3 mb-sm-6">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Items-->
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 8-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-lg-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                <!--begin::Card widget 12-->
                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                        <!--begin::Statistics-->
                        <div class="mb-4 px-9">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center mb-2">


                                <!--begin::Value-->
                                <span
                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                <!--end::Value-->

                                <!--begin::Label-->
                                <span
                                    class="d-flex align-items-end text-gray-500 fs-6 fw-semibold">
                                                            Tons </span>

                                <!--end::Label-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Description-->
                            <span class="fs-6 fw-semibold text-gray-500">Total Online
                                                        Sales</span>
                            <!--end::Description-->
                        </div>
                        <!--end::Statistics-->

                        <!--begin::Chart-->
                        <div id="kt_card_widget_12_chart" class="min-h-auto"
                             style="height: 125px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 12-->


                <!--begin::Card widget 10-->
                <div class="card card-flush h-md-50 mb-lg-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span
                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->

                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings
                                                        This Month</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin::Chart-->
                            <div class="d-flex me-7 me-xxl-10">
                                <div id="kt_card_widget_10_chart" class="min-h-auto"
                                     style="height: 78px; width: 78px" data-kt-size="78"
                                     data-kt-line="11">
                                </div>
                            </div>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-grow-1">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-success me-3">
                                    </div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                        Used Truck freight
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Separator-->
                                    <div
                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Stats-->
                                    <div class="ms-auto fw-bolder text-gray-700 text-end">45%
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3">
                                    </div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                        Used Ship freight
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Separator-->
                                    <div
                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Stats-->
                                    <div class="ms-auto fw-bolder text-gray-700 text-end">21%
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 me-3"
                                         style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                        Used Plane freight
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Separator-->
                                    <div
                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                    </div>
                                    <!--end::Separator-->

                                    <!--begin::Stats-->
                                    <div class="ms-auto fw-bolder text-gray-700 text-end">34%
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 10-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">

                <!--begin::Card widget 13-->
                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                        <!--begin::Statistics-->
                        <div class="mb-4 px-9">
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center mb-2">


                                <!--begin::Value-->
                                <span
                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                <!--end::Value-->

                                <!--begin::Label-->

                                <!--end::Label-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Description-->
                            <span class="fs-6 fw-semibold text-gray-500">Total Shipments</span>
                            <!--end::Description-->
                        </div>
                        <!--end::Statistics-->

                        <!--begin::Chart-->
                        <div id="kt_card_widget_13_chart" class="min-h-auto"
                             style="height: 125px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 13-->


                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-lg-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span
                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                            <!--end::Amount-->

                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This
                                                        Month</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                                                    Heroes</span>
                        <!--end::Title-->

                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Alan Warden">
                                                        <span
                                                            class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Susan Redwood">
                                                        <span
                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Perry Matthew">
                                                        <span
                                                            class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle"
                                 data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg"/>
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle"
                               data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span
                                                            class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content-->
@endsection
