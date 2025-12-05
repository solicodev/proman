<x-layout>
    @include('layouts.message')

    <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">

        <!--begin::Toolbar container-->
        <div class="d-flex flex-stack flex-row-fluid">
            <!--begin::Toolbar container-->
            <div class="d-flex flex-column flex-row-fluid">
                <!--begin::Toolbar wrapper-->

                <!--begin::Page title-->
                <div class="page-title d-flex align-items-center me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                        <span>پروژه های من</span>

                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{route('dashboard.index')}}" class="text-hover-primary">
                            <i class="ki-outline ki-home text-gray-700 fs-6"></i> </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i></li>
                    <!--end::Item-->


                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        پروژه های من
                    </li>
                    <!--end::Item-->


                </ul>
                <!--end::Breadcrumb-->

            </div>
            <!--end::Toolbar container-->

            <!--begin::Actions-->
            <div class="d-flex align-self-center flex-center flex-shrink-0">
                <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_project">
                    ایجاد پروژه<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست تمام پروژه ها</h3>

                <div class="fs-6 text-gray-500"></div>
            </div>
            <div class="card-toolbar my-1">
                <div class="me-6 my-1">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected>همه زمان ها</option>
                        <option value="thisyear">امسال</option>
                        <option value="thismonth">این ماه</option>
                        <option value="lastmonth">اخرین ماه</option>
                        <option value="last90days">90 روز گذشته</option>
                    </select>
                </div>
                <div class="me-4 my-1">
                    <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected>همه</option>
                        <option value="Approved">درحال بررسی</option>
                        <option value="Declined">برای انجام</option>
                        <option value="In Progress">در حال انجام</option>
                        <option value="In Transit">انجام شد</option>
                    </select>
                </div>
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                    <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="جستجو" />
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <!--begin::Table-->
                <table  class="kt_profile_overview_table table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                    <thead class="fs-7 text-gray-500 text-uppercase text-start">
                    <tr>
                        <th class="text-start">ردیف</th>
                        <th class="text-start">برند</th>
                        <th class="text-start">بیزنس</th>
                        <th class="text-start">مدیر تایید کننده</th>
                        <th class="text-start">تاریخ شروع</th>
                        <th class="text-start">تاریخ پایان</th>
                        <th class="text-start">وضعیت</th>
                        <th class="text-start">توضیحات پروژه</th>
                        <th class="text-start">تاریخ</th>
                        <th class="text-start">عملیات</th>
                        <th class="text-start">عملیات</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">
                                {{$project->brand?->name}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="me-5 position-relative">--}}
{{--                                        <div class="symbol symbol-50px w-50px symbol-circle bg-light">--}}
{{--                                            @if($project->brand_id)--}}
{{--                                                <img src="{{route('home')}}/{{$project->brand?->photo?->path}}" alt="image" class="p-3"/>--}}
{{--                                            @else--}}
{{--                                                <img src="{{url('panel/assets/media/svg/brand-logos/default.png')}}" alt="image" class="p-3"/>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </td>
                            <td class="text-start">{{$project->department?->name}}</td>
                            <td class="text-start">{{$project->user?->Name}}</td>
                            <td class="text-start">{{$project->start_date}}</td>
                            <td class="text-start">{{$project->end_date}}</td>
                            <td class="text-start">{!! $project->PanelProjectStatus   !!}</td>
                            <td class="text-start">{{$project->description}}</td>
                            <td class="text-start">{{verta($project->created_at)->format('Y/m/d')}}</td>
                            <td class="text-start">
                                @canany(['manager_projectShow' , 'member_projectShow'])
                                <a href="{{route('dashboard.project.show',$project->id)}}" class="btn btn-light-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                    <i class="ki-outline ki-eye fs-6 px-2"></i>
                                </a>
                                @endcanany
                            </td>
                            <td>
                                <div class="h-10px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                                     @if($project->progress > 0)
                                     title="این پروژه {{ round($project->progress) }}% تکمیل شد "
                                    @endif>
                                    <div class="@if($project->status == 0) bg-danger
                                    @elseif($project->status == 1) bg-primary
                                    @elseif($project->status == 2) bg-success
                                    @elseif($project->status == 3) bg-light-secondary
                                    @elseif($project->status == 4) badge-light
                                 @endif  rounded h-10px" role="progressbar" style="width: {{ $project->progress }}%"
                                         aria-valuenow=" {{ round($project->progress) }}%" aria-valuemin="0" aria-valuemax="100">


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--begin::Modal - Support Center - Create project-->


    @push('scripts')
        <script>
            const uploadUrl = "{{ route('dashboard.upload') }}";
        </script>
        <script src="{{asset('panel/assets/js/custom/apps/support-center/projects/create.js')}}"></script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>
    @endpush
</x-layout>
