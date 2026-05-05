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
