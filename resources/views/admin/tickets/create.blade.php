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
                    <a href="{{ route('admin.ticket.index') }}">
                        تیکت
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    افزودن تیکت
                </li>
            </ol>
        </nav>
    </div>

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <!-- PAGE-HEADER -->
    @include('tickets::partial.header')
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">افزودن تیکت</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tickets.store') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="title" class="form-label">تیکت</label>
                                <select name="user_id" class="form-control" required>
                                    <option value>انتخاب تیکت</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" @if(old('user_id' == $user->id)) selected @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">لطفا تیکت را انتخاب کنید</div>
                            </div>
                            <div class="col-md-6">
                                <label for="department_id" class="form-label">دپارتمان</label>
                                <select name="department_id" class="form-control" required>
                                    <option value>انتخاب دپارتمان</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}" @if(old('department_id' == $department->id)) selected @endif>{{ $department->title }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">لطفا تیکت را انتخاب کنید</div>
                            </div>
                            <div class="col-md-12">
                                <label for="subject" class="form-label">موضوع</label>
                                <input type="text" name="subject" class="form-control" id="subject" required value="{{ old('subject') }}">
                                <div class="invalid-feedback">لطفا عنوان را وارد کنید</div>
                            </div>
                            <div class="col-md-12">
                                <label for="message" class="form-label">متن تیکت</label>
                                <textarea name="message" class="form-control" required rows="7">{{ old('message') }}</textarea>
                                <div class="invalid-feedback">لطفا متن را وارد کنید</div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <a href="javascript:void(0);" class="btn btn-info add-attach"><i class="fa fa-plus"></i> افزودن پیوست </a>
                            </div>
                            <div class="attachments col-md-12 row">
                                <div class="col-md-6">
                                    <label for="subject" class="form-label">فایل پیوست</label>
                                    <input type="file" name="attach[]" class="form-control">
                                    <div class="invalid-feedback">لطفا فایل را انتخاب کنید</div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button class="btn btn-primary" type="submit">ارسال فرم</button>
                                @csrf
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->

    </div>

    @push('scripts')
        <script>
            $('.add-attach').click(function (){
                $('.attachments').append('<div class="col-md-6">' +
                '<label for="subject" class="form-label">فایل پیوست</label>' +
                '<input type="file" name="attach[]" class="form-control">' +
                    '<div class="invalid-feedback">لطفا فایل را انتخاب کنید</div>' +
                '</div>');
            });
        </script>
    @endpush
@endsection
