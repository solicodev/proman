<x-layout>

    @include('proMan.projects.main-card')

    <!--begin::Col-->
    <div class="col-12">

        <!--begin::Card-->
        <div class="card card-flush h-lg-100">
            <div class="card-header mt-6">
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">فایل های آپلود شده در کل پروژه</h3>

                    <div class="fs-6 text-gray-500">Total 382 fiels, 2,6GB space usage</div>
                </div>

{{--                <div class="card-toolbar">--}}
{{--                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>--}}
{{--                </div>--}}
            </div>

            <div class="card-body p-9 pt-3">
                <div class="d-flex flex-column mb-9">
                    @foreach($resultFiles as $file)
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
                        {{$resultFiles->links("pagination::bootstrap-5")}}
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
</x-layout>
