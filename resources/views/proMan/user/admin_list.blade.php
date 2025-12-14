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
                        <span>ادمین های من</span>

                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">

                    <!--begin::Item-->
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
                     ادمین های من
                    </li>
                    <!--end::Item-->


                </ul>
                <!--end::Breadcrumb-->

            </div>
            <!--end::Toolbar container-->

            <!--begin::Actions-->
            <div class="d-flex align-self-center flex-center flex-shrink-0">
                <a href="{{route('dashboard.add.admin')}}" class="btn btn-sm btn-light-success d-flex flex-center ms-3 px-4 py-3">
                    افزودن ادمین<i class="ki-outline ki-plus-square fs-2 ps-5"></i>
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست تمام ادمین</h3>
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
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table  class="kt_profile_overview_table table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                    <thead class="fs-7 text-gray-500 text-uppercase text-start">
                    <tr>
                        <th class="text-start">ردیف</th>
                        <th class="text-start">نام و نام خانوادگی</th>
                        <th class="text-start">کد پرسنلی</th>
                        <th class="text-start">شماره موبایل</th>
                        <th class="text-start">دپارتمان</th>
                        <th class="text-start">پوزیشن شغلی</th>
                        <th class="text-start">نقش ادمین</th>
                        <th class="text-start">عملیات</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($admins as $projectManagerAdmin)
                        @php
                            $role = $projectManagerAdmin->admin?->getRoleNames()->first();
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">{{$projectManagerAdmin->admin?->Name}}</td>
                            <td  class="text-start"> {{ $projectManagerAdmin->admin?->personal_id }}</td>
                            <td  class="text-start"> {{ $projectManagerAdmin->admin?->mobile }}</td>
                            <td  class="text-start"> {{ $projectManagerAdmin->admin?->department?->name }}</td>
                            <td  class="text-start"> {{ $projectManagerAdmin->admin?->department?->name }}</td>
                            <td  class="text-start"> {{ role_name($role) }}</td>
                            <td class="text-start">
                                <a href="#"
                                   onclick="openDeleteModal('{{ route('dashboard.admin.delete', $projectManagerAdmin->id) }}')"
                                   class="btn btn-light-danger btn-sm p-1">
                                    <i class="ki-outline ki-trash fs-6 px-2"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="modal fade" id="deletePricingModal" tabindex="-1" aria-labelledby="deletePricingModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePricingModalLabel">
                        حذف ادمین
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف ادمین مطمئن هستید؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            خیر
                        </button>
                        <button type="submit" class="btn btn-danger">
                            بله
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            function openDeleteModal(url) {
                $('#deleteForm').attr('action', url);
                $('#deletePricingModal').modal('show');
            }
        </script>
    @endpush
</x-layout>
