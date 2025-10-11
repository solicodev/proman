@extends('layouts.admin')

@section('content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">مدیریت کاربران</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb" dir="ltr">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">افزودن پوزیشن</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.position.store') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                            <div class="col-md-6">
                                <label for="first_name" class="form-label">نام</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" required value="{{ old('title') }}">
                                <div class="invalid-feedback">لطفا نام پوزیشن را وارد کنید</div>
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
@endsection

@push('scripts')
    <script>
        // const role_show = (selector) => {
        //     if($(selector).find("option:selected").val() == "admin")
        //     {
        //         $("#role").removeClass("d-none");
        //         $("#role select").attr("required","required");
        //     }else{
        //         $("#role").addClass("d-none");
        //         $("#role select").removeAttr("required");
        //     }
        // }
    </script>
@endpush
