<!--begin::Header-->
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate-="true"
     data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">

    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
         id="kt_app_header_container">
        <!--begin::Header wrapper-->
        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
             id="kt_app_header_wrapper">
            <!--begin::Logo wrapper-->
            <div
                class="app-header-logo d-flex flex-shrink-0 align-items-center justify-content-between justify-content-lg-center">
                <!--begin::Logo wrapper-->
                <button
                    class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_toggle">
                    <i class="ki-outline ki-abstract-14 fs-2"></i> </button>
                <!--end::Logo wrapper-->

                <!--begin::Logo image-->
                <a href="{{route('dashboard.index')}}">
                    <img alt="Logo" src="{{url('panel/assets/media/logos/logo.png')}}"
                         class="h-30px h-lg-40px theme-light-show" />
                    <img alt="Logo" src="{{url('panel/assets/media/logos/logo.png')}}"
                         class="h-30px h-lg-40px theme-dark-show" />
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->

            <!--begin::Menu wrapper-->
            <!--end::Menu wrapper-->

            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Notifications-->
                {{--                <div class="app-navbar-item ms-1 ms-lg-5">--}}
                {{--                    <!--begin::Menu- wrapper-->--}}
                {{--                    <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px"--}}
                {{--                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"--}}
                {{--                         data-kt-menu-placement="bottom">--}}
                {{--                        <i class="ki-outline ki-calendar fs-1"></i>--}}
                {{--                    </div>--}}

                {{--                    <!--begin::Menu-->--}}
                {{--                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"--}}
                {{--                         data-kt-menu="true" id="kt_menu_notifications">--}}
                {{--                        <!--begin::Heading-->--}}
                {{--                        <div class="d-flex flex-column bgi-no-repeat rounded-top"--}}
                {{--                             style="background-image:url('assets/media/misc/menu-header-bg.jpg')">--}}
                {{--                            <!--begin::Title-->--}}
                {{--                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">--}}
                {{--                                Notifications <span class="fs-8 opacity-75 ps-3">24 گزارش</span>--}}
                {{--                            </h3>--}}
                {{--                            <!--end::Title-->--}}

                {{--                            <!--begin::Tabs-->--}}
                {{--                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">--}}
                {{--                                <li class="nav-item">--}}
                {{--                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"--}}
                {{--                                       data-bs-toggle="tab" href="#kt_topbar_notifications_1">هشدارها</a>--}}
                {{--                                </li>--}}

                {{--                                <li class="nav-item">--}}
                {{--                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"--}}
                {{--                                       data-bs-toggle="tab" href="#kt_topbar_notifications_2">اعلان ها</a>--}}
                {{--                                </li>--}}

                {{--                                <li class="nav-item">--}}
                {{--                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"--}}
                {{--                                       data-bs-toggle="tab" href="#kt_topbar_notifications_3">لاگ</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                            <!--end::Tabs-->--}}
                {{--                        </div>--}}
                {{--                        <!--end::Heading-->--}}

                {{--                        <!--begin::Tab content-->--}}
                {{--                        <div class="tab-content">--}}
                {{--                            <!--begin::Tab panel-->--}}
                {{--                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">--}}
                {{--                                <!--begin::Items-->--}}
                {{--                                <div class="scroll-y mh-325px my-5 px-8">--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-primary">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-abstract-28 fs-2 text-primary"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project--}}
                {{--                                                    Alice</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Phase 1 development</div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">1 hr</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-danger">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-information fs-2 text-danger"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">HR--}}
                {{--                                                    Confidential</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Confidential staff documents--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">2 hrs</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-warning">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-briefcase fs-2 text-warning"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Company--}}
                {{--                                                    HR</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Corporeate staff profiles--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">5 hrs</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-success">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-abstract-12 fs-2 text-success"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project--}}
                {{--                                                    Redux</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">New frontend admin theme--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">2 days</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-primary">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-colors-square fs-2 text-primary"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project--}}
                {{--                                                    Breafing</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Product launch status update--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">21 Jan</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-info">--}}
                {{--                                                                <i class="ki-outline ki-picture--}}
                {{-- fs-2 text-info"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner--}}
                {{--                                                    Assets</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Collection of banner images--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">21 Jan</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center">--}}
                {{--                                            <!--begin::Symbol-->--}}
                {{--                                            <div class="symbol symbol-35px me-4">--}}
                {{--                                                            <span class="symbol-label bg-light-warning">--}}
                {{--                                                                <i--}}
                {{--                                                                    class="ki-outline ki-color-swatch fs-2 text-warning"></i>--}}
                {{--                                                            </span>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Symbol-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <div class="mb-0 me-2">--}}
                {{--                                                <a href="#"--}}
                {{--                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon--}}
                {{--                                                    Assets</a>--}}
                {{--                                                <div class="text-gray-500 fs-7">Collection of SVG icons--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">20 March</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}

                {{--                                </div>--}}
                {{--                                <!--end::Items-->--}}

                {{--                                <!--begin::View more-->--}}
                {{--                                <div class="py-3 text-center border-top">--}}
                {{--                                    <a href="pages/user-profile/activity.html"--}}
                {{--                                       class="btn btn-color-gray-600 btn-active-color-primary">--}}
                {{--                                        View All--}}
                {{--                                        <i class="ki-outline ki-arrow-right fs-5"></i> </a>--}}
                {{--                                </div>--}}
                {{--                                <!--end::View more-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Tab panel-->--}}

                {{--                            <!--begin::Tab panel-->--}}
                {{--                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2"--}}
                {{--                                 role="tabpanel">--}}
                {{--                                <!--begin::Wrapper-->--}}
                {{--                                <div class="d-flex flex-column px-9">--}}
                {{--                                    <!--begin::Section-->--}}
                {{--                                    <div class="pt-10 pb-0">--}}
                {{--                                        <!--begin::Title-->--}}
                {{--                                        <h3 class="text-gray-900 text-center fw-bold">--}}
                {{--                                            Get Pro Access--}}
                {{--                                        </h3>--}}
                {{--                                        <!--end::Title-->--}}

                {{--                                        <!--begin::Text-->--}}
                {{--                                        <div class="text-center text-gray-600 fw-semibold pt-1">--}}
                {{--                                            Outlines keep you honest. They stoping you from amazing poorly--}}
                {{--                                            about drive--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Text-->--}}

                {{--                                        <!--begin::Action-->--}}
                {{--                                        <div class="text-center mt-5 mb-9">--}}
                {{--                                            <a href="#" class="btn btn-sm btn-primary px-6"--}}
                {{--                                               data-bs-toggle="modal"--}}
                {{--                                               data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Action-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Section-->--}}

                {{--                                    <!--begin::Illustration-->--}}
                {{--                                    <div class="text-center px-4">--}}
                {{--                                        <img class="mw-100 mh-200px" alt="image"--}}
                {{--                                             src="assets/media/illustrations/sketchy-1/1.png" />--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Illustration-->--}}
                {{--                                </div>--}}
                {{--                                <!--end::Wrapper-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Tab panel-->--}}

                {{--                            <!--begin::Tab panel-->--}}
                {{--                            <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">--}}
                {{--                                <!--begin::Items-->--}}
                {{--                                <div class="scroll-y mh-325px my-5 px-8">--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-success me-4">200--}}
                {{--                                                            OK</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">New--}}
                {{--                                                order</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Just now</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-danger me-4">500--}}
                {{--                                                            ERR</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">New--}}
                {{--                                                customer</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">2 hrs</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-success me-4">200--}}
                {{--                                                            OK</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Payment--}}
                {{--                                                process</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">5 hrs</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-warning me-4">300--}}
                {{--                                                            WRN</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Search--}}
                {{--                                                query</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">2 days</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-success me-4">200--}}
                {{--                                                            OK</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">API--}}
                {{--                                                connection</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">1 week</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-success me-4">200--}}
                {{--                                                            OK</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Database--}}
                {{--                                                restore</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Mar 5</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-warning me-4">300--}}
                {{--                                                            WRN</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">System--}}
                {{--                                                update</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">May 15</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-warning me-4">300--}}
                {{--                                                            WRN</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Server--}}
                {{--                                                OS update</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Apr 3</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-warning me-4">300--}}
                {{--                                                            WRN</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">API--}}
                {{--                                                rollback</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Jun 30</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-danger me-4">500--}}
                {{--                                                            ERR</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Refund--}}
                {{--                                                process</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Jul 10</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-danger me-4">500--}}
                {{--                                                            ERR</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Withdrawal--}}
                {{--                                                process</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Sep 10</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}
                {{--                                    <!--begin::Item-->--}}
                {{--                                    <div class="d-flex flex-stack py-4">--}}
                {{--                                        <!--begin::Section-->--}}
                {{--                                        <div class="d-flex align-items-center me-2">--}}
                {{--                                            <!--begin::Code-->--}}
                {{--                                            <span class="w-70px badge badge-light-danger me-4">500--}}
                {{--                                                            ERR</span>--}}
                {{--                                            <!--end::Code-->--}}

                {{--                                            <!--begin::Title-->--}}
                {{--                                            <a href="#"--}}
                {{--                                               class="text-gray-800 text-hover-primary fw-semibold">Mail--}}
                {{--                                                tasks</a>--}}
                {{--                                            <!--end::Title-->--}}
                {{--                                        </div>--}}
                {{--                                        <!--end::Section-->--}}

                {{--                                        <!--begin::Label-->--}}
                {{--                                        <span class="badge badge-light fs-8">Dec 10</span>--}}
                {{--                                        <!--end::Label-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Item-->--}}

                {{--                                </div>--}}
                {{--                                <!--end::Items-->--}}

                {{--                                <!--begin::View more-->--}}
                {{--                                <div class="py-3 text-center border-top">--}}
                {{--                                    <a href="pages/user-profile/activity.html"--}}
                {{--                                       class="btn btn-color-gray-600 btn-active-color-primary">--}}
                {{--                                        View All--}}
                {{--                                        <i class="ki-outline ki-arrow-right fs-5"></i> </a>--}}
                {{--                                </div>--}}
                {{--                                <!--end::View more-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Tab panel-->--}}
                {{--                        </div>--}}
                {{--                        <!--end::Tab content-->--}}
                {{--                    </div>--}}
                {{--                    <!--end::Menu--> <!--end::Menu wrapper-->--}}
                {{--                </div>--}}
                {{--                <!--end::Notifications-->--}}

                {{--                <!--begin::Quick links-->--}}
                {{--                <div class="app-navbar-item ms-1 ms-lg-5">--}}
                {{--                    <!--begin::Menu- wrapper-->--}}
                {{--                    <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px"--}}
                {{--                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"--}}
                {{--                         data-kt-menu-placement="bottom">--}}
                {{--                        <i class="ki-outline ki-abstract-26 fs-1"></i>--}}
                {{--                    </div>--}}

                {{--                    <!--begin::Menu-->--}}
                {{--                    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"--}}
                {{--                         data-kt-menu="true">--}}
                {{--                        <!--begin::Heading-->--}}
                {{--                        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"--}}
                {{--                             style="background-image:url('assets/media/misc/menu-header-bg.jpg')">--}}
                {{--                            <!--begin::Title-->--}}
                {{--                            <h3 class="text-white fw-semibold mb-3">--}}
                {{--                                Quick Links--}}
                {{--                            </h3>--}}
                {{--                            <!--end::Title-->--}}

                {{--                            <!--begin::Status-->--}}
                {{--                            <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending--}}
                {{--                                            tasks</span>--}}
                {{--                            <!--end::Status-->--}}
                {{--                        </div>--}}
                {{--                        <!--end::Heading-->--}}

                {{--                        <!--begin:Nav-->--}}
                {{--                        <div class="row g-0">--}}
                {{--                            <!--begin:Item-->--}}
                {{--                            <div class="col-6">--}}
                {{--                                <a href="apps/projects/budget.html"--}}
                {{--                                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">--}}
                {{--                                    <i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i> <span--}}
                {{--                                        class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>--}}
                {{--                                    <span class="fs-7 text-gray-500">eCommerce</span>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <!--end:Item-->--}}

                {{--                            <!--begin:Item-->--}}
                {{--                            <div class="col-6">--}}
                {{--                                <a href="apps/projects/settings.html"--}}
                {{--                                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">--}}
                {{--                                    <i class="ki-outline ki-sms fs-3x text-primary mb-2"></i> <span--}}
                {{--                                        class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>--}}
                {{--                                    <span class="fs-7 text-gray-500">Console</span>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <!--end:Item-->--}}

                {{--                            <!--begin:Item-->--}}
                {{--                            <div class="col-6">--}}
                {{--                                <a href="apps/projects/list.html"--}}
                {{--                                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">--}}
                {{--                                    <i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i> <span--}}
                {{--                                        class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>--}}
                {{--                                    <span class="fs-7 text-gray-500">Pending Tasks</span>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <!--end:Item-->--}}

                {{--                            <!--begin:Item-->--}}
                {{--                            <div class="col-6">--}}
                {{--                                <a href="apps/projects/users.html"--}}
                {{--                                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">--}}
                {{--                                    <i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i> <span--}}
                {{--                                        class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>--}}
                {{--                                    <span class="fs-7 text-gray-500">Latest cases</span>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <!--end:Item-->--}}
                {{--                        </div>--}}
                {{--                        <!--end:Nav-->--}}

                {{--                        <!--begin::View more-->--}}
                {{--                        <div class="py-2 text-center border-top">--}}
                {{--                            <a href="pages/user-profile/activity.html"--}}
                {{--                               class="btn btn-color-gray-600 btn-active-color-primary">--}}
                {{--                                View All--}}
                {{--                                <i class="ki-outline ki-arrow-right fs-5"></i> </a>--}}
                {{--                        </div>--}}
                {{--                        <!--end::View more-->--}}
                {{--                    </div>--}}
                {{--                    <!--end::Menu-->--}}
                {{--                    <!--end::Menu wrapper-->--}}
                {{--                </div>--}}
                {{--                <!--end::Quick links-->--}}

                {{--                <!--begin::Chat-->--}}
                {{--                <div class="app-navbar-item ms-1 ms-lg-5">--}}
                {{--                    <!--begin::Menu wrapper-->--}}
                {{--                    <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px position-relative"--}}
                {{--                         id="kt_drawer_chat_toggle">--}}
                {{--                        <i class="ki-outline ki-notification-on fs-1"></i>--}}
                {{--                    </div>--}}
                {{--                    <!--end::Menu wrapper-->--}}
                {{--                </div>--}}
                <!--end::Chat-->

                <!--begin::User menu-->
                <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                        @if(\Illuminate\Support\Facades\Auth::user()->photo_id)
                            <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                                 src="{{\Illuminate\Support\Facades\Auth::user()->photo?->path}}" alt="user" />
                        @else
                            <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                                 src="{{url('panel/assets/media/avatars/user.gif')}}" alt="user" />
                        @endif
                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                        </button>
                    </div>

                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                         data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    @if(\Illuminate\Support\Facades\Auth::user()->photo_id)
                                        <img alt="Logo" src="{{\Illuminate\Support\Facades\Auth::user()->photo?->path}}" />
                                    @else
                                        <img alt="Logo" src="{{url('panel/assets/media/avatars/user.gif')}}" />
                                    @endif
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{\Illuminate\Support\Facades\Auth::user()->Name}} <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{role_name(\Illuminate\Support\Facades\Auth::user()->getRoleNames()->first())}}</span>
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        {{\Illuminate\Support\Facades\Auth::user()->email}} </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{route('dashboard.profile',\Illuminate\Support\Facades\Auth::id())}}" class="menu-link px-5">
                                پروفایل من
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">
                                    حالت نمایش
                                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                    </span>
                                </span>
                            </a>

                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                 data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-night-day fs-2"></i> </span>
                                        <span class="menu-title">
                                                        روشن
                                                    </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-moon fs-2"></i> </span>
                                        <span class="menu-title">
                                                        تیره
                                                    </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-screen fs-2"></i> </span>
                                        <span class="menu-title">
                                                        سیستم
                                                    </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu item-->

                        <div class="separator my-2"></div>
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 d-flex justify-content-end">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger">خروج</button>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->

                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                    <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px"
                         id="kt_app_header_menu_toggle">
                        <i class="ki-outline ki-text-align-left fs-1"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
