<x-layout>

    @include('proMan.projects.main-card')

    <!--begin::Col-->
    <div class="col-12">

        <!--begin::Card-->
        <div class="card card-flush h-lg-100">
            <div class="card-header mt-6">
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">آپشن | جزییات پروژه</h3>

                    <div class="fs-6 text-gray-500"></div>
                </div>
            </div>

            <div class="card card-flush mt-6 mt-xl-9">
                <div class="card-header mt-5">
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">لیست تمام تسک ها</h3>

                        <div class="fs-6 text-gray-500"></div>
                    </div>
                    <div class="card-toolbar my-1">
                        <div class="me-6 my-1">
                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected>All time</option>
                                <option value="thisyear">This year</option>
                                <option value="thismonth">This month</option>
                                <option value="lastmonth">Last month</option>
                                <option value="last90days">Last 90 days</option>
                            </select>
                        </div>
                        <div class="me-4 my-1">
                            <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected>All Orders</option>
                                <option value="Approved">Approved</option>
                                <option value="Declined">Declined</option>
                                <option value="In Progress">In Progress</option>
                                <option value="In Transit">In Transit</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                            <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
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
                                <th class="text-start">آپشن</th>
                                <th class="text-start">جزییات</th>
                            </tr>
                            </thead>
                            <tbody class="fs-6">
                            @foreach($projectDependencies as $projectDependency)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-start">{{$projectDependency->title}}</td>
                                    <td class="text-start">{{$projectDependency->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    </div>
    </div>
</x-layout>
