@extends('layouts.panel')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">
        <div class="d-flex flex-stack flex-row-fluid">
            <div class="d-flex flex-column flex-row-fluid">
                <div class="page-title d-flex align-items-center me-3">
                    <h1
                        class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                        <span><span class="fw-light">خوش آمدید</span>،&nbsp;{{auth()->user()->Name}}
                        </span>
                        <span class="page-desc text-gray-600 fs-base fw-semibold">
                        شما با دسترسی "{{role_name(auth()->user()->getRoleNames()->first())}}" وارد شدید.
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
                @can('manager_projectAdd')
                <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3" >
                    ایجاد پروژه<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                </a>
                @endcan
                @if(auth()->user()->hasrole('Manager'))
                <a href="{{route('dashboard.project.index')}}" target="_blank" class="btn btn-sm btn-light-dark ms-3 px-4 py-3">
                    پروژه ها
                    <i class="ki-outline ki-chart-line-star fs-2 ps-5"></i>
                </a>
                @endif
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
                        <div class="fs-2hx fw-bold">{{count($members)}}</div>
                        <div class="fs-4 fw-semibold text-gray-500 mb-7">اعضای پروژه ها</div>
                        <!--end::Heading-->

                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover mb-9">
                            @foreach($members as $member)
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$member->Name}}">
                                @if($member->photo_id)
                                <img alt="Pic" src="{{ route('home') }}/{{ $member->photo?->path }}"/>
                                @else
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ mb_substr($member->Name, 0, 1) }}</span>
                                @endif
                            </div>
                            @endforeach
{{--                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"--}}
{{--                               data-bs-target="#kt_modal_view_users">--}}
{{--                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>--}}
{{--                            </a>--}}
                        </div>
                        <!--end::Users group-->

                        <!--begin::Actions-->
{{--                        <div class="d-flex">--}}
{{--                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal"--}}
{{--                               data-bs-target="#kt_modal_view_users">همه اعضا</a>--}}
{{--                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"--}}
{{--                               data-bs-target="#kt_modal_users_search">اعضای آخرین پروژه</a>--}}
{{--                        </div>--}}
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
                            <div class="position-relative d-flex flex-center h-375px w-375px me-15 mb-7">
                                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx fw-bold">{{$total}}</span>
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
                                    <div class="text-gray-500">درحال بررسی</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{$pending}}</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-500">برای انجام</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{$todo}}</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-500">درحال انجام</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{$in_progress}}</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-500">تکمیل شد</div>
                                    <div class="ms-auto fw-bold text-gray-700">{{$Done}}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Summary-->
            </div>
            <div class="col-lg-6 my-5">
                <div class="card card-flush h-lg-100">
                    <div class="card-header mt-6">
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">امروز چه کاری باید انجام بشه؟</h3>
                            <div class="fs-6 text-gray-500">تعداد </div>
                        </div>
                        <div class="card-toolbar">
                            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                <option value="1" selected>Options</option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body p-9 pt-4">
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                            @foreach($days as $index => $day)
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary @if($index==0) active @endif"
                                       data-bs-toggle="tab"
                                       href="#kt_schedule_day_{{ $index }}">

                <span class="opacity-50 fs-7 fw-semibold">
                    {{ $day['date']->format('D') }}
                </span>
                                        <span class="fs-6 fw-bold">
                    {{ $day['date']->format('d') }}
                </span>

                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($days as $index => $day)
                                <div id="kt_schedule_day_{{ $index }}" class="tab-pane fade show @if($index==0) active @endif">

                                    @forelse($day['tasks'] as $task)
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <div class="fs-5">
                                                    {{ verta($task->start_date)->format('H:i') }}
                                                    -
                                                    {{ verta($task->end_date)->format('H:i') }}

                                                    <span class="fs-7 text-gray-500 text-uppercase">
                                {{ verta($task->start_date)->format('a') }}
                            </span>
                                                </div>

                                                <a href="{{ route('dashboard.task.show', $task->id) }}" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    {{ $task->title }}
                                                </a>

                                                <div class="text-gray-500">
                                                    Lead by <a href="#">{{ $task->user->name ?? '---' }}</a>
                                                </div>
                                            </div>

                                            <a href="{{ route('dashboard.task.show', $task->id) }}" class="btn btn-bg-light btn-active-color-primary btn-sm">
                                                View
                                            </a>
                                        </div>
                                    @empty
                                        <div class="text-center text-gray-500 mt-10">تسکی برای این روز وجود ندارد</div>
                                    @endforelse

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const projectChartData = {
                total: {{ $total }},
                Pending: {{ $pending }},
                Todo: {{ $todo }},
                In_progress: {{ $in_progress }},
                Done: {{ $Done }},
            };
        </script>
        <script>
            const ctx = document.getElementById('project_overview_chart');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Pending', 'Todo', 'In_progress', 'Done'],
                    datasets: [{
                        data: [
                            projectChartData.Pending,
                            projectChartData.Todo,
                            projectChartData.In_progress,
                            projectChartData.Done
                        ],
                    }]
                }
            });

        </script>

    @endpush

@endsection
