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
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                        <thead class="fs-7 text-gray-500 text-uppercase text-start">
                        <tr>
                            <th class="text-start">ردیف</th>
                            <th class="text-start">کاربر</th>
                            <th class="text-start">نوع فعالیت</th>
                            <th class="text-start">توضیحات</th>
                            <th class="text-start">جزییات</th>
                            <th class="text-start">تاریخ</th>
                        </tr>
                        </thead>
                        <tbody class="fs-6">
                        @foreach($activities as $activity)
                            @php
                                $user = \App\Models\User::where('id',$activity->causer_id)->first();
                                $property = json_decode($activity->properties);
                                $item = json_encode($property);
                            @endphp
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-start">{{$user->Name}}</td>
                                <td class="text-start">{{$activity->log_name}}</td>
                                <td class="text-start">{{$activity->description}}</td>
                                <td class="text-start">آپدیت از : {{json_encode($property->old, JSON_UNESCAPED_UNICODE)}} به : {{json_encode($property->attributes, JSON_UNESCAPED_UNICODE)}}</td>
                                <td class="text-start">{{\Carbon\Carbon::parse($activity->created_at)->format('Y/m/d')}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$activities->links("pagination::bootstrap-5")}}
                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>


@endsection
