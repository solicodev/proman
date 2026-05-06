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
@endsection
