@extends('admin.index')
@section('content')
    <h6 class="mb-0 text-uppercase">لیست پرسنل</h6>
    <hr />
    @include('layouts.message')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table  class="data_table table table-striped table-bordered page_speed_944522378">
                    <thead>
                    <tr>
                        <th></th>
                        <th>نوع</th>
                        <th>تاریخ شروع </th>
                        <th>تاریخ پایان </th>
                        <th>واحد انجام دهنده</th>
                        <th>پیام</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($notifications as $notification)
                        @php
                            $implement_unit = \App\Models\ImplementeUnit::where('id',$notification['data']['data']['implementeunit_id'])->first();
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            @if($notification['data']['type'] == 'project_approve')
                            <td> تایید پروژه</td>
                            <td> {{verta($notification['data']['data']['start_date']['date'])->format('H:m:s')}} {{ verta($notification['data']['data']['start_date']['date'])->format('Y/m/d') }} </td>
                            <td> {{verta($notification['data']['data']['end_date']['date'])->format('H:m:s')}} {{ verta($notification['data']['data']['end_date']['date'])->format('Y/m/d') }} </td>
                            <td> {{ $implement_unit->name }}</td>
                            <td> {{ $notification['data']['data']['message'] ?? ''}}</td>
                            <td>
                                <div class="d-flex">
                                        <a href="{{ route('admin.project.show',$notification->data['data']['project_id']) }}" class="text-primary ms-3" >
                                            مشاهده   <i class="bx bxs-eye"></i>
                                        </a>
                                </div>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
