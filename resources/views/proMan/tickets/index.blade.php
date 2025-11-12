<x-layout>
    @include('layouts.message')
    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
        <div class="card-title flex-column">
            <h3 class="fw-bold mb-1">لیست تمام تسک ها</h3>

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
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                    <thead class="fs-7 text-gray-500 text-uppercase text-start">
                    <tr>
                        <th class="text-start">ردیف</th>
                        <th class="text-start">عکس</th>
                        <th class="text-start">کاربر</th>
                        <th class="text-start">موضوع</th>
                        <th class="text-start">اولویت</th>
                        <th class="text-start">وضعیت</th>
                        <th class="text-start">متن تیکت</th>
                        <th class="text-start">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">
                                <div class="d-flex align-items-center">
                                    <div class="me-5 position-relative">
                                        <div class="symbol symbol-35px symbol-circle">
                                            @if($ticket->user?->photo_id)
                                                <img alt="Pic" src="{{route('home')}}/{{$ticket->user?->photo?->path}}" />
                                            @else
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">{{ mb_substr($ticket->user?->Name, 0, 1) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-start">{{$ticket->user?->Name}}</td>
                            <td class="text-start">{{$ticket->subject}}</td>
                            <td class="text-start">{!! $ticket->HtmlPriority !!}</td>
                            <td class="text-start">{!! $ticket->HtmlStatus !!}</td>
                            <td class="text-start">{{$ticket->messages?->first()->message}}</td>
                            <td class="text-start">{{verta($ticket->created_at)->format('Y/m/d')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


            <!--begin::Modal - Support Center - Create Ticket-->
            <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <div class="modal-content rounded">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>                </div>
                        </div>
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <form id="kt_modal_new_ticket_form" class="form" action="{{route('dashboard.ticket.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">ثبت تیکت جدید</h1>
                                </div>
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">موضوع تیکت</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" title="یک موضوع برای درخواست خود بنویسید">
                                            <i class="ki-outline ki-information fs-7"></i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="عنوان تیکت" value="{{old('subject')}}" name="subject"/>
                                </div>
                                <div class="row g-9 mb-8">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">دپارتمان</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="دپارتمان مورد نظر را انتخاب کنید" name="department_id">
                                            <option></option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}">{{$department->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">اولویت</label>

                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="اولویت رسیدگی به تیکت را تعیین کنید" data-hide-search="true">
                                            <option></option>
                                            <option value="low">کم</option>
                                            <option value="medium">متوسط</option>
                                            <option value="high">زیاد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">متن تیکت</label>
                                    <textarea class="form-control form-control-solid" rows="4" name="message" placeholder="درخواست خود را شرح دهید">
                                        {{old('message')}}
                                    </textarea>
                                </div>
                                <div class="fv-row mb-8">
                                    <label class="fs-6 fw-semibold mb-2">فایل</label>
                                    <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                        <div class="dz-message needsclick align-items-center">
                                            <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">فایل های مربوط به تیکت خود را آپلود کنید</h3>
                                                <span class="fw-semibold fs-7 text-gray-500">حداکثر 10 فایل</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit"  class="btn btn-sm btn-light-primary">
                                        <span class="indicator-label">
                                            ثبت تیکت
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    @push('scripts')
        <script>
            const uploadUrl = "{{ route('dashboard.upload') }}";
        </script>
        <script src="{{asset('panel/assets/js/custom/apps/support-center/tickets/create.js')}}"></script>
        <script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>
    @endpush
</x-layout>
