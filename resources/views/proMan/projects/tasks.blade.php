<x-layout>

    @include('proMan.projects.main-card')


    <div class="d-flex flex-wrap flex-stack pt-10 pb-8">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">
            تسک های پروژه
            <span class="fs-6 text-gray-500 fw-semibold ms-1">آپدیت بر اساس ↓</span>
        </h3>
        <!--end::Heading-->

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
        <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">ایجاد تسک </a>
    </div>


    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_project_targets_card_pane" class="tab-pane fade show active">
            <!--begin::Row-->
            <div class="row g-9">
                <!--begin::Col-->
                <div class="col-md-3 col-lg-12 col-xl-3">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">
                                در حال بررسی
                                <span class="fs-6 text-gray-500 ms-2">2</span>
                            </div>

                            <!--begin::Menu-->
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_68ef8af7c4409">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">فیلتر بر اساس</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">اولویت تسک:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="اولویت را انتخاب کنید" data-dropdown-parent="#kt_menu_68ef8af7c4409" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">کم</option>
                                                    <option value="1">متوسط</option>
                                                    <option value="2">زیاد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">بازیابی</button>

                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">اعمال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-3px w-100 bg-warning"></div>
                    </div>

                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">وضعیت</div>
                                <!--end::Badge-->

                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-element-plus fs-2"></i>
                                    </button>

                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                عملیات تسک
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                کامنت ها
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                تغییر وضعیت

                                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                    <i class="ki-outline ki-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                ویرایش
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                حذف
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">دریافت PR</a>
                            </div>
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">برای پروژه تستی PR دریافت شود</div>
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-19.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-outline ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-outline ki-message-text-2 fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ✅ دکمه ساخت تسک جدید -->
                        <div class="card-footer text-center py-3">
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_sub">
                                ساخت زیر تسک جدید<i class="ki-outline ki-plus-square fs-6 px-2"></i>
                            </a>
                        </div>
                    </div>

                    <!--end::Card-->

                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-3 col-lg-12 col-xl-3">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">
                                برای انجام
                                <span class="fs-6 text-gray-500 ms-2">2</span>
                            </div>

                            <!--begin::Menu-->
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_68ef8af7c4409">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">فیلتر بر اساس</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">اولویت تسک:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="اولویت را انتخاب کنید" data-dropdown-parent="#kt_menu_68ef8af7c4409" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">کم</option>
                                                    <option value="1">متوسط</option>
                                                    <option value="2">زیاد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">بازیابی</button>

                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">اعمال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="h-3px w-100 bg-info"></div>
                    </div>
                    <!--end::Col header-->


                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">وضعیت</div>
                                <!--end::Badge-->

                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-element-plus fs-2"></i>
                                    </button>

                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                عملیات تسک
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                کامنت ها
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                تغییر وضعیت

                                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                    <i class="ki-outline ki-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                ویرایش
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                حذف
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">دریافت PR</a>
                            </div>
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">برای پروژه تستی PR دریافت شود</div>
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-19.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-outline ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-outline ki-message-text-2 fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-3 col-lg-12 col-xl-3">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">
                                در حال انجام
                                <span class="fs-6 text-gray-500 ms-2">2</span>
                            </div>

                            <!--begin::Menu-->
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_68ef8af7c4409">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">فیلتر بر اساس</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">اولویت تسک:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="اولویت را انتخاب کنید" data-dropdown-parent="#kt_menu_68ef8af7c4409" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">کم</option>
                                                    <option value="1">متوسط</option>
                                                    <option value="2">زیاد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">بازیابی</button>

                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">اعمال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="h-3px w-100 bg-primary"></div>
                    </div>
                    <!--end::Col header-->

                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">وضعیت</div>
                                <!--end::Badge-->

                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-element-plus fs-2"></i>
                                    </button>

                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                عملیات تسک
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                کامنت ها
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                تغییر وضعیت

                                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                    <i class="ki-outline ki-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                ویرایش
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                حذف
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">دریافت PR</a>
                            </div>
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">برای پروژه تستی PR دریافت شود</div>
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-19.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-outline ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-outline ki-message-text-2 fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-3 col-lg-12 col-xl-3">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">
                                انجام شد
                                <span class="fs-6 text-gray-500 ms-2">2</span>
                            </div>

                            <!--begin::Menu-->
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_68ef8af7c4409">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">فیلتر بر اساس</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">اولویت تسک:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="اولویت را انتخاب کنید" data-dropdown-parent="#kt_menu_68ef8af7c4409" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">کم</option>
                                                    <option value="1">متوسط</option>
                                                    <option value="2">زیاد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">بازیابی</button>

                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">اعمال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="h-3px w-100 bg-success"></div>
                    </div>
                    <!--end::Col header-->

                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">وضعیت</div>
                                <!--end::Badge-->

                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-element-plus fs-2"></i>
                                    </button>

                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                عملیات تسک
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                کامنت ها
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                تغییر وضعیت

                                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                    <i class="ki-outline ki-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                ویرایش
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                حذف
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">دریافت PR</a>
                            </div>
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">برای پروژه تستی PR دریافت شود</div>
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-2.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-19.jpg')}}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-outline ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-outline ki-message-text-2 fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->
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
                            <td class="text-start"><span class="badge badge-light-primary fw-bold me-auto">انجام عملیات</span></td>
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
        <div class="modal-dialog modal-dialog-centered mw-650px">
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
                    <form id="kt_modal_new_target_form" class="form" action="#">
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

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان</span>
                                <span class="ms-1"  data-bs-toggle="tooltip" title="عنوان تسک را بنویسید" >
	                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="عنوان تسک" name="target_title"/>
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
                                           placeholder="تاریخ شروع پروژه"
                                           autocomplete="off"
                                           value="{{ old('start_date') }}"
                                           required />
                                </div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ پایان</label>
                                <div class="position-relative d-flex align-items-center">
                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                    <input name="end_date"
                                           class="result form-control form-control-solid ps-12"
                                           type="text"
                                           data-jdp
                                           placeholder="تاریخ پایان پروژه"
                                           autocomplete="off"
                                           value="{{ old('end_date') }}"
                                           required />
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">اولویت تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                          data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="target_assign">
                                    <option></option>
                                    <option value="0">کم</option>
                                    <option value="1">متوسط</option>
                                    <option value="2">زیاد</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                          data-placeholder="مدیر تایید کننده تسک" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                        data-placeholder="ناظر تسک" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">کاربران تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                        multiple  data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">توضیحات تسک</label>
                            <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="توضیحات تسک">
                            </textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="col-12">
                            <label for="gallery" class="form-label">فایل های مربوط به تسک</label>
                            <div class="row g-3 images">
                                <div class="col-md-4 d-flex image">
                                    <input class='form-control' type="file" name="photos[]" accept="image/*">
                                    <button type="button" class="btn btn-link text-danger" title='حذف'
                                            onclick='removeImage(this)'>
                                        <i class="bx bxs-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <button type="button" class="btn btn-outline-info btn-sm" onclick='addImage()'>
                                    افزودن فایل
                                </button>
                            </div>
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                Cancel
                            </button>

                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                ثبت تسک
                            </span>
                                <span class="indicator-progress">
                                Please wait...
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
        <div class="modal-dialog modal-dialog-centered mw-650px">
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
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">افزودن زیرتسک</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                 برای پروژه
                                <a href="#" class="fw-bold link-primary">{{$project->name}} - {{$project->project_code}}</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان</span>
                                <span class="ms-1"  data-bs-toggle="tooltip" title="عنوان تسک را بنویسید" >
	                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="عنوان تسک" name="target_title"/>
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
                                           placeholder="تاریخ شروع پروژه"
                                           autocomplete="off"
                                           value="{{ old('start_date') }}"
                                           required />
                                </div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ پایان</label>
                                <div class="position-relative d-flex align-items-center">
                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                    <input name="end_date"
                                           class="result form-control form-control-solid ps-12"
                                           type="text"
                                           data-jdp
                                           placeholder="تاریخ پایان پروژه"
                                           autocomplete="off"
                                           value="{{ old('end_date') }}"
                                           required />
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">اولویت تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                          data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="target_assign">
                                    <option></option>
                                    <option value="0">کم</option>
                                    <option value="1">متوسط</option>
                                    <option value="2">زیاد</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                          data-placeholder="مدیر تایید کننده تسک" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">ناظر تسک</label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                        data-placeholder="ناظر تسک" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">کاربران تسک </label>

                                <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true"
                                        multiple  data-placeholder="تسک را به کاربران مد نظرتان assign کنید" name="target_assign">
                                    <option></option>
                                    <option value="1">فریناز حقیقی</option>
                                    <option value="2">داوود یوسفی</option>
                                    <option value="3">مهسا امامی</option>
                                    <option value="4">فرتاش آذرسینا</option>
                                    <option value="5">محمد اوتادی</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">توضیحات تسک</label>
                            <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="توضیحات تسک">
                            </textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="col-12">
                            <label for="gallery" class="form-label">فایل های مربوط به تسک</label>
                            <div class="row g-3 images">
                                <div class="col-md-4 d-flex image">
                                    <input class='form-control' type="file" name="photos[]" accept="image/*">
                                    <button type="button" class="btn btn-link text-danger" title='حذف'
                                            onclick='removeImage(this)'>
                                        <i class="bx bxs-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <button type="button" class="btn btn-outline-info btn-sm" onclick='addImage()'>
                                    افزودن فایل
                                </button>
                            </div>
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                Cancel
                            </button>

                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                ثبت تسک
                            </span>
                                <span class="indicator-progress">
                                Please wait...
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
    </div>
    </div>

    @push('scripts')
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

            // Define form element
            const form = document.getElementById('kt_docs_formvalidation_text');

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
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
            @endpush
</x-layout>
