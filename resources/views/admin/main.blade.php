@extends('admin.index')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">تعداد کل پروژه ها</p>
                            <h4 class="my-1">{{count($total_projects)}}</h4>
                            <p class="mb-0 font-13">

                            </p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-wallet'>
                            </i>
                        </div>
                    </div>
                    <div id="chart1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">تعداد کل تسک ها </p>
                            <h4 class="my-1">{{count($total_tasks)}}</h4>
                            <p class="mb-0 font-13">

                            </p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-group'>
                            </i>
                        </div>
                    </div>
                    <div id="chart2">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">تعداد کل تیکت ها</p>
                            <h4 class="my-1">{{count($total_tickets)}}</h4>
                            <p class="mb-0 font-13">
                            </p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-binoculars'>
                            </i>
                        </div>
                    </div>
                    <div id="chart3">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-lg-6 my-5">
            <div class="card card-flush h-lg-100">
                <div class="card-body p-9 pt-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0"> امروز چه کاری باید انجام بشه؟</h5>
                        </div>
                    </div>
                    <hr />
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
                                @forelse($day['tasks'] as $i => $task)
                                    <div class="d-flex flex-stack position-relative mt-8 border-top align-items-center">
                                        <div class="position-absolute h-50 bg-secondary rounded top-5 start-0" style="width: 4px;"></div>

                                        <div class="fw-semibold ms-5 py-3 text-gray-600">
                                            <div class="fs-10">
                                                {{ verta($task->start_date)->format('H:i') }}
                                                -
                                                {{ verta($task->end_date)->format('H:i') }}

                                                <span class="fs-8 text-gray-500 text-uppercase">
                                                        {{ verta($task->start_date)->format('a') }}
                                                    </span>
                                            </div>

                                            <a class="fs-6 fw-bold text-gray-800 text-hover-primary my-3">
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


    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0"> آخرین پروژه ها</h5>
                </div>

            </div>
            <hr />
            <div class="table-responsive">
                <table  class="data_table table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>شناسه پروژه</th>
                        <th>نام پروژه</th>
                        <th>تاریخ شروع تعیین شده</th>
                        <th>تاریخ شروع واقعی</th>
                        <th>تاریخ پایان پروژه</th>
                        <th>مدیر پروژه</th>
                        <th>دسته بندی</th>
                        <th>وضعیت</th>
                        <th>تسک ها</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td style="direction: ltr; text-align: left"> {{ $project->project_code }}</td>
                            <td> {{ $project->name }}</td>
                            <td> {{ verta($project->start_date) }}</td>
                            <td> {{ verta($project->start_todo_date) }}</td>
                            <td> {{ verta($project->end_date) }}</td>
                            <td> {{ $project->manager?->Name }}</td>
                            <td> {{ $project->category?->title }}</td>
                            <td>
                                {!! $project->ProjectStatus !!}
                            </td>
                            <td>
                                <a href="{{ route('admin.project.tasks',$project->id) }}" class='badge bg-info text-black text-warning'>
                                    مشاهده
                                    <i class="bx bxs-eye"></i>
                                </a>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.project.show',$project->id) }}" class="text-primary ms-3" >
                                        <i class="bx bxs-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.project.edit',$project->id) }}" class='text-warning ms-3'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.project.destroy',$project->id) }}')"
                                       class="text-danger ms-3">
                                        <i class="bx bxs-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0"> آخرین تسک ها</h5>
                </div>

            </div>
            <hr />
            <div class="table-responsive">
                <table class="data_table table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>شناسه پروژه</th>
                        <th>شناسه تسک</th>
                        <th>عنوان تسک</th>
                        <th>مهلت تسک</th>
                        <th>تاریخ شروع تعیین شده</th>
                        <th>تاریخ پایان تسک</th>
                        <th>مدیر تایید کننده</th>
                        <th>ناظر تسک</th>
                        <th>وضعیت</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td style="direction: ltr; text-align: left"> {{ $task->project?->project_code }}</td>
                            <td style="direction: ltr; text-align: left"> {{ $task->task_code }}</td>
                            <td> {{ $task->title }}</td>
                            <td> {{ $task->duration }}</td>
                            <td> {{ verta($task->start_date) }}</td>
                            <td> {{ verta($task->end_date) }}</td>
                            <td> {{ $task->manager?->Name }}</td>
                            <td> {{ $task->watcher?->Name }}</td>
                            <td>
                                {!! $task->TaskStatus !!}
                            </td>
                            <td>
                                <div class="d-flex">

                                    <a href="{{ route('admin.task.edit',$task->id) }}" class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.task.destroy',$task->id) }}')"
                                       class="text-danger ms-3">
                                        <i class="bx bxs-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteServiceModalLabel">
                        حذف
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف مطمئن هستید؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            خیر
                        </button>
                        <button type="submit" class="btn btn-danger">
                            بله
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>

        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deleteServiceModal').modal('show');
        }
    </script>
@endpush
