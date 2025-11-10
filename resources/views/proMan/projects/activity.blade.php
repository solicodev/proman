<x-layout>
    @include('layouts.message')
    @include('proMan.projects.main-card')

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست فعالیت ها</h3>

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
                        <th class="text-start">کاربر</th>
                        <th class="text-start">نوع فعالیت</th>
                        <th class="text-start">توضیحات</th>
                        <th class="text-start">جزییات</th>
                        <th class="text-start">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($activities as $activity)
                        @php
                            $user = \App\Models\User::where('id',$activity->causer_id)->first();
                            $property = json_decode($activity->properties);
                            $item = json_encode($property);
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">{{$user->Name}}</td>
                            <td class="text-start">{{$activity->log_name}}</td>
                            <td class="text-start">{{$activity->description}}</td>
                            <td class="text-start">آپدیت از : {{json_encode($property->old, JSON_UNESCAPED_UNICODE)}} به : {{json_encode($property->attributes, JSON_UNESCAPED_UNICODE)}}</td>
                            <td class="text-start">{{\Carbon\Carbon::parse($activity->created_at)->format('Y/m/d')}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$activities->links("pagination::bootstrap-5")}}
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
</x-layout>
