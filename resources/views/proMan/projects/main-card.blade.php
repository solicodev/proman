<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-1 ">
        <div class="d-flex flex-stack flex-row-fluid">
            <div class="d-flex flex-column flex-row-fluid">
                <div class="page-title d-flex align-items-center me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                        <span>{{$project->name}} <small>{{$project->project_code}}</small></span>
                    </h1>
                </div>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{route('dashboard.index')}}" class="text-hover-primary">
                            <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{route('dashboard.project.index')}}" class="text-hover-primary">
                            پروژه های من
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700">
                        {{$project->name}}
                    </li>
                </ul>
            </div>
            {{--                    <div class="d-flex align-self-center flex-center flex-shrink-0">--}}
            {{--                        <a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">--}}
            {{--                            <i class="ki-outline ki-plus-square fs-2"></i>--}}
            {{--                            <span>Invite</span>--}}
            {{--                        </a>--}}

            {{--                        <a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">--}}
            {{--                            Create <span class="d-none d-sm-inline">Target</span>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
        </div>
    </div>
    <div id="kt_app_content" class="app-content p-0 flex-column-fluid" >
        <div class="card mb-2">
            <div class="card-body pt-9 pb-0">
                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                        @if($project->brand_id)
                            <img class="mw-50px mw-lg-75px" src="{{route('home')}}/{{$project->brand?->photo?->path}}" alt="image"/>
                        @else
                            <img class="mw-50px mw-lg-75px" src="{{url('panel/assets/media/svg/brand-logos/default.png')}}" alt="image"/>
                        @endif
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <div class="d-flex flex-column w-100">
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">
                                            {{ $project->name }}
                                        </a>
                                        {!! $project->PanelProjectStatus !!}
                                    </div>

                                    <div class="d-flex">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
                                            اطلاع رسانی به اعضای پروژه<i class="ki-outline ki-notification-on fs-5 ps-3"></i>
                                        </a>
                                        @can('manager_projectEdit')
                                        <a href="{{route('dashboard.project.edit',$project->id)}}" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" >
                                            ویرایش <i class="ki-outline ki-pencil fs-5 ps-3"></i>
                                        </a>
                                        @endcan
                                        @can('manager_projectDelete')
                                        <a href="{{route('dashboard.project.destroy',$project->id)}}"
                                           type="button"
                                           class="btn btn-clean btn-sm btn-icon btn-icon-danger btn-active-light-primary ms-auto mx-2"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="حذف" onclick="return confirm('اطمینان دارید پروژه حذف شود؟');">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </a>
                                        @endcan

{{--                                        <div class="me-0">--}}
{{--                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">--}}
{{--                                                        خروجی pdf--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">--}}
{{--                                                        ایجاد تسک--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link flex-stack px-3">--}}
{{--                                                        ایجاد تسک--}}
{{--                                                        <span class="ms-2" data-bs-toggle="tooltip" title="Create Task">--}}
{{--                                                            <i class="ki-outline ki-plus-square fs-6"></i>--}}
{{--                                                        </span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">--}}
{{--                                                    <a href="#" class="menu-link px-3">--}}
{{--                                                        <span class="menu-title">منوی چند سطحی</span>--}}
{{--                                                        <span class="menu-arrow"></span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">--}}
{{--                                                                Plans--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">--}}
{{--                                                                Billing--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">--}}
{{--                                                                Statements--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="separator my-2"></div>--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <div class="menu-content px-3">--}}
{{--                                                                <label class="form-check form-switch form-check-custom form-check-solid">--}}
{{--                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>--}}
{{--                                                                    <span class="form-check-label text-muted fs-6">--}}
{{--                                                                    Recuring--}}
{{--                                                                    </span>--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap justify-content-start">
                            <div class="d-flex flex-wrap col-12">
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-security-user fs-3 text-primary me-2"></i>
                                        <div class="fs-4 fw-bold" >{{$project->manager?->Name}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">مدیر پروژه</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-category fs-3 text-success me-2"></i>
                                        <div class="fs-4 fw-bold" >{{$project->category?->title}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">دسته بندی</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-geolocation-home fs-3 text-info me-2"></i>
                                        <div class="fs-4 fw-bold" >{{$project->department?->name}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">دپارتمان</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 fw-bold">{{verta($project->created_at)->format('Y/m/d')}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">تاریخ ایجاد پروژه</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        @php
                                            $start_date = explode(' ',$project->start_date);
                                        @endphp
                                        <div class="fs-4 fw-bold">{{$start_date[0]}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">تاریخ شروع تخمینی</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        @php
                                            $end_date = explode(' ',$project->end_date);
                                        @endphp
                                        <div class="fs-4 fw-bold">{{$end_date[0]}}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-500">تاریخ پایان تخمینی</div>
                                </div>
                                @if($project->start_todo_date)
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <div class="d-flex align-items-center">
                                            @php
                                                $start_todo_date = explode(' ',$project->start_todo_date);
                                            @endphp
                                            <div class="fs-4 fw-bold">{{$start_todo_date[0]}}</div>
                                        </div>
                                        <div class="fw-semibold fs-6 text-gray-500">تاریخ شروع واقعی</div>
                                    </div>
                                @endif

                            </div>
                            <div class="symbol-group symbol-hover my-3 col-12">
                                @if(count($project->members)>0)
                                    @foreach($project->members as $member)
                                        @if(!$member->photo_id)
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$member->Name}}">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ mb_substr($member->Name, 0, 1) }}</span>
                                            </div>
                                        @else
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$member->Name}}">
                                                <img alt="Pic" src="{{ route('home') }}/{{ $member->photo?->path }}" />
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    @canany(['manager_projectTotalInfo','member_projectTotalInfo'])
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.show' , $project->id)) active @endif " href="{{route('dashboard.project.show' , $project->id)}}">
                            اطلاعات کلی
                        </a>
                    </li>
                    @endcanany
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.task' , $project->id)) active @endif " href="{{route('dashboard.project.task', $project->id)}}">
                            تسک ها
                        </a>
                    </li>
                    @canany(['manager_members' , 'member_members'])
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.member' , $project->id)) active @endif" href="{{route('dashboard.project.member', $project->id)}}">
                             اعضای پروژه
                        </a>
                    </li>
                    @endcanany
                    @can('manager_files')
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.file', $project->id)) active @endif " href="{{route('dashboard.project.file', $project->id)}}">
                            فایل ها
                        </a>
                    </li>
                    @endcan
                    @if(auth()->user()->hasAnyRole(['manager','Super Admin']))
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.activity', $project->id)) active @endif" href="{{route('dashboard.project.activity',$project->id)}}">
                            فعالیت ها
                        </a>
                    </li>
                    @endif
{{--                    @can('manager_access')--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.access',$project->id)) active @endif"  href="{{route('dashboard.project.access',$project->id)}}">--}}
{{--                            دسترسی ها--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    @endcan--}}
                    @can('manager_projectOptions')
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.dependency', $project->id)) active @endif" href="{{route('dashboard.project.dependency',$project->id)}}">
                            آپشن | جزییات پروژه
                        </a>
                    </li>
                    @endcan
                    @can('manager_TaskTimeLine')
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.taskTimeLine', $project->id)) active @endif" href="{{route('dashboard.project.taskTimeLine',$project->id)}}">
                            گزارش تسک های پروژه
                        </a>
                    </li>
                    @endcan
                    @canany(['manager_comments','member_comments','assign_comments'])
                    <li class="nav-item">
                        <a class="nav-link text-active-primary py-5 me-6 @if(request()->getUri() == route('dashboard.project.comment', $project->id)) active @endif" href="{{route('dashboard.project.comment',$project->id)}}">
                           کامنت ها
                        </a>
                    </li>
                    @endcan
                </ul>
            </div>
        </div>
