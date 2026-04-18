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
                        <span>گزارش پروژه ها</span>
                    </h1>
                    <!--end::Title-->
                </div>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{route('dashboard.index')}}" class="text-hover-primary">
                            <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        گزارش پروژه ها
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar container-->
            <!--begin::Actions-->
            <div class="d-flex align-self-center flex-center flex-shrink-0">
                <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3">
                    ایجاد پروژه<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>

    <div class="card card-flush mt-6 mt-xl-9" >
        @php
            $statuses = [
                '0' => 'در حال بررسی',
                '1' => 'درحال انجام',
                '2' => 'تکمیل شد',
                '3' => 'تعلیق شد',
                '4' => 'کنسل شد',
            ];
        @endphp
        <form action="{{route('dashboard.project.report.filter')}}" method="post" class="m-2 fv-plugins-bootstrap5 fv-plugins-framework" id="kt_docs_formvalidation_text">
            @csrf
            <div class="row mb-4">
                <div class="col my-1">
                    <select  name="status_filter" data-control="select2" data-hide-search="true"
                             class="form-select form-select-solid form-select-sm"
                             data-placeholder="وضعیت را انتخاب کنید">
                        <option></option>
                        @foreach($statuses as $key => $label)
                            <option value="{{ $key }}" {{ request('status_filter') == $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col my-1">
                    <select  name="brand_filter" data-control="select2" data-hide-search="true"
                             class="form-select form-select-solid form-select-sm"
                             data-placeholder="برند را انتخاب کنید">
                        <option></option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" {{ request('brand_filter') == $brand->id ? 'selected' : '' }}>{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col my-1">
                    <select  name="department_filter" data-control="select2" data-hide-search="true"
                             class="form-select form-select-solid form-select-sm"
                             data-placeholder="دپارتمان را انتخاب کنید">
                        <option></option>
                        @foreach($departments as $department)
                            <option value="{{$department->id}}"  {{ request('department_filter') == $department->id ? 'selected' : '' }}>{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col my-1">
                    <select  name="filter" data-control="select2" data-hide-search="true" data-placeholder="گزینه را انتخاب کنید"
                             class="form-select form-select-solid form-select-sm">
                        <option></option>
                        <option value="approve_verify"  {{ request('filter') == 'approve_verify' ? 'selected' : '' }}>مورد تایید مدیر تایید کننده</option>
                        <option value="approve_need"  {{ request('filter') == 'approve_need' ? 'selected' : '' }}>نیاز به تایید مدیر تایید کننده</option>
                        <option value="approving_manager" {{ request('filter') == 'approving_manager' ? 'selected' : '' }}>برای اطلاع مدیر تایید کننده</option>
                        <option value="other" {{ request('filter') == 'other' ? 'selected' : '' }}>سایر موارد</option>
                    </select>
                </div>
                <div class="col my-1">
                    <select  name="user_filter" data-control="select2" data-hide-search="true"
                             class="form-select form-select-solid form-select-sm"
                             data-placeholder="مدیر مربوطه را انتخاب کنید">
                        <option></option>
                        @foreach($managers as $key => $manager)
                            <option value="{{ $manager->id }}" {{ request('user_filter') == $manager->id ? 'selected' : '' }}>
                                {{ $manager->Name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="d-flex justify-content-between my-3">
                <div class="d-flex gap-2">
                    @if (request('status_filter'))
                        <span onclick="delete_value('status_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $statuses[request('status_filter')] ?? request('status_filter') }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                    @endif

                    @if (request('brand_filter'))
                        @php
                            $brand = $brands->firstWhere('id', request('brand_filter'));
                        @endphp
                        @if($brand)
                            <span onclick="delete_value('brand_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                    {{ $brand->name }}
                                    <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                                </span>
                        @endif
                    @endif

                    @if (request('department_filter'))
                        @php
                            $department = $departments->firstWhere('id', request('department_filter'));
                        @endphp
                        @if($department)
                            <span onclick="delete_value('department_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $department->name }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                        @endif
                    @endif

                    @if (request('user_filter'))
                        @php
                            $manager = $managers->firstWhere('id', request('user_filter'));
                        @endphp
                        @if($manager)
                            <span onclick="delete_value('user_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $manager->name }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                        @endif
                    @endif

                    @if (request('filter'))
                        <span onclick="delete_value('filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                {{ __("filters.".request('filter')) ?? request('filter') }}
                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
            </span>
                    @endif

                </div>

                <button type="submit" class="btn btn-sm btn-light-success">فیلتر <i class="ki-outline ki-filter-search fs-2 ps-5"></i></button>
            </div>

        </form>
        <div class="card-header mt-5">

            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست تمام پروژه ها</h3>

                <div class="fs-6 text-gray-500"></div>
            </div>

            <div class="card-toolbar my-1" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper">

                <div class="me-6 my-1">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm d-none">
                        <option value="All" selected>همه زمان ها</option>
                        <option value="thisyear">امسال</option>
                        <option value="thismonth">این ماه</option>
                        <option value="lastmonth">اخرین ماه</option>
                        <option value="last90days">90 روز گذشته</option>
                    </select>
                </div>
                <div class="me-4 my-1">
                    <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm d-none">
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
                        <th class="text-start">شناسه</th>
                        <th class="text-start">نام پروژه</th>
                        <th class="text-start">برند</th>
                        <th class="text-start">بیزنس</th>
                        <th class="text-start">نیاز به تایید</th>
                        <th class="text-start">مدیر تایید کننده</th>
                        <th class="text-start">تایید</th>
                        <th class="text-start">تاریخ شروع</th>
                        <th class="text-start">تاریخ پایان</th>
                        <th class="text-start">وضعیت</th>
                        <th class="text-start">توضیحات پروژه</th>
                        <th class="text-start">پروژه</th>
                        <th class="text-start">تسک</th>
                        <th class="text-start">تایید</th>
                        <th class="text-start">تغییر وضعیت</th>
                        {{--                        <th class="text-start">درصد پیشرفت</th>--}}
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($projects as $project)
                        @php
                            $start_date = explode(' ',$project->start_date);
                            $end_date = explode(' ',$project->end_date);
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><span class="fs-8 rounded-1 px-1 text-bg-secondary">{{$project->project_code}}</span></td>
                            <td class="text-start fs-7 ">{{$project->name}}</td>

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
                            <td class="text-start">{!! $project->PanelApprovingManager !!}</td>
                            <td class="text-start" style="font-size: 0.85rem;">@if(!$project->approving_manager ) ندارد@else {{$project->approvingManager?->Name}}@endif </td>
                            <td class="text-start">{!! $project->PanelApproveVerify !!}</td>
                            <td class="text-start" style="font-size: 0.85rem;">{{$start_date[0]}}</td>
                            <td class="text-start" style="font-size: 0.85rem;">{{$end_date[0]}}</td>
                            <td class="text-start">{!! $project->PanelProjectStatus !!}</td>
                            <td class="text-start" style="font-size: 0.85rem;">{{$project->description}}</td>
                            <td class="text-start">
                                @canany(['manager_projectShow' , 'member_projectShow'])
                                    <a href="{{route('dashboard.project.show',$project->id)}}">
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="مشاهده پروژه" >
	                                        <i class="ki-outline ki-eye text-primary fs-4 px-2"></i>
                                        </span>
                                    </a>
                                @endcanany
                            </td>
                            <td class="text-start">
                                <a href="{{route('dashboard.project.show',$project->id)}}">
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="مشاهده تسک" >
                                        <i class="ki-outline ki- text-primary fs-4 px-2"></i>
                                    </span>
                                </a>
                            </td>
                            <td class="text-start">
                                <a href="#"
                                   onclick="openEditModal('{{ route('dashboard.project.approveVerify', $project->id) }}',
                                           JSON.stringify({
                                               id:'{{ $project->id }}',
                                               project_code:'{{ $project->project_code }}',
                                               approve_verify:'{{ $project->approve_verify }}'
                                           }))">
                                   <span class="ms-1"  data-bs-toggle="tooltip" title="اعمال تایید" >
	                                        <i class="ki-outline ki-check-square text-success fs-4 px-2"></i>
                                   </span>
                                </a>

                                {{--                                <a href="#" onclick="openEditModal('{{ route('dashboard.project.approveVerify', $project->id) }}', JSON.stringify({project_code:'{{ $project->project_code }}' ,approve_verify:'{{$project->approve_verify}}' }))"--}}
                                {{--                                   class="btn btn-sm btn-light-primary p-1"> اعمال تایید<i class="ki-outline ki-pencil fs-7 px-2"></i></a>--}}
                            </td>
                            <td class="text-start">
                                <a href="#" class="text-primary" onclick="openStatusModal('{{ route('dashboard.project.status', $project->id) }}', JSON.stringify({project_code:'{{ $project->project_code }}' ,status:'{{$project->status}}' }))">
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="تغییر وضعیت" >
	                                        <i class="ki-outline ki-pencil text-warning fs-4 px-2"></i>
                                    </span>
                                </a>
                            </td>
                            {{--                            <td>--}}
                            {{--                                <div class="h-10px w-100 bg-light mb-5" data-bs-toggle="tooltip"--}}
                            {{--                                     @if($project->progress > 0)--}}
                            {{--                                     title="این پروژه {{ round($project->progress) }}% تکمیل شد "--}}
                            {{--                                    @endif>--}}
                            {{--                                    <div class="@if($project->status == 0) bg-danger--}}
                            {{--                                    @elseif($project->status == 1) bg-primary--}}
                            {{--                                    @elseif($project->status == 2) bg-success--}}
                            {{--                                    @elseif($project->status == 3) bg-light-secondary--}}
                            {{--                                    @elseif($project->status == 4) badge-light--}}
                            {{--                                    @endif  rounded h-10px" role="progressbar" style="width: {{ $project->progress }}%"--}}
                            {{--                                         aria-valuenow=" {{ round($project->progress) }}%" aria-valuemin="0" aria-valuemax="100">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--begin::Modal - Support Center - Create project-->
    <div class="modal fade" id="kt_modal_approving_verify" aria-labelledby="approvingModalLabel" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered " >
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 " id="modalTitle">
                    <!--begin::Close-->
                    <h6 id="approvingModalLabel">
                        گزینه مورد نظر را انتخاب کنید
                    </h6>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-5 justify-content-center ">
                    <!--begin:Form-->
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper" >
                        <form id="EditAprooveForm" method="POST" action="" class="form" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <div class="col-md-12 fv-row my-5">
                                <label class="form-check-label text-success">
                                    <input type="radio" id="radio_approved" name="approve_verify"  value="0" class="form-check-input" style="width: 1rem; height:1rem"
{{--                                           onchange="this.form.submit();" --}}
                                    >
                                    تایید شد
                                </label>
                                <label class="form-check-label text-warning">
                                    <input type="radio" id="radio_not_approved" name="approve_verify" value="1" class="form-check-input" style="width: 1rem; height:1rem"
{{--                                           onchange="this.form.submit();"--}}
                                    >
                                    تایید نشد
                                </label>
                            </div>
                            <div class="col-md-12 fv-row my-5">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>عنوان</span>
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="یک عنوان بنویسید" >
	                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="یک عنوان بنویسید" value="{{old('title')}}" name="title" />
                            </div>
                            <div class="col-md-12 fv-row my-5">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>تاریخ</span>
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="تاریخ تایید پروژه را انتخاب کنید" >
	                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                </label>
                                <div class="position-relative d-flex align-items-center">
                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                    <input name="date"
                                           class="result form-control form-control-solid ps-12"
                                           type="text"
                                           data-jdp
                                           data-jdp-only-date
                                           placeholder="تاریخ تایید"
                                           autocomplete="off"
                                           value="{{ old('date') }}"
                                    />
                                </div>
                            </div>
                            <div class="fv-row mb-8">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>توضیحات</span>
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="توضیحی درباره تایید بنویسید" >
	                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                </label>
                                <textarea class="form-control form-control-solid" name="description" data-kt-autosize="true" placeholder="توضیحی درباره تایید بنویسید">
                                    {{old('description')}}
                                </textarea>
                            </div>
                            <div class="fv-row g-9 mb-8">
                                <label for="gallery" class="form-label">فایل را ضمیمه کنید </label>
                                <input type="file" class="form-control mb-2 mb-md-0" id="gallery"
                                       name="photo_id" placeholder="تصویر">
                            </div>
                            <div class="d-flex justify-content-end fv-row g-9 mb-8">
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-sm btn-success">ثبت تایید<i class="ki-outline ki-check fs-3 px-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>




    <div class="modal fade" id="kt_modal_status" aria-labelledby="statusModalLabel" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-500px" >
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 " id="statusmodalTitle">
                    <!--begin::Close-->
                    <h6 id="statusModalLabel">
                        گزینه مورد نظر را انتخاب کنید
                    </h6>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-5 justify-content-center ">
                    <!--begin:Form-->
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper" >
                        <form id="EditStatusForm" method="post" class="d-flex align-items-center gap-3">
                            @csrf
                            <label class="form-check-label text-warning">
                                <input type="radio" id="radio_pending" name="status" value="0" class="form-check-input" style="width: 1rem; height:1rem"
                                       onchange="this.form.submit();" >
                                درحال بررسی
                            </label>

                            <label class="form-check-label text-primary">
                                <input type="radio" id="radio_in_progress" name="status" value="1" class="form-check-input" style="width: 1rem; height:1rem"
                                       onchange="this.form.submit();">
                                درحال انجام
                            </label>
                            <label class="form-check-label text-success">
                                <input type="radio" id="radio_completed" name="status" value="2" class="form-check-input" style="width: 1rem; height:1rem"
                                       onchange="this.form.submit();">
                                تکمیل شد
                            </label>
                            <label class="form-check-label text-secondary">
                                <input type="radio" id="radio_on_hold" name="status" value="3" class="form-check-input" style="width: 1rem; height:1rem"
                                       onchange="this.form.submit();">
                                تعلیق
                            </label>
                            <label class="form-check-label text-danger">
                                <input type="radio" id="radio_canceled" name="status" value="4" class="form-check-input" style="width: 1rem; height:1rem"
                                       onchange="this.form.submit();">
                                کنسل شد
                            </label>

                        </form>
                    </div>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    @push('scripts')

        <script>
            function openEditModal(url, currentData) {
                let data = JSON.parse(currentData);

                $('#approvingModalLabel').text(`اعمال تاییدیه "${data.project_code}"`);
                $('#EditAprooveForm #id').val(data.id);
                $('#EditAprooveForm').attr('action', url);

                if (data.approve_verify == 0) {
                    $('#radio_approved').prop('checked', true);
                }
                if (data.approve_verify == 1) {
                    $('#radio_not_approved').prop('checked', true);
                }

                $('#kt_modal_approving_verify').modal('show');
            }



            function openStatusModal(url, currentData) {
                let data = JSON.parse(currentData);

                $('#statusModalLabel').text(`تغییر وضعیت "${data.project_code}"`);
                $('#editForm #id').val(data.id);
                $('#EditStatusForm').attr('action', url);
                if (data.status == 0) {
                    $('#radio_pending').prop('checked', true);
                } if (data.status == 1)
                {
                    $('#radio_in_progress').prop('checked', true);
                } if(data.status == 2)
                {
                    $('#radio_completed').prop('checked', true);
                } if(data.status == 3)
                {
                    $('#radio_on_hold').prop('checked', true);
                } if(data.status == 4)
                {
                    $('#radio_canceled').prop('checked', true);
                }

                $('#kt_modal_status').modal('show');
            }
        </script>
        <script>
            function delete_value(id) {
                $(`[name="${id}"]`).val('').trigger('change');
                document.getElementById('delete_form_value_org').submit();
            }
        </script>
        <script>
            $(".datepicker").pickadate({
                selectMonths: true,
                selectYears: true,
            }),
                $(".timepicker").pickatime();
        </script>
        <script>
            $(function () {
                $("#date-time").bootstrapMaterialDatePicker({
                    format: "YYYY-MM-DD HH:mm",
                });
                $("#date").bootstrapMaterialDatePicker({
                    time: false,
                });
                $("#time").bootstrapMaterialDatePicker({
                    date: false,
                    format: "HH:mm",
                    cancelText: "انصراف",
                    okText: "خب",
                });
            });
            $("#kt_datepicker_3").flatpickr({
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
        </script>

        <script>
            const uploadUrl = "{{ route('dashboard.upload') }}";
        </script>
        <script src="{{asset('panel/assets/js/custom/apps/support-center/projects/create.js')}}"></script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>
    @endpush
</x-layout>
