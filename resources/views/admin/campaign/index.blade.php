@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست کمپین</h6>
    <hr/>
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">افزودن کمپین
                </button>
                <button type="button" class="btn btn-info btn-sm mx-3" data-bs-toggle="modal"
                        data-bs-target="#uploadInfluncerModal">آپلود فایل اکسل کمپین
                </button>
            </div>
            <hr>
            <div class="table-responsive">
                <table  class="data_table table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style='width:50px;'>ردیف</th>
                        <th>عنوان</th>
                        <th>کامنت</th>
                        <th>اعتبار</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($campaigns as $campaign)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $campaign->instagram_id }}</td>
                            <td>{{ $campaign->comment }}</td>
                            <td>{!! $campaign->کمپینCredibility !!}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#"
                                       onclick="openEditModal('{{ route('admin.campaign.update', $campaign->id) }}', JSON.stringify({instagram_id:'{{ $campaign->instagram_id }}', comment:'{{$campaign->comment}}' , credibility:'{{$campaign->credibility}}'}))"
                                       class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#"
                                       onclick="openDeleteModal('{{ route('admin.campaign.destroy', $campaign->id) }}')"
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

    <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">
                        افزودن کمپین
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.campaign.store') }}" method="post" id='createForm'>
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="instagram_id" class="form-label">ID کمپین</label>
                                <input type="text" name="instagram_id" value="{{ old('instagram_id') }}" class="form-control"
                                       id="instagram_id" required>
                                <div class="invalid-feedback">ID کمپین الزامی است</div>

                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="credibility" class="form-label">اعتبار</label>
                                <input type="text" name="credibility" value="{{ old('credibility') }}" class="form-control"
                                       id="credibility">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="comment" class="form-label">کامنت</label>
                                <input type="text" name="comment" value="{{ old('comment') }}" class="form-control"
                                       id="comment">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ثبت
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadInfluncerModal" tabindex="-1" aria-labelledby="uploadInfluncerModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadInfluncerModalLabel">
                        آپلود کمپین
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.campaign.import') }}" method="post" id='createForm' enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="excel" class="form-label required">بارگذاری فایل</label>
                            <div class="form-group custom-form-input">
                                <label for="excel" class="form-control">انتخاب فایل</label>
                                <input id="excel" type="file" accept=".xls,.xlsb,.xlsx" name="excel"
                                       required>
                            </div>
                            <div class="invalid-feedback">بارگذاری فایل الزامی است</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ثبت
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" id='editForm'>
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="instagram_id" class="form-label">ID کمپین</label>
                                <input type="text" name="instagram_id" class="form-control" id="instagram_id" required>
                                <div class="invalid-feedback">ID کمپین الزامی است</div>

                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="credibility" class="form-label">اعتبار</label>
                                <input type="text" name="credibility"  class="form-control"
                                       id="credibility">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="comment" class="form-label">کامنت</label>
                                <input type="text" name="comment"  class="form-control"
                                       id="comment">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ویرایش کمپین
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deletePricingModal" tabindex="-1" aria-labelledby="deletePricingModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePricingModalLabel">
                        حذف کمپین
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف کمپین مطمئن هستید؟
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
        // $(document).ready(function () {
        //     $('#table').DataTable({
        //         language: {
        //             "url": dataTableLangUrl
        //         }
        //     });
        // });

        function openEditModal(url, currentData) {
            let data = JSON.parse(currentData);

            $('#editCategoryModalLabel').text(`ویرایش کمپین "${data.name}"`);

            $('#editForm #instagram_id').val(data.instagram_id);
            $('#editForm #comment').val(data.comment);
            $('#editForm #credibility').val(data.credibility);

            $('#editForm').attr('action', url);
            $('#editCategoryModal').modal('show');
        }

        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deletePricingModal').modal('show');
        }
    </script>
@endpush
