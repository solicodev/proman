<x-layout>
    @push('styles')
        <style>
            .progress-animated {
                transition: width 0.8s ease-in-out;
            }
        </style>
    @endpush
   @include('proMan.projects.main-card')
            <div class="row gx-6 gx-xl-9">
                <div class="col-12">
                    <div class="card h-md-100">
                        <div class="card-header position-relative py-0 border-bottom-1">
                            <h3 class="card-title text-gray-800 fw-bold">درصد پیشرفت پروژه</h3>
                            <div class="card-body">
                                <div class="progress mt-3 h-30px">
                                    <div class="progress-bar progress-animated @if($project->status == 0) bg-danger
                                    @elseif($project->status == 1) bg-primary
                                    @elseif($project->status == 2) bg-success
                                    @elseif($project->status == 3) bg-light-secondary
                                    @elseif($project->status == 4) badge-light
                                 @endif h-30px"
                                         role="progressbar"
                                         style="width: {{ $project->progress }}%;">
                                        {{ round($project->progress) }}%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Timeline Widget 1-->
                </div>
                <div class="col-lg-12 my-5">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header mt-6">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">گزارش تسک های پروژه {{$project->project_code}}</h3>

                                <div class="fs-6 fw-semibold text-gray-500">{{verta(\Carbon\Carbon::today())->format('Y/m/d')}}</div>
                            </div>
                            <div class="card-toolbar">
                                <a href="{{route('dashboard.project.task',$project->id)}}" class="btn btn-bg-light btn-active-color-primary btn-sm">مشاهده همه گزارشات پروژه<i class="ki-outline ki-eye fs-5 ps-3"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-9 pt-5">
                            <div class="d-flex flex-wrap">
                                <div class="position-relative d-flex flex-center h-375px w-375px me-15 mb-7">
                                    <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                        <span class="fs-2qx fw-bold">{{$total}}</span>
                                        <span class="fs-8 fw-semibold text-gray-500 ">تعداد کل تسک ها</span>
                                    </div>
                                    <canvas id="project_overview_chart"></canvas>
                                    {{--                                    <canvas id="project_overview_chart"></canvas>--}}
                                </div>
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-500">درحال بررسی</div>
                                        <div class="ms-auto fw-bold text-gray-700">{{$pending}}</div>
                                    </div>
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-500">برای انجام</div>
                                        <div class="ms-auto fw-bold text-gray-700">{{$todo}}</div>
                                    </div>
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-danger me-3"></div>
                                        <div class="text-gray-500">درحال انجام</div>
                                        <div class="ms-auto fw-bold text-gray-700">{{$in_progress}}</div>
                                    </div>
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet bg-gray-300 me-3"></div>
                                        <div class="text-gray-500">تکمیل شد</div>
                                        <div class="ms-auto fw-bold text-gray-700">{{$Done}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>

                @can('manager_files')
                <div class="col-lg-6 my-5">
                    <div class="card card-flush h-lg-100">
                        <div class="card-body p-9 pt-3">
                            <div class="card-header my-6">
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">آخرین فایل های پروژه</h3>
                                    <div class="fs-6 text-gray-500">تعداد کل فایل ها {{$total_files}}</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-9">
                                @foreach($file_collection as $file)
                                    @php
                                        $explode_file = explode('.',$file['path']);
                                        $user = \App\Models\User::with('photo')->where('id',$file['user_id'])->first();
                                    @endphp
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="symbol symbol-30px me-5">
                                            @if($explode_file[1] == 'pdf')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/pdf.svg')}}" />
                                            @elseif($explode_file[1] == 'doc')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/doc.svg')}}" />
                                            @elseif($explode_file[1] == 'css')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/css.svg')}}" />
                                            @else
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/ai.svg')}}" />
                                            @endif
                                        </div>
                                        <div class="fw-semibold">
                                            <a class="fs-6 fw-bold text-gray-900 text-hover-primary">{{$user->Name}} </a>

                                            <div class="text-gray-500">
                                                {{verta($file['created_at'])->formatDifference()}}
                                                <a class="text-active-danger">{{role_name($user->getRoleNames()->first())}}</a>
                                            </div>
                                        </div>
                                        <a href="{{ route('home') }}/{{$file['path']}}"
                                            type="button" download
                                            class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="دانلود فایل">
                                            <i class="ki-outline ki-cloud-download fs-3"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                @endcan
                @canany(['manager_comments','member_comments','assign_comments'])
                <div class="col-lg-6 my-5">
                    <div class="card  card-flush h-lg-100">
                        <div class="card-header mt-6">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">آخرین کامنت های پروژه</h3>

                                <div class="fs-6 text-gray-500">تعداد کل کامنت ها {{$total_comments}} </div>
                            </div>
                            <div class="card-toolbar">
                                <a href="{{route('dashboard.project.comment',$project->id)}}" class="btn btn-bg-light btn-active-color-primary btn-sm">مشاهده همه<i class="ki-outline ki-eye fs-5 ps-3"></i></a>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                            @foreach($comment_collection as $comment)
                            <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                    <div class="symbol symbol-35px symbol-circle">
                                        @if($comment['user']['photo_id'])
                                        <img alt="Pic" src="{{route('home')}}/{{$comment['user']['photo']['path']}}" />
                                        @else
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">{{ mb_substr($comment['user']['Name'], 0, 1) }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="fw-semibold">

                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">{{$comment['user']['Name']}}</a>

                                    <div class="text-gray-500">
                                       {{$comment['text']}}
                                    </div>
                                </div>
                                <!--end::Details-->

                                <!--begin::Badge-->
{{--                                <div class="badge badge-light ms-auto">5</div>--}}
                                <!--end::Badge-->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                @endcanany
            </div>

{{--            <div class="card card-flush mt-6 mt-xl-9">--}}
{{--                <div class="card-header mt-5">--}}
{{--                    <div class="card-title flex-column">--}}
{{--                        <h3 class="fw-bold mb-1">لیست تمام تسک ها</h3>--}}

{{--                        <div class="fs-6 text-gray-500"></div>--}}
{{--                    </div>--}}
{{--                    <div class="card-toolbar my-1">--}}
{{--                        <div class="me-6 my-1">--}}
{{--                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">--}}
{{--                                <option value="All" selected>همه زمان ها</option>--}}
{{--                                <option value="thisyear">امسال</option>--}}
{{--                                <option value="thismonth">این ماه</option>--}}
{{--                                <option value="lastmonth">اخرین ماه</option>--}}
{{--                                <option value="last90days">90 روز گذشته</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="me-4 my-1">--}}
{{--                            <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">--}}
{{--                                <option value="All" selected>همه</option>--}}
{{--                                <option value="Approved">درحال بررسی</option>--}}
{{--                                <option value="Declined">برای انجام</option>--}}
{{--                                <option value="In Progress">در حال انجام</option>--}}
{{--                                <option value="In Transit">انجام شد</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center position-relative my-1">--}}
{{--                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>--}}
{{--                            <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="جستجو" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body pt-0">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <!--begin::Table-->--}}
{{--                        <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">--}}
{{--                            <thead class="fs-7 text-gray-500 text-uppercase text-start">--}}
{{--                            <tr>--}}
{{--                                <th class="text-start">ردیف</th>--}}
{{--                                <th class="text-start">ناظر تسک</th>--}}
{{--                                <th class="text-start">عنوان تسک</th>--}}
{{--                                <th class="text-start">تاریخ شروع تخمینی</th>--}}
{{--                                <th class="text-start">تاریخ پایان تخمینی</th>--}}
{{--                                <th class="text-start">تاریخ شروع واقعی</th>--}}
{{--                                <th class="text-start">وضعیت</th>--}}
{{--                                <th class="text-start">جزییات</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody class="fs-6">--}}
{{--                            @foreach($tasks as $task)--}}
{{--                            <tr>--}}
{{--                                <td>{{$loop->iteration}}</td>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="me-5 position-relative">--}}
{{--                                            <div class="symbol symbol-35px symbol-circle">--}}
{{--                                                @if($task->watcher?->photo_id)--}}
{{--                                                <img alt="Pic" src="{{route('home')}}/{{$task->watcher?->photo?->path}}" />--}}
{{--                                                @else--}}
{{--                                                    <i class="ki-outline ki-profile-user fs-3"></i>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="d-flex flex-column justify-content-center">--}}
{{--                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary">{{$task->watcher?->Name}}</a>--}}

{{--                                            <div class="fw-semibold text-gray-500">{{$task->watcher?->email}} - {{role_name($task->watcher?->getRoleNames()->first())}}</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}

{{--                                <td class="text-start">{{$task->title}}</td>--}}
{{--                                <td class="text-start">{{\Carbon\Carbon::parse($task->start_date)->format('Y/m/d')}}</td>--}}
{{--                                <td class="text-start">@if($task->end_date) {{\Carbon\Carbon::parse($task->end_date)->format('Y/m/d')}}@endif</td>--}}
{{--                                <td class="text-start">{{\Carbon\Carbon::parse($task->start_date)->format('Y/m/d')}}</td>--}}
{{--                                <td class="text-start">--}}
{{--                                    {!! $task->TaskStatus !!}--}}
{{--                                <span class="badge badge-light-success fw-bold px-4 py-3">--}}
{{--                                    Approved                                --}}
{{--                                </span>--}}
{{--                                </td>--}}
{{--                                <td class="text-start">--}}
{{--                                    <a href="{{route('dashboard.task.show',$task->id)}}"--}}
{{--                                        type="button"--}}
{{--                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"--}}
{{--                                        data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده جزییات تسک">--}}
{{--                                        <i class="ki-outline ki-eye fs-3"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="{{route('dashboard.task.show',$task->id)}}"--}}
{{--                                       type="button"--}}
{{--                                       class="btn btn-clean btn-sm btn-icon btn-icon-secondary btn-active-light-warning ms-auto"--}}
{{--                                       data-bs-toggle="tooltip" data-bs-placement="top" title="آرشیو کردن تسک">--}}
{{--                                        <i class="ki-outline ki-archive fs-3"></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <!--end::Table-->--}}
{{--                    </div>--}}
{{--                    <!--end::Table container-->--}}
{{--                </div>--}}
{{--                <!--end::Card body-->--}}
{{--            </div>--}}
            <!--end::Table-->
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
</x-layout>
