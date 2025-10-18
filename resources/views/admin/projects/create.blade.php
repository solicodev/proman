@extends('admin.index')
@section('content')
    @include('layouts.message ')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">
                        داشبورد
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.project.index') }}">
                        پروژه
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    افزودن پروژه
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ایجاد پروژه جدید</h5>
            <hr/>
            <form action='{{route('admin.project.store')}}' method="post" class="form-body mt-4 needs-validation"
                  enctype="multipart/form-data" novalidate>
                @csrf
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">نام پروژه </label>
                            <input type="text" name="name" class="form-control" id="name"
                                   value="{{old('name')}}" placeholder="نام پروژه" required>
                            <div class="invalid-feedback">نام پروژه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="start_date" class="form-label">تاریخ شروع پروژه </label>
                            <input name="start_date"
                                   class="result form-control"
                                   type="text"
                                   data-jdp
                                   placeholder="تاریخ شروع پروژه"  value="{{old('start_date')}}" required/>
                            <div class="invalid-feedback">تاریخ شروع پروژه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="end_date" class="form-label">تاریخ پایان پروژه</label>
                            <input name="end_date"
                                   class="result form-control"
                                   type="text"
                                   data-jdp
                                   placeholder="تاریخ پایان پروژه"  value="{{old('end_date')}}" required/>
                            <div class="invalid-feedback">تاریخ پایان پروژه الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="manager_id" class="form-label">مدیر پروژه</label>
                            <select class="form-select" name="manager_id" id="inputProductType" required>
                                <option>مدیر پروژه را انتخاب کنید</option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}">{{$manager->Name}} - {{role_name($manager->roles()->first()->name)}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پوزیشن کاری پروژه الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="category_id" class="form-label">دسته بندی پروژه</label>
                            <select class="form-select" name="category_id" id="inputProductType"  required>
                                <option>دسته بندی پروژه را انتخاب کنید</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">نقش پروژه الزامی است</div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-success">
                                    ثبت پروژه
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $(function() {
            $('#textOne').summernote();
        });
        $(function() {
            $('#techStacks').select2({
                theme: "bootstrap-5"
            });
        });

    </script>

    <script>
        jalaliDatepicker.startWatch({
            showTodayBtn: true,
            showEmptyBtn: true,
            time: true,
            topSpace: 10,
            bottomSpace: 30,
            dayRendering(opt, input) {
                return {
                    isHollyDay: opt.day == 1,
                };
            },
        });
    </script>
    <script>
        $(".datepicker").pickadate({
            selectMonths: true,
            selectYears: true,
        }),
            $(".timepicker").pickatime();
    </script>
    <script>
        $(function () {
            $("#date-time").bootstrapMaterialDatePicker({
                format: "YYYY-MM-DD HH:mm",
            });
            $("#date").bootstrapMaterialDatePicker({
                time: false,
            });
            $("#time").bootstrapMaterialDatePicker({
                date: false,
                format: "HH:mm",
                cancelText: "انصراف",
                okText: "خب",
            });
        });
    </script>
@endpush
