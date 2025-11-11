@extends('layouts.panel')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">
        <div class="d-flex flex-stack flex-row-fluid">
            <div class="d-flex flex-column flex-row-fluid">
                <div class="page-title d-flex align-items-center me-3">
                    <h1
                        class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                        <span><span class="fw-light">خوش آمدید</span>،&nbsp;{{\Illuminate\Support\Facades\Auth::user()->Name}}
                        </span>
                        <span class="page-desc text-gray-600 fs-base fw-semibold">
                                                    شما با دسترسی "{{role_name(\Illuminate\Support\Facades\Auth::user()->getRoleNames()->first())}}" وارد شدید.
                        </span>

                    </h1>
                </div>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{route('dashboard.index')}}" class="text-hover-primary">
                            <i class="ki-outline ki-home text-gray-700 fs-6"></i> </a>
                    </li>
                    <!--end::Item-->

                </ul>
            </div>
            <div class="d-flex align-self-center flex-center flex-shrink-0">
                <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3" >
                    ایجاد پروژه<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                </a>

                <a href="{{route('dashboard.project.index')}}" target="_blank" class="btn btn-sm btn-light-dark ms-3 px-4 py-3">
                    پروژه ها
                    <i class="ki-outline ki-chart-line-star fs-2 ps-5"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Row-->
        <div class="row g-5 my-5">
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bold">{{count($user_projects)}}</div>
                        <div class="fs-4 fw-semibold text-gray-500 mb-7">تعداد کل پروژه ها</div>
                        <!--end::Heading-->
                        @php
                            $pendingCount = $user_projects->where('status', 0)->count();
                            $in_progressCount = $user_projects->where('status', 1)->count();
                            $completedCount = $user_projects->where('status', 2)->count();
                            $on_holdCount = $user_projects->where('status', 3)->count();
                            $canceledCount = $user_projects->where('status', 4)->count();

                        @endphp

                            <!--begin::Wrapper-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                <canvas id="kt_project_list_chart"></canvas>
                            </div>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-warning me-3"></div>
                                    <div class="text-gray-500">در حال بررسی</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{ $pendingCount }}</div>
                                </div>

                                <!-- Active -->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-500">درحال انجام</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{ $in_progressCount }}</div>
                                </div>

                                <!-- Completed -->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-500">تکمیل شد</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{ $completedCount }}</div>
                                </div>

                                <!-- Yet to start -->

                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-default me-3"></div>
                                    <div class="text-gray-500">تعلیق شد</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{ $on_holdCount }}</div>
                                </div>

                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-500">کنسل شد</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{ $canceledCount }}</div>
                                </div>
                            </div>

                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Budget-->
                <div class="card  h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bold">160 ساعت</div>
                        <div class="fs-4 fw-semibold text-gray-500 mb-7">زمان باقی مانده تکمیل 3 پروژه اخیر</div>
                        @foreach($last_projects as $last)
                            @php
                                $explode = explode(' ',$last->end_date);
                            @endphp
                            <div class="fs-6 d-flex justify-content-between mb-4">
                                <div class="fw-semibold">{{$last->name}}</div>
                                <div class="d-flex fw-bold">
                                    <i class="ki-outline ki-arrow-up-right fs-3 me-1 text-success"></i> {{$explode[0]}}
                                </div>
                            </div>
                            <div class="separator separator-dashed"></div>
                        @endforeach


                        {{--                        <div class="fs-6 d-flex justify-content-between my-4">--}}
                        {{--                            <div class="fw-semibold">Lowest Project Check</div>--}}

                        {{--                            <div class="d-flex fw-bold">--}}
                        {{--                                <i class="ki-outline ki-arrow-down-left fs-3 me-1 text-danger"></i> $408--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="separator separator-dashed"></div>--}}

                        {{--                        <div class="fs-6 d-flex justify-content-between mt-4">--}}
                        {{--                            <div class="fw-semibold">Ambassador Page</div>--}}

                        {{--                            <div class="d-flex fw-bold">--}}
                        {{--                                <i class="ki-outline ki-arrow-up-right fs-3 me-1 text-success"></i> $920--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <!--end::Budget-->
            </div>
            <div class="col-lg-6 col-xxl-4">

                <!--begin::Clients-->
                <div class="card  h-100">
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bold">10</div>
                        <div class="fs-4 fw-semibold text-gray-500 mb-7">اعضای پروژه ها</div>
                        <!--end::Heading-->

                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover mb-9">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                 title="Michael Eberon">
                                <img alt="Pic" src="{{url('panel/assets/media/avatars/300-11.jpg')}}"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                 title="Michelle Swanston">
                                <img alt="Pic" src="{{url('panel/assets/media/avatars/300-7.jpg')}}"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                 title="Francis Mitcham">
                                <img alt="Pic" src="{{url('panel/assets/media/avatars/300-20.jpg')}}"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                 title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}"/>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                 title="Perry Matthew">
                                <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="{{url('panel/assets/media/avatars/300-12.jpg')}}"/>
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->

                        <!--begin::Actions-->
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_view_users">همه اعضا</a>
                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">اعضای آخرین پروژه</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Clients-->    </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5">
            <div class="col-lg-6 my-5">
                <!--begin::Summary-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">گزارش اخیر</h3>

                            <div class="fs-6 fw-semibold text-gray-500">{{verta(\Carbon\Carbon::today())->format('Y/m/d')}}</div>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="" class="btn btn-bg-light btn-active-color-primary btn-sm">مشاهده همه گزارشات پروژه<i class="ki-outline ki-eye fs-5 ps-3"></i></a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-5">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx fw-bold">237</span>
                                    <span class="fs-8 fw-semibold text-gray-500 ">تعداد کل تسک ها</span>
                                </div>

                                <canvas id="project_overview_chart"></canvas>
                            </div>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-500">Active</div>
                                    <div class="ms-auto fw-bold text-gray-700">30</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-500">Completed</div>
                                    <div class="ms-auto fw-bold text-gray-700">45</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-500">Overdue</div>
                                    <div class="ms-auto fw-bold text-gray-700">0</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-500">Yet to start</div>
                                    <div class="ms-auto fw-bold text-gray-700">25</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->


                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">

                                    {{--                                        <div class="fs-6 text-gray-700 "><a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a> to create great outstanding business to business .jsp modutr class scripts</div>--}}
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Summary-->
            </div>
            <div class="col-lg-6 my-5">
                <!--begin::Card-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">امروز چه کاری باید انجام بشه؟</h3>

                            <div class="fs-6 text-gray-500">تعداد </div>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                <option value="1" selected>Options</option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-4">
                        <!--begin::Dates-->
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_0">

                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bold">22</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active"
                                    data-bs-toggle="tab" href="#kt_schedule_day_1">

                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bold">23</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_2">

                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">24</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_3">

                                    <span class="opacity-50 fs-7 fw-semibold">We</span>
                                    <span class="fs-6 fw-bold">25</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_4">

                                    <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                    <span class="fs-6 fw-bold">26</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_5">

                                    <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                    <span class="fs-6 fw-bold">27</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_6">

                                    <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                    <span class="fs-6 fw-bold">28</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_7">

                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bold">29</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_8">

                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bold">30</span>
                                </a>
                            </li>
                            <!--end::Date-->

                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a
                                    class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                    data-bs-toggle="tab" href="#kt_schedule_day_9">

                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">31</span>
                                </a>
                            </li>
                            <!--end::Date-->
                        </ul>
                        <!--end::Dates-->

                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Day-->
                            <div id="kt_schedule_day_0" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Lunch & Learn Catch Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Walter White</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Dashboard UI/UX Design Review                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Creative Content Initiative                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Sales Pitch Proposal                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Committee Review Approvals                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Sean Bean</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            12:00 - 13:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Lunch & Learn Catch Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_2" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            9 Degree Project Estimation Meeting                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Bob Harris</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Committee Review Approvals                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Bob Harris</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            13:00 - 14:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Marketing Campaign Discussion                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_3" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            9 Degree Project Estimation Meeting                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Terry Robins</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            9 Degree Project Estimation Meeting                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            13:00 - 14:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Sales Pitch Proposal                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_4" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Dashboard UI/UX Design Review                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">David Stevenson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Weekly Team Stand-Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Lunch & Learn Catch Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_5" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            12:00 - 13:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Team Backlog Grooming Session                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Michael Walters</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            12:00 - 13:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Sales Pitch Proposal                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            11:00 - 11:45

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Sales Pitch Proposal                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_6" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Weekly Team Stand-Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Creative Content Initiative                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">David Stevenson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            12:00 - 13:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Marketing Campaign Discussion                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_7" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            14:30 - 15:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Marketing Campaign Discussion                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Creative Content Initiative                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Committee Review Approvals                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Terry Robins</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_8" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            10:00 - 11:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Dashboard UI/UX Design Review                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Weekly Team Stand-Up                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            9:00 - 10:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Committee Review Approvals                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Bob Harris</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_9" class="tab-pane fade show ">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            13:00 - 14:00

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Dashboard UI/UX Design Review                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Project Review & Testing                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Walter White</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">
                                            16:30 - 17:30

                                            <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                        </div>
                                        <!--end::Time-->

                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                            Creative Content Initiative                                </a>
                                        <!--end::Title-->

                                        <!--begin::User-->
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->    </div>
        </div>
        <!--end::Row-->
    </div>
@endsection
