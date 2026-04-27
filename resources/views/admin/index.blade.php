@include('admin.layout.style')
<body class="bg-theme bg-theme9">

<div class="wrapper">

    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{url('assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="توضیح تصویر">
            </div>
            <div>
                <h4 class="logo-text">پنل مدیریت

                </h4>
            </div>
            <div class="toggle-icon ms-auto">

                <i  class='bx bx-arrow-back'>
                </i>
            </div>
        </div>

        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon">

                        <i  class='bx bx-home-alt'>
                        </i>
                    </div>
                    <div class="menu-title">داشبورد</div>
                </a>
                @if(\Illuminate\Support\Facades\Auth::user()->hasrole('Super Admin'))
                <ul>
                    <li> <a href="{{route('admin.index')}}">

                            <i  class='bx bx-radio-circle'>
                            </i>Super Admin</a>
                    </li>
                    <li> <a href="{{route('dashboard.index')}}">

                            <i  class='bx bx-radio-circle'>
                            </i>مدیریت پروژه</a>
                    </li>
                </ul>
                @endif
            </li>
            @if(\Illuminate\Support\Facades\Auth::user()->hasrole('Super Admin'))
            <li class="menu-label">مدیریت کمپین ها</li>
            <li>
                <a href="{{route('admin.campaign.agancy.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> آژانس ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.campaign.influencer.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> influencer ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.campaign.brand.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> برندهای کمپین</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.campaign.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> کمپین ها</div>
                </a>
            </li>
            @endif
            <li class="menu-label">مدیریت پروژه ها</li>
            {{--                <li class="menu-label">مدیریت دپارتمان ها</li>--}}
            <li>
                <a href="{{route('admin.implementeUnit.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-home-circle'>
                        </i>
                    </div>
                    <div class="menu-title"> واحد های انجام دهنده پروژه ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.team.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-home-circle'>
                        </i>
                    </div>
                    <div class="menu-title"> تیم ها </div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.department.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-home-circle'>
                        </i>
                    </div>
                    <div class="menu-title"> دپارتمان/بیزنس</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.brand.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-home-circle'>
                        </i>
                    </div>
                    <div class="menu-title"> برند ها</div>
                </a>
            </li>
            {{--                <li class="menu-label">مدیریت پرسنل</li>--}}
            <li>
                <a href="{{route('admin.position.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> پوزیشن ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.user.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> پرسنل</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.ticket.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> تیکت ها</div>
                </a>
            </li>
            {{--                <li class="menu-label">مدیریت پروژه ها</li>--}}
            <li>
                <a href="{{route('admin.category.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> دسته بندی ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.project.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> پروژه ها</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.task.index')}}">
                    <div class="parent-icon">

                        <i  class='bx bx-list-check'>
                        </i>
                    </div>
                    <div class="menu-title"> تسک ها</div>
                </a>
            </li>
            {{--                <li class="menu-label">مدیریت رسانه ها</li>--}}
{{--            <li>--}}
{{--                <a href="{{route('admin.photo.index')}}">--}}
{{--                    <div class="parent-icon">--}}

{{--                        <i  class='bx bx-list-check'>--}}
{{--                        </i>--}}
{{--                    </div>--}}
{{--                    <div class="menu-title"> رسانه ها</div>--}}
{{--                </a>--}}
{{--            </li>--}}
            {{--                <li class="menu-label">مدیریت دسترسی ها</li>--}}
{{--            <li>--}}
{{--                <a href="{{route('admin.permission.index')}}">--}}
{{--                    <div class="parent-icon">--}}

{{--                        <i  class='bx bx-list-check'>--}}
{{--                        </i>--}}
{{--                    </div>--}}
{{--                    <div class="menu-title"> دسترسی ها</div>--}}
{{--                </a>--}}
{{--            </li>--}}

            {{--            <li>--}}
            {{--                <a href="javascript:;" class="has-arrow">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class='bx bx-cart'>--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">فروشگاهی</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="ecommerce-products.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>محصولات</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="ecommerce-products-details.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>جزئیات--}}
            {{--                            محصول</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="ecommerce-add-new-products.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>افزودن محصول--}}
            {{--                            جدید</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="ecommerce-orders.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>سفارشات</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class='bx bx-bookmark-heart'>--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">کامپوننت ها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="component-alerts.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>هشدارها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-accordions.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>آکاردیون</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-badges.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>بج ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-buttons.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>دکمه ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-cards.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>کارت ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-carousels.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>اسلایدرها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-list-groups.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>لیست ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-media-object.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>آبجکت های رسانه</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-modals.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>مودالها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-navs-tabs.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>تب و نو ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-navbar.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>نوبار</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-paginations.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>صفحه شماری</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-popovers-tooltips.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>پاپ آپ و--}}
            {{--                            تولتیپ ها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-progress-bars.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>میله پیشرفت</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-spinners.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>اسپینرها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-notifications.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>اعلانها</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="component-avtars-chips.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>آواتار</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-repeat">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">محتوا</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="content-grid-system.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>سیستم شبکه ای</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="content-typography.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>تایپوگرافی</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="content-text-utilities.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>ابزارهای متن</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}
            {{--                        <i class="bx bx-donate-blood">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">آیکن ها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="icons-line-icons.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>آیکن خطی</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="icons-boxicons.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>باکس آیکن</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="icons-feather-icons.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>فیدر آیکن</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <li class="menu-label">فرم ها و جداول</li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class='bx bx-message-square-edit'>--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">فرمها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="form-elements.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>المان های فرم</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-input-group.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>گروه های ورودی</a>--}}
            {{--                    </li>--}}

            {{--                    <li> <a href="form-layouts.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>لایه های فرم</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-validations.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>اعتبارسنجی فرم</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-wizard.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>فرم مرحله ایی</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-text-editor.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>ویرایشگر متن</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-file-upload.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>آپلود فایل</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-date-time-pickes.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>انتخابگر تاریخ</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-select2.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>پلاگین Select2</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="form-repeater.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>تکرار کننده فرم</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-grid-alt">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">جداول</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="table-basic-table.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>جدول ساده</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="table-datatable.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>جدول داده </a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li class="menu-label">صفحات</li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-lock">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">احراز هویت</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li>--}}
            {{--                        <a class="has-arrow" href="javascript:;">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>ساده</a>--}}
            {{--                        <ul>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-basic-signin.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-basic-signup.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ثبت نام</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-basic-forgot-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>فراموشی رمز ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-basic-reset-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>بازنشانی رمز</a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a class="has-arrow" href="javascript:;">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>کاور</a>--}}
            {{--                        <ul>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-cover-signin.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-cover-signup.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ثبت نام</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-cover-forgot-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>فراموشی رمز ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-cover-reset-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>بازنشانی رمز</a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a class="has-arrow" href="javascript:;">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>با سرصفحه و--}}
            {{--                            پاصفحه</a>--}}
            {{--                        <ul>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-header-footer-signin.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-header-footer-signup.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>ثبت نام</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-header-footer-forgot-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>فراموشی رمز ورود</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a href="auth-header-footer-reset-password.html" target="_blank">--}}
            {{--                                    <i class='bx bx-radio-circle'>--}}
            {{--                                    </i>بازنشانی رمز</a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="user-profile.html">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-user-circle">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">پروفایل کاربر</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="timeline.html">--}}
            {{--                    <div class="parent-icon">--}}
            {{--                        <i class="bx bx-video-recording">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">تایم لاین</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-error">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">خطاها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="errors-404-error.html" target="_blank">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>--}}
            {{--                            خطای 404</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="errors-500-error.html" target="_blank">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>خطای--}}
            {{--                            500</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="errors-coming-soon.html" target="_blank">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>صفحه--}}
            {{--                            بزودی</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="error-blank-page.html" target="_blank">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>صفحه--}}
            {{--                            خالی</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="faq.html">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-help-circle">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">سوالات متداول</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="pricing-table.html">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-diamond">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">قیمت ها</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li class="menu-label">چارت و نقشه</li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-line-chart">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">چارت ها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="charts-apex-chart.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>اپکس</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="charts-chartjs.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>چارت جی اس</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="charts-highcharts.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>هایچارتز</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-map-alt">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">نقشه ها</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a href="map-google-maps.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>نقشه گوگل</a>--}}
            {{--                    </li>--}}
            {{--                    <li> <a href="map-vector-maps.html">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>نقشه های وکتور</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li class="menu-label">سایر</li>--}}
            {{--            <li>--}}
            {{--                <a class="has-arrow" href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-menu">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">منوی چندسطحی</div>--}}
            {{--                </a>--}}
            {{--                <ul>--}}
            {{--                    <li> <a class="has-arrow" href="javascript:;">--}}

            {{--                            <i  class='bx bx-radio-circle'>--}}
            {{--                            </i>سطح یک</a>--}}
            {{--                        <ul>--}}
            {{--                            <li> <a class="has-arrow" href="javascript:;">--}}

            {{--                                    <i  class='bx bx-radio-circle'>--}}
            {{--                                    </i>سطح--}}
            {{--                                    2</a>--}}
            {{--                                <ul>--}}
            {{--                                    <li> <a href="javascript:;">--}}

            {{--                                            <i  class='bx bx-radio-circle'>--}}
            {{--                                            </i>سطح 3</a>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="javascript:;">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-folder">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">مستندات</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li>--}}
            {{--                <a href="#" target="_blank">--}}
            {{--                    <div class="parent-icon">--}}

            {{--                        <i  class="bx bx-support">--}}
            {{--                        </i>--}}
            {{--                    </div>--}}
            {{--                    <div class="menu-title">پشتیبانی</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
        </ul>

    </div>


    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-menu">

                    <i  class='bx bx-menu'>
                    </i>
                </div>
                {{--                <div class="search-bar flex-grow-1">--}}
                {{--                    <div class="position-relative search-bar-box">--}}

                {{--                        <input type="text" class="form-control search-control" placeholder="جستجو کنید...">--}}
                {{--                        <span class="position-absolute top-50 search-show translate-middle-y">--}}
                {{--								<i  class='bx bx-search'>--}}
                {{--								</i>--}}
                {{--								</span>--}}
                {{--                        <span class="position-absolute top-50 search-close translate-middle-y">--}}
                {{--								<i  class='bx bx-x'>--}}
                {{--								</i>--}}
                {{--								</span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">
                        <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#SearchModal">
                            <a class="nav-link" href="javascript:;">

                                <i  class='bx bx-search'>
                                </i>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-app">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                               href="javascript:;">

                                <i  class='bx bx-grid-alt'>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="app-container p-2 my-2">
                                    <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/slack.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">اسلک</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/behance.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">بیهنس</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/google-drive.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">دریبل</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/outlook.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">اوتلوک</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/github.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">گیت هاب</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/stack-overflow.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">استک</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/figma.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">استک</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/twitter.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">توییتر</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/google-calendar.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">تقویم</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="app-box text-center">
                                                    <div class="app-icon">
                                                        <img src="{{url('assets/admin/images/app/spotify.png')}}" width="30"
                                                             alt="توضیح تصویر">
                                                    </div>
                                                    <div class="app-name">
                                                        <p class="mb-0 mt-1">اسپاتیفای</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                               data-bs-toggle="dropdown">
                                <span class="alert-count">2</span>
                                <i class='bx bx-bell'>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">اعلانها</p>
                                        <p class="msg-header-badge">7 جدید</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{url('assets/admin/images/avatars/avatar-1.png')}}" class="msg-avatar"
                                                     alt="توضیح تصویر">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">دنیا اوحدی<span class="msg-time float-end">5
															ثانیه قبل</span>
                                                </h6>
                                                <p class="msg-info">لورم ایپسوم متن ساختگی</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger">د س</div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">سفارشات جدید <span class="msg-time float-end">2
															دقیقه قبل</span>
                                                </h6>
                                                <p class="msg-info">سفارشات جدیدی ثبت شده است</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">
                                        <button class="btn btn-light w-100">نمایش همه اعلان ها</button>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        {{--                        <img src="{{url('assets/admin/images/avatars/avatar-2.png')}}" class="user-img" alt="توضیح تصویر">--}}
                        <i class="bx bx-user-circle font-30"></i>
                        <div class="user-info">
                            <p class="user-name mb-0">{{\Illuminate\Support\Facades\Auth::user()->Name}}</p>
                            <p class="designattion mb-0">{{role_name(\Illuminate\Support\Facades\Auth::user()->getRoleNames()->first())}}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                <i
                                    class="bx bx-user fs-5">
                                </i>
                                <span>پروفایل</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                <i
                                    class="bx bx-cog fs-5">
                                </i>
                                <span>تنظیمات</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                <i
                                    class="bx bx-home-circle fs-5">
                                </i>
                                <span>داشبورد</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                <i
                                    class="bx bx-dollar-circle fs-5">
                                </i>
                                <span>درآمدها</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                <i
                                    class="bx bx-download fs-5">
                                </i>
                                <span>دانلودها</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0">
                            </div>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">خروج</button>
                            </form>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>


    <div class="overlay toggle-icon">
    </div>

    <a href="javaScript:;" class="back-to-top">
        <i
            class='bx bxs-up-arrow-alt'>
        </i>
    </a>

    <footer class="page-footer">
        <p class="mb-0">کپی رایت  <span id="year"> </span>© . کلیه حقوق محفوظ است.</p>
    </footer>
</div>

@include('admin.layout.script')

