<x-layout>
    @push('styles')
        <style>
            .image-input-placeholder {
                background-image: url('{{url('panel/assets/media/svg/avatars/blank.svg')}}');
            }

            [data-bs-theme="dark"] .image-input-placeholder {
                background-image: url('{{url('panel/assets/media/svg/avatars/blank-dark.svg')}}');
            }
        </style>
    @endpush
    @include('layouts.message')
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ویرایش پروفایل</h3>
                @if (auth()->user()?->Name)
                    <h6 class="card-title"> {{ auth()->user()?->Name }}</h6>
                @endif
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data"
                      class="needs-validation" novalidate>
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-8">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="first_name" class="form-label">نام </label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                           value="{{ Auth::user()->first_name }}" required placeholder="محمد">
                                    <div class="invalid-feedback">نام الزامی است</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="last_name" class="form-label">
                                        نام خانوادگی</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                           value="{{ Auth::user()->Name }}" required placeholder="محمدی">
                                    <div class="invalid-feedback">نام خانوادگی الزامی است
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="mobile" class="form-label">شماره موبایل
                                        </label>
                                    <input type="text" inputmode="numeric" pattern="^09\d{9}$"
                                           oninput="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                           class="form-control" id="mobile" name="mobile"
                                           value="{{ Auth::user()->mobile }}" required placeholder="09123456789">
                                    <div class="invalid-feedback">شماره موبایل الزامی است
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 col-xl-4">
                            <div class="image-input image-input-circle" data-kt-image-input="true" style="background-image: url({{url('panel/assets/media/svg/avatars/blank.svg')}})">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{url('panel/assets/media/avatars/300-20.jpg')}})"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="change"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                      data-kt-image-input-action="cancel"
                                      data-bs-toggle="tooltip"
                                      data-bs-dismiss="click"
                                      title="Cancel avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                      data-kt-image-input-action="remove"
                                      data-bs-toggle="tooltip"
                                      data-bs-dismiss="click"
                                      title="Remove avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <label for="photo_id" class="form-label">تصویر پروفایل</label>
                            <div class="form-control text-center py-5">
                                <input type="file" class="form-control" id="photo_id" placeholder="تصویر پروفایل">
                                <input type="hidden" id="logoRes" name="photo_id"
                                       value="" >
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_stacked_1">
                            ویرایش رمز عبور<i class="ki-outline ki-password-check fs-3 px-2"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-light-success">ویرایش<i class="ki-outline ki-pencil fs-3 px-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">ویرایش رمز عبور</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-outline ki-cross fs-1">
                        </i>
                    </div>
                </div>

                <form action="" method="post"
                      class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="row mb-3">
                                    <div class="col-md-12 mb-3">
                                        <label for="password" class="form-label required">رمز عبور جدید</label>
                                        <div class="input-group bg-transparent">
                                            <button type="button" class="input-group-text pass-toggler"><i
                                                    class="ki-outline ki-eye"></i></button>
                                            <input type="password" class="form-control text-center" name="password"
                                                   autocomplete="off" placeholder="رمز عبور جدید" required
                                                   oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')"
                                                   dir="ltr" style="font-family:sans-serif;" />
                                            <div class="invalid-feedback">رمز عبور جدید الزامی است</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="confirm_password" class="form-label required">تکرار رمز عبور
                                            جدید</label>
                                        <div class="input-group bg-transparent">
                                            <button type="button" class="input-group-text pass-toggler"><i
                                                    class="ki-outline ki-eye"></i></button>
                                            <input type="password" class="form-control text-center"
                                                   name="password_confirmation" autocomplete="off"
                                                   placeholder="تکرار رمز عبور جدید" required
                                                   oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')"
                                                   dir="ltr" style="font-family:sans-serif;" />
                                            <div class="invalid-feedback">تکرار رمز عبور جدید الزامی است</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                        <button type="submit" class="btn btn-primary">ذخیره رمز عبور جدید</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
