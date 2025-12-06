<x-layout>
    @include('layouts.message')
    @include('proMan.projects.main-card')

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست کامنت ها</h3>

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
                        <th class="text-start">متن کامنت</th>
                        <th class="text-start">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($comment_collection as $resultComment)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">
                                <div class="d-flex align-items-center">
                                    <div class="me-5 position-relative">
                                        <div class="symbol symbol-35px symbol-circle">
                                @if($resultComment['user']['photo_id'])
                                    <img alt="Pic" src="{{route('home')}}/{{$resultComment['user']['photo']['path']}}" />
                                @else
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">{{ mb_substr($resultComment['user']['Name'], 0, 1) }}</span>
                                @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-start">{{$resultComment['user']['Name']}}</td>
                            <td class="text-start">{{$resultComment['text']}}</td>
                            <td class="text-start">{{verta($resultComment['created_at'])->format('Y/m/d')}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                {{$resultComments->links("pagination::bootstrap-5")}}--}}
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
</x-layout>
