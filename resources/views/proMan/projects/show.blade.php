<x-layout>
   @include('proMan.projects.main-card')
            <div class="row gx-6 gx-xl-9">
                <div class="col-12">
                    <!--begin::Timeline Widget 4-->
                    <div class="card h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header position-relative py-0 border-bottom-1">
                            <!--begin::Card title-->
                            <h3 class="card-title text-gray-800 fw-bold">Active Tasks</h3>
                            <!--end::Card title-->

                            <!--begin::Tabs-->
                            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3 active"
                                       data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_day">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Day</span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->

                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3"
                                       data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_week">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Week</span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->

                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3"
                                       data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_month">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Month</span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->

                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3"
                                       data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_2022">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">2022</span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pb-0">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane active" id="kt_timeline_widget_4_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="/metronic8/demo37/assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="/metronic8/demo37/assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="/metronic8/demo37/assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_2022" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_4" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="/metronic8/demo37/assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline Widget 1-->
                </div>
                <div class="col-lg-6 my-5">
                    <!--begin::Summary-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">گزارش اخیر</h3>

                                <div class="fs-6 fw-semibold text-gray-500">{{verta(\Carbon\Carbon::today())->format('Y/m/d')}}</div>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <a href="{{route('dashboard.project.task',$project->id)}}" class="btn btn-bg-light btn-active-color-primary btn-sm">مشاهده همه گزارشات پروژه<i class="ki-outline ki-eye fs-5 ps-3"></i></a>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                    <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                        <span class="fs-2qx fw-bold">237</span>
                                        <span class="fs-8 fw-semibold text-gray-500 ">تعداد کل تسک ها</span>
                                    </div>

                                    <canvas id="project_overview_chart"></canvas>
                                </div>
                                <!--end::Chart-->

                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-500">Active</div>
                                        <div class="ms-auto fw-bold text-gray-700">30</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-500">Completed</div>
                                        <div class="ms-auto fw-bold text-gray-700">45</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-danger me-3"></div>
                                        <div class="text-gray-500">Overdue</div>
                                        <div class="ms-auto fw-bold text-gray-700">0</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet bg-gray-300 me-3"></div>
                                        <div class="text-gray-500">Yet to start</div>
                                        <div class="ms-auto fw-bold text-gray-700">25</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Wrapper-->


                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <!--begin::Content-->
                                    <div class=" fw-semibold">

                                        <div class="fs-6 text-gray-700 "><a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a> to create great outstanding business to business .jsp modutr class scripts</div>
                                    </div>
                                    <!--end::Content-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>
                <div class="col-lg-6 my-5">
                    <!--begin::Card-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">امروز چه کاری باید انجام بشه؟</h3>

                                <div class="fs-6 text-gray-500">تعداد </div>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                    <option value="1" selected>Options</option>
                                    <option value="2">Option 1</option>
                                    <option value="3">Option 2</option>
                                    <option value="4">Option 3</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-4">
                            <!--begin::Dates-->
                            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_0">

                                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bold">22</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active"
                                        data-bs-toggle="tab" href="#kt_schedule_day_1">

                                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 fw-bold">23</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_2">

                                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bold">24</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_3">

                                        <span class="opacity-50 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 fw-bold">25</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_4">

                                        <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 fw-bold">26</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_5">

                                        <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 fw-bold">27</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_6">

                                        <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 fw-bold">28</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_7">

                                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bold">29</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_8">

                                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 fw-bold">30</span>
                                    </a>
                                </li>
                                <!--end::Date-->

                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a
                                        class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary "
                                        data-bs-toggle="tab" href="#kt_schedule_day_9">

                                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bold">31</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                            </ul>
                            <!--end::Dates-->

                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Day-->
                                <div id="kt_schedule_day_0" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Lunch & Learn Catch Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Walter White</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Dashboard UI/UX Design Review                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Creative Content Initiative                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Sales Pitch Proposal                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Committee Review Approvals                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Sean Bean</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                12:00 - 13:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Lunch & Learn Catch Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_2" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                9 Degree Project Estimation Meeting                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Committee Review Approvals                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                13:00 - 14:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Marketing Campaign Discussion                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_3" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                9 Degree Project Estimation Meeting                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                9 Degree Project Estimation Meeting                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                13:00 - 14:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Sales Pitch Proposal                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_4" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Dashboard UI/UX Design Review                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">David Stevenson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Weekly Team Stand-Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Lunch & Learn Catch Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_5" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                12:00 - 13:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Team Backlog Grooming Session                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                12:00 - 13:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Sales Pitch Proposal                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                11:00 - 11:45

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Sales Pitch Proposal                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Yannis Gloverson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_6" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Weekly Team Stand-Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Yannis Gloverson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Creative Content Initiative                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">David Stevenson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                12:00 - 13:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Marketing Campaign Discussion                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_7" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                14:30 - 15:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Marketing Campaign Discussion                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Creative Content Initiative                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Committee Review Approvals                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_8" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                10:00 - 11:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Dashboard UI/UX Design Review                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Weekly Team Stand-Up                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                9:00 - 10:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Committee Review Approvals                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_9" class="tab-pane fade show ">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                13:00 - 14:00

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Dashboard UI/UX Design Review                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Project Review & Testing                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Walter White</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">
                                                16:30 - 17:30

                                                <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                            </div>
                                            <!--end::Time-->

                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                                Creative Content Initiative                                </a>
                                            <!--end::Title-->

                                            <!--begin::User-->
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->    </div>
                <div class="col-lg-6 my-5">
                    <div class="card card-flush h-lg-100">
                        <div class="card-body p-9 pt-3">
                            <div class="card-header my-6">
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">آخرین فایل های پروژه</h3>
                                    <div class="fs-6 text-gray-500">تعداد کل فایل ها {{$total_files}}</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-9">
                                @foreach($file_collection as $file)
                                    @php
                                        $explode_file = explode('.',$file['path']);
                                        $user = \App\Models\User::with('photo')->where('id',$file['user_id'])->first();
                                    @endphp
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="symbol symbol-30px me-5">
                                            @if($explode_file[1] == 'pdf')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/pdf.svg')}}" />
                                            @elseif($explode_file[1] == 'doc')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/doc.svg')}}" />
                                            @elseif($explode_file[1] == 'css')
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/css.svg')}}" />
                                            @else
                                                <img alt="Icon" src="{{url('panel/assets/media/svg/files/ai.svg')}}" />
                                            @endif
                                        </div>
                                        <div class="fw-semibold">
                                            <a class="fs-6 fw-bold text-gray-900 text-hover-primary">{{$user->Name}} </a>

                                            <div class="text-gray-500">
                                                {{verta($file['created_at'])->formatDifference()}}
                                                <a class="text-active-danger">{{role_name($user->getRoleNames()->first())}}</a>
                                            </div>
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="دانلود فایل">
                                            <i class="ki-outline ki-cloud-download fs-3"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-lg-6 my-5">
                    <div class="card  card-flush h-lg-100">
                        <div class="card-header mt-6">
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">آخرین کامنت های پروژه</h3>

                                <div class="fs-6 text-gray-500">تعداد کل کامنت ها</div>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">مشاهده همه<i class="ki-outline ki-eye fs-5 ps-3"></i></a>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                            <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-6.jpg')}}" />
                                    </div>
                                </div>
                                <div class="fw-semibold">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">محمد علی ناصحی</a>

                                    <div class="text-gray-500">
                                       لورم ایپسوم
                                    </div>
                                </div>
                                <!--end::Details-->

                                <!--begin::Badge-->
                                <div class="badge badge-light ms-auto">5</div>
                                <!--end::Badge-->
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Avatar-->
                                <div class="me-5 position-relative">
                                    <!--begin::Image-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Online-->
                                    <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                    <!--end::Online-->
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">مهسا امامی</a>

                                    <div class="text-gray-500">
                                        لورم ایپسوم
                                    </div>
                                </div>
                                <!--end::Details-->

                                <!--begin::Badge-->
                                <div class="badge badge-light ms-auto">8</div>
                                <!--end::Badge-->
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Avatar-->
                                <div class="me-5 position-relative">
                                    <!--begin::Image-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-1.jpg')}}" />
                                    </div>
                                    <!--end::Image-->

                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">مینا دمیرچی</a>

                                    <div class="text-gray-500">
                                      لورم ایپسوم
                                    </div>
                                </div>
                                <!--end::Details-->

                                <!--begin::Badge-->
                                <div class="badge badge-light ms-auto">9</div>
                                <!--end::Badge-->
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Avatar-->
                                <div class="me-5 position-relative">
                                    <!--begin::Image-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-5.jpg')}}" />
                                    </div>
                                    <!--end::Image-->

                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">فرتاش آذرسینا</a>

                                    <div class="text-gray-500">
                                    لورم ایپسوم
                                    </div>
                                </div>
                                <div class="badge badge-light ms-auto">3</div>
                            </div>
                            <div class="d-flex align-items-center ">
                                <div class="me-5 position-relative">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{url('panel/assets/media/avatars/300-25.jpg')}}" />
                                    </div>
                                </div>
                                <div class="fw-semibold">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">سینا آذرینا</a>

                                    <div class="text-gray-500">
                                       لورم ایپسوم
                                    </div>
                                </div>
                                <div class="badge badge-light ms-auto">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <div class="card-header mt-5">
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">لیست تمام تسک ها</h3>

                        <div class="fs-6 text-gray-500"></div>
                    </div>
                    <div class="card-toolbar my-1">
                        <div class="me-6 my-1">
                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected>All time</option>
                                <option value="thisyear">This year</option>
                                <option value="thismonth">This month</option>
                                <option value="lastmonth">Last month</option>
                                <option value="last90days">Last 90 days</option>
                            </select>
                        </div>
                        <div class="me-4 my-1">
                            <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected>All Orders</option>
                                <option value="Approved">Approved</option>
                                <option value="Declined">Declined</option>
                                <option value="In Progress">In Progress</option>
                                <option value="In Transit">In Transit</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                            <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold text-start">
                            <thead class="fs-7 text-gray-500 text-uppercase text-start">
                            <tr>
                                <th class="text-start">ردیف</th>
                                <th class="text-start">ناظر تسک</th>
                                <th class="text-start">عنوان تسک</th>
                                <th class="text-start">تاریخ شروع تخمینی</th>
                                <th class="text-start">تاریخ پایان تخمینی</th>
                                <th class="text-start">تاریخ شروع واقعی</th>
                                <th class="text-start">وضعیت</th>
                                <th class="text-start">جزییات</th>
                            </tr>
                            </thead>
                            <tbody class="fs-6">
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-5 position-relative">
                                            <div class="symbol symbol-35px symbol-circle">
                                                @if($task->watcher?->photo_id)
                                                <img alt="Pic" src="{{route('home')}}/{{$task->watcher?->photo?->path}}" />
                                                @else
                                                    <i class="ki-outline ki-profile-user fs-3"></i>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary">{{$task->watcher?->Name}}</a>

                                            <div class="fw-semibold text-gray-500">{{$task->watcher?->email}} - {{role_name($task->watcher?->getRoleNames()->first())}}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-start">{{$task->title}}</td>
                                <td class="text-start">{{\Carbon\Carbon::parse($task->start_date)->format('Y/m/d')}}</td>
                                <td class="text-start">@if($task->end_date) {{\Carbon\Carbon::parse($task->end_date)->format('Y/m/d')}}@endif</td>
                                <td class="text-start">{{\Carbon\Carbon::parse($task->start_date)->format('Y/m/d')}}</td>
                                <td class="text-start">
                                    {!! $task->TaskStatus !!}
{{--                                <span class="badge badge-light-success fw-bold px-4 py-3">--}}
{{--                                    Approved                                --}}
{{--                                </span>--}}
                                </td>
                                <td class="text-start">
                                    <a href="{{route('dashboard.task.show',$task->id)}}"
                                        type="button"
                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده جزییات تسک">
                                        <i class="ki-outline ki-eye fs-3"></i>
                                    </a>
                                    <a href="{{route('dashboard.task.show',$task->id)}}"
                                       type="button"
                                       class="btn btn-clean btn-sm btn-icon btn-icon-secondary btn-active-light-warning ms-auto"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="آرشیو کردن تسک">
                                        <i class="ki-outline ki-archive fs-3"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table-->
        </div>
    </div>
</x-layout>
