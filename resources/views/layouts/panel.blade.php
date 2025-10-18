@extends('layouts.master')

@section('body')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            @include('proMan.partials.header')
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <div class="app-container d-flex flex-row-fluid ">
                    @include('proMan.partials.sidebar')
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            @yield('content')
                        </div>
                        @include('proMan.partials.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
