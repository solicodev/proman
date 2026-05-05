@extends('admin.index')
@section('content')
    @include('layouts.message')
    <div class=" d-none d-sm-flex align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <i class="bx bx-home text-gray-700 fs-6"></i>
                    <a href="{{ route('admin.index') }}">
                        داشبورد
                        <i class="bx bx-chevron-left fs-6 text-gray-700"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.project.index') }}">
                        پروژه
                        <i class="bx bx-chevron-left fs-6 text-gray-700"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    نمایش پروژه
                </li>
            </ol>
        </nav>
    </div>

    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-1 ">
            <div class="d-flex flex-stack flex-row-fluid">
                <div class="d-flex flex-column flex-row-fluid">
                    <div class="page-title d-flex align-items-center me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                            <span>{{$project->name}} <small>{{$project->project_code}}</small></span>
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div id="kt_app_content" class="app-content p-0 flex-column-fluid" >
            <div class="card mb-2">
                <div class="card-body pt-9 pb-0">
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <div class="d-flex flex-center flex-shrink-0 bg-light rounded me-7 my-2 mx-2 p-4" style="height: 150px !important;width: 150px !important;">
                            {{--                            @if($project->brand_id)--}}
                            {{--                                <img class="mw-50px mw-lg-75px" src="{{route('home')}}/{{$project->brand?->photo?->path}}" alt="image"/>--}}
                            {{--                            @else--}}
                            <img  src="{{asset('assets/admin/images/icons/idea.png')}}" alt="image"/>
                            {{--                                <img class="mw-50px mw-lg-75px" src="{{url('panel/assets/media/svg/brand-logos/default.png')}}" alt="image"/>--}}
                            {{--                            @endif--}}
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex align-items-center justify-content-between mb-5">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">
                                                {{ $project->name }}
                                            </a>
                                            {!! $project->ProjectStatus !!}
                                        </div>

                                        <div class="d-flex">
                                            <a href="{{route('admin.project.edit',$project->id)}}" class="btn btn-sm btn-outline-primary my-3 mx-1" >
                                                ویرایش <i class="bx bx-pencil fs-5 ps-3"></i>
                                            </a>
                                            <a href="{{route('admin.project.destroy',$project->id)}}"
                                               type="button"
                                               class="btn btn-sm btn-outline-danger my-3"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="حذف" onclick="return confirm('اطمینان دارید پروژه حذف شود؟');">
                                               حذف <i class="bx bx-trash fs-5"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">
                                        {!! $project->description !!}
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-start">
                                <div class="d-flex flex-wrap col-12">
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-user-square fs-10 text-primary me-2"></i>
                                            <div class="fs-7 fw-bold" >{{$project->manager?->Name}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">مدیر پروژه</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-categories fs-10 text-success me-2"></i>
                                            <div class="fs-7 fw-bold" >{{$project->category?->title}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">دسته بندی</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-location fs-10 text-info me-2"></i>
                                            <div class="fs-7 fw-bold" >{{$project->department?->name}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">دپارتمان</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-calendar fs-10 text-info me-2"></i>
                                            <div class="fs-7 fw-bold">{{verta($project->created_at)->format('Y/m/d')}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">تاریخ ایجاد پروژه</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-calendar fs-10 text-success me-2"></i>
                                            @php
                                                $start_date = explode(' ',$project->start_date);
                                            @endphp
                                            <div class="fs-7 fw-bold">{{verta($project->start_date)}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">تاریخ شروع تخمینی</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-calendar fs-10 text-warning me-2"></i>
                                            @php
                                                $end_date = explode(' ',$project->end_date);
                                            @endphp
                                            <div class="fs-7 fw-bold">{{verta($project->end_date)}}</div>
                                        </div>
                                        <div class="fw-semibold fs-8 text-gray-500">تاریخ پایان تخمینی</div>
                                    </div>
                                    @if($project->start_todo_date)
                                        <div class="border border-gray-300 border-dashed rounded  py-3 px-4 mx-2 mb-3">
                                            <div class="d-flex align-items-center">
                                                @php
                                                    $start_todo_date = explode(' ',$project->start_todo_date);
                                                @endphp
                                                <div class="fs-7 fw-bold">{{verta($project->start_todo_date)}}</div>
                                            </div>
                                            <div class="fw-semibold fs-8 text-gray-500">تاریخ شروع واقعی</div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>

                    <ul class="nav nav-tabs mb-0" role="tablist">
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a--}}
{{--                                class="nav-link--}}
{{--                                @if(request()->getUri() == route('dashboard.project.show' , $project->id)) active @endif "--}}
{{--                                href="{{route('dashboard.project.show' , $project->id)}}"--}}
{{--                                data-bs-toggle="tab"--}}
{{--                                role="tab"--}}
{{--                                aria-selected="true"--}}
{{--                            >--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="tab-icon">--}}
{{--                                        <i--}}
{{--                                            class="bx bx-apps-alt font-18 me-1"--}}
{{--                                        ></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-title">--}}
{{--                                        اطلاعات کلی--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                                @if(request()->getUri() == route('admin.project.show' , $project->id)) active @endif "
                                href="{{route('dashboard.project.task', $project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-apps-alt font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">تسک ها</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                                @if(request()->getUri() == route('dashboard.project.member' , $project->id)) active @endif"
                                href="{{route('dashboard.project.member', $project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-user-circle font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">اعضای پروژه</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                                @if(request()->getUri() == route('dashboard.project.file', $project->id)) active @endif "
                                href="{{route('dashboard.project.file', $project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bxs-file font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">فایل ها</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                                @if(request()->getUri() == route('dashboard.project.activity', $project->id)) active @endif"
                                href="{{route('dashboard.project.activity',$project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-browser-activity font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">فعالیت ها</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                              @if(request()->getUri() == route('dashboard.project.dependency', $project->id)) active @endif"
                                href="{{route('dashboard.project.dependency',$project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-categories font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">آپشن | جزییات پروژه</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                              @if(request()->getUri() == route('dashboard.project.taskTimeLine', $project->id)) active @endif"
                                href="{{route('dashboard.project.taskTimeLine',$project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-bar-chart font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">گزارش تسک های پروژه</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link
                              @if(request()->getUri() == route('dashboard.project.comment', $project->id)) active @endif"
                                href="{{route('dashboard.project.comment',$project->id)}}"
                                data-bs-toggle="tab"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-equal-square font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">کامنت ها</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="{{ route('admin.task.create') }}" class="btn btn-primary btn-sm">افزودن تسک</a>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="data_table table table-striped table-bordered page_speed_944522378">
                        <thead>
                        <tr>
                            <th></th>
                            <th>شناسه پروژه</th>
                            <th>عنوان تسک</th>
                            <th>مهلت تسک</th>
                            <th>تاریخ شروع تعیین شده</th>
                            <th>تاریخ شروع واقعی</th>
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
                                <td style="direction: ltr; text-align: left"> {{ $task->task_code }}</td>
                                <td> {{ $task->title }}</td>
                                <td> {{ $task->duration }} {!! $task->DurationTypeLabel !!} </td>
                                <td> {{ verta($task->start_date) }}</td>
                                <td> {{$task->start_todo_date }}</td>
                                <td> {{ verta($task->end_date) }}</td>
                                <td> {{ $task->manager?->Name }}</td>
                                <td> {{ $task->watcher?->Name }}</td>
                                <td>
                                    {!! $task->taskStatus !!}
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
                            حذف سرویس
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id='deleteForm'>
                        <div class="modal-body">
                            آیا از حذف سرویس مطمئن هستید؟
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
