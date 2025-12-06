@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست برند</h6>
    <hr/>
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">افزودن برند
                </button>
            </div>
            <hr>
            <div class="table-responsive">
                <table  class="data_table table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style='width:50px;'>ردیف</th>
                        <th>عنوان</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#"
                                       onclick="openEditModal('{{ route('admin.brand.update', $brand->id) }}', JSON.stringify({name:'{{ $brand->name }}' , parent_id:'{{$brand->parent_id}}'}))"
                                       class='text-warning'>
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                    <a href="#"
                                       onclick="openDeleteModal('{{ route('admin.brand.destroy', $brand->id) }}')"
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
                        افزودن برند
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.brand.store') }}" method="post" id='createForm' enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label">نام برند</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                       id="title" required>
                                <div class="invalid-feedback">نام برند الزامی است</div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="parent_id" class="form-label">برند مادر</label>
                                <select class="form-select" id="parent_id" name="parent_id[]" multiple
                                        aria-label="Default select example" data-placeholder="اگر برند مادر وجود دارد انتخاب کنید">
                                    <option> </option>
                                    @foreach($departments as $parent)
                                        <option selected="" value="{{$parent->id}}">{{$parent->name}}</option>
                                    @endforeach
                                </select>
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

    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" id='editForm' enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label">نام برند</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                                <div class="invalid-feedback">نام برند الزامی است</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="department_id" class="form-label">برند مادر</label>
                                <select class="form-select" id="department_id" name="parent_id[]" multiple
                                        aria-label="انتخاب کنید" data-placeholder="اگر برند مادر وجود دارد انتخاب کنید">
                                    <option></option>
                                    @foreach($departments as $parent)
                                        <option value="{{$parent->id}}">{{$parent->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            ویرایش برند
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
                        حذف برند
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" id='deleteForm'>
                    <div class="modal-body">
                        آیا از حذف برند مطمئن هستید؟
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
        $(function() {
            $('#parent_id').select2({
                theme: "bootstrap-5"
            });
        });
        $(function() {
            $('#department_id').select2({
                theme: "bootstrap-5"
            });
        });

        function openEditModal(url, currentData) {
            let data = JSON.parse(currentData);

            $('#editCategoryModalLabel').text(`ویرایش برند "${data.name}"`);

            $('#editForm #name').val(data.name);
            $('#editForm #parent_id').val(data.parent_id);

            $('#editForm').attr('action', url);
            $('#editCategoryModal').modal('show');
        }

        function openDeleteModal(url) {
            $('#deleteForm').attr('action', url);
            $('#deletePricingModal').modal('show');
        }
    </script>
@endpush
