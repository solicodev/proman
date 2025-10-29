<x-layout>
<div id="kt_app_content" class="app-content  flex-column-fluid" >
    <div class="card">
        <div class="card-body">
            <div class="card-px text-center pt-15 pb-15">
                <h2 class="fs-2x fw-bold mb-0">پروژه با موفقیت ایجاد شد</h2>
                <p class="text-gray-500 fs-4 fw-semibold py-7">
                    به پروژه ای که ایجاد کردید همین الان تسک اضافه کنید
                </p>
                <a href="{{route('dashboard.task.create' , $project->id)}}" class="btn btn-light-primary btn-sm er fs-8 px-8 py-4" >
                    افزودن تسک<i class="ki-outline ki-plus-square fs-3 px-2"></i>
                </a>
                <a href="{{route('dashboard.project.show' , $project->id)}}" class="btn btn-light-secondary btn-sm er fs-8 px-8 py-4">
                    مشاهده پروژه<i class="ki-outline ki-eye fs-3 px-2"></i>
                </a>
            </div>
            <div class="text-center pb-15 px-5">
                <img src="{{url('panel/assets/media/illustrations/sketchy-1/6.png')}}" alt="" class="mw-100 h-200px h-sm-325px"/>
            </div>
        </div>
    </div>
</div>
</x-layout>
