<x-layout>
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
                                        <span class="fs-6 text-gray-500 ms-2">{{ $tasks[$key]->count() ?? 0 }}</span>
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
                                        @if($task->children && $task->children?->count() > 0)
                                            <div class="ms-5 mt-4 border-start ps-3">
                                                @foreach($task->children as $subtask)
                                                    <div class="card mb-3 shadow-sm">
                                                        <div class="card-body py-3 px-4">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="fw-bold text-gray-800">{{ $subtask->title }}</span>
                                                                <span class="badge bg-light text-muted">{!! $subtask->TaskStatus !!}</span>
                                                            </div>
                                                            <div class="text-gray-600 small mt-1">
                                                                {{ $subtask->description }}
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
                                        <a href="#" class="btn btn-primary btn-sm"
                                           onclick="openEditModal('{{ route('dashboard.task.subtasks.store', $task->id) }}',
               JSON.stringify({title:'{{ $task->title }}'}))">
                                            ساخت زیر تسک جدید
                                            <i class="ki-outline ki-plus-square fs-6 px-2"></i>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-light text-center">تسکی در این وضعیت وجود ندارد</div>
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
                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-500 text-uppercase">
                        <tr>
                            <th class="text-start">ردیف</th>
                            <th class="text-start">عنوان</th>
                            <th class="text-start">تاریخ شروع</th>
                            <th class="text-start">تاریخ پایان</th>
                            <th class="text-start">اولویت</th>
                            <th class="text-start">وضعیت</th>
                            <th class="text-start">اعضا</th>
                            <th class="text-start">عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="fs-6">
                        <tr>
                            <td class="text-start fw-bold"><a href="#" class="text-gray-900 text-hover-primary">1</a></td>
                            <td class="text-start"><span class="badge badge-light fw-semibold me-auto">تسک تستی</span></td>
                            <td class="text-start">1404/07/30</td>
                            <td class="text-start">1404/08/30</td>
                            <td class="text-start">کم</td>
                            <td class="text-start">درحال بررسی</td>
                            <td class="text-start">
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-14.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-start">
                                <span class="badge badge-light-primary fw-bold me-auto">انجام عملیات</span>

                                <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">ایجاد تسک<i class="ki-outline ki-plus-square fs-2 px-2"></i> </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
            </div>    </div>
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

        </script>


    @endpush
</x-layout>

