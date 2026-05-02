<x-layout>
    @push('styles')
        <style>
            .checklist-item-hover {
                background-color: #f3f6f9;
                transition: background-color 0.2s ease;
            }

            .checklist-form .delete-checklist {
                opacity: 0;
                transition: opacity 0.2s ease;
            }

            .checklist-form:hover {
                background-color: var(--bs-gray-100);
                border-radius: 0.475rem;
            }

            .checklist-form:hover .delete-checklist {
                opacity: 1;
            }

            .editable-input {
                width: 100%;
                border: none;
                background: transparent;
                outline: none;
                font-size: inherit;
            }

        </style>
    @endpush
    @include('layouts.message')
    @include('proMan.projects.main-card')
    <div class="d-flex flex-wrap flex-stack pt-10 pb-8" data-select2-id="select2-data-135-nh5p">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">
            تسک های پروژه
            {{--            <span class="fs-6 text-gray-500 fw-semibold ms-1">آپدیت بر اساس ↓</span>--}}
        </h3>
        <!--end::Heading-->
        <div class="d-flex flex-wrap my-1">
            @can('manager_taskAdd')
{{--                <a href="#" class="btn btn-sm btn-primary er w-100 fs-6 px-8 py-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">ایجاد تسک<i class="ki-outline ki-plus-square fs-6 px-2"></i> </a>--}}
                <a href="{{route('dashboard.task.create',$project->id)}}" class="btn btn-sm btn-primary er w-100 fs-6 px-8 py-4">ایجاد تسک<i class="ki-outline ki-plus-square fs-6 px-2"></i> </a>
            @endcan
        </div>
        <!--begin::Controls-->
        <div class="d-flex flex-wrap my-1">
            <!--begin::Tab nav-->
            <ul class="nav nav-pills me-5">
                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3" data-bs-toggle="tab" href="#kt_project_targets_card_pane">
                        <i class="ki-outline ki-element-plus fs-1"></i>
                    </a>
                </li>

                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active" data-bs-toggle="tab" href="#kt_project_targets_table_pane">
                        <i class="ki-outline ki-row-horizontal fs-2"></i>
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->

            <!--begin::Wrapper-->
            <div class="my-0">
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-150px d-none">
                    <option value="1" selected>همه تسک ها</option>
                    <option value="2">تسک های آخرین روز</option>
                    <option value="3">تسک های آخرین هفته</option>
                    <option value="4">تسک های آخرین ماه</option>
                </select>
                <!--end::Select-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Controls-->
    </div>
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
{{--        <div id="kt_project_targets_card_pane" class="tab-pane fade show ">--}}
{{--            <!--begin::Row-->--}}
{{--            <div class="row g-9">--}}
{{--                <div class="row">--}}
{{--                    @if(count($tasks)>0)--}}
{{--                        @foreach($columns as $key => $column)--}}
{{--                            <div class="col-md-3 col-lg-12 col-xl-3">--}}
{{--                                <!--begin::Col header-->--}}
{{--                                <div class="mb-9">--}}
{{--                                    <div class="d-flex flex-stack">--}}
{{--                                        <div class="fw-bold fs-4">--}}
{{--                                            {{ $column['title'] }}--}}
{{--                                            <span class="fs-6 text-gray-500 ms-2">{{ count($tasks[$key] ?? []) }}</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- منوی فیلتر -->--}}
{{--                                        <div>--}}
{{--                                            <button type="button"--}}
{{--                                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"--}}
{{--                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                                <i class="ki-outline ki-element-plus fs-2"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="h-3px w-100 bg-{{ $column['color'] }}"></div>--}}
{{--                                </div>--}}
{{--                                <!--end::Col header-->--}}

{{--                                <!--begin::Tasks Loop-->--}}

{{--                                @forelse($tasks[$key] ?? [] as $task)--}}
{{--                                    <div class="card mb-6 mb-xl-9">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex flex-stack mb-3">--}}
{{--                                                <div>{!! $task->task_status !!}</div>--}}
{{--                                                <div>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"--}}
{{--                                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                                        <i class="ki-outline ki-element-plus fs-2"></i>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="mb-2">--}}
{{--                                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">--}}
{{--                                                    {{ $task->title }}--}}
{{--                                                </a>--}}
{{--                                            </div>--}}

{{--                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">--}}
{{--                                                {{ $task->description }}--}}
{{--                                            </div>--}}

{{--                                            <!-- SUBTASK SHOW -->--}}
{{--                                            @if($task->children && $task->children->count() > 0)--}}
{{--                                                <div class="ms-5 mt-4 border-start ps-3">--}}
{{--                                                    @foreach($task->children as $subtask)--}}
{{--                                                        <div class="card mb-3 shadow-sm border-bottom rounded-3">--}}
{{--                                                            <div class="card-body py-3 px-4">--}}
{{--                                                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">--}}
{{--                                                                    <div class="d-flex flex-column">--}}
{{--                                                                        <span class="fw-bold text-gray-800">{{ $subtask->title }}</span>--}}
{{--                                                                        <span class="text-gray-600 small mt-1">{{ $subtask->description }}</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="d-flex align-items-center gap-2">--}}
{{--                                                                        {!! $subtask->TaskStatus !!}--}}
{{--                                                                        {!! $subtask->TaskPrority !!}--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                --}}{{-- اعضا --}}
{{--                                                                @if($subtask->assigners && $subtask->assigners->count() > 0)--}}
{{--                                                                    <div class="mt-3 d-flex flex-wrap align-items-center gap-1">--}}
{{--                                                                        @foreach($subtask->assigners as $assigner)--}}
{{--                                                                            <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="{{ $assigner->Name }}">--}}
{{--                                                                                @if($assigner->photo_id)--}}
{{--                                                                                    <img src="{{ route('home') }}/{{ $assigner->photo?->path }}" alt="Pic" class="object-fit-cover" />--}}
{{--                                                                                @else--}}
{{--                                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">--}}
{{--                                                                                        {{ mb_substr($assigner->Name, 0, 1) }}--}}
{{--                                                                                    </span>--}}
{{--                                                                                @endif--}}
{{--                                                                            </div>--}}
{{--                                                                        @endforeach--}}
{{--                                                                    </div>--}}
{{--                                                                @endif--}}
{{--                                                                <div class="d-flex justify-content-end">--}}
{{--                                                                    <a href="#" onclick="openShowModal(--}}
{{--                                                                        '{{ route('dashboard.task.show', $subtask->id) }}',--}}
{{--                                                                        '{{ route('dashboard.task.update.status', $subtask->id) }}'--}}
{{--                                                                        )"--}}
{{--                                                                       data-task-id="{{ $subtask->id }}"--}}
{{--                                                                       data-task-status="{{ $subtask->status }}"--}}
{{--                                                                       class="btn btn-sm btn-light-info p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده"><i class="ki-outline ki-eye fs-6 px-2"></i></a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    @endforeach--}}
{{--                                                </div>--}}
{{--                                            @endif--}}

{{--                                            <!-- پایان زیرتسک‌ها -->--}}

{{--                                        </div>--}}

{{--                                        <!-- دکمه زیر تسک -->--}}
{{--                                        <div class="card-footer text-center py-3">--}}
{{--                                            @can('manager_taskSubTaskAdd')--}}
{{--                                                <a href="#" class="btn btn-light-primary btn-sm"--}}
{{--                                                   onclick="openEditModal('{{ route('dashboard.task.subtasks.store', $task->id) }}',--}}
{{--                                                   JSON.stringify({title:'{{ $task->title }}'}))">--}}
{{--                                                    ساخت زیر تسک جدید--}}
{{--                                                    <i class="ki-outline ki-plus-square fs-6 px-2"></i>--}}
{{--                                                </a>--}}
{{--                                            @endcan--}}
{{--                                            @canany(['manager_taskShow','member_taskShow','assign_taskShow'])--}}
{{--                                                <a href="#" onclick="openShowModal(--}}
{{--                                                '{{ route('dashboard.task.show', $task->id) }}',--}}
{{--                                                '{{ route('dashboard.task.update.status', $task->id) }}'--}}
{{--                                                )"--}}
{{--                                                   data-task-id="{{ $task->id }}"--}}
{{--                                                   data-task-status="{{ $task->status }}"--}}
{{--                                                   class="btn btn-sm btn-light-info" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده"><i class="ki-outline ki-eye fs-6 px-2"></i></a>--}}
{{--                                            @endcanany--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @empty--}}
{{--                                    <div class="alert alert-dismissible bg-secondary d-flex flex-column flex-sm-row w-100 p-5 mb-10">--}}
{{--                                        <div class="d-flex flex-column">--}}
{{--                                            <span>تسکی در این وضعیت وجود ندارد!</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforelse--}}
{{--                                <!--end::Tasks Loop-->--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <!--end::Row-->--}}
{{--        </div>--}}
        <!--end::Tab pane-->

        <!--begin::Tab pane-->
        <div id="kt_project_targets_table_pane" class="tab-pane fade active show">
            <div class="card  card-flush ">
                <div class="card-header mt-5">
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">لیست تمام تسک ها</h3>

                        <div class="fs-6 text-gray-500"></div>
                    </div>
                    <div class="card-toolbar my-1">
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
                <div class="card-body pt-3">
                    <!--begin::Table-->
                    <div id="datatable-template"
                         data-show-route="{{ route('dashboard.task.show', ':id') }}"
                         data-update-status-route="{{ route('dashboard.task.update.status', ':id') }}">
                    </div>
                    <table class="kt_profile_overview_table table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th class="text-start">ردیف</th>
                            <th class="text-start">شناسه تسک</th>
                            <th class="text-start">عنوان</th>
                            <th class="text-start">تاریخ شروع</th>
                            <th class="text-start">تاریخ پایان</th>
                            <th class="text-start">اولویت</th>
                            <th class="text-start">وضعیت</th>
                            <th class="text-start">اعضا</th>
                            <th class="text-start">عملیات</th>
                            <th class="text-start">نمایش زیر دسته ها</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->


                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">


                        <!--begin::SubTable template-->
                        <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none">
                            <td data-kt-docs-datatable-subtable="template_index"></td>
                            <td data-kt-docs-datatable-subtable="template_id"></td>
                            <td data-kt-docs-datatable-subtable="template_title"></td>
                            <td data-kt-docs-datatable-subtable="template_start_date"></td>
                            <td data-kt-docs-datatable-subtable="template_end_date"></td>
                            <td data-kt-docs-datatable-subtable="template_priority"></td>
                            <td data-kt-docs-datatable-subtable="template_status"></td>
                            <td data-kt-docs-datatable-subtable="template_members"></td>
                            <td data-kt-docs-datatable-subtable="template_actions"></td>
                            <td data-kt-docs-datatable-subtable="template"></td>
                        </tr>
                        <!--end::SubTable template-->

                        @foreach($tb_tasks as $key => $tb_task)
                            <tr data-subtasks='@json($tb_task->children)'>
                                <td class="text-start">{{$loop->iteration}}</td>
                                <td class="text-start">{{$tb_task->task_code}}</td>
                                <td class="text-start">{{$tb_task->title}}</td>
                                <td class="text-start">{{verta($tb_task->start_date)}}</td>
                                <td class="text-start">{{verta($tb_task->end_date)}}</td>
                                <td class="text-start">{!! $tb_task->TaskPrority !!}</td>

                                <td class="text-start">{!! $tb_task->TaskStatus !!}</td>
                                <td class="text-start">
                                    <div class="symbol-group symbol-hover fs-8">
                                        @foreach($tb_task->assigners as $assigner)
                                            <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="{{$assigner->Name}}">
                                                @if($assigner->photo_id)
                                                    <img alt="Pic" src="{{ route('home') }}/{{$assigner->photo?->path}}" />
                                                @else
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">{{ mb_substr($assigner->Name, 0, 1) }}</span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                                <!--begin::Actions-->
                                <td>
                                    @canany(['manager_taskShow','member_taskShow','assign_taskShow'])
                                        <a href="#" onclick="openShowModal(
                                        '{{ route('dashboard.task.show', $tb_task->id) }}',
                                        '{{ route('dashboard.task.update.status', $tb_task->id) }}',
                                        )"
                                           data-task-id="{{ $tb_task->id }}"
                                           data-task-status="{{ $tb_task->status }}"
                                           class="btn btn-sm btn-light-info" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ki-outline ki-eye fs-6 px-2"></i>
                                        </a>
                                    @endcanany
                                    @can('manager_taskSubTaskAdd')
                                        <a href="#" class="btn btn-light-primary btn-sm"
                                           onclick="openEditModal('{{ route('dashboard.task.subtasks.store', $tb_task->id) }}',
                                                    JSON.stringify({id:'{{ $tb_task->id }}', title:'{{ $tb_task->title }}'}))">
                                            ساخت زیر تسک جدید
                                            <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                                        </a>
                                    @endcan
                                    @can('manager_taskDependency')
                                        <a href="#" class="btn btn-light-warning btn-sm"
                                           onclick="openDependencyModal('{{ route('dashboard.task.dependency', $tb_task->id) }}',
                                           JSON.stringify({id: '{{ $tb_task->id }}', title: '{{ $tb_task->title }}'}))">
                                            تعریف وابستگی تسک
                                            <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary  toggle h-25px w-25px"
                                            data-kt-docs-datatable-subtable="expand_row">
                                        <span class="btn btn-sm btn-light-primary toggle-off"><i class="ki-outline ki-plus"></i></span>
                                        <span class="btn btn-sm btn-light-danger toggle-on"><i class="ki-outline ki-cross"></i></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab Content-->

    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form action="{{route('dashboard.task.store')}}" method="post" id="kt_modal_new_target_form" class="form needs-validation"  autocomplete="off"  enctype="multipart/form-data">
                        @csrf
                        <input type="text" hidden="" value="{{$project->id}}" name="project_id">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">افزودن تسک</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                برای پروژه
                                <a href="#" class="fw-bold link-primary">{{$project->name}} - {{$project->project_code}}</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">عنوان</span>
                                    <span class="ms-1"  data-bs-toggle="tooltip" title="عنوان تسک را بنویسید" >
	                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="عنوان تسک" value="{{old('title')}}" name="title" required/>
                                <div class="invalid-feedback">عنوان تسک الزامی است</div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">اولویت تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                        data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="priority">
                                    <option></option>
                                    <option value="0">کم</option>
                                    <option value="1">متوسط</option>
                                    <option value="2">زیاد</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <div class="row mb-8">
{{--                            <div class="fv-row mb-8">--}}
                                <div class="col-lg-6">
                                    <label for="project_id" class="form-label required">تسک وابسته</label>
                                    <select class="form-select form-select-solid" data-control="select2" id="project_id"
                                            data-ajax-route="{{ route('dashboard.task.related-tasks', $project->id) }}"
                                            data-placeholder="تسک وابسته را انتخاب کنید" name="project_id" required>
                                        <option></option>
                                        {{--                                    @foreach($tb_tasks as $task_item)--}}
                                        {{--                                        <option value="{{ $task_item->id }}">{{ $task_item->title }}</option>--}}
                                        {{--                                    @endforeach--}}
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="relation_type" class="form-label required">نوع وابستگی </label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-placeholder="نوع وابستگی را انتخاب کنید" name="relation_type" required>
                                        <option></option>
                                        <option value="FS">Finish to Start (تسک فعلی بعد از اتمام قبلی شروع می‌شود)</option>
                                        <option value="FF">Finish to Finish (تسک فعلی تا اتمام قبلی نمی‌تواند تمام شود)</option>
                                        <option value="SS">Start to Start (شروع هر دو باید هم‌زمان باشد)</option>
                                        <option value="SF">Start to Finish (تسک فعلی تا شروع قبلی نمی‌تواند تمام شود)</option>
                                    </select>
{{--                                </div>--}}
                            </div>
                            <div class="fv-row mb-8">
                                <label class="form-label">Lag / Lead</label>
                                <input type="number" name="lag" class="form-control form-control-solid" value="{{old('lag')}}"
                                       placeholder="مثلاً +2 یا -1"
                                >
                                <small class="text-muted">
                                    عدد مثبت = لگ (تاخیر)، عدد منفی = لید (شروع زودتر)
                                </small>
                            </div>
{{--                            <div class="col-md-6 fv-row">--}}
{{--                                <label class="required fs-6 fw-semibold mb-2">تاریخ و ساعت شروع</label>--}}
{{--                                <div class="position-relative d-flex align-items-center">--}}
{{--                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>--}}
{{--                                    <input name="start_date"--}}
{{--                                           class="result form-control form-control-solid ps-12"--}}
{{--                                           type="text"--}}
{{--                                           data-jdp--}}
{{--                                           placeholder="تاریخ و ساعت شروع تسک"--}}
{{--                                           autocomplete="off"--}}
{{--                                           value="{{ old('start_date') }}"--}}
{{--                                           required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 fv-row">--}}
{{--                                <label class="required fs-6 fw-semibold mb-2">تاریخ و ساعت پایان</label>--}}
{{--                                <div class="position-relative d-flex align-items-center">--}}
{{--                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>--}}
{{--                                    <input name="end_date"--}}
{{--                                           class="result form-control form-control-solid ps-12"--}}
{{--                                           type="text"--}}
{{--                                           data-jdp--}}
{{--                                           required--}}
{{--                                           placeholder="تاریخ و ساعت پایان پروژه"--}}
{{--                                           autocomplete="off"--}}
{{--                                           value="{{ old('end_date') }}"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            {{--                                <div class="col-md-6 fv-row">--}}
                            {{--                                    <label class="required fs-6 fw-semibold mb-2">مدت زمان انجام تسک (روز)</label>--}}
                            {{--                                    <div class="position-relative d-flex align-items-center">--}}
                            {{--                                        <i class="ki-outline ki-watch fs-2 position-absolute mx-4"></i>--}}
                            {{--                                        <input name="duration"--}}
                            {{--                                               class="result form-control form-control-solid ps-12"--}}
                            {{--                                               type="number"--}}
                            {{--                                               placeholder="مدت زمان انجام تسک"--}}
                            {{--                                               autocomplete="off"--}}
                            {{--                                               value="{{ old('duration') }}"--}}
                            {{--                                               required />--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                        </div>
                        <!--end::Input group-->

                        <div class="row g-9 mb-8">
                            <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">نیاز به تایید مسئول تایید کننده دارد</label>
                                <input class="form-check-input" name="manager_check" type="checkbox" value="1" id="flexCheckDefault"/>

                            </div>
                            <!--begin::Col-->
                            <div class="col-md-8 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2"
                                        data-placeholder="مدیر تایید کننده تسک" name="manager_id">
                                    <option></option>
                                    @foreach($managers as $manager)
                                        <option value="{{$manager->id}}">{{$manager->Name}}  @if($manager->department_id)   - دپارتمان {{ $manager->department?->name }}@endif @if($manager->position_id)  - {{$manager->position?->title}} @endif</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2"
                                        data-placeholder="ناظر تسک" name="watcher_id">
                                    <option></option>
                                    @foreach($watchers as $watcher)
                                        <option value="{{$watcher->id}}">{{ $watcher->Name }}  @if($watcher->department_id)   - دپارتمان {{ $watcher->department?->name }}@endif @if($watcher->position_id)  - {{$watcher->position?->title}} @endif </option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">کاربران تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2"
                                        multiple  data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="members[]">
                                    <option></option>
                                    @foreach($members as $member)
                                        <option value="{{$member->id}}">{{$member->Name}}  @if($member->department_id)   - دپارتمان {{ $member->department?->name }}@endif @if($member->position_id)  - {{$member->position?->title}} @endif</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">توضیحات تسک</label>
                            <textarea class="form-control form-control-solid" name="description" data-kt-autosize="true" placeholder="توضیحات تسک">
                            {{old('description')}}
                            </textarea>
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <label for="gallery" class="form-label">فایل های مربوط به تسک </label>
                            <input type="file" class="form-control mb-2 mb-md-0" id="gallery"
                                   name="photos[]" placeholder="تصویر" multiple>

                        </div>
                        <!--begin::Input group-->


                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                انصراف
                            </button>

                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                افزودن تسک
                            </span>
                                <span class="indicator-progress">
                                کمی صبر کنید ...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <div class="modal fade" id="kt_modal_new_target_sub" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px" >
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper" >
                        <form action=""  method="post" id="editForm" class="form mx-auto mw-100 w-100 pt-15 pb-10 fv-plugins-bootstrap5 fv-plugins-framework needs-validation"
                              enctype="multipart/form-data">
                            @csrf
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3" id="modalTitle">افزودن زیرتسک</h1>
                                <!--end::Title-->
                                <input type="hidden" value="{{$project->id}}" name="project_id">
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">
                                    <a href="#" class="fw-bold link-primary"></a>
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">عنوان</span>
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="عنوان تسک را بنویسید" >
	                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="عنوان تسک" value="{{old('title')}}" name="title" required/>
                                    <div class="invalid-feedback">عنوان تسک الزامی است</div>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">اولویت تسک </label>

                                    <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                            data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="priority">
                                        <option></option>
                                        <option value="0">کم</option>
                                        <option value="1">متوسط</option>
                                        <option value="2">زیاد</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <div class="row g-9 mb-8">
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">تاریخ شروع</label>
                                    <div class="position-relative d-flex align-items-center">
                                        <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                        <input name="start_date"
                                               class="result form-control form-control-solid ps-12"
                                               type="text"
                                               data-jdp
                                               placeholder="تاریخ شروع تسک"
                                               autocomplete="off"
                                               value="{{ old('start_date') }}"
                                               required />
                                    </div>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">مدت زمان انجام تسک</label>
                                    <div class="position-relative d-flex align-items-center">
                                        <i class="ki-outline ki-watch fs-2 position-absolute mx-4"></i>
                                        <input name="duration"
                                               class="result form-control form-control-solid ps-12"
                                               type="text"
                                               placeholder="مدت زمان انجام تسک"
                                               autocomplete="off"
                                               value="{{ old('duration') }}"
                                               required />
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">نیاز به تایید مسئول تایید کننده دارد</label>
                                    <input class="form-check-input" name="sub_manager_check" type="checkbox" value="1" id="sub_flexCheckDefault"/>
                                </div>
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>
                                    <select class="form-select form-select-solid"  data-control="select2"
                                            data-placeholder="مدیر تایید کننده تسک" name="sub_manager_id">
                                        <option></option>
                                        @foreach($managers as $manager)
                                            <option value="{{$manager->id}}">{{$manager->Name}}  @if($manager->department_id)   - دپارتمان {{ $manager->department?->name }}@endif @if($manager->position_id)  - {{$manager->position?->title}} @endif$manager</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                    <select class="form-select form-select-solid"  data-control="select2"
                                            data-placeholder="ناظر تسک" name="watcher_id">
                                        <option></option>
                                        @foreach($watchers as $watcher)
                                            <option value="{{$watcher->id}}">{{ $watcher->Name }}  @if($watcher->department_id)   - دپارتمان {{ $watcher->department?->name }}@endif @if($watcher->position_id)  - {{$watcher->position?->title}} @endif</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">کاربران تسک </label>

                                    <select  class="form-select form-select-solid" data-control="select2"
                                             multiple  data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="members[]">
                                        <option></option>
                                        @foreach($members as $member)
                                            <option value="{{$member->id}}">{{$member->Name}}  @if($member->department_id)   - دپارتمان {{ $member->department?->name }}@endif @if($member->position_id)  - {{$member->position?->title}} @endif</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8">
                                <label class="fs-6 fw-semibold mb-2">توضیحات تسک</label>
                                <textarea class="form-control form-control-solid" name="description" data-kt-autosize="true" placeholder="توضیحات تسک">
                            {{old('description')}}
                            </textarea>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <label for="gallery" class="form-label required">فایل های مربوط به تسک </label>
                                <input type="file" class="form-control mb-2 mb-md-0" id="gallery"
                                       name="photos[]" placeholder="تصویر"  multiple>
                                <div class="invalid-feedback">تصویر الزامی است</div>
                            </div>

                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-sm btn-light me-3">
                                    انصراف
                                </button>

                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-sm btn-light-primary">
                                    <span class="indicator-label">
                                        ثبت تسک
                                    </span>
                                </button>
                            </div>
                            <!--end::Actions-->
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
    <div class="modal fade" id="kt_modal_task_show" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1024px modal-xl" >
            <!--begin::Modal content-->
            <div class="modal-content border-0 shadow-lg hover-scroll-y h-700px">
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="modalTitle">
                        <i class="bi bi-check me-2 text-primary"></i>
                    </h5>
                    <h6 id="taskCode"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span id="taskManager"></span>
                        <span id="taskManagerCheck"></span>
                        <span id="managerCheckVerify"></span>
                        <span id="watcher"></span>
                        <span id="taskStatus"></span>
                        <span id="TaskPrority"></span>
                        <small id="task-deadline" class="text-muted"></small>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-4">

                        <!-- Input تاریخ -->
                        <div>
                            <input name="start_date"
                                   id="start_date"
                                   class="result form-control form-control-solid ps-12"
                                   type="text"
                                   data-jdp
                                   placeholder="انتخاب تاریخ انجام تسک"
                                   autocomplete="off"
                                   required />
                        </div>
{{--                        <div class="dropdown">--}}
{{--                            <button class="btn btn-sm btn-light-primary rotate"--}}
{{--                                    data-kt-menu-trigger="click"--}}
{{--                                    data-kt-menu-placement="bottom-start"--}}
{{--                                    data-kt-menu-offset="30px, 30px">--}}
{{--                                چک‌لیست--}}
{{--                                <span class="svg-icon fs-3 rotate-180 ms-3 me-0">--}}
{{--                                    <i class="ki-outline ki-down fs-6"></i>--}}
{{--                                </span>--}}
{{--                            </button>--}}
{{--                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800--}}
{{--                             menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px"--}}
{{--                                 data-kt-menu="true">--}}

{{--                                <div class="menu-item px-3">--}}
{{--                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">افزودن چک لیست</div>--}}
{{--                                </div>--}}
{{--                                <div class="separator mb-3 opacity-75"></div>--}}
{{--                                <form action="{{ route('dashboard.task.checklist',$task->id ?? 0) }}" method="post" enctype="multipart/form-data"--}}
{{--                                      class="mx-auto mw-100 w-100 fv-plugins-bootstrap5 fv-plugins-framework needs-validation"--}}
{{--                                      novalidate id="kt_docs_formvalidation_text" autocomplete="off">--}}
{{--                                    @csrf--}}

{{--                                    <div class="shadow-sm p-4">--}}

{{--                                        <div class="fv-row mb-10">--}}
{{--                                            <label class="form-label required">چک لیست</label>--}}
{{--                                            <input name="title" value="{{ old('title') }}" class="form-control form-control-lg"--}}
{{--                                                   placeholder="چک لیست" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="menu-item d-flex justify-content-end px-3">--}}
{{--                                        <div class="menu-content  px-3 py-3">--}}
{{--                                            <button class="btn btn-light-primary btn-sm px-4">افزودن<i class="ki-outline ki-plus-square fs-3 px-2"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light-primary rotate"
                                    data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="30px, 30px">
                                اعضا
                                <span class="svg-icon fs-3 rotate-180 ms-3 me-0">
                                    <i class="ki-outline ki-down fs-6"></i>
                                </span>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800
                             menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px p-5"
                                 data-kt-menu="true">

                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">اعضای تسک</div>
                                </div>
                                <div class="separator mb-3 opacity-75"></div>

                                <div class="symbol-group symbol-hover flex-nowrap" id="taskMembers">
                                    {{--                                    @foreach($task->assigners as $assigner)--}}
                                    {{--                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="{{$assigner->Name}}" >--}}
                                    {{--                                            @if($assigner->photo_id)--}}
                                    {{--                                                <img alt="Pic" src="{{ route('home') }}/{{$assigner->photo?->path}}">--}}
                                    {{--                                            @else--}}
                                    {{--                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ mb_substr($assigner->Name, 0, 1) }}</span>--}}
                                    {{--                                            @endif--}}
                                    {{--                                        </div>--}}
                                    {{--                                    @endforeach--}}
                                </div>
                            </div>

                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light-primary rotate"
                                    data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="30px, 30px">
                                فایل ها
                                <span class="svg-icon fs-3 rotate-180 ms-3 me-0">
                                    <i class="ki-outline ki-down fs-6"></i>
                                </span>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800
                             menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px p-5"
                                 data-kt-menu="true">

                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">فایل های مربوط به تسک</div>
                                </div>
                                <div class="separator mb-3 opacity-75"></div>
                                @if(!isset($task))
                                    <p>تسکی وجود ندارد</p>
                                @else
                                    <ul class="list-unstyled mb-0" id="taskFiles">
                                        @foreach($task->photos as $file)
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
                                        {{--                                    <li><a href="#" class="text-primary text-decoration-none">UI-Dashboard.png</a></li>--}}
                                        {{--                                    <li><a href="#" class="text-primary text-decoration-none">requirements.docx</a></li>--}}
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light-primary rotate"
                                    data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="30px, 30px">
                                عملیات
                                <span class="svg-icon fs-3 rotate-180 ms-3 me-0">
                                    <i class="ki-outline ki-down fs-6"></i>
                                </span>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800
                             menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-500px p-5"
                                 data-kt-menu="true">

                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">تغییر وضعیت تسک</div>
                                </div>
                                <div class="separator mb-3 opacity-75"></div>
                                @if(isset($task))
                                    <form method="POST" id="taskStatusForm"
                                          data-url="{{ route('dashboard.task.update.status', $task->id ?? 0) }}"
                                          data-parent-id="{{ $task->parent_id }}"
                                          class="d-flex align-items-center">
                                        @csrf
                                        <label class="form-check-label text-warning me-3">
                                            <input type="radio" name="status" value="0" class="form-check-input"
                                                   @if($task->status == 0) checked @endif>
                                            در حال بررسی
                                        </label>
                                        <label class="form-check-label text-info me-3">
                                            <input type="radio" name="status" value="1" class="form-check-input"
                                                   @if($task->status == 1) checked @endif>
                                            برای انجام
                                        </label>
                                        <label class="form-check-label me-3">
                                            <input type="radio" name="status" value="2" class="form-check-input"
                                                   @if($task->status == 2) checked @endif>
                                            در حال انجام
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="status" value="3" class="form-check-input"
                                                   @if($task->status == 3) checked @endif>
                                            انجام شد
                                        </label>
                                    </form>
                                @endif

                            </div>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-8">
                            <!-- توضیحات -->
                            <div class="mb-4">
                                <h6 class="fw-semibold mb-2">توضیحات</h6>
                                <p id="task-desc" class="text-muted mb-0">

                                </p>
                            </div>
                            <div class="m-4">
                                <div id="taskChecklistContainer" class="mb-3" data-task-id="">
                                    <div class="text-center text-muted py-3">در حال بارگذاری چک‌لیست‌ها...</div>
                                </div>

                                <div id="new-checklist-container" class="mt-3">
                                    {{--                                    <button type="button" id="add-checklist-btn" class="btn btn-sm btn-light-primary">--}}
                                    {{--                                        <i class="ki-outline ki-plus fs-5"></i> افزودن آیتم به چک لیست--}}
                                    {{--                                    </button>--}}

                                    <form action="" method="post" class="mt-2 d-none" id="new-checklist-form">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="title" class="form-control" placeholder="عنوان چک‌لیست جدید..." required>
                                            <button type="submit" class="btn btn-light-primary">افزودن</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- کامنت‌ها -->
                        <div class="col-4">
                            <div id="taskComments" class="hover-scroll-y h-400px">
                                <h6 class="fw-semibold mb-2">کامنت‌ها</h6>

                                <div id="commentsList"></div>
                            </div>
                            <div>
                                <form method="POST" id="commentForm" class="mt-4" data-url="{{ route('dashboard.task.comment.add', $task->id ?? 0) }}">
                                    @csrf
                                    <textarea name="text" class="form-control mb-2" placeholder="افزودن کامنت جدید..." required></textarea>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-light-primary">ارسال</button>
                                    </div>
                                </form>
                            </div>

                            <input type="hidden" id="taskId" value="{{ $task->id ?? 0}}">

                        </div>
                    </div>
                </div>

                {{--                <div class="modal-footer bg-light">--}}
                {{--                    <button type="button" class="btn btn-primary">ذخیره تغییرات</button>--}}
                {{--                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>--}}
                {{--                </div>--}}
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <div class="modal fade" id="kt_modal_dependency" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px" >
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end" id="modalTitle">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-5 ">
                    <!--begin:Form-->
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper" >
                        <form method="POST" action="{{ route('dashboard.task.dependency', $project->id) }}" id="dependencyForm">
                            @csrf
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">افزودن وابستگی</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">
                                    <a href="#" class="fw-bold link-primary" id="modalTitle"></a>
                                </div>
                                <!--end::Description-->
                            </div>
                            <div class="fv-row">
                                <label for="project_id" class="form-label required">تسک وابسته</label>
                                <select class="form-select form-select-solid" data-control="select2" id="project_id"
                                        data-ajax-route="{{ route('dashboard.task.related-tasks', $project->id) }}"
                                        data-placeholder="تسک وابسته را انتخاب کنید" name="project_id" required>
                                    <option></option>
                                    {{--                                    @foreach($tb_tasks as $task_item)--}}
                                    {{--                                        <option value="{{ $task_item->id }}">{{ $task_item->title }}</option>--}}
                                    {{--                                    @endforeach--}}
                                </select>
                            </div>
                            <div class="fv-row">
                                <label for="relation_type" class="form-label required">نوع وابستگی </label>
                                <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="نوع وابستگی را انتخاب کنید" name="relation_type" required>
                                    <option></option>
                                    <option value="FS">Finish to Start (تسک فعلی بعد از اتمام قبلی شروع می‌شود)</option>
                                    <option value="FF">Finish to Finish (تسک فعلی تا اتمام قبلی نمی‌تواند تمام شود)</option>
                                    <option value="SS">Start to Start (شروع هر دو باید هم‌زمان باشد)</option>
                                    <option value="SF">Start to Finish (تسک فعلی تا شروع قبلی نمی‌تواند تمام شود)</option>
                                </select>
                            </div>
                            <div class="fv-row">
                                <label class="form-label">Lag / Lead</label>
                                <input type="number" name="lag" class="form-control form-control-solid" value="{{old('lag')}}"
                                       placeholder="مثلاً +2 یا -1"
                                >
                                <small class="text-muted">
                                    عدد مثبت = لگ (تاخیر)، عدد منفی = لید (شروع زودتر)
                                </small>
                            </div>

                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-sm btn-light me-3">
                                    انصراف
                                </button>

                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-sm btn-light-primary">
                                    <span class="indicator-label">
                                        ثبت وابستگی
                                    </span>
                                </button>
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

    </div>
    </div>

    @push('scripts')

        <script src="{{ asset('assets/panel/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
        <script>
            jalaliDatepicker.startWatch({
                showTodayBtn: true,
                showEmptyBtn: true,
                time: true,
                topSpace: 10,
                bottomSpace: 30,
                dayRendering(opt, input) {
                    return {
                        isHollyDay: opt.day == 1,
                    };
                },
            });

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

            // Define form element
            const form = document.getElementById('kt_docs_formvalidation_text');

            var validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'text_input': {
                            validators: {
                                notEmpty: {
                                    message: 'Text input is required'
                                }
                            }
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Submit button handler
            const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
            submitButton.addEventListener('click', function (e) {
                // Prevent default button action
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click
                            submitButton.disabled = true;

                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function () {
                                // Remove loading indication
                                submitButton.removeAttribute('data-kt-indicator');

                                // Enable button
                                submitButton.disabled = false;

                                // Show popup confirmation
                                Swal.fire({
                                    text: "Form has been successfully submitted!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });

                                //form.submit(); // Submit form
                            }, 2000);
                        }
                    });
                }
            });

            function addImage() {
                $('.images').append(`
                <div class="col-md-4 d-flex image">
                    <input class='form-control' type="file" name="photos[]" accept="image/*">
                    <button type="button" class="btn btn-link text-danger" title='حذف '
                        onclick='removeImage(this)'>
                        <i class="bx bxs-trash"></i>
                    </button>
                </div>
            `);
            }

            function removeImage(el) {
                $(el).closest('.image').remove();
            }
        </script>
        <script>
            FilePond.create(document.querySelector('#featureImage'), {
                ...options,
                name: 'photo',
                server: {
                    process: (fieldName, file, metadata, load, error, progress, abort) => {
                        const fileURL = URL.createObjectURL(file);
                        fetch(fileURL).then(res => res.blob()).then(myBlob => {
                            load(myBlob);
                            showCropModal('featureImage', fileURL, 27 / 40);
                        })
                    }
                }
            });

            FilePond.create(document.querySelector('#innerImage'), {
                ...options,
                name: 'large_photo',
                server: {
                    process: (fieldName, file, metadata, load, error, progress, abort) => {
                        const fileURL = URL.createObjectURL(file);
                        fetch(fileURL).then(res => res.blob()).then(myBlob => {
                            load(myBlob);
                            showCropModal('innerImage', fileURL, 16 / 11);
                        })
                    }
                }
            });

            FilePond.create(document.querySelector('#gallery'), {
                ...options,
                storeAsFile: true,
                allowImagePreview: false
            });
        </script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('select[name="manager_id"]').closest('.fv-row').hide();

                $('#flexCheckDefault').on('change', function() {
                    if ($(this).is(':checked')) {
                        $('select[name="manager_id"]').closest('.fv-row').show();
                    } else {
                        $('select[name="manager_id"]').closest('.fv-row').hide();
                    }
                });
            });
            $(document).ready(function() {
                $('select[name="sub_manager_id"]').closest('.fv-row').hide();

                $('#sub_flexCheckDefault').on('change', function() {
                    if ($(this).is(':checked')) {
                        $('select[name="sub_manager_id"]').closest('.fv-row').show();
                    } else {
                        $('select[name="sub_manager_id"]').closest('.fv-row').hide();
                    }
                });
            });


            function openEditModal(url, currentData) {
                let data = JSON.parse(currentData);

                $('#modalTitle').text(`ایجاد زیر تسک برای "${data.title}"`);

                $('#editForm #title').val(data.title);

                $('#editForm').attr('action', url);

                var modal = new bootstrap.Modal(document.getElementById('kt_modal_new_target_sub'));
                modal.show();
            }






            // task show modal
            function openShowModal(showUrl, updateUrl) {
                $.ajax({
                    url: showUrl,
                    type: 'GET',
                    success: function (data) {
                        console.log(data.title)
                        // task data from json controller
                        $('#modalTitle').show().text(`  ${data.title}`);
                        $('#taskCode').show().text(`  ${data.code}`);

                        if (data.manager) {
                            $('#taskManager').show().text(`مدیر تایید کننده: ${data.manager}`);
                            $('#taskManagerCheck').show().text(`آیا تسک توسط مدیر تایید شود؟ ${data.managerCheck}`);
                            $('#managerCheckVerify').show().text(` تایید شده توسط مدیر : ${data.managerCheckVerify}`);
                        } else {
                            $('#taskManager').hide();
                            $('#taskManagerCheck').hide();
                            $('#managerCheckVerify').hide();
                        }
                        $('#watcher').text(` ناظر تسک : ${data.watcher}`);

                        $('#taskStatus').html(`وضعیت: ${data.status}`);
                        $('#TaskPrority').html(`اولویت: ${data.priority}`);
                        $('#task-deadline').text(`مهلت: ${data.deadline}`);
                        $('#task-desc').text(data.description ?? '-');

                        // اعضا
                        let membersHTML = '';
                        data.assigners.forEach(a => {
                            if (a.photo) {
                                membersHTML += `
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="${a.name}">
                            <img src="${window.location.origin}/${a.photo}" alt="${a.name}">
                        </div>`;
                            } else {
                                membersHTML += `
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="${a.name}">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold" title="${a.name}">
                            ${a.name.charAt(0)}
                             </span>
                        </div>`;
                            }
                        });
                        $('#taskMembers').html(membersHTML);

                        // فایل‌ها
                        let filesHTML = '';
                        data.files.forEach(f => {
                            // نوع فایل رو تشخیص می‌دیم برای انتخاب آیکون مناسب
                            const ext = f.path.split('.').pop().toLowerCase();
                            let icon = 'ai.svg';
                            if (ext === 'pdf') icon = 'pdf.svg';
                            else if (ext === 'doc' || ext === 'docx') icon = 'doc.svg';
                            else if (ext === 'css') icon = 'css.svg';

                            filesHTML += `
                            <div class="d-flex align-items-center mb-5">
                                <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="${window.location.origin}/panel/assets/media/svg/files/${icon}" />
                                </div>
                                <div class="fw-semibold">
                                    <a class="fs-6 fw-bold text-gray-900 text-hover-primary">${f.user_name}</a>
                                    <div class="text-gray-500">
                                        ${f.created_at}
                                        <a class="text-active-danger">${f.user_role}</a>
                                    </div>
                                </div>
                                <a href="${window.location.origin}/${f.path}"
                                   download
                                   class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="دانلود فایل">
                                    <i class="ki-outline ki-cloud-download fs-3"></i>
                                </a>
                            </div>
                        `;
                        });

                        $('#taskFiles').html(filesHTML);



                        // comment store
                        let commentsHTML = '';

                        data.comments.forEach(c => {
                            // مسیر عکس — اگر کاربر عکس نداشت، عکس پیش‌فرض
                            const userPhoto = c.photo
                                ? `${window.location.origin}/${c.photo}`
                                : `${window.location.origin}/panel/assets/media/svg/avatars/blank.svg`;

                            commentsHTML += `
                            <div class="d-flex align-items-center mb-4">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="${userPhoto}">
                                </div>
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-1">${c.name ?? 'بدون نام'}</a>
                                    <div class="fw-semibold text-muted">${c.text ?? ''}</div>
                                    <div class="text-gray-500 small mt-1">${c.created_at ?? ''}</div>
                                </div>
                            </div>
                        `;
                        });

                        // show
                        $('#taskComments').html(`
                        <h6 class="fw-semibold mb-2">کامنت‌ها</h6>
                        ${commentsHTML}
                    `);

                        // comments store

                        $.ajaxSetup({
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                        });

                        $(document).on('submit', '#commentForm', function(e) {
                            e.preventDefault();
                            const form = $(this);

                            $.ajax({
                                url: form.data('url'),
                                type: 'POST',
                                data: form.serialize(),
                                success: function(res) {
                                    if (res.status) {
                                        const c = res.comment;
                                        const userPhoto = c.photo ? `${window.location.origin}/${c.photo}` :
                                            `${window.location.origin}/panel/assets/media/avatars/blank.png`;

                                        // اضافه کردن کامنت جدید به ابتدای لیست
                                        $('#commentsList').prepend(`
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="${userPhoto}">
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-1">${c.name}</a>
                                                    <div class="fw-semibold text-muted">${c.text}</div>
                                                    <div class="text-gray-500 small mt-1">${c.created_at}</div>
                                                </div>
                                            </div>
                                        `);

                                        // پاک کردن textarea بعد از ارسال
                                        form.trigger('reset');
                                    }
                                },
                                error: function(xhr) {
                                    alert('خطا در ارسال کامنت. لطفاً دوباره تلاش کنید.');
                                }
                            });
                        });

                        $('#taskStatusForm').attr('data-url', updateUrl);

                        $(document).off('change', '#taskStatusForm input[name="status"]').on('change', '#taskStatusForm input[name="status"]', function() {
                            const form = $('#taskStatusForm');
                            const url = form.data('url');
                            $.ajax({
                                type: 'PUT',
                                url: url,
                                data: form.serialize(),
                                success: function(res) {
                                    if (res.success) {
                                        $.jGrowl(res.flash_message, {
                                            life: 4000,
                                            position: 'bottom-left',
                                            theme: 'bg-success'
                                        });
                                    }
                                },
                                error: function() {
                                    toastr.error('خطا در بروزرسانی وضعیت');
                                }
                            });
                        });

                        const modal = new bootstrap.Modal(document.getElementById('kt_modal_task_show'));
                        modal.show();

                        loadTaskChecklists(data.id);
                    },
                    error: function () {
                        toastr.error('دریافت اطلاعات تسک با خطا مواجه شد');
                    }
                });
            }
            // checklist fetch


        </script>
        <script>
            "use strict";

            var KTDocsDatatableSubtable = (function () {

                let table;
                let datatable;
                let templateNode = null;

                const initDatatable = () => {
                    table = document.querySelector('#kt_docs_datatable_subtable');
                    if (!table) return;

                    const templateEl = document.querySelector('[data-kt-docs-datatable-subtable="subtable_template"]');
                    if (!templateEl) return;

                    templateNode = templateEl.cloneNode(true);
                    templateNode.classList.add('d-none');

                    // مهم: فقط مخفی کن، حذف نکن
                    templateEl.classList.add('d-none');

                    // ❗ فقط یکبار init — اگر قبلاً ساخته شده، دوباره نساز
                    if ($.fn.DataTable.isDataTable(table)) {
                        datatable = $(table).DataTable();
                    } else {
                        datatable = $(table).DataTable({
                            info: false,
                            ordering: false,
                            paging: false,
                            searching: false,
                            lengthChange: false,
                            columnDefs: [
                                { orderable: false, targets: [0, 6] }
                            ]
                        });
                    }

                    datatable.on('draw', function () {
                        resetSubtable();
                        bindButtons();
                    });
                };

                const bindButtons = () => {
                    const buttons = document.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

                    buttons.forEach(btn => {

                        // جلوگیری از دوبار bind شدن
                        if (btn._subHandler) {
                            btn.removeEventListener('click', btn._subHandler);
                        }

                        btn._subHandler = function (e) {
                            e.preventDefault();

                            const row = btn.closest('tr');

                            if (row.classList.contains('isOpen')) {
                                closeSubtasks(row, btn);
                                return;
                            }

                            openSubtasks(row, btn);
                        };

                        btn.addEventListener('click', btn._subHandler);
                    });
                };

                const closeSubtasks = (row, btn) => {
                    while (
                        row.nextSibling &&
                        row.nextSibling.dataset.ktDocsDatatableSubtable === "subtable_template"
                        ) {
                        row.nextSibling.remove();
                    }

                    row.classList.remove('isOpen');
                    btn.classList.remove('active');
                };

                const openSubtasks = (row, btn) => {

                    const body = table.querySelector('tbody');

                    let subtasks = [];
                    try {
                        subtasks = JSON.parse(row.dataset.subtasks || '[]');
                    } catch (e) {
                        subtasks = [];
                    }

                    if (subtasks.length === 0) {
                        const noRow = templateNode.cloneNode(true);
                        noRow.classList.remove('d-none');
                        noRow.querySelector('[data-kt-docs-datatable-subtable="template_title"]').innerText =
                            'زیرتسکی وجود ندارد';

                        body.insertBefore(noRow, row.nextSibling);
                    } else {
                        subtasks.forEach((task, i) => {
                            const newRow = templateNode.cloneNode(true);
                            newRow.classList.remove('d-none');
                            newRow.dataset.ktDocsDatatableSubtable = "subtable_template";

                            fillSubtask(newRow, task, i);

                            body.insertBefore(newRow, row.nextSibling);
                        });
                    }

                    row.classList.add('isOpen');
                    btn.classList.add('active');
                };

                const fillSubtask = (node, d, i) => {

                    const safe = v => (v == null ? '-' : v);

                    node.querySelector('[data-kt-docs-datatable-subtable="template_index"]').innerText = i + 1;
                    node.querySelector('[data-kt-docs-datatable-subtable="template_id"]').innerText = safe(d.task_code);
                    node.querySelector('[data-kt-docs-datatable-subtable="template_title"]').innerText = safe(d.title);
                    node.querySelector('[data-kt-docs-datatable-subtable="template_start_date"]').innerText = safe(d.start_date);
                    node.querySelector('[data-kt-docs-datatable-subtable="template_end_date"]').innerText = safe(d.end_date);
                    node.querySelector('[data-kt-docs-datatable-subtable="template_priority"]').innerHTML = safe(d.TaskPrority);
                    node.querySelector('[data-kt-docs-datatable-subtable="template_status"]').innerHTML = safe(d.TaskStatus);

                    // اعضا
                    const membersNode = node.querySelector('[data-kt-docs-datatable-subtable="template_members"]');
                    membersNode.innerHTML = '';

                    if (Array.isArray(d.assigners) && d.assigners.length) {
                        const wrap = document.createElement('div');
                        wrap.className = "symbol-group symbol-hover fs-8";

                        d.assigners.forEach(a => {
                            const block = document.createElement('div');
                            block.className = "symbol symbol-25px symbol-circle";
                            block.setAttribute("data-bs-toggle", "tooltip");
                            block.setAttribute("title", a.Name ?? a.name ?? "-");

                            if (a.photo && a.photo.path) {
                                const img = document.createElement('img');
                                img.src = "{{ route('home') }}/" + a.photo.path;
                                img.alt = "Pic";
                                block.appendChild(img);
                            } else {
                                const span = document.createElement('span');
                                span.className = "symbol-label bg-primary text-inverse-primary fw-bold";
                                span.innerText = (a.Name ?? a.name ?? '?').substring(0, 1);
                                block.appendChild(span);
                            }

                            wrap.appendChild(block);
                        });

                        membersNode.appendChild(wrap);
                    } else {
                        membersNode.innerHTML = '<span class="text-muted fs-8">بدون عضو</span>';
                    }

                    // دکمه‌ها
                    const actionsNode = node.querySelector('[data-kt-docs-datatable-subtable="template_actions"]');
                    if (actionsNode) {
                        const showRouteT = document.getElementById('datatable-template').dataset.showRoute;
                        const updateRouteT = document.getElementById('datatable-template').dataset.updateStatusRoute;

                        const showRoute = showRouteT.replace(':id', d.id);
                        const updateRoute = updateRouteT.replace(':id', d.id);

                        let canShow = @json(auth()->user()->canany(['manager_taskShow','member_taskShow','assign_taskShow']));
                        let canDep  = @json(auth()->user()->can('manager_taskDependency'));

                        let html = "";

                        if (canShow) {
                            html += `<a href="#" onclick="openShowModal('${showRoute}', '${updateRoute}')" class="btn btn-sm btn-light-info">
                            <i class="ki-outline ki-eye fs-6 px-2"></i>
                         </a>`;
                        }

                        if (canDep) {
                            const dep = '{{ route("dashboard.task.dependency", ":id") }}'.replace(':id', d.id);
                            html += `<a href="#" class="btn btn-light-warning btn-sm"
                            onclick="openDependencyModal('${dep}', JSON.stringify({id:'${d.id}', title:'${d.title}'}))">
                            تعریف وابستگی <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                         </a>`;
                        }

                        actionsNode.innerHTML = html;
                    }
                };

                const resetSubtable = () => {
                    table.querySelectorAll('[data-kt-docs-datatable-subtable="subtable_template"]')
                        .forEach(el => el.remove());

                    table.querySelectorAll('tbody tr').forEach(r => {
                        r.classList.remove('isOpen');
                        const toggle = r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]');
                        if (toggle) toggle.classList.remove('active');
                    });
                };

                return {
                    init: () => {
                        initDatatable();
                        bindButtons();
                    }
                };

            })();

            KTUtil.onDOMContentLoaded(() => {
                KTDocsDatatableSubtable.init();
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const menu = document.querySelector('#dateDropdownMenu');
                menu.addEventListener('shown.bs.dropdown', function () {
                    setTimeout(() => {
                        jalaliDatepicker.show(document.getElementById('start_date'));
                    }, 100);
                });
            });
        </script>

        {{--          checklist CURD--}}
        <script>
            // ✅ گرفتن چک‌لیست‌ها و ساخت HTML
            function loadTaskChecklists(taskId) {
                window.currentTaskId = taskId; // آیدی تسک رو نگه داریم
                const container = $('#taskChecklistContainer');
                container.html('<div class="text-center text-muted py-3">در حال بارگذاری...</div>');

                let url = "{{ route('dashboard.task.checklists', ':id') }}".replace(':id', taskId);

                $.ajax({
                    url,
                    type: 'GET',
                    success: function (checklists) {
                        let html = '';

                        if (!checklists.length) {
                            html = '<div class="text-muted mb-3">هیچ آیتمی وجود ندارد.</div>';
                        } else {
                            checklists.forEach(c => {
                                html += `
                            <form class="checklist-form mb-2 p-2 border rounded" data-id="${c.id}">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input checklist-checkbox me-2" type="checkbox" ${c.check == 1 ? 'checked' : ''}>
                                    <input type="text" class="form-control-plaintext checklist-title flex-grow-1 ${c.check == 1 ? 'text-decoration-line-through text-muted' : ''}" value="${c.title}" readonly>
                                    <button type="button" class="btn btn-sm btn-light-danger delete-checklist" data-id="${c.id}">
                                        <i class="ki-outline ki-trash fs-6"></i>
                                    </button>
                                </div>
                            </form>`;
                            });
                        }

                        // ✅ دکمه افزودن فقط یکی ساخته میشه
                        html += `
                    <div class="mt-3">
                        <button type="button" id="add-checklist-btn" class="btn btn-sm btn-light-primary w-100">
                            <i class="ki-outline ki-plus fs-5"></i> افزودن آیتم
                        </button>
                        <form class="mt-2 d-none add-checklist-form" data-task-id="${taskId}">
                            <div class="input-group">
                                <input type="text" class="form-control new-checklist-title" placeholder="عنوان چک‌لیست جدید..." required>
                                <button type="submit" class="btn btn-light-primary">افزودن</button>
                            </div>
                        </form>
                    </div>
                `;

                        container.html(html);
                    },
                    error: function () {
                        container.html('<div class="text-danger">خطا در بارگذاری چک‌لیست‌ها.</div>');
                    }
                });
            }

            // 🟢 نمایش فرم افزودن فقط یک بار
            $(document).on('click', '#add-checklist-btn', function () {
                $(this).addClass('d-none');
                $('.add-checklist-form').removeClass('d-none').find('.new-checklist-title').focus();
            });

            // ➕ افزودن آیتم جدید
            $(document).on('submit', '.add-checklist-form', function (e) {
                e.preventDefault();
                const form = $(this);
                const title = form.find('.new-checklist-title').val().trim();
                const taskId = window.currentTaskId;

                if (!title) return;

                const url = "{{ route('dashboard.task.add.checklist', ':id') }}".replace(':id', taskId);

                $.ajax({
                    url,
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        title
                    },
                    success: function () {
                        form.find('.new-checklist-title').val('');
                        loadTaskChecklists(taskId); // فقط لیست رو رفرش کن، نه صفحه
                    },
                    error: function () {
                        alert('خطا در افزودن چک‌لیست');
                    }
                });
            });

            // 🗑 حذف آیتم
            $(document).on('click', '.delete-checklist', function () {
                const id = $(this).data('id');
                const taskId = window.currentTaskId;

                const url = "{{ route('dashboard.task.checklist.delete', ':id') }}".replace(':id', id);

                $.ajax({
                    url,
                    type: 'DELETE',
                    data: {_token: "{{ csrf_token() }}"},
                    success: function () {
                        loadTaskChecklists(taskId);
                    },
                    error: function () {
                        alert('خطا در حذف آیتم');
                    }
                });
            });

            // ☑ تغییر وضعیت تیک
            $(document).on('change', '.checklist-checkbox', function () {
                const id = $(this).closest('.checklist-form').data('id');
                const checked = $(this).is(':checked');
                const title = $(this).closest('.form-check').find('.checklist-title');

                const url = "{{ route('dashboard.task.checklist.check', ':id') }}".replace(':id', id);

                $.ajax({
                    url,
                    type: 'POST',
                    data: {_token: "{{ csrf_token() }}"},
                    success: function () {
                        if (checked)
                            title.addClass('text-decoration-line-through text-muted');
                        else
                            title.removeClass('text-decoration-line-through text-muted');
                    }
                });
            });

            // ✏️ ویرایش عنوان
            $(document).on('dblclick', '.checklist-title', function () {
                const input = $(this);
                input.removeAttr('readonly').focus().addClass('border-bottom border-primary');
            });

            $(document).on('blur', '.checklist-title', function () {
                const input = $(this);
                const form = input.closest('.checklist-form');
                const id = form.data('id');
                const newTitle = input.val().trim();

                input.attr('readonly', true).removeClass('border-bottom border-primary');

                const url = "{{ route('dashboard.task.checklist.update', ':id') }}".replace(':id', id);

                $.ajax({
                    url,
                    type: 'PUT',
                    data: {_token: "{{ csrf_token() }}", title: newTitle},
                    success: function () {
                        console.log('ویرایش موفق');
                    }
                });
            });
        </script>
        <script>

            function openDependencyModal(url, currentData) {
                let data = JSON.parse(currentData);

                $('#modalTitle').text(`ایجاد وابستگی برای "${data.title}"`);
                $('#dependencyForm #title').val(data.title);
                $('#dependencyForm').attr('action', url);

                loadPredecessorTasks(data.id);

                var modal = new bootstrap.Modal(document.getElementById('kt_modal_dependency'));
                modal.show();
            }

            function loadPredecessorTasks(projectId) {
                const $select = $('#project_id');
                const ajaxRoute = $select.data('ajax-route');

                $select.select2({
                    placeholder: 'تسک وابسته را انتخاب کنید',
                    allowClear: true,
                    ajax: {
                        url: ajaxRoute,
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data) {
                            return { results: data.related ?? [] };
                        },
                        cache: true
                    }
                });
            }



            // ایجاد وابستگی
            $(document).on('submit', '#dependencyForm', function (e) {
                e.preventDefault();

                let form = $(this);
                let url = form.attr('action');
                let formData = form.serialize();

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    success: function (res) {
                        console.log(res)
                        $('#kt_modal_dependency').modal('hide');
                        if (res.success) {
                            $.jGrowl(res.flash_message, {
                                life: 4000,
                                position: 'bottom-left',
                                theme: 'bg-success'
                            });
                        } else {
                            $.jGrowl(res.err_message, {
                                life: 4000,
                                position: 'bottom-left',
                                theme: 'bg-danger'
                            });
                        }
                    },
                    error: function (xhr) {
                        $('#kt_modal_dependency').modal('hide');
                        $.jGrowl(xhr.responseJSON.err_message, {
                            life: 4000,
                            position: 'bottom-left',
                            theme: 'bg-danger'
                        });
                    }
                });
            });

        </script>
    @endpush
</x-layout>
