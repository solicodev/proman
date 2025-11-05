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
            <span class="fs-6 text-gray-500 fw-semibold ms-1">آپدیت بر اساس ↓</span>
        </h3>
        <!--end::Heading-->
        <div class="d-flex flex-wrap my-1">
            <a href="#" class="btn btn-sm btn-primary er w-100 fs-6 px-8 py-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">ایجاد تسک<i class="ki-outline ki-plus-square fs-6 px-2"></i> </a>
        </div>
        <!--begin::Controls-->
        <div class="d-flex flex-wrap my-1">
            <!--begin::Tab nav-->
            <ul class="nav nav-pills me-5">
                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active me-3" data-bs-toggle="tab" href="#kt_project_targets_card_pane">
                        <i class="ki-outline ki-element-plus fs-1"></i>
                    </a>
                </li>

                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_targets_table_pane">
                        <i class="ki-outline ki-row-horizontal fs-2"></i>
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->

            <!--begin::Wrapper-->
            <div class="my-0">
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-150px">
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
        <div id="kt_project_targets_card_pane" class="tab-pane fade show active">
            <!--begin::Row-->
            <div class="row g-9">
                <div class="row">
                    @if(count($tasks)>0)
                        @foreach($columns as $key => $column)
                            <div class="col-md-3 col-lg-12 col-xl-3">
                                <!--begin::Col header-->
                                <div class="mb-9">
                                    <div class="d-flex flex-stack">
                                        <div class="fw-bold fs-4">
                                            {{ $column['title'] }}
                                            <span class="fs-6 text-gray-500 ms-2">{{ count($tasks[$key] ?? []) }}</span>
                                        </div>

                                        <!-- منوی فیلتر -->
                                        <div>
                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-outline ki-element-plus fs-2"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="h-3px w-100 bg-{{ $column['color'] }}"></div>
                                </div>
                                <!--end::Col header-->

                                <!--begin::Tasks Loop-->

                                @forelse($tasks[$key] ?? [] as $task)
                                    <div class="card mb-6 mb-xl-9">
                                        <div class="card-body">
                                            <div class="d-flex flex-stack mb-3">
                                                <div>{!! $task->task_status !!}</div>
                                                <div>
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-2"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">
                                                    {{ $task->title }}
                                                </a>
                                            </div>

                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                {{ $task->description }}
                                            </div>

                                            <!-- SUBTASK SHOW -->
                                            @if($task->children && $task->children->count() > 0)
                                                <div class="ms-5 mt-4 border-start ps-3">
                                                    @foreach($task->children as $subtask)
                                                        <div class="card mb-3 shadow-sm border-bottom rounded-3">
                                                            <div class="card-body py-3 px-4">
                                                                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fw-bold text-gray-800">{{ $subtask->title }}</span>
                                                                        <span class="text-gray-600 small mt-1">{{ $subtask->description }}</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center gap-2">
                                                                        {!! $subtask->TaskStatus !!}
                                                                        {!! $subtask->TaskPrority !!}

                                                                    </div>
                                                                </div>

                                                                {{-- اعضا --}}
                                                                @if($subtask->assigners && $subtask->assigners->count() > 0)
                                                                    <div class="mt-3 d-flex flex-wrap align-items-center gap-1">
                                                                        @foreach($subtask->assigners as $assigner)
                                                                            <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="{{ $assigner->Name }}">
                                                                                @if($assigner->photo_id)
                                                                                    <img src="{{ route('home') }}/{{ $assigner->photo?->path }}" alt="Pic" class="object-fit-cover" />
                                                                                @else
                                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">
                                                                                        {{ mb_substr($assigner->Name, 0, 1) }}
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                                <div class="d-flex justify-content-end">
                                                                <a href="#" onclick="openShowModal('{{ route('dashboard.task.show', $subtask->id) }}')"
                                                                   class="btn btn-sm btn-light-info p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده"><i class="ki-outline ki-eye fs-6 px-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                            <!-- پایان زیرتسک‌ها -->

                                        </div>

                                        <!-- دکمه زیر تسک -->
                                        <div class="card-footer text-center py-3">
                                            <a href="#" class="btn btn-light-primary btn-sm"
                                               onclick="openEditModal('{{ route('dashboard.task.subtasks.store', $task->id) }}',
               JSON.stringify({title:'{{ $task->title }}'}))">
                                                ساخت زیر تسک جدید
                                                <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                                            </a>
                                            <a href="#" onclick="openShowModal('{{ route('dashboard.task.show', $task->id) }}')"
                                               class="btn btn-sm btn-light-info" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده"><i class="ki-outline ki-eye fs-6 px-2"></i></a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-dismissible bg-secondary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                        <div class="d-flex flex-column">
                                            <span>تسکی در این وضعیت وجود ندارد!</span>
                                        </div>
                                    </div>
                                @endforelse
                                <!--end::Tasks Loop-->
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Tab pane-->

        <!--begin::Tab pane-->
        <div id="kt_project_targets_table_pane" class="tab-pane fade">
            <div class="card  card-flush ">
                <div class="card-body pt-3">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
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
                        </tr>
                        <!--end::SubTable template-->

                        @foreach($tb_tasks as $key => $tb_task)

                            <tr data-subtasks='@json($tb_task->children)'>
                                <td class="text-start">{{$loop->iteration}}</td>
                                <td class="text-start">{{$tb_task->task_code}}</td>
                                <td class="text-start">{{$tb_task->title}}</td>
                                <td class="text-start">{{$tb_task->start_date}}</td>
                                <td class="text-start">{{$tb_task->end_date}}</td>
                                <td class="text-start">{{$tb_task->TaskPrority}}</td>
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
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                            data-kt-docs-datatable-subtable="expand_row">
                                        <span class="svg-icon fs-3 m-0 toggle-off">+</span>
                                        <span class="svg-icon fs-3 m-0 toggle-on"><i class="ki-outline ki-cross text-danger"></i></span>
                                    </button>
                                </td>
                                <!--end::Actions-->
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

                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ شروع</label>
                                <div class="position-relative d-flex align-items-center">
                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                    <input name="start_date"
                                           class="result form-control form-control-solid ps-12"
                                           type="text"
                                           data-jdp
                                           data-jdp-only-date
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
                            <div class="col-md-4 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">نیاز به تایید مسئول تایید کننده دارد</label>
                                <input class="form-check-input" name="manager_check" type="checkbox" value="1" id="flexCheckDefault"/>
                            </div>
                            <!--begin::Col-->
                            <div class="col-md-8 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2"
                                        data-placeholder="مدیر تایید کننده تسک" name="manager_id">
                                    <option></option>
                                    @foreach($managers as $manager)
                                        <option value="{{$manager->id}}">{{$manager->Name}} - {{role_name($manager->roles()->first()->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2"
                                        data-placeholder="ناظر تسک" name="watcher_id">
                                    <option></option>
                                    @foreach($watchers as $watcher)
                                        <option value="{{$watcher->id}}">{{ $watcher->Name }} </option>
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
                                        <option value="{{$member->id}}">{{$member->Name}} </option>
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
                            <label for="gallery" class="form-label required">فایل های مربوط به تسک </label>
                            <input type="file" class="form-control mb-2 mb-md-0" id="gallery"
                                   name="photos[]" placeholder="تصویر" required multiple>
                            <div class="invalid-feedback">تصویر الزامی است</div>
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
                                <h1 class="mb-3">افزودن زیرتسک</h1>
                                <!--end::Title-->
                                <input type="hidden" value="{{$project->id}}" name="project_id">
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">
                                    برای پروژه
                                    <a href="#" class="fw-bold link-primary">{{$project->name}} - {{$project->project_code}}</a>.
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
                                            <option value="{{$manager->id}}">{{$manager->Name}} - {{role_name($manager->roles()->first()->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                    <select class="form-select form-select-solid"  data-control="select2"
                                            data-placeholder="ناظر تسک" name="watcher_id">
                                        <option></option>
                                        @foreach($watchers as $watcher)
                                            <option value="{{$watcher->id}}">{{ $watcher->Name }} </option>
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
                                            <option value="{{$member->id}}">{{$member->Name}} </option>
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
                                       name="photos[]" placeholder="تصویر" required multiple>
                                <div class="invalid-feedback">تصویر الزامی است</div>
                            </div>

                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                    انصراف
                                </button>

                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                ثبت تسک
                            </span>
                                    <span class="indicator-progress">
                                کمی صبر کنید ...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="modalTitle">
                        <i class="bi bi-card-checklist me-2 text-primary"></i>

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                </div>

                <div class="modal-body">
                    <div class="d-flex  mb-3">
                         <span id="taskStatus"></span>
                         <span id="TaskPrority"></span>
                        <small class="text-muted">مهلت: ۱۴۰۴/۰۸/۲۰</small>
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
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light-primary rotate"
                                    data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="30px, 30px">
                                چک‌لیست
                                <span class="svg-icon fs-3 rotate-180 ms-3 me-0">
                                    <i class="ki-outline ki-down fs-6"></i>
                                </span>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800
                             menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px"
                                 data-kt-menu="true">

                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">افزودن چک لیست</div>
                                </div>
                                <div class="separator mb-3 opacity-75"></div>
                                <form action="{{ route('dashboard.task.checklist',$task->id) }}" method="post" enctype="multipart/form-data"
                                      class="mx-auto mw-100 w-100 fv-plugins-bootstrap5 fv-plugins-framework needs-validation"
                                      novalidate id="kt_docs_formvalidation_text" autocomplete="off">
                                    @csrf

                                    <div class="shadow-sm p-4">

                                        <div class="fv-row mb-10">
                                            <label class="form-label required">چک لیست</label>
                                            <input name="title" value="{{ old('title') }}" class="form-control form-control-lg"
                                                   placeholder="چک لیست" required>
                                        </div>
                                    </div>

                                    <div class="menu-item d-flex justify-content-end px-3">
                                        <div class="menu-content  px-3 py-3">
                                            <button class="btn btn-light-primary btn-sm px-4">افزودن<i class="ki-outline ki-plus-square fs-3 px-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

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

                                <div class="symbol-group symbol-hover flex-nowrap">
                                    @foreach($task->assigners as $assigner)
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="{{$assigner->Name}}" >
                                            @if($assigner->photo_id)
                                                <img alt="Pic" src="{{ route('home') }}/{{$assigner->photo?->path}}">
                                            @else
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ mb_substr($assigner->Name, 0, 1) }}</span>
                                            @endif
                                        </div>
                                    @endforeach
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

                                <ul class="list-unstyled mb-0">
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
                            </div>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-8">


                            <!-- توضیحات -->
                            <div class="mb-4">
                                <h6 class="fw-semibold mb-2">توضیحات</h6>
                                <p class="text-muted mb-0">
                                    {{$task->description ?? '' }}
                                </p>
                            </div>



                            <div class="m-4">
                                @foreach($task->taskCheckList as $key => $taskChecklist)
                                    <form action="{{ route('dashboard.task.checklist.check', $taskChecklist->id) }}"
                                          method="post"
                                          class="checklist-form mb-2 p-2"
                                          data-id="{{ $taskChecklist->id }}"
                                          data-update-url="{{ route('dashboard.task.checklist.update', $taskChecklist->id) }}">
                                        @csrf

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input checklist-checkbox me-2"
                                                   type="checkbox"
                                                   name="check"
                                                   value="1"

                                                   id="checklist_{{ $taskChecklist->id }}"
                                                   @if($taskChecklist->check == 1) checked @endif />

                                            <label class="form-check-label flex-grow-1 {{ $taskChecklist->check ? 'text-decoration-line-through text-muted' : '' }}"
                                                   for="checklist_{{ $taskChecklist->id }}">
                                                {{ $taskChecklist->title }}
                                            </label>

                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-icon-danger btn-active-light-danger delete-checklist"
                                                    data-url="{{ route('dashboard.task.checklist.delete', $taskChecklist->id) }}"
                                                    title="حذف آیتم">
                                                <i class="ki-outline ki-trash fs-6"></i>
                                            </button>
                                        </div>
                                    </form>
                                @endforeach

                                <div id="new-checklist-container" class="mt-3">
                                    <button type="button" id="add-checklist-btn" class="btn btn-sm btn-light-primary">
                                        <i class="ki-outline ki-plus fs-5"></i> افزودن آیتم به چک لیست
                                    </button>

                                    <form action="{{ route('dashboard.task.add.checklist',$task->id) }}"
                                          method="post"
                                          class="mt-2 d-none"
                                          id="new-checklist-form">
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
                            <div class="mb-3">
                                <h6 class="fw-semibold mb-2">کامنت‌ها</h6>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-6.jpg')}}">
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مریم</a>
                                        <div class="fw-semibold text-muted">لطفاً رنگ دکمه‌ها رو طبق تم پروژه تغییر بدیم.</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-6.jpg')}}">
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مریم</a>
                                        <div class="fw-semibold text-muted">در نسخه‌ی موبایل هم تست انجام شد و مشکلی نیست.</div>
                                    </div>
                                </div>


                                <!-- افزودن کامنت -->
                                <textarea class="form-control mt-2" placeholder="افزودن کامنت جدید..."></textarea>
                            </div>
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

            function openShowModal(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (data) {
                        console.log(data)
                        $('#modalTitle').text(`مشاهده "${data.title}"`);
                        $('#taskStatus').text(`وضعیت: ${data.status}`);
                        $('#TaskPrority').text(`اولویت: ${data.priority}`);
                        $('.task-deadline').text(`مهلت: ${data.deadline}`);
                        $('.task-desc').text(data.description ?? '-');

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
                        <div class="symbol symbol-35px symbol-circle bg-warning text-white fw-bold" title="${a.name}">
                            ${a.name.charAt(0)}
                        </div>`;
                            }
                        });
                        $('#taskMembers').html(membersHTML);

                        // چک‌لیست
                        let checklistHTML = '';
                        data.checklists.forEach(c => {
                            checklistHTML += `
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input me-2" type="checkbox" ${c.check ? 'checked' : ''} disabled>
                        <label class="form-check-label ${c.check ? 'text-decoration-line-through text-muted' : ''}">
                            ${c.title}
                        </label>
                    </div>`;
                        });
                        $('#taskChecklist').html(checklistHTML);

                        // فایل‌ها
                        let filesHTML = '';
                        data.files.forEach(f => {
                            filesHTML += `
                    <div class="d-flex align-items-center mb-3">
                        <i class="ki-outline ki-file fs-3 text-primary me-3"></i>
                        <div>
                            <div class="fw-bold">${f.user_name}</div>
                            <small class="text-muted">${f.created_at} — ${f.user_role}</small>
                        </div>
                        <a href="${window.location.origin}/${f.path}" download class="btn btn-sm btn-icon btn-light-primary ms-auto">
                            <i class="ki-outline ki-cloud-download fs-4"></i>
                        </a>
                    </div>`;
                        });
                        $('#taskFiles').html(filesHTML);

                        // نمایش مودال
                        const modal = new bootstrap.Modal(document.getElementById('kt_modal_task_show'));
                        modal.show();
                    },
                    error: function () {
                        toastr.error('دریافت اطلاعات تسک با خطا مواجه شد');
                    }
                });
            }
        </script>
        <script>
            "use strict";

            var KTDocsDatatableSubtable = (function () {
                let table;
                let datatable;
                let templateNode = null;

                const initDatatable = () => {
                    table = document.querySelector('#kt_docs_datatable_subtable');
                    if (!table) {
                        console.error('KTDocsDatatableSubtable: جدول پیدا نشد (#kt_docs_datatable_subtable).');
                        return;
                    }

                    const templateEl = document.querySelector('[data-kt-docs-datatable-subtable="subtable_template"]');
                    if (!templateEl) {
                        console.error('KTDocsDatatableSubtable: template با selector [data-kt-docs-datatable-subtable="subtable_template"] پیدا نشد.');
                        return;
                    }

                    templateNode = templateEl.cloneNode(true);
                    templateNode.classList.remove('d-none');

                    templateEl.parentNode.removeChild(templateEl);

                    datatable = $(table).DataTable({
                        info: false,
                        ordering: false,
                        paging: false,
                        lengthChange: false,
                        pageLength: 6,
                        columnDefs: [
                            { orderable: false, targets: [0, 6] }
                        ]
                    });

                    datatable.on('draw', function () {
                        resetSubtable();
                        handleActionButton();
                    });
                };

                const handleActionButton = () => {
                    const buttons = document.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

                    buttons.forEach((button) => {
                        // remove previous handlers to avoid double-binding
                        button.removeEventListener && button.removeEventListener('click', button._kt_subtask_handler);
                        const handler = (e) => {
                            e.preventDefault();
                            e.stopImmediatePropagation();

                            const row = button.closest('tr');
                            const rowClasses = ['isOpen', 'border-bottom-0'];

                            // subtasks باید از data attribute بیاد (Blade: data-subtasks='@json($task->children)')
                            let subtasks = [];
                            try {
                                subtasks = JSON.parse(row.dataset.subtasks || '[]');
                            } catch (err) {
                                console.error('خطا JSON subtasks برای ردیف:', err, row.dataset.subtasks);
                                subtasks = [];
                            }

                            if (row.classList.contains('isOpen')) {
                                while (row.nextSibling && row.nextSibling.getAttribute && row.nextSibling.getAttribute('data-kt-docs-datatable-subtable') === 'subtable_template') {
                                    row.nextSibling.parentNode.removeChild(row.nextSibling);
                                }
                                row.classList.remove(...rowClasses);
                                button.classList.remove('active');
                                return;
                            }

                            if (!templateNode) {
                                console.error('KTDocsDatatableSubtable: templateNode موجود نیست — clone ممکن نیست.');
                                return;
                            }

                            if (subtasks.length > 0) {
                                populateTemplate(subtasks, row);
                            } else {
                                const emptyRow = templateNode.cloneNode(true);
                                emptyRow.querySelector('[data-kt-docs-datatable-subtable="template_title"]').innerText = 'زیرتسکی یافت نشد';
                                const tbody = table.querySelector('tbody');
                                tbody.insertBefore(emptyRow, row.nextSibling);
                            }

                            row.classList.add(...rowClasses);
                            button.classList.add('active');
                        };

                        button.addEventListener('click', handler);
                        button._kt_subtask_handler = handler;
                    });
                };

                const populateTemplate = (data, target) => {

                    const tbody = table.querySelector('tbody');

                    data.forEach((d, index) => {
                        if (!templateNode) {
                            console.error('populateTemplate: templateNode نال است.');
                            return;
                        }

                        const newTemplate = templateNode.cloneNode(true);
                        newTemplate.setAttribute('data-kt-docs-datatable-subtable', 'subtable_template');
                        newTemplate.classList.remove('d-none');

                        const safe = (v) => (v === null || v === undefined ? '-' : v);

                        const idxNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_index"]');
                        if (idxNode) idxNode.innerText = index + 1;

                        const idNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_id"]');
                        if (idNode) idNode.innerText = safe(d.task_code ?? '-');

                        const titleNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_title"]');
                        if (titleNode) titleNode.innerText = safe(d.title);

                        const sdNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_start_date"]');
                        if (sdNode) sdNode.innerText = safe(d.start_date);

                        const edNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_end_date"]');
                        if (edNode) edNode.innerText = safe(d.end_date);

                        const prNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_priority"]');
                        if (prNode) prNode.innerText = safe(d.TaskPrority);

                        const stNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_status"]');
                        if (stNode) stNode.innerHTML = safe(d.TaskStatus);

                        const membersNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_members"]');
                        if (membersNode) {
                            membersNode.innerHTML = ''; // خالی کن قبل از پر کردن

                            if (Array.isArray(d.assigners) && d.assigners.length) {
                                const container = document.createElement('div');
                                container.className = 'symbol-group symbol-hover fs-8';

                                d.assigners.forEach(a => {
                                    const symbol = document.createElement('div');
                                    symbol.className = 'symbol symbol-25px symbol-circle';
                                    symbol.setAttribute('data-bs-toggle', 'tooltip');
                                    symbol.setAttribute('title', a.Name ?? a.name ?? '-');
                                    if (a.photo && a.photo.path) {
                                        const img = document.createElement('img');
                                        img.alt = 'Pic';
                                        img.src = `{{ route('home') }}/${a.photo.path}`;
                                        symbol.appendChild(img);
                                    } else {
                                        const span = document.createElement('span');
                                        span.className = 'symbol-label bg-primary text-inverse-primary fw-bold';
                                        span.innerText = (a.Name ?? a.name ?? '?').substring(0, 1);
                                        symbol.appendChild(span);
                                    }

                                    container.appendChild(symbol);
                                });

                                membersNode.appendChild(container);
                            } else {
                                membersNode.innerHTML = '<span class="text-muted fs-8">بدون عضو</span>';
                            }
                        }


                        const actionsNode = newTemplate.querySelector('[data-kt-docs-datatable-subtable="template_actions"]');
                        if (actionsNode) {
                            actionsNode.innerHTML = `
                <a href="/panel/tasks/${d.id ?? 0}" class="btn btn-sm btn-light-primary">
                    مشاهده
                </a>`;
                        }

                        tbody.insertBefore(newTemplate, target.nextSibling);
                    });
                };


                const resetSubtable = () => {
                    const subtables = document.querySelectorAll('[data-kt-docs-datatable-subtable="subtable_template"]');
                    subtables.forEach((st) => st.parentNode.removeChild(st));

                    const rows = table.querySelectorAll('tbody tr');
                    rows.forEach((r) => {
                        r.classList.remove('isOpen');
                        const toggle = r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]');
                        if (toggle) toggle.classList.remove('active');
                    });
                };

                return {
                    init: function () {
                        initDatatable();
                        handleActionButton();
                    }
                };
            })();

            KTUtil.onDOMContentLoaded(function () {
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
        <script>
                document.addEventListener('DOMContentLoaded', function () {

                    // checked without reload page
                    document.querySelectorAll('.checklist-checkbox').forEach(checkbox => {
                        checkbox.addEventListener('change', function (e) {
                            const form = e.target.closest('form');
                            const url = form.getAttribute('action');
                            const formData = new FormData(form);

                            fetch(url, {
                                method: 'POST',
                                headers: { 'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value },
                                body: formData
                            })
                                .then(res => res.json())
                                .then(data => {
                                    if (data.success) {
                                        const label = form.querySelector('.form-check-label');
                                        if (e.target.checked) {
                                            label.classList.add('text-decoration-line-through', 'text-muted');
                                        } else {
                                            label.classList.remove('text-decoration-line-through', 'text-muted');
                                        }
                                        $.jGrowl(data.flash_message || 'بروزرسانی شد ', {
                                            life: 2500, position: 'bottom-left', theme: 'bg-success'
                                        });
                                    } else {
                                        $.jGrowl('خطا در بروزرسانی ️', {
                                            life: 2500, position: 'bottom-left', theme: 'bg-danger'
                                        });
                                    }
                                });
                        });
                    });

                    // item delete
                    document.querySelectorAll('.delete-checklist').forEach(btn => {
                        btn.addEventListener('click', function () {
                            const url = btn.dataset.url;
                            const form = btn.closest('form');

                            if (!confirm('آیا از حذف این آیتم مطمئن هستید؟')) return;

                            fetch(url, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                }
                            })
                                .then(res => res.json())
                                .then(data => {
                                    if (data.success) {
                                        form.remove();
                                        $.jGrowl('آیتم حذف شد ️', {
                                            life: 2000, position: 'bottom-left', theme: 'bg-success'
                                        });
                                    } else {
                                        $.jGrowl('حذف انجام نشد ', {
                                            life: 3000, position: 'bottom-left', theme: 'bg-danger'
                                        });
                                    }
                                });
                        });
                    });

                    // show add checklist form
                    const addBtn = document.getElementById('add-checklist-btn');
                    const newForm = document.getElementById('new-checklist-form');
                    addBtn.addEventListener('click', function () {
                        newForm.classList.toggle('d-none');
                        if (!newForm.classList.contains('d-none')) {
                            newForm.querySelector('input[name="title"]').focus();
                        }
                    });

                    // add item to checklist
                    newForm.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const url = newForm.getAttribute('action');
                        const formData = new FormData(newForm);

                        fetch(url, {
                            method: 'POST',
                            headers: { 'X-CSRF-TOKEN': newForm.querySelector('input[name="_token"]').value },
                            body: formData
                        })
                            .then(res => res.json())
                            .then(data => {
                                if (data.success && data.item) {
                                    $.jGrowl(data.flash_message || 'آیتم اضافه شد ', {
                                        life: 2500, position: 'bottom-left', theme: 'bg-success'
                                    });

                                    // ساخت آیتم جدید
                                    const newItem = document.createElement('form');
                                    newItem.className = 'checklist-form mb-2';
                                    newItem.setAttribute('action', data.item.check_route);
                                    newItem.innerHTML = `
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input checklist-checkbox me-2" type="checkbox" name="check" value="1" id="checklist_${data.item.id}">
                                            <label class="form-check-label flex-grow-1">${data.item.title}</label>
                                            <button type="button" class="btn btn-sm btn-icon btn-icon-danger btn-active-light-danger delete-checklist"
                                                    data-url="${data.item.delete_route}">
                                                <i class="ki-outline ki-trash fs-6"></i>
                                            </button>
                                        </div>
                                    `;
                                    document.getElementById('new-checklist-container').before(newItem);
                                    newForm.reset();
                                    newForm.classList.add('d-none');
                                } else {
                                    $.jGrowl('افزودن انجام نشد ', {
                                        life: 2500, position: 'bottom-left', theme: 'bg-danger'
                                    });
                                }
                            });
                    });

                    //  (inline edit)
                    document.querySelectorAll('.form-check-label').forEach(label => {
                        label.addEventListener('click', function (e) {
                            const form = e.target.closest('form');
                            const updateUrl = form.dataset.updateUrl; //
                            const currentText = e.target.textContent.trim();

                            if (form.querySelector('.editable-input')) return;

                            const input = document.createElement('input');
                            input.type = 'text';
                            input.value = currentText;
                            input.className = 'editable-input';
                            e.target.replaceWith(input);
                            input.focus();

                            input.addEventListener('blur', saveEdit);
                            input.addEventListener('keydown', ev => {
                                if (ev.key === 'Enter') {
                                    ev.preventDefault();
                                    saveEdit();
                                }
                                if (ev.key === 'Escape') revertLabel();
                            });

                            function saveEdit() {
                                const newText = input.value.trim();
                                if (newText === currentText || newText === '') {
                                    revertLabel();
                                    return;
                                }

                                fetch(updateUrl, {
                                    method: 'PUT',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        'Content-Type': 'application/json',
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({ title: newText })
                                })
                                    .then(res => res.json())
                                    .then(data => {
                                        if (data.success) {
                                            $.jGrowl(data.flash_message || 'عنوان بروزرسانی شد', {
                                                life: 2500,
                                                position: 'bottom-left',
                                                theme: 'bg-success'
                                            });
                                            revertLabel(newText);
                                        } else {
                                            $.jGrowl('خطا در بروزرسانی ', {
                                                life: 2500,
                                                position: 'bottom-left',
                                                theme: 'bg-danger'
                                            });
                                            revertLabel();
                                        }
                                    })
                                    .catch(() => revertLabel());
                            }

                            function revertLabel(text = currentText) {
                                const newLabel = document.createElement('label');
                                newLabel.className = 'form-check-label flex-grow-1';
                                newLabel.textContent = text;
                                input.replaceWith(newLabel);

                                newLabel.addEventListener('click', labelClickHandler);
                            }
                        });
                    });

                });
            </script>
    @endpush
</x-layout>

