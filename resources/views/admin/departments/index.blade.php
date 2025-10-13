@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست پوزیشن کاری</h6>
    <hr />
    @include('admin.layout.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">افزودن پوزیشن کاری</button>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style='width:50px;'>ردیف</th>
                        <th>عنوان</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($positions as $position)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $position->title }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#"
                                       onclick="openEditModal('{{ route('admin.position.update', $position->id) }}', JSON.stringify({title:'{{ $position->title }}'}))"
                                       class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#" onclick="openDeleteModal('{{ route('admin.position.destroy', $position->id) }}')"
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
                        افزودن پوزیشن کاری
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.position.store') }}" method="post" id='createForm'>
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label">نام پوزیشن کاری</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                       id="title" required>
                                <div class="invalid-feedback">نام پوزیشن کاری الزامی است</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ثبت پوزیشن کاری
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
                                <label for="title" class="form-label">نام پوزیشن کاری</label>
                                <input type="text" name="title" class="form-control" id="title" required>
                                <div class="invalid-feedback">نام پوزیشن کاری الزامی است</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ویرایش پوزیشن کاری
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
                        حذف پوزیشن کاری
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف پوزیشن کاری مطمئن هستید؟
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

            $('#editCategoryModalLabel').text(`ویرایش پوزیشن کاری "${data.title}"`);

            $('#editForm #title').val(data.title);

            $('#editForm').attr('action', url);

            $('#editCategoryModal').modal('show');
        }

        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deletePricingModal').modal('show');
        }
    </script>
@endpush
