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
                    <a href="{{ route('admin.task.index') }}">
                        تسک
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    افزودن تسک
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ایجاد تسک جدید</h5>
            <hr/>
            <form action='{{route('admin.task.store')}}' method="post" class="form-body mt-4 needs-validation"
                  enctype="multipart/form-data" novalidate>
                @csrf
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="title" class="form-label">عنوان تسک </label>
                            <input type="text" name="title" class="form-control" id="title"
                                   value="{{old('title')}}" autocomplete="off" placeholder="عنوان تسک" required>
                            <div class="invalid-feedback">عنوان تسک الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="start_date" class="form-label">تاریخ شروع تسک </label>
                            <input name="start_date"
                                   class="result form-control"
                                   type="text"
                                   data-jdp
                                   placeholder="تاریخ شروع تسک" autocomplete="off"  value="{{old('start_date')}}" required/>
                            <div class="invalid-feedback">تاریخ شروع تسک الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="duration" class="form-label">زمان انجام تسک</label>
                            <input name="duration"
                                   class="result form-control"
                                   type="number"
                                   placeholder="زمان انجام تسک مثال : 10 روز " autocomplete="off"  value="{{old('duration')}}" required/>
                            <div class="invalid-feedback">زمان انجام تسک الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="priority" class="form-label">اولویت تسک</label>
                            <select class="form-select" name="priority" id="inputProductType" required>
                                <option value="" disabled selected hidden>اولویت تسک را انتخاب کنید</option>
                                <option value="0">کم</option>
                                <option value="1">متوسط</option>
                                <option value="2">زیاد</option>
                            </select>
                            <div class="invalid-feedback">ناظر تسک الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="manager_id" class="form-label">مدیر تایید کننده تسک</label>
                            <select class="form-select" name="manager_id" id="inputProductType" required data-placeholder="انتخاب کنید">
                                <option value="" disabled selected hidden>مدیر تایید کننده تسک را انتخاب کنید</option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}">{{$manager->Name}} - {{role_name($manager->roles()->first()->name)}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">مدیر تایید کننده تسک الزامی است</div>
                        </div>
                        <div class="col-md-4">
                            <label for="project_id" class="form-label">پروژه مربوطه</label>
                            <select class="form-select" name="project_id" id="inputProductType">
                                <option value="" disabled selected hidden>پروژه مربوطه را انتخاب کنید</option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->name}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">پروژه مربوطه الزامی است</div>
                        </div>
                        <div class="col-md-6">
                            <label for="watcher_id" class="form-label">ناظر تسک</label>
                            <select class="form-select" name="watcher_id" id="inputProductType" required>
                                <option value="" disabled selected hidden>ناظر تسک را انتخاب کنید</option>
                                <option></option>
                                @foreach($watchers as $watcher)
                                    <option value="{{$watcher->id}}">{{ $watcher->Name }} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">ناظر تسک الزامی است</div>
                        </div>

                        <div class="col-md-6">
                            <label for="memberStacks" class="form-label">اعضای تسک</label>
                            <select class="form-select" id="memberStacks" name="members[]" data-placeholder="انتخاب کنید" multiple required>
                                @foreach($members as $member)
                                    <option value="{{$member->id}}">{{$member->Name}} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">اعضای تسک الزامی است</div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">توضیحات تسک </label>
                            <textarea type="text" name="description" class="form-control" id="description"
                                  autocomplete="off" placeholder="توضیحات تسک" required> {{old('description')}}</textarea>
                            <div class="invalid-feedback">توضیحات تسک الزامی است</div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="gallery" class="form-label">فایل های مربوط به تسک</label>
                            <div class="row g-3 images">
                                <div class="col-md-4 d-flex image">
                                    <input class='form-control' type="file" name="photos[]" accept="image/*">
                                    <button type="button" class="btn btn-link text-danger" title='حذف'
                                            onclick='removeImage(this)'>
                                        <i class="bx bxs-trash"></i>
                                    </button>
                                </div>
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
                                    ثبت تسک
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
