<x-layout>
    @include('proMan.projects.main-card')
    <div class="col-12">
        <div class="card card-flush h-lg-100">
            <div class="card-header mt-6">
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">گزارش وضعیت تسک ها</h3>
                    <div class="fs-6 d-flex text-gray-500 fs-6 fw-semibold">
                        <div class="d-flex align-items-center me-6">
                    <span class="menu-bullet d-flex align-items-center me-2">
                        <span class="bullet bg-success"></span>
                    </span>
                            انجام شده
                        </div>
                        <div class="d-flex align-items-center">
                    <span class="menu-bullet d-flex align-items-center me-2">
                        <span class="bullet bg-primary"></span>
                    </span>
                            درحال انجام
                        </div>
                    </div>
                </div>
                <div class="card-toolbar">
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                        <option value="1">2020 Q1</option>
                        <option value="2">2020 Q2</option>
                        <option value="3" selected>2020 Q3</option>
                        <option value="4">2020 Q4</option>
                    </select>
                </div>
            </div>
            <div class="card-body pt-10 pb-0 px-5">
                <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
            </div>
        </div>
    </div>


    </div>
    </div>
</x-layout>
