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

    <div class="d-flex flex-wrap flex-stack pt-10 pb-8" data-select2-id="select2-data-135-nh5p">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">
           آرشیو همه تسک ها
        </h3>
        <!--end::Heading-->

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
        <div id="kt_project_targets_card_pane" class="tab-pane fade show ">
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
                                                                    <a href="#" onclick="openShowModal(
                                                                                           '{{ route('dashboard.task.show', $subtask->id) }}',
                                                                                           '{{ route('dashboard.task.update.status', $subtask->id) }}'
                                                                                       )"
                                                                       data-task-id="{{ $subtask->id }}"
                                                                       data-task-status="{{ $subtask->status }}"
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
                                            <a href="#" onclick="openShowModal(
                                                           '{{ route('dashboard.task.show', $task->id) }}',
                                                           '{{ route('dashboard.task.update.status', $task->id) }}'
                                                       )"
                                               data-task-id="{{ $task->id }}"
                                               data-task-status="{{ $task->status }}"
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
        <div id="kt_project_targets_table_pane" class="tab-pane fade active show">
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
                            <th class="text-start">نمایش زیر دسته ها</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->


                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                        <!-- قبل یا بعد از جدول -->
                        <div id="datatable-template"
                             data-show-route="{{ route('dashboard.task.show', ':id') }}"
                             data-update-status-route="{{ route('dashboard.task.update.status', ':id') }}">
                        </div>

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
                                    <a href="#" onclick="openShowModal(
                                                           '{{ route('dashboard.task.show', $task->id) }}',
                                                           '{{ route('dashboard.task.update.status', $task->id) }}'
                                                        )"
                                       data-task-id="{{ $task->id }}"
                                       data-task-status="{{ $task->status }}"
                                       class="btn btn-sm btn-light-info" data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                        <i class="ki-outline ki-eye fs-6 px-2"></i>
                                    </a>
                                    <a href="#" class="btn btn-light-primary btn-sm"
                                       onclick="openEditModal('{{ route('dashboard.task.subtasks.store', $task->id) }}',
                                                    JSON.stringify({title:'{{ $task->title }}'}))">
                                        ساخت زیر تسک جدید
                                        <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary  toggle h-25px w-25px"
                                            data-kt-docs-datatable-subtable="expand_row">
                                        <span class="btn btn-sm btn-light-primary toggle-off"><i class="ki-outline ki-plus"></i></span>
                                        <span class="btn btn-sm btn-light-danger toggle-on"><i class="ki-outline ki-cross"></i></span>
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
                        <small id="task-deadline" class="text-muted">مهلت: ۱۴۰۴/۰۸/۲۰</small>
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
                                <form method="POST" id="taskStatusForm"
                                      data-url="{{ route('dashboard.task.update.status', $task->id) }}"
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
                                <form method="POST" id="commentForm" class="mt-4" data-url="{{ route('dashboard.task.comment.add', $task->id) }}">
                                    @csrf
                                    <textarea name="text" class="form-control mb-2" placeholder="افزودن کامنت جدید..." required></textarea>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-light-primary">ارسال</button>
                                    </div>
                                </form>
                            </div>

                            <input type="hidden" id="taskId" value="{{ $task->id }}">

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


            // task show modal
            function openShowModal(showUrl, updateUrl) {
                $.ajax({
                    url: showUrl,
                    type: 'GET',
                    success: function (data) {

                        // task data from json controller
                        $('#modalTitle').text(` مشاهده: ${data.title}`);
                        $('#taskCode').text(`  ${data.code}`);
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
                        if (prNode) prNode.innerHTML = safe(d.TaskPrority);

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
                        const routeTemplate = document.getElementById('datatable-template').dataset.showRoute;
                        const updateStatusTemplate = document.getElementById('datatable-template').dataset.updateStatusRoute;

                        if (actionsNode && routeTemplate  && updateStatusTemplate) {
                            const route = routeTemplate.replace(':id', d.id ?? 0);
                            const updateRoute = updateStatusTemplate.replace(':id', d.id ?? 0);
                            actionsNode.innerHTML = `
                            <a href="#" onclick="openShowModal('${route}', '${updateRoute}')"
                               class="btn btn-sm btn-light-info"
                               data-bs-toggle="tooltip"
                               data-bs-placement="top"
                               title="مشاهده">
                                <i class="ki-outline ki-eye fs-6 px-2"></i>
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






    @endpush
</x-layout>

