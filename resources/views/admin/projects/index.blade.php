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
            @php
                $statuses = [
                    '0' => 'در حال بررسی',
                    '1' => 'درحال انجام',
                    '2' => 'تکمیل شد',
                    '3' => 'تعلیق شد',
                    '4' => 'کنسل شد',
                ];
            @endphp
            <form action="{{route('dashboard.project.report.filter')}}" method="post" class="m-2 fv-plugins-bootstrap5 fv-plugins-framework" id="kt_docs_formvalidation_text">
                @csrf
                <div class="row mb-4">
                    <div class="col my-1">
                        <select  name="status_filter" data-control="select2" data-hide-search="true"
                                 class="form-select form-select-solid form-select-sm"
                                 data-placeholder="وضعیت را انتخاب کنید">
                            <option></option>
                            @foreach($statuses as $key => $label)
                                <option value="{{ $key }}" {{ request('status_filter') == $key ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col my-1">
                        <select  name="brand_filter" data-control="select2" data-hide-search="true"
                                 class="form-select form-select-solid form-select-sm"
                                 data-placeholder="برند را انتخاب کنید">
                            <option></option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}" {{ request('brand_filter') == $brand->id ? 'selected' : '' }}>{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col my-1">
                        <select  name="department_filter" data-control="select2" data-hide-search="true"
                                 class="form-select form-select-solid form-select-sm"
                                 data-placeholder="دپارتمان را انتخاب کنید">
                            <option></option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}"  {{ request('department_filter') == $department->id ? 'selected' : '' }}>{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col my-1">
                        <select  name="filter" data-control="select2" data-hide-search="true" data-placeholder="گزینه را انتخاب کنید"
                                 class="form-select form-select-solid form-select-sm">
                            <option></option>
                            <option value="approve_verify"  {{ request('filter') == 'approve_verify' ? 'selected' : '' }}>مورد تایید مدیر تایید کننده</option>
                            <option value="approve_need"  {{ request('filter') == 'approve_need' ? 'selected' : '' }}>نیاز به تایید مدیر تایید کننده</option>
                            <option value="approving_manager" {{ request('filter') == 'approving_manager' ? 'selected' : '' }}>برای اطلاع مدیر تایید کننده</option>
                            <option value="other" {{ request('filter') == 'other' ? 'selected' : '' }}>سایر موارد</option>
                        </select>
                    </div>
                    <div class="col my-1">
                        <select  name="user_filter" data-control="select2" data-hide-search="true"
                                 class="form-select form-select-solid form-select-sm"
                                 data-placeholder="مدیر مربوطه را انتخاب کنید">
                            <option></option>
                            @foreach($managers as $key => $manager)
                                <option value="{{ $manager->id }}" {{ request('user_filter') == $manager->id ? 'selected' : '' }}>
                                    {{ $manager->Name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="d-flex justify-content-between my-3">
                    <div class="d-flex gap-2">
                        @if (request('status_filter'))
                            <span onclick="delete_value('status_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $statuses[request('status_filter')] ?? request('status_filter') }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                        @endif

                        @if (request('brand_filter'))
                            @php
                                $brand = $brands->firstWhere('id', request('brand_filter'));
                            @endphp
                            @if($brand)
                                <span onclick="delete_value('brand_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                    {{ $brand->name }}
                                    <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                                </span>
                            @endif
                        @endif

                        @if (request('department_filter'))
                            @php
                                $department = $departments->firstWhere('id', request('department_filter'));
                            @endphp
                            @if($department)
                                <span onclick="delete_value('department_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $department->name }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                            @endif
                        @endif

                        @if (request('user_filter'))
                            @php
                                $manager = $managers->firstWhere('id', request('user_filter'));
                            @endphp
                            @if($manager)
                                <span onclick="delete_value('user_filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                                {{ $manager->name }}
                                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
                            </span>
                            @endif
                        @endif

                        @if (request('filter'))
                            <span onclick="delete_value('filter')" class="badge badge-light py-2 px-5 cursor-pointer">
                {{ __("filters.".request('filter')) ?? request('filter') }}
                <i class="ki-outline ki-cross-square text-danger ms-2"></i>
            </span>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-sm btn-light-success">فیلتر <i class="ki-outline ki-filter-search fs-2 ps-5"></i></button>
                </div>

            </form>
            <hr>
            <div class="table-responsive">
                <table class="data_table table table-striped table-bordered page_speed_944522378">
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
                        <th>وضعیت</th>
                        <th>تسک ها</th>
                        <th style='width:50px;'>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td style="direction: ltr; text-align: left"> {{ $project->project_code }}</td>
                            <td> {{ $project->name }}</td>
                            <td> {{ $project->start_date }}</td>
                            <td> {{ $project->start_todo_date }}</td>
                            <td> {{ $project->end_date }}</td>
                            <td> {{ $project->manager?->Name }}</td>
                            <td> {{ $project->category?->title }}</td>
                            <td>
                                {!! $project->ProjectStatus !!}
                            </td>
                            <td>
                                <a href="{{ route('admin.project.tasks',$project->id) }}" class='badge bg-info text-black text-warning'>
                                    مشاهده
                                    <i class="bx bxs-eye"></i>
                                </a>
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
