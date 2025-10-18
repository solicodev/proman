@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست پرسنل</h6>
    <hr />
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm">افزودن کاربر(پرسنل)</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>نام و نام خانوادگی</th>
                        <th>کد پرسنلی</th>
                        <th>شماره موبایل</th>
                        <th>ایمیل</th>
                        <th>نقش کاربر</th>
                        <th>سطوح دسترسی</th>
                        <th>وضعیت</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        @php
                            $role = $user->getRoleNames()->first();
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{ $user->Name }}</td>
                            <td> {{ $user->personal_id }}</td>
                            <td> {{ $user->mobile }}</td>
                            <td> {{ $user->email }}</td>
                            <td> {{ role_name($role) }}</td>
                            {{--                            @dd(json_encode($user->permissions->select('id', 'guard_name', 'name')) , count($user->permissions->select('id', 'guard_name', 'name')));--}}

                            <td>
                                <a href="#"
                                   onclick="openEditModal('{{ route('admin.user.permission',$user->id) }}', JSON.stringify({name:'{{ $user->Name }}', permission: @json($user->permissions->pluck('id')) }))">
   <span class="badge bg-info text-black">
       <i class="bx bxs-edit"></i> ویرایش سطوح دسترسی
   </span>
                                </a>

{{--                                <a href="#" onclick="openEditModal('{{ route('admin.user.permission',$user->id) }}', JSON.stringify({name:'{{ $user->Name }}' , permission:'{{$user->permissions}}'}))"><span class="badge bg-info text-black">  <i class="bx bxs-edit"></i> ویرایش سطوح دسترسی</span></a>--}}
                            </td>
                            <td>
                                {{--                                {!! $user->UserStatus !!}--}}
                                <form action="{{ route('admin.user.status', $user->id) }}" method="post" class="d-flex align-items-center gap-3">
                                    @csrf
                                    <label class="form-check-label text-warning">
                                        <input type="radio" name="status" value="0" class="form-check-input"
                                               onchange="this.form.submit();" @if($user->status == 0) checked @endif>
                                        غیر فعال
                                    </label>

                                    <label class="form-check-label text-info">
                                        <input type="radio" name="status" value="1" class="form-check-input"
                                               onchange="this.form.submit();" @if($user->status == 1) checked @endif>
                                        فعال
                                    </label>

                                    <label class="form-check-label">
                                        <input type="radio" name="status" value="2" class="form-check-input"
                                               onchange="this.form.submit();" @if($user->status == 2) checked @endif>
                                        تعلیق
                                    </label>
                                </form>


                                {{--                                <form action="{{ route('admin.user.status', $user->id) }}" method="post">--}}
                                {{--                                    <select name="status" class="form-select" onchange="this.form.submit();">--}}
                                {{--                                        <option value="0" @if($user->status == 0) selected @endif>غیر فعال</option>--}}
                                {{--                                        <option value="1" @if($user->status == 1) selected @endif>فعال</option>--}}
                                {{--                                        <option value="2" @if($user->status == 2) selected @endif>تعلیق</option>--}}
                                {{--                                    </select>--}}
                                {{--                                    @csrf--}}
                                {{--                                </form>--}}

                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.user.edit',$user->id) }}" class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.user.destroy',$user->id) }}')"
                                       class="text-danger ms-3">
                                        <i class="bx bxs-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteServiceModalLabel">
                        حذف سرویس
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف سرویس مطمئن هستید؟
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

    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionModalLabel">ویرایش سطوح دسترسی</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                </div>

                <div class="modal-body">
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

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                language: {
                    "url": dataTableLangUrl
                }
            });
        });

        function openEditModal(url, currentData) {
            let data = JSON.parse(currentData);

            $('#permissionModalLabel').text(`ویرایش سطوح دسترسی "${data.name}"`);
            $('#editForm #name').val(data.name);
            $('#EditAccessForm').attr('action', url);

            // پاک‌کردن تیک‌های قبلی
            $('input[name="permissions[]"]').prop('checked', false);

            // old permission for user
            if (Array.isArray(data.permission)) {
                data.permission.forEach(function (permId) {
                    $('#perm' + permId).prop('checked', true);
                });
            }

            $('#permissionModal').modal('show');
        }

        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deleteServiceModal').modal('show');
        }
    </script>

@endpush
