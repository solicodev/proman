<x-layout>
<div id="kt_app_content" class="app-content  flex-column-fluid" >

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Heading-->
            <div class="card-px text-center pt-15 pb-15">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bold mb-0">پروژه با موفقیت ایجاد شد</h2>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold py-7">
                    به پروژه ای که ایجاد کردید همین الان تسک اضافه کنید
                </p>
                <!--end::Description-->

                <!--begin::Action-->
                <a href="{{route('dashboard.task.create' , $project->id)}}" class="btn btn-light-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
                    افزودن تسک
                </a>
                <a href="{{route('dashboard.project.show' , $project->id)}}" class="btn btn-light-secondary er fs-6 px-8 py-4">
                    مشاهده پروژه
                </a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->

            <!--begin::Illustration-->
            <div class="text-center pb-15 px-5">
                <img src="{{url('panel/assets/media/illustrations/sketchy-1/6.png')}}" alt="" class="mw-100 h-200px h-sm-325px"/>
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
</x-layout>
