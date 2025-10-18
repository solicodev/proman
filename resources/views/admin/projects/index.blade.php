@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست پروژه ها</h6>
    <hr />
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.project.create') }}" class="btn btn-primary btn-sm">افزودن پروژه</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>شناسه پروژه</th>
                        <th>نام پروژه</th>
                        <th>تاریخ شروع تعیین شده</th>
                        <th>تاریخ شروع واقعی</th>
                        <th>تاریخ پایان پروژه</th>
                        <th>مدیر پروژه</th>
                        <th>دسته بندی</th>
                        <th>سطوح دسترسی</th>
                        <th>وضعیت</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{ $project->Name }}</td>
                            <td> {{ $project->personal_id }}</td>
                            <td> {{ $project->mobile }}</td>
                            <td> {{ $project->email }}</td>
                            <td> </td>
                            <td>
                                <a href="#"
                                   onclick="openEditModal('{{ route('admin.project.permission',$project->id) }}', JSON.stringify({name:'{{ $project->Name }}', permission: @json($project->permissions->pluck('id')) }))">
   <span class="badge bg-info text-black">
       <i class="bx bxs-edit"></i> ویرایش سطوح دسترسی
   </span>
                                </a>

{{--                                <a href="#" onclick="openEditModal('{{ route('admin.project.permission',$project->id) }}', JSON.stringify({name:'{{ $project->Name }}' , permission:'{{$project->permissions}}'}))"><span class="badge bg-info text-black">  <i class="bx bxs-edit"></i> ویرایش سطوح دسترسی</span></a>--}}
                            </td>
                            <td>
                                {{--                                {!! $project->projectStatus !!}--}}
                                <form action="{{ route('admin.project.status', $project->id) }}" method="post" class="d-flex align-items-center gap-3">
                                    @csrf
                                    <label class="form-check-label text-warning">
                                        <input type="radio" name="status" value="0" class="form-check-input"
                                               onchange="this.form.submit();" @if($project->status == 0) checked @endif>
                                        غیر فعال
                                    </label>

                                    <label class="form-check-label text-info">
                                        <input type="radio" name="status" value="1" class="form-check-input"
                                               onchange="this.form.submit();" @if($project->status == 1) checked @endif>
                                        فعال
                                    </label>

                                    <label class="form-check-label">
                                        <input type="radio" name="status" value="2" class="form-check-input"
                                               onchange="this.form.submit();" @if($project->status == 2) checked @endif>
                                        تعلیق
                                    </label>
                                </form>


                                {{--                                <form action="{{ route('admin.project.status', $project->id) }}" method="post">--}}
                                {{--                                    <select name="status" class="form-select" onchange="this.form.submit();">--}}
                                {{--                                        <option value="0" @if($project->status == 0) selected @endif>غیر فعال</option>--}}
                                {{--                                        <option value="1" @if($project->status == 1) selected @endif>فعال</option>--}}
                                {{--                                        <option value="2" @if($project->status == 2) selected @endif>تعلیق</option>--}}
                                {{--                                    </select>--}}
                                {{--                                    @csrf--}}
                                {{--                                </form>--}}

                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.project.edit',$project->id) }}" class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.project.destroy',$project->id) }}')"
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

            // old permission for project
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
