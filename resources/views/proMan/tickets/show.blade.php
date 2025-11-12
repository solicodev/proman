<x-layout>
    @include('layouts.message')
    <div class="mb-0">
        <div class="d-flex align-items-center mb-12">
            <i class="ki-outline ki-file-added fs-4qx text-success ms-n2 me-3"></i>
            <div class="d-flex flex-column">
                <h1 class="text-gray-800 fw-semibold">نمایش تیکت </h1>
                <div class="">
                    <span class="fw-semibold text-muted me-6">نام کاربر: <a href="#" class="text-muted text-hover-primary">{{$ticket->user?->Name}}</a></span>
                    <span class="fw-semibold text-muted">تاریخ ایجاد: <span class="fw-bold text-gray-600 me-1">{{verta($ticket->created_at)->formatDifference()}}</span>{{verta($ticket->created_at)->format('y/m/d')}}</span>
                </div>
            </div>
        </div>
        <div class="b-15">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h1 class="text-gray-800 fw-semibold">{{ $ticket->subject }}</h1>
                    </div>
                    <div class="card-toolbar">
                        <div class="text-end">
                            <form action="{{ route('dashboard.ticket.close', $ticket->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="closed">
                                <button type="submit" class="btn  btn-light-danger btn-sm me-3">بستن تیکت<i class="ki-outline ki-trash fs-2 ps-5"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <div class="flex-lg-row-fluid">
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-12">
                                    <div class="d-flex flex-column">
                                        <div class="">
                                    <span class="fw-semibold text-muted me-6">ایجاد شده:
                                        <span
                                            class="fw-bold text-gray-600 me-1">{{ \verta($ticket->created_at)->formatDifference() }}
                                        </span>
                                        ({{ \verta($ticket->created_at)->formatJalaliDatetime() }})</span>

                                            <span class="fw-semibold text-muted me-6">اولویت:
                                        {!! $ticket->HtmlPriority !!}
                                    </span>

                                            <span class="fw-semibold text-muted">وضعیت:
                                        {!! $ticket->HtmlStatus !!}



                                    </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-15" id="kt_modal_new_ticket">
                                    <div class="card-rounded bg-primary bg-opacity-5 p-8 mb-15">
                                        {!! $ticket->messages?->first()->message !!}
                                    </div>
                                    <form id="kt_modal_new_ticket_form" action="{{ route('dashboard.ticket.reply', $ticket->id) }}" method="post"
                                          enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">توضیحات</label>
                                            <textarea class="form-control form-control-solid" rows="4" name="message" placeholder="توضیحات بیشتر در صورت لزوم"
                                                      required></textarea>
                                            <div class="invalid-feedback">توضیحات الزامی است</div>
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

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-sm btn-light-success ms-3 px-4 py-3">ارسال پیام<i class="ki-outline ki-plus-square fs-2 ps-5"></i></button>
                                        </div>
                                    </form>
                                </div>

                                <div class="d-flex flex-column gap-8">
                                    @foreach ($ticket->messages as $reply)
                                        <div class="overflow-hidden position-relative card-rounded">
                                            @if ($reply->user_type == 'admin')
                                                <div class="ribbon ribbon-triangle ribbon-top-start border-success">
                                                    <div class="ribbon-icon mt-n5 ms-n6">
                                                        <i class="ki-outline ki-check fs-1 text-white mt-n1"></i>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="card card-bordered bg-light-success w-100">
                                                <div class="card-body">
                                                    <div class="w-100 d-flex flex-stack mb-8">
                                                        <div class="d-flex align-items-center f">
                                                            <div class="symbol symbol-50px me-5">
                                                                @php
                                                                    $explode_first_name = substr(
                                                                        $reply->user->first_name,
                                                                        0,
                                                                        1,
                                                                    );
                                                                @endphp
                                                                <div
                                                                    class="symbol-label fs-1 fw-bold bg-light-primary text-primary">
                                                                    {{ $explode_first_name }}
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-gray-900">
                                                                <div class="d-flex align-items-center">
                                                            <span
                                                                class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">{{ $reply->user?->first_name }}
                                                                {{ $reply->user?->last_name }} </span>
                                                                </div>

                                                                <span
                                                                    class="text-muted fw-semibold fs-6">{{ \verta($reply->created_at)->formatDifference() }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="fw-normal fs-5 text-gray-700 m-0">{!! $reply->message !!}</p>
                                                    @foreach ($reply->attachments as $attach)
                                                        <div class="w-100 d-flex flex-wrap mt-8 gap-3">
                                                            <a href="{{ $attach->path }}" download=""
                                                               class="btn btn-light-primary btn-sm"><i
                                                                    class="ki-outline ki-fasten fs-6 m-0"></i> پیوست
                                                                {{ $loop->iteration }}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
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
    @endpush
</x-layout>
