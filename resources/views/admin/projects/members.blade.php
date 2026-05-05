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
        @include('admin.projects.main-header-show')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="data_table table table-striped table-bordered page_speed_944522378">
                        <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام و نام خانوادگی</th>
                                <th>نقش کاربر</th>
                                <th>تعداد فعالیت ها</th>
                                <th>تعداد تسک ها</th>
                                <th>تعداد فایل ها</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                        @foreach($project_members as $member)
                            @php
                                $task_member = \App\Models\Task::with('assigners')->whereHas('assigners', function ($query) use($member){
                                    $query->where('user_id',$member->id);
                                })->get();
                                $activities = \Spatie\Activitylog\Models\Activity::where('causer_id',$member->id)->where('log_name','task dependency')->orWhere('log_name','task')->where('event',['updated','created'])->get();

                                $files = \App\Models\Photo::with('user')->where('user_id',$member->id)->get();

                            @endphp
                            <tr>
                                <td>{{$loop->iteration}}</td>

                                <td>{{$member->Name}}</td>
                                <td>{{role_name($member->getRoleNames()->first())}}</td>
                                <td>{{$activities->count()}}</td>
                                <td>{{$task_member->count()}}</td>
                                <td>{{$files->count()}}</td>
                                <td class="text-end">
                                    <a href="#" onclick="openShowModal()"
                                       data-task-id="{{ $member->id }}"
                                       class="btn btn-sm btn-light-info" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                        <i class="ki-outline ki-eye fs-6 px-2"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$project_members->links("pagination::bootstrap-5")}}
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
