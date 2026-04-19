<x-layout>
    @include('layouts.message')
    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-135-nh5p">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">
            <div class="d-flex flex-stack flex-row-fluid">
                <div class="d-flex flex-column flex-row-fluid">
                    <div class="page-title d-flex align-items-center me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-lg-2x gap-2">
                            <span>افزودن تسک</span>
                        </h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="{{route('dashboard.index')}}" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            تسک های من
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-left fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            ایجاد تسک
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content  flex-column-fluid " data-select2-id="select2-data-kt_app_content">
            <div class="card" data-select2-id="select2-data-134-tiwj">
                <div class="card-body" data-select2-id="select2-data-133-kmb7">
                    <div class="stepper stepper-links d-flex flex-column pt-15 between" id="kt_create_account_stepper" data-kt-stepper="true" data-select2-id="select2-data-kt_create_account_stepper">
                        <form action="{{route('dashboard.task.store')}}" method="post" id="kt_modal_new_target_form" class="form needs-validation"  autocomplete="off"  enctype="multipart/form-data">
                            @csrf

                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">افزودن تسک</h1>
                            </div>

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
                                            data-placeholder="اولویت تسک" name="priority">
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
                                    <label class="required fs-6 fw-semibold mb-2">مدت زمان انجام تسک (روز)</label>
                                    <div class="position-relative d-flex align-items-center">
                                        <i class="ki-outline ki-watch fs-2 position-absolute mx-4"></i>
                                        <input name="duration"
                                               class="result form-control form-control-solid ps-12"
                                               type="number"
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
                                    <label class=" fs-6 fw-semibold mb-2">نیاز به تایید مسئول تایید کننده دارد</label>
                                    <input class="form-check-input" name="manager_check" type="checkbox" value="1" id="flexCheckDefault"/>
                                </div>
                                <div class="col-md-8 fv-row">
                                    <label class=" fs-6 fw-semibold mb-2">مدیر تایید کننده تسک</label>
                                    <select class="form-select form-select-solid"  data-control="select2"
                                            data-placeholder="مدیر تایید کننده تسک" name="manager_id">
                                        <option></option>
                                        @foreach($managers as $manager)
                                            <option value="{{$manager->id}}">{{$manager->Name}} @if($manager->department_id)   - دپارتمان {{ $manager->department?->name }}@endif @if($manager->position_id)  - {{$manager->position?->title}} @endif</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">ناظر تسک</label>
                                    <select class="form-select form-select-solid"  data-control="select2"
                                            data-placeholder="ناظر تسک" name="watcher_id">
                                        <option></option>
                                        @foreach($watchers as $watcher)
                                            <option value="{{$watcher->id}}">{{ $watcher->Name }} @if($watcher->department_id)   - دپارتمان {{ $watcher->department?->name }}@endif @if($watcher->position_id)  - {{$watcher->position?->title}} @endif</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                            <option value="{{$member->id}}">{{$member->Name}} @if($member->department_id)   - دپارتمان {{ $member->department?->name }}@endif @if($member->position_id)  - {{$member->position?->title}} @endif</option>
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

                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Content-->

    </div>
    @push('scripts')
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
                <div class="col-12 d-flex image">
                    <input class='form-control form-control-lg form-control-solid' type="file" name="photos[]" accept="image/*">
                    <button type="button" class="btn btn-link text-danger" title='حذف '
                        onclick='removeImage(this)'>
                        <i class="ki-outline ki-trash fs-1"></i>
                    </button>
                </div>
            `);
            }

            function removeImage(el) {
                $(el).closest('.image').remove();
            }

            // function addDependency() {
            //     $('.dependencies').append(`
            //         <div class="form-group depndency align-items-center">
            //             <div class="dep">
            //                 <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
            //                     <div class="mb-10">
            //                         <div class="form-check">
            //                             <input class="form-check-input" type="radio" value="Pr" id="flexCheckDefault1" name="radio2">
            //                             <label class="form-check-label" for="flexCheckDefault1">
            //                                 Pr
            //                             </label>
            //                         </div>
            //                     </div>
            //                     <div class="mb-10">
            //                         <div class="form-check">
            //                             <input class="form-check-input" type="radio" value="Po" id="flexCheckDefault1" name="radio2">
            //                             <label class="form-check-label" for="flexCheckDefault1">
            //                                 Po
            //                             </label>
            //                         </div>
            //                     </div>
            //                     <div class="mb-10">
            //                         <div class="form-check">
            //                             <input class="form-check-input" type="radio" value="Gr" id="flexCheckDefault1" name="radio2">
            //                             <label class="form-check-label" for="flexCheckDefault1">
            //                                 Gr
            //                             </label>
            //                         </div>
            //                     </div>
            //                 </div>
            //             </div>
            //             <div class="form-group">
            //                 <label class="form-label">عنوان:</label>
            //                 <input class='form-control form-control-lg form-control-solid mx-1' type="text" name="title_dependencies[]" placeholder="عنوان" accept="image/*">
            //             </div>
            //             <div class="form-group">
            //                 <label class="form-label">توضیحات:</label>
            //                 <textarea class='form-control form-control-lg form-control-solid' type="text" rows="1" name="description_dependencies[]" placeholder="توضیحات"> </textarea>
            //             </div>
            //             <div class="d-flex justify-content-end">
            //             <button type="button" class="btn btn-link text-danger ms-2" title='حذف'
            //                     onclick='removeDependency(this)'>
            //                 <i class="ki-outline ki-trash fs-1"></i>
            //             </button>
            //             </div>
            //         </div>
            // `);
            // }
            //
            // function removeDependency(el) {
            //     $(el).closest('.depndency').remove();
            // }

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
        </script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>

    @endpush
</x-layout>

