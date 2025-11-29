@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست تسک ها</h6>
    <hr />
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.task.create') }}" class="btn btn-primary btn-sm">افزودن تسک</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="data_table table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>شناسه پروژه</th>
                        <th>عنوان تسک</th>
                        <th>تاریخ شروع تعیین شده</th>
                        <th>تاریخ شروع واقعی</th>
                        <th>تاریخ پایان تسک</th>
                        <th>مدیر تایید کننده</th>
                        <th>ناظر تسک</th>
                        <th>وضعیت</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td style="direction: ltr; text-align: left"> {{ $task->task_code }}</td>
                            <td> {{ $task->title }}</td>
                            <td> {{ $task->start_date }}</td>
                            <td> {{ $task->start_todo_date }}</td>
                            <td> {{ $task->end_date }}</td>
                            <td> {{ $task->manager?->Name }}</td>
                            <td> {{ $task->watcher?->Name }}</td>
                            <td>
                                {!! $task->taskStatus !!}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.task.edit',$task->id) }}" class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.task.destroy',$task->id) }}')"
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

        function openEditModal(url, currentData) {
            let data = JSON.parse(currentData);

            $('#permissionModalLabel').text(`ویرایش سطوح دسترسی "${data.name}"`);
            $('#editForm #name').val(data.name);
            $('#EditAccessForm').attr('action', url);

            // پاک‌کردن تیک‌های قبلی
            $('input[name="permissions[]"]').prop('checked', false);

            // old permission for task
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
