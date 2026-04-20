@extends('layouts.panel')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar d-flex pb-1 pb-lg-1 ">
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
                @if(auth()->user()->hasAnyRole(['Manager', 'Super Admin']))
                    <a href="{{route('dashboard.project.report')}}" target="_blank" class="btn btn-sm btn-light-primary ms-3 px-4 py-3">
                        مشاهده گزارش پروژه ها
                        <i class="ki-outline ki-chart-line-star fs-2 ps-5"></i>
                    </a>
                @endif
                @can('manager_projectAdd')
                    <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3" >
                        ایجاد پروژه<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                    </a>
                @endcan

            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content p-0  flex-column-fluid ">
        <!--begin::Row-->
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">گزارش پروژه ها</span>

                            <span class="text-muted fw-semibold fs-7">گزارش نموداری روند پیشرفت پروژه ها </span>
                        </h3>
                    </div>
                <div class="card-body">
                    <div id="kt_charts_widget_6_chart" style="height: 350px"></div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->

                    <div class="card-body p-9">
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="position-relative h-300px w-300px me-15 mb-7">
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
                <!--end::Card-->
            </div>
            <div class="col-lg-6 my-5">
                <div class="card card-flush h-lg-100">
                    <div class="card-header mt-6">
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">امروز چه کاری باید انجام بشه؟</h3>
                            {{--                            <div class="fs-6 text-gray-500">تعداد </div>--}}
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

                                                <a class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                    {{ $task->title }}  - {{$task->task_code}}
                                                </a>

                                                <div class="text-gray-500">
                                                    assign to: <a href="#">@foreach($task->assigners as $key=>$assign) @if($key) - @endif  {{ $assign->Name ?? '---' }} @endforeach</a>
                                                </div>
                                            </div>

                                            {{--                                            <a href="{{ route('dashboard.task.show', $task->id) }}" class="btn btn-bg-light btn-light-primary btn-sm">--}}
                                            {{--                                                مشاهده تسک<i class="ki-outline ki-eye fs-5 ps-3"></i>--}}
                                            {{--                                            </a>--}}
                                        </div>
                                    @empty
                                        <div class="text-center text-gray-500 mt-10">تسکی برای این روز وجود ندارد</div>
                                    @endforelse

                                </div>
                            @endforeach
                        </div>
                        {{--                        {{$daysPaginated->links("pagination::bootstrap-5")}}--}}
                    </div>
                </div>
            </div>
            {{--            <div class="col-lg-6 col-xxl-4">--}}
            {{--                <div class="card h-100">--}}
            {{--                    <div class="card-body p-9">--}}

            {{--                        <div class="fs-2hx fw-bold">--}}
            {{--                            {{ $last_projects->sum('remaining_hours') }} ساعت--}}
            {{--                        </div>--}}

            {{--                        <div class="fs-4 fw-semibold text-gray-500 mb-7">--}}
            {{--                            زمان باقی مانده تکمیل {{ $last_projects->count() }} پروژه اخیر--}}
            {{--                        </div>--}}

            {{--                        @foreach($last_projects as $last)--}}
            {{--                            @php--}}
            {{--                                $explode_end_date = explode(' ',$last->end_date);--}}
            {{--                            @endphp--}}
            {{--                            <div class="fs-6 d-flex justify-content-between mb-4">--}}
            {{--                                <div class="fw-semibold">{{ $last->name }}</div>--}}

            {{--                                <div class="d-flex fw-bold">--}}
            {{--                                    --}}{{--                                    <i class="ki-outline ki-arrow-up-right fs-3 me-1 text-success"></i>--}}
            {{--                                    {{ $explode_end_date[0] }}--}}
            {{--                                    --}}{{--                                    {{ verta($last->end_date_only)->format('Y/m/d') }}--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="separator separator-dashed"></div>--}}
            {{--                        @endforeach--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="col-lg-6 col-xxl-4">--}}

            {{--                <!--begin::Clients-->--}}
            {{--                <div class="card  h-100">--}}
            {{--                    <div class="card-body p-9">--}}
            {{--                        <!--begin::Heading-->--}}
            {{--                        <div class="fs-2hx fw-bold">{{count($members)}}</div>--}}
            {{--                        <div class="fs-4 fw-semibold text-gray-500 mb-7">اعضای پروژه ها</div>--}}
            {{--                        <!--end::Heading-->--}}

            {{--                        <!--begin::Users group-->--}}
            {{--                        <div class="symbol-group symbol-hover mb-9">--}}
            {{--                            @foreach($members as $member)--}}
            {{--                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$member->Name}}">--}}
            {{--                                    @if($member->photo_id)--}}
            {{--                                        <img alt="Pic" src="{{ route('home') }}/{{ $member->photo?->path }}"/>--}}
            {{--                                    @else--}}
            {{--                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ mb_substr($member->Name, 0, 1) }}</span>--}}
            {{--                                    @endif--}}
            {{--                                </div>--}}
            {{--                            @endforeach--}}
            {{--                            --}}{{--                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"--}}
            {{--                            --}}{{--                               data-bs-target="#kt_modal_view_users">--}}
            {{--                            --}}{{--                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>--}}
            {{--                            --}}{{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <!--end::Users group-->--}}

            {{--                        <!--begin::Actions-->--}}
            {{--                        --}}{{--                        <div class="d-flex">--}}
            {{--                        --}}{{--                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal"--}}
            {{--                        --}}{{--                               data-bs-target="#kt_modal_view_users">همه اعضا</a>--}}
            {{--                        --}}{{--                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"--}}
            {{--                        --}}{{--                               data-bs-target="#kt_modal_users_search">اعضای آخرین پروژه</a>--}}
            {{--                        --}}{{--                        </div>--}}
            {{--                        <!--end::Actions-->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <!--end::Clients-->    </div>--}}
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="card card-flush h-lg-100">
                    <div class="card-header mt-6">
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">تسک های با اولویت بالا</h3>
                            <div class="fs-6 fw-semibold text-gray-500"></div>
                        </div>
                    </div>
                    <div class="card-body p-9 pt-5">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table  class="kt_profile_overview_table table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                                <thead class="fs-7 text-gray-500 text-uppercase text-start">
                                <tr>
                                    <th class="text-start">ردیف</th>
                                    <th class="text-start">شناسه تسک</th>
                                    <th class="text-start">عنوان</th>
                                    <th class="text-start">تاریخ شروع</th>
                                    <th class="text-start">تاریخ پایان</th>
                                    <th class="text-start">اولویت</th>
                                    <th class="text-start">وضعیت</th>
                                    <th class="text-start">اعضا</th>
                                    <th class="text-start">عملیات</th>
                                    {{--                        <th class="text-start">درصد پیشرفت</th>--}}
                                </tr>
                                </thead>
                                <tbody class="fs-6">
                                @foreach($high_tasks as $high_task)
                                    @php
                                        $start_date = explode(' ',$high_task->start_date);
                                        $end_date = explode(' ',$high_task->end_date);
                                    @endphp
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><span class="fs-8 rounded-1 px-1 text-bg-secondary">{{$high_task->task_code}}</span></td>
                                        <td class="text-start fs-7 ">{{$high_task->title}}</td>
                                        <td class="text-start"></td>
                                        <td class="text-start" style="font-size: 0.85rem;">{{$start_date[0]}}</td>
                                        <td class="text-start" style="font-size: 0.85rem;">{{$end_date[0]}}</td>
                                        <td class="text-start">{!! $high_task->TaskPrority !!}</td>
                                        <td class="text-start">{!! $high_task->TaskStatus !!}</td>
                                        <td class="text-start">
                                            <div class="symbol-group symbol-hover fs-8">
                                                @foreach($high_task->assigners as $assigner)
                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="{{$assigner->Name}}">
                                                        @if($assigner->photo_id)
                                                            <img alt="Pic" src="{{ route('home') }}/{{$assigner->photo?->path}}" />
                                                        @else
                                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">{{ mb_substr($assigner->Name, 0, 1) }}</span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="text-start">
                                            @canany(['manager_projectShow' , 'member_projectShow'])
                                                <a href="{{route('dashboard.project.task',$project->id)}}" class="btn btn-light-primary btn-sm p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                                    مشاهده تسک<i class="ki-outline ki-eye fs-6 px-2"></i>
                                                </a>
                                            @endcanany
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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


        <script>
            "use strict";

            document.addEventListener("DOMContentLoaded", function () {
                const el = document.getElementById("kt_charts_widget_6_chart");
                if (!el) return;

                let chart = null;

                function renderChart() {
                    const height = parseInt(KTUtil.css(el, "height"));

                    const gray500 = KTUtil.getCssVariableValue("--bs-gray-500");
                    const gray200 = KTUtil.getCssVariableValue("--bs-gray-200");
                    const primary = KTUtil.getCssVariableValue("--bs-primary");
                    const primaryLight = KTUtil.getCssVariableValue("--bs-primary-light");
                    const info = KTUtil.getCssVariableValue("--bs-info");

                    const options = {
                        series: [
                            {
                                name: "پیشرفت واقعی",
                                type: "bar",
                                stacked: true,
                                data: [40, 50, 65, 70, 50, 30]
                            },
                            {
                                name: "پیشرفت مورد انتظار",
                                type: "bar",
                                stacked: true,
                                data: [20, 20, 25, 30, 30, 20]
                            },
                            {
                                name: "تاخیر",
                                type: "area",
                                data: [50, 80, 60, 90, 50, 70]
                            }
                        ],
                        chart: {
                            fontFamily: "inherit",
                            stacked: true,
                            height: height,
                            toolbar: { show: false }
                        },
                        plotOptions: {
                            bar: {
                                stacked: true,
                                horizontal: false,
                                borderRadius: 4,
                                columnWidth: "12%"
                            }
                        },
                        legend: { show: false },
                        dataLabels: { enabled: false },
                        stroke: {
                            curve: "smooth",
                            show: true,
                            width: 2,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            axisBorder: { show: false },
                            axisTicks: { show: false },
                            labels: {
                                style: { colors: gray500, fontSize: "12px" }
                            }
                        },
                        yaxis: {
                            max: 120,
                            labels: {
                                style: { colors: gray500, fontSize: "12px" }
                            }
                        },
                        fill: { opacity: 1 },
                        tooltip: {
                            style: { fontSize: "12px" },
                            y: {
                                formatter: function (val) {
                                    return "%" + val;
                                }
                            }
                        },
                        colors: [primary, info, primaryLight],
                        grid: {
                            borderColor: gray200,
                            strokeDashArray: 4,
                            yaxis: { lines: { show: true } }
                        }
                    };

                    chart = new ApexCharts(el, options);
                    chart.render();
                }

                renderChart();

                // برای تغییر تم
                if (typeof KTThemeMode !== "undefined") {
                    KTThemeMode.on("kt.thememode.change", function () {
                        if (chart) {
                            chart.destroy();
                        }
                        renderChart();
                    });
                }
            });
        </script>
    @endpush

@endsection
