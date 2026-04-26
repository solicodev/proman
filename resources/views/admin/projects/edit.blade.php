@extends('admin.index')
@section('content')

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
                    ویرایش پروژه
                </li>
            </ol>
        </nav>
    </div>
    <hr>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ویرایش پروژه</h5>
            <hr />
            <form action='{{route('admin.project.update',$project->id)}}' method="post" class="form-body mt-4 needs-validation"
                  enctype="multipart/form-data" novalidate>
                @csrf
                @method('put')
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">نام پروژه </label>
                            <input type="text" name="name" class="form-control" id="name"
                                   value="{{$project->name}}" autocomplete="off" placeholder="نام پروژه" required>
                            <div class="invalid-feedback">نام پروژه الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="manager_id" class="form-label">مدیر پروژه</label>
                            <select class="form-select" name="manager_id" id="inputProductType" required>
                                <option>مدیر پروژه را انتخاب کنید</option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}" @if($project->manager?->id == $manager->id ) selected @endif>{{$manager->Name}} - {{role_name($manager->roles()->first()->name)}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پوزیشن کاری پروژه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="start_date" class="form-label">تاریخ شروع پروژه </label>
                            <input name="start_date"
                                   class="result form-control"
                                   type="text"
                                   data-jdp
                                   placeholder="تاریخ شروع پروژه" autocomplete="off"  value="{{$project->start_date}}" required/>
                            <div class="invalid-feedback">تاریخ شروع پروژه الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="end_date" class="form-label">تاریخ پایان پروژه</label>
                            <input name="end_date"
                                   class="result form-control"
                                   type="text"
                                   data-jdp
                                   placeholder="تاریخ پایان پروژه" autocomplete="off"  value="{{$project->end_date}}" required/>
                            <div class="invalid-feedback">تاریخ پایان پروژه الزامی است</div>
                        </div>

                        <div class="col-md-4">
                            <label for="category_id" class="form-label">دسته بندی پروژه</label>
                            <select class="form-select" name="category_id" id="inputProductType">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($project->category?->id == $category->id) selected @endif>{{$category->title}} </option>
                                @endforeach
                            </select>
                            {{--                            <div class="invalid-feedback">نقش پروژه الزامی است</div>--}}
                        </div>
                        <div class="col-md-4">
                            <label for="brand_id" class="form-label">برند پروژه</label>
                            <select class="form-select" name="brand_id" id="inputProductType">
                                <option></option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" @if(old('brand_id') == $brand->id) selected @endif>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            {{--                            <div class="invalid-feedback">نقش پروژه الزامی است</div>--}}
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">واحد انجام دهنده پروژه</label>
                            <select class="form-select form-select-solid" data-control="select2"
                                    data-placeholder="واحد را انتخاب کنید" name="implementeunit_id" required>
                                <option></option>
                                @foreach($implementeUnits as $implementeUnit)
                                    <option value="{{ $implementeUnit->id }}" @if(old('implementeunit_id') == $implementeUnit->id) selected @endif>{{ $implementeUnit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="department_id" class="form-label">دپارتمان(واحد سفارش دهنده)</label>
                            <select class="form-select" name="department_id" id="inputProductType">
                                <option></option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}" @if($project->department?->id == $department->id) selected @endif>{{$department->name}} </option>
                                @endforeach
                            </select>
                            {{--                            <div class="invalid-feedback">نقش پروژه الزامی است</div>--}}
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class=" fs-6 fw-semibold mb-2">به اطلاع مدیر برسد</label>
                            <input class="form-check-input" name="inform" type="checkbox" value="0" id="flexCheckDefault"/>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class=" fs-6 fw-semibold mb-2">نیاز به تایید دارد</label>
                            <input class="form-check-input" name="approve_need" type="checkbox" value="0" id="flexCheckDefault"/>
                        </div>
                        <div class="col-md-12">
                            <label for="manager_id" class="form-label">مدیر تایید کننده پروژه</label>
                            <select class="form-select" name="manager_id" id="inputProductType" required>
                                <option>مدیر پروژه را انتخاب کنید</option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}" @if($project->approving_manager == $manager->id) selected @endif>{{$manager->Name}}
                                        @if($manager->department_id)   - دپارتمان {{ $manager->department?->name }}@endif @if($manager->position_id)  - {{$manager->position?->title}} @endif</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">مدیر پروژه الزامی است</div>
                        </div>
                        @if(count($project->members) > 0)
                            <div class="col-md-12">
                                <label for="memberStacks" class="form-label">اعضای پروژه</label>
                                <select class="form-select" id="memberStacks" name="members[]" data-placeholder="انتخاب کنید" multiple required>
                                    @foreach($members as $member)
                                        <option value="{{ $member->id }}"
                                                @if($project->members->contains('id', $member->id)) selected @endif>
                                            {{ $member->Name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">اعضای پروژه الزامی است</div>
                            </div>
                        @endif
                        <hr>
                        <div class="col-12">
                            <label for="gallery" class="form-label">فایل های مربوط به پروژه</label>
                            <div class="row g-3 images">
                                @if(count($project->photos) > 0)
                                    @foreach($project->photos as $photo)
                                        <div class="col-md-4 d-flex align-items-center image">
                                            <input class='form-control' type="file" name="photos[]" accept="image/*">
                                            <button type="button" class="btn btn-link text-danger" title='حذف'
                                                    onclick='removeImage(this)'>
                                                <i class="bx bxs-trash"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-2 d-flex image">
                                            <img src="{{ url($photo->path) }}" class="img-fluid">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-4 d-flex image">
                                        <input class='form-control' type="file" name="photos[]" accept="image/*">
                                        <button type="button" class="btn btn-link text-danger" title='حذف'
                                                onclick='removeImage(this)'>
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <button type="button" class="btn btn-outline-info btn-sm" onclick='addImage()'>
                                    افزودن فایل
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 mt-5">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-success">
                                    ثبت ویرایش پروژه
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
            $('#memberStacks').select2({
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

        function addImage() {
            $('.images').append(`
                <div class="col-md-4 d-flex image">
                    <input class='form-control' type="file" name="photos[]" accept="image/*">
                    <button type="button" class="btn btn-link text-danger" title='حذف '
                        onclick='removeImage(this)'>
                        <i class="bx bxs-trash"></i>
                    </button>
                </div>
            `);
        }

        function removeImage(el) {
            $(el).closest('.image').remove();
        }

    </script>
@endpush
