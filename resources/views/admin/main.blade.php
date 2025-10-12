@extends('admin.index')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">درآمد</p>
                            <h4 class="my-1">4805000</h4>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-up-arrow align-middle'>
                                </i>3400000 هفته
                                قبل</p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-wallet'>
                            </i>
                        </div>
                    </div>
                    <div id="chart1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">کل مشتریان</p>
                            <h4 class="my-1">8.4K</h4>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-up-arrow align-middle'>
                                </i>14% هفته قبل
                            </p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-group'>
                            </i>
                        </div>
                    </div>
                    <div id="chart2">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">بازدید از فروشگاه</p>
                            <h4 class="my-1">59K</h4>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-down-arrow align-middle'>
                                </i>12.4%
                                هفته قبل</p>
                        </div>
                        <div class="widgets-icons ms-auto">

                            <i  class='bx bxs-binoculars'>
                            </i>
                        </div>
                    </div>
                    <div id="chart3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-xl-2">
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-1">شاخص های فروشگاه</h5>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-calendar'>
                                </i>درآمد در 30 روز گذشته</p>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-3 mt-4">
                        <div class="col">
                            <div>
                                <p class="mb-0">درآمد</p>
                                <h4 class="my-1 text-white">4805000</h4>
                                <p class="mb-0 font-13">

                                    <i  class='bx bxs-up-arrow align-middle'>
                                    </i>14580000
                                    ماه قبل</p>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="mb-0">کل مشتریان</p>
                                <h4 class="my-1 text-white">8.4K</h4>
                                <p class="mb-0 font-13">

                                    <i  class='bx bxs-up-arrow align-middle'>
                                    </i>12.3%
                                    ماه قبل</p>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="mb-0">بازدید از فروشگاه</p>
                                <h4 class="my-1 text-white">59K</h4>
                                <p class="mb-0 font-13">

                                    <i  class='bx bxs-down-arrow align-middle'>
                                    </i>2.4%
                                    ماه قبل</p>
                            </div>
                        </div>
                    </div>
                    <div id="chart4">
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-1">برترین محصولات</h5>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-calendar'>
                                </i>درآمد در 30 روز گذشته</p>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-1">سابقه تراکنش ها</h5>
                            <p class="mb-0 font-13">

                                <i  class='bx bxs-calendar'>
                                </i>درآمد در 30 روز گذشته</p>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                            <thead class="table-light">
                            <tr>
                                <th>نام پرداخت</th>
                                <th>تاریخ و زمان</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-1.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت برای خرید</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #8547846</p>
                                        </div>
                                    </div>
                                </td>
                                <td>10 خرداد 1402</td>
                                <td>2560000</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-2.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت برای خرید محصول</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #9653248</p>
                                        </div>
                                    </div>
                                </td>
                                <td>12 خرداد 1402</td>
                                <td>+566.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">درجریان
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-3.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت برای خرید محصولات</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #7689524</p>
                                        </div>
                                    </div>
                                </td>
                                <td>14 خرداد 1402</td>
                                <td>+636.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">رد شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-4.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف جواد بینام</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #8335884</p>
                                        </div>
                                    </div>
                                </td>
                                <td>15 خرداد 1402</td>
                                <td>+246.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-7.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف داوود بهادری</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #7865986</p>
                                        </div>
                                    </div>
                                </td>
                                <td>16 خرداد 1402</td>
                                <td>+876.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">درجریان
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-8.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف لیلا کرمی</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #8576420</p>
                                        </div>
                                    </div>
                                </td>
                                <td>18 خرداد 1402</td>
                                <td>+536.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-9.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف جمال کیهان</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #3775420</p>
                                        </div>
                                    </div>
                                </td>
                                <td>18 خرداد 1402</td>
                                <td>+536.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-10.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف پدرام کواکبی</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #3768920</p>
                                        </div>
                                    </div>
                                </td>
                                <td>19 خرداد 1402</td>
                                <td>+536.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-11.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف جاوید صیادی</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #9673520</p>
                                        </div>
                                    </div>
                                </td>
                                <td>20 خرداد 1402</td>
                                <td>+86.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">رد شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-12.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف لیلا کرمی</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #8576420</p>
                                        </div>
                                    </div>
                                </td>
                                <td>18 خرداد 1402</td>
                                <td>+536.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-13.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف داوود بهادری</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #8576420</p>
                                        </div>
                                    </div>
                                </td>
                                <td>22 خرداد 1402</td>
                                <td>+854.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">درجریان
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{url('assets/admin/images/avatars/avatar-14.png')}}"
                                                 class="rounded-circle" width="46" height="46"
                                                 alt="توضیح تصویر" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">پرداخت از طرف طاهر وحیدی</h6>
                                            <p class="mb-0 font-13">شماره پیگیری #4278620</p>
                                        </div>
                                    </div>
                                </td>
                                <td>18 خرداد 1402</td>
                                <td>+536.00</td>
                                <td>
                                    <div class="badge rounded-pill bg-light text-white w-100">کامل شده
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card radius-10 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">نرخ ترک</p>
                            <h4 class="mb-0">48.32%</h4>
                        </div>
                        <div class="ms-auto">
                            <p class="mb-0 font-13 text-white">+12.34 افزایش</p>
                            <p class="mb-0 font-13">از هفته قبل</p>
                        </div>
                    </div>
                </div>
                <div id="chart12">
                </div>
            </div>
            <div class="card radius-10 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">بازدید ازصفحات</p>
                            <h4 class="mb-0">52.64%</h4>
                        </div>
                        <div class="ms-auto">
                            <p class="mb-0 font-13 text-white">+21.34 افزایش</p>
                            <p class="mb-0 font-13">از هفته قبل</p>
                        </div>
                    </div>
                </div>
                <div id="chart13">
                </div>
            </div>
            <div class="card radius-10 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">نشست های جدید</p>
                            <h4 class="mb-0">68.23%</h4>
                        </div>
                        <div class="ms-auto">
                            <p class="mb-0 font-13 text-white">+18.42 افزایش</p>
                            <p class="mb-0 font-13">از هفته قبل</p>
                        </div>
                    </div>
                </div>
                <div id="chart14">
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">برترین دسته بندی ها</h5>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5" id="chart15">
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li
                        class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        بچگانه<span class="badge bg-light-white-2 rounded-pill">25</span>
                    </li>
                    <li
                        class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        زنانه<span class="badge bg-light-white-3 rounded-pill">10</span>
                    </li>
                    <li
                        class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        مردانه <span class="badge bg-white rounded-pill text-dark">65</span>
                    </li>
                    <li
                        class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        مبلمان<span class="badge bg-light-white-4 text-white rounded-pill">14</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <p class="font-weight-bold mb-1">بازدیدکنندگان</p>
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0">43,540</h4>
                        </div>
                        <div class="">
                            <p class="mb-0 align-self-center font-weight-bold ms-2">4.4 <i
                                    class='bx bxs-up-arrow-alt mr-2'>
                                </i>
                            </p>
                        </div>
                    </div>
                    <div id="chart21">
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">خلاصه فروش</h5>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5" id="chart20">
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-flex align-items-center justify-content-between text-center">
                        <div>
                            <h6 class="mb-1 font-weight-bold">28942000</h6>
                            <p class="mb-0">هفته قبل</p>
                        </div>
                        <div class="mb-1">
                            <h6 class="mb-1 font-weight-bold">856140000</h6>
                            <p class="mb-0">ماه قبل</p>
                        </div>
                        <div>
                            <h6 class="mb-1 font-weight-bold">987250000</h6>
                            <p class="mb-0">یکسال قبل</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">مشتریان جدید</h5>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="customers-list p-3 mb-3">

                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-24.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">شهین شاهسوند</h6>
                            <p class="mb-0 font-13">s.stephen@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-20.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">کیان متقی</h6>
                            <p class="mb-0 font-13">Keate@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-16.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">پرهام بهادری</h6>
                            <p class="mb-0 font-13">pauly.b@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-25.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">وحید مردانی</h6>
                            <p class="mb-0 font-13">winslet_02@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-11.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">بهرام بنیادی</h6>
                            <p class="mb-0 font-13">bruno.b@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-17.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">مریم دانایی</h6>
                            <p class="mb-0 font-13">merlyn.d@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="{{url('assets/admin/images/avatars/avatar-7.png')}}" class="rounded-circle" width="46"
                                 height="46" alt="توضیح تصویر" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">علی کمالی</h6>
                            <p class="mb-0 font-13">alister_42@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto"> <a href="javascript:;"
                                                                                       class="list-inline-item">

                                <i  class='bx bxs-envelope'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bxs-microphone'>
                                </i>
                            </a>
                            <a href="javascript:;" class="list-inline-item">
                                <i
                                    class='bx bx-dots-vertical-rounded'>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">خلاصه سفارشات</h5>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown">
                                <i
                                    class='bx bx-dots-horizontal-rounded font-22  text-option'>
                                </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیات</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row m-0 row-cols-1 row-cols-md-3">
                        <div class="col border-end">
                            <div id="chart16">
                            </div>
                        </div>
                        <div class="col border-end">
                            <div id="chart17">
                            </div>
                        </div>
                        <div class="col">
                            <div id="chart18">
                            </div>
                        </div>
                    </div>
                    <div id="chart19">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">خلاصه سفارشات</h5>
                </div>
                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <i class='bx bx-dots-horizontal-rounded font-22  text-option'>
                        </i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="javascript:;">عملیات</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>شناسه سفارش</th>
                        <th>محصول</th>
                        <th>مشتری</th>
                        <th>تاریخ</th>
                        <th>قیمت</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#897656</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/chair.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">صندلی آبی روشن</h6>
                                </div>
                            </div>
                        </td>
                        <td>بردیا زاهدی</td>
                        <td>12 خرداد 1402</td>
                        <td>6400000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>معلق</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#987549</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/shoes.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">کفش ورزشی سبز</h6>
                                </div>
                            </div>
                        </td>
                        <td>محمد هویدا</td>
                        <td>14 خرداد 1402</td>
                        <td>4500000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>ارسال شده</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#685749</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/headphones.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">هدفن قرمز</h6>
                                </div>
                            </div>
                        </td>
                        <td>شهین شاهسوند</td>
                        <td>15 خرداد 1402</td>
                        <td>6700000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>کامل شده</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#887459</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/idea.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">مینی لپتاپ</h6>
                                </div>
                            </div>
                        </td>
                        <td>علی کمالی</td>
                        <td>18 خرداد 1402</td>
                        <td>8700000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>کامل شده</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#335428</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/user-interface.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">تلفن موبایل بنقش</h6>
                                </div>
                            </div>
                        </td>
                        <td>کیان متقی</td>
                        <td>20 خرداد 1402</td>
                        <td>7500000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>معلق</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#224578</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/watch.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">ساعت مچی هوشمند</h6>
                                </div>
                            </div>
                        </td>
                        <td>وحید مردانی</td>
                        <td>22 خرداد 1402</td>
                        <td>8000000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>ارسال شده</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#447896</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="recent-product-img">
                                    <img src="{{url('assets/admin/images/icons/tshirt.png')}}" alt="توضیح تصویر">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">تیشرت آّبی</h6>
                                </div>
                            </div>
                        </td>
                        <td>الهام جوادی</td>
                        <td>28 خرداد 1402</td>
                        <td>9600000</td>
                        <td>
                            <div class="d-flex align-items-center text-white">
                                <i
                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'>
                                </i>
                                <span>معلق</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex order-actions"> <a href="javascript:;" class="">
                                    <i
                                        class="bx bx-cog">
                                    </i>
                                </a>
                                <a href="javascript:;" class="ms-4">
                                    <i
                                        class='bx bx-down-arrow-alt'>
                                    </i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
