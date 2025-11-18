<x-layout>
    @include('layouts.message')
    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست دسترسی ها</h3>

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
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                    <thead class="fs-7 text-gray-500 text-uppercase text-start">
                    <tr>
                        <th class="text-start">ردیف</th>
                        <th class="text-start">کاربر</th>
                        <th class="text-start">نوع فعالیت</th>
                        <th class="text-start">توضیحات</th>
                        <th class="text-start">جزییات</th>
                        <th class="text-start">تاریخ</th>
                        <th class="text-start">سطح دسترسی</th>
                    </tr>
                    </thead>
                    <tbody class="fs-6">
                    @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-start">{{$user->Name}}</td>
                            <td class="text-start">{{$user->log_name}}</td>
                            <td class="text-start">{{$user->description}}</td>
                            <td class="text-start">{{$user->email}}</td>
                            <td class="text-start">
                                <a href="#"
                                   onclick="openEditModal('{{ route('dashboard.access.update',$user->id) }}', JSON.stringify({name:'{{ $user->Name }}', permission: @json($user->permissions->pluck('id')) }))">
   <span class="badge bg-info text-black">
       <i class="bx bxs-edit"></i> ویرایش سطوح دسترسی
   </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                {{$users->links("pagination::bootstrap-5")}}--}}

            </div>
        </div>
    </div>



    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
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
                    <form id="EditAccessForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label fw-bold mb-2">دسترسی‌ها</label>
                            <div class="row g-3">
                                @php
                                    $groupTitles = [
                                        'manager' => 'دسترسی‌های مدیر پروژه',
                                        'member' => 'دسترسی‌های اعضای پروژه',
                                        'assign' => 'دسترسی‌های مسئول انجام پروژه',
                                        'dep' => 'دسترسی‌های دپارتمان',
                                    ];
                                @endphp

                                @foreach($groupedPermissions as $group => $permissions)
                                    <div class="col-12 mt-3">
                                        <h6 class="fw-bold border-bottom pb-1 mb-2">{{ $groupTitles[$group] ?? 'سایر دسترسی‌ها' }}</h6>
                                    </div>

                                    @foreach($permissions as $permission)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}">
                                                <label class="form-check-label" for="perm{{ $permission->id }}">
                                                    {{ permission_name($permission->name) }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach


                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-4">ذخیره</button>
                            <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">انصراف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
    <script>
        function openEditModal(url, currentData) {
            let data = JSON.parse(currentData);

            $('#permissionModalLabel').text(`ویرایش سطوح دسترسی "${data.name}"`);
            $('#editForm #name').val(data.name);
            $('#EditAccessForm').attr('action', url);

            $('input[name="permissions[]"]').prop('checked', false);

            // old permission for user
            if (Array.isArray(data.permission)) {
                data.permission.forEach(function (permId) {
                    $('#perm' + permId).prop('checked', true);
                });
            }

            $('#permissionModal').modal('show');
        }
    </script>
@endpush
</x-layout>
