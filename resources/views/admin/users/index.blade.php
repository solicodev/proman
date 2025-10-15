@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست خدمات</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm">افزودن کاربر(پرسنل)</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>نام و نام خانوادگی</th>
                        <th>کد پرسنلی</th>
                        <th>شماره موبایل</th>
                        <th>ایمیل</th>
                        <th>نقش کاربر</th>
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
                            <td> {!! $user->UserStatus !!}

                                <form action="{{ route('admin.user.status', $user->id) }}" method="post">
                                    <select name="status" class="form-control" onchange="this.form.submit();">
                                        <option value="0" @if($user->status == 0) selected @endif>غیر فعال</option>
                                        <option value="1" @if($user->status == 1) selected @endif>فعال</option>
                                        <option value="2" @if($user->status == 2) selected @endif>تعلیق</option>
                                    </select>
                                    @csrf
                                </form>

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


        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deleteServiceModal').modal('show');
        }
    </script>
@endpush
