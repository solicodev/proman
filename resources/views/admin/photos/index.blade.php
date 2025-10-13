@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست رسانه ها</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.photo.create') }}" class="btn btn-primary btn-sm">افزودن فایل</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>فایل</th>
                        <th>مسیر فایل</th>
                        <th>نام فایل</th>
                        <th> کاربر</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($photos as $photo)
                        <tr>
                            <td> {{$loop->iteration}}</td>
                            <td> {{ $photo->Name }}</td>
                            <td> {{ $photo->personal_id }}</td>
                            <td> {{ $photo->mobile }}</td>
                            <td> {{ $photo->email }}</td>
                            <td> {{ $photo->getRoleNames()->first() }}</td>
                            <td> {!! $photo->UserStatus !!}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.photo.edit',$photo->id) }}" class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.photo.destroy',$photo->id) }}')"
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
                        حذف
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف مطمئن هستید؟
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
