<!DOCTYPE html>
<!--
Author: farinaz haghighi
Product Name: MetronicProduct Version: 8.2.7
-->
<html lang="en" dir="rtl" direction="rtl" style="direction: rtl">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
          content="" />
    <meta property="og:my_asset" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon"
          href="https://preview.keenthemes.com/metronic8/demo23/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{my_asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{my_asset('panel/assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{my_asset('panel/assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{my_asset('panel/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{my_asset('panel/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @stack('styles')
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->


<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" class="app-default">

<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div id="kt_app_header" class="d-print-none app-header" data-kt-sticky="true"
             data-kt-sticky-activate-="true" data-kt-sticky-name="app-header-sticky"
             data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                 id="kt_app_header_container">
                <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
                     id="kt_app_header_wrapper">
                    <div class="d-flex align-items-center">
                        <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                             id="kt_app_sidebar_toggle">
                            <i class="ki-outline ki-burger-menu-1 fs-3hx"></i>
                        </div>

                        <a href="" class="d-flex d-lg-none">
                            <img alt="Logo" src="" class="h-20px theme-light-show" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <div id="kt_app_sidebar" class="app-sidebar d-print-none flex-column" data-kt-drawer="true"
                 data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_toggle">

                <div class="flex-column-fluid px-4 px-lg-8 py-4" id="kt_app_sidebar_nav">
                    <div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column hover-scroll-y pe-4 me-n4">

                        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
                             id="kt_app_header_wrapper">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary me-2 d-flex d-lg-none"
                                     id="kt_app_sidebar_toggle">
                                    <i class="ki-outline ki-cross-circle fs-3hx"></i>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-stack p-0" id="kt_app_sidebar_logo">
                            <div>
                                <div class="cursor-pointer position-relative symbol symbol-circle symbol-40px"
                                     data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
{{--                                    @if (Auth::user()?->photo)--}}
{{--                                        <img src="{{ url(Auth::user()?->photo) }}" alt="user" />--}}
{{--                                    @else--}}
{{--                                        <img src="{{ asset('assets/svgs/person.svg') }}" alt="user" />--}}
{{--                                    @endif--}}

                                    <span class="mx-1">
{{--                                            @if (auth()->user()->hasrole('User'))--}}
{{--                                            {{ auth()->user()->name }}--}}
{{--                                        @elseif (auth()->user()->hasrole('Organization'))--}}
{{--                                            @if (auth()->id() != auth()->user()->organization->user_id)--}}
{{--                                                {{ auth()->user()?->Name }}--}}
{{--                                            @else--}}
{{--                                                {{ auth()->user()?->organization->name }}--}}
{{--                                            @endif--}}
{{--                                        @elseif(auth()->user()?->microprovider)--}}
{{--                                            {{ auth()->user()?->microprovider->name }}--}}
{{--                                        @elseif(auth()->user()?->macroprovider)--}}
{{--                                            {{ auth()->user()?->macroprovider->name }}--}}
{{--                                        @elseif(auth()->user()?->access_micro_provider)--}}
{{--                                            {{ \Illuminate\Support\Facades\Auth::user()?->Name }}--}}
{{--                                        @elseif(auth()->user()?->access_macro_provider)--}}
{{--                                            {{ \Illuminate\Support\Facades\Auth::user()?->Name }}--}}
{{--                                        @else--}}
{{--                                            {{ auth()->user()->name }}--}}
{{--                                        @endif--}}
                                        </span>

                                    <i class="ki-outline ki-down"></i>
                                </div>


                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                     data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <div class="symbol symbol-50px me-5">
{{--                                                @if (Auth::user()?->organization?->logo)--}}
{{--                                                    <img alt="Logo"--}}
{{--                                                         src="{{ url(Auth::user()?->organization?->logo) }}" />--}}
{{--                                                @else--}}
{{--                                                    <img src="{{ asset('assets/panel/media/avatars/social-page.gif') }}"--}}
{{--                                                         alt="user" />--}}
{{--                                                @endif--}}
                                            </div>

                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
{{--                                                    @if (auth()->user()->hasrole('User'))--}}
{{--                                                        {{ auth()->user()->name }}--}}
{{--                                                    @elseif (auth()->user()->hasrole('Organization'))--}}
{{--                                                        @if (auth()->id() != auth()->user()->organization->user_id)--}}
{{--                                                            {{ auth()->user()?->Name }}--}}
{{--                                                        @else--}}
{{--                                                            {{ auth()->user()?->organization->name }}--}}
{{--                                                        @endif--}}
{{--                                                    @elseif(auth()->user()?->microprovider)--}}
{{--                                                        {{ auth()->user()?->microprovider->name }}--}}
{{--                                                    @elseif(auth()->user()?->macroprovider)--}}
{{--                                                        {{ auth()->user()?->macroprovider->name }}--}}
{{--                                                    @elseif(auth()->user()?->access_micro_provider)--}}
{{--                                                        {{ \Illuminate\Support\Facades\Auth::user()?->Name }}--}}
{{--                                                    @elseif(auth()->user()?->access_macro_provider)--}}
{{--                                                        {{ \Illuminate\Support\Facades\Auth::user()?->Name }}--}}
{{--                                                    @else--}}
{{--                                                        {{ auth()->user()->name }}--}}
{{--                                                    @endif--}}
                                                </div>

                                                <a href="#"
                                                   class="fw-semibold text-muted text-hover-primary fs-7">
                                                    {{ \Illuminate\Support\Facades\Auth::user()?->post }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator my-2"></div>
{{--                                    @if (auth()->user()->hasrole('Organization'))--}}
{{--                                        @if (auth()->id() == auth()->user()->organization->user_id)--}}
{{--                                            <div class="menu-item px-5">--}}
{{--                                                <a href="{{ route($urlType . '.profile') }}"--}}
{{--                                                   class="menu-link px-5">--}}
{{--                                                    <span class="menu-text">مشاهده پروفایل</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @elseif(auth()->user()->hasrole('User'))--}}
{{--                                        <div class="menu-item px-5">--}}
{{--                                            <a href="{{ route($urlType . '.profile') }}" class="menu-link px-5">--}}
{{--                                                <span class="menu-text">مشاهده پروفایل</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    @elseif(auth()->user()->hasrole('MicroProvider'))--}}
{{--                                        @if (auth()->user()?->microprovider)--}}
{{--                                            @if (auth()->user()?->microprovider?->collection == 'false')--}}
{{--                                                <div class="menu-item px-5">--}}
{{--                                                    <a href="{{ route($urlType . '.profile') }}"--}}
{{--                                                       class="menu-link px-5">--}}
{{--                                                        <span class="menu-text">مشاهده پروفایل</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    @elseif(auth()->user()->hasrole('MacroProvider'))--}}
{{--                                        @if (auth()->user()?->macroprovider)--}}
{{--                                            <div class="menu-item px-5">--}}
{{--                                                <a href="{{ route($urlType . '.profile') }}"--}}
{{--                                                   class="menu-link px-5">--}}
{{--                                                    <span class="menu-text">مشاهده پروفایل</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @elseif(auth()->user()->hasrole('Agent'))--}}
{{--                                        <div class="menu-item px-5">--}}
{{--                                            <a href="{{ route($urlType . '.profile') }}" class="menu-link px-5">--}}
{{--                                                <span class="menu-text">مشاهده پروفایل</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}

                                    <div class="menu-item px-5">
                                        <a href="{{ route('logout') }}" class="menu-link px-5">
                                            <span class="menu-text">خروج</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <label class="form-check-label me-1 ms-0" for="switchTheme">تغییر
                                    پوسته</label>
                                <input class="form-check-input" type="checkbox" id="switchTheme"
                                       @if (!request()->session()->has('theme_mode') || request()->session()->get('theme_mode') == 'light') checked="true" @endif
                                       onchange="switchTheme(this)" />
                            </div>
                        </div>

                        <button class="btn btn-primary btn-sm mt-3" id="install" hidden>نصب حالی کارت</button>

                        <div class="separator separator-dashed my-5"></div>

                        <h3 class="text-gray-800 fw-bold mb-8">
                            خدمات
                        </h3>

                        <div class="row row-cols-3" data-kt-buttons="true"
                             data-kt-buttons-target="[data-kt-button]">
{{--                            @switch($urlType)--}}
{{--                                @case('user')--}}
{{--                                    @foreach ($userItems as $item)--}}
{{--                                        <x-dashboard.sidebar-item :item="$item" />--}}
{{--                                    @endforeach--}}
{{--                                    @break--}}

{{--                                @case('agent')--}}
{{--                                    @foreach ($agentItems as $item)--}}
{{--                                        <x-dashboard.sidebar-item :item="$item" />--}}
{{--                                    @endforeach--}}
{{--                                    @break--}}
{{--                                @default--}}
{{--                            @endswitch--}}
                        </div>

                        <div class="separator separator-dashed my-5"></div>



                        <div id="kt_app_settings_content" class="position-relative mt-auto d-none"
                             data-kt-scroll="true" data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                             data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                             data-kt-scroll-offset="5px">
                            <div class="separator separator-dashed my-5"></div>
                            <form method="POST" action="" class="form"
                                  id="kt_app_layout_builder_form">
                                @csrf
                                <input type="hidden" id="kt_app_layout_builder_action"
                                       name="layout-builder[action]" />
                                <div class="card-body p-0">
                                    <div class="form-group">
                                        <div class="row" data-kt-buttons="true"
                                             data-kt-buttons-target=".form-check-image,.form-check-input">
                                            <div class="col-6">
                                                <label class="form-check-image form-check-success">
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                        <input class="change-theme-input form-check-input"
                                                               type="radio" value="light" name="theme_mode"
                                                               id="kt_layout_builder_theme_mode_light" />

                                                        <div class="form-check-label text-gray-700">
                                                            روشن
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-check-image form-check-success">
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                        <input class="change-theme-input form-check-input"
                                                               type="radio" value="dark" name="theme_mode"
                                                               id="kt_layout_builder_theme_mode_dark" />

                                                        <div class="form-check-label text-gray-700">
                                                            تیره
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            <div class="content">
                                <div class="container-fluid">
