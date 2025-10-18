<!DOCTYPE html>
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت')</title>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{url('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('panel/assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{url('panel/assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('panel/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
      class="app-default">
@yield('body')
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{url('panel/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('panel/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{url('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{url('panel/assets/lib/5/index.js')}}"></script>
<script src="{{url('panel/assets/lib/5/xy.js')}}"></script>
<script src="{{url('panel/assets/lib/5/percent.js')}}"></script>
<script src="{{url('panel/assets/lib/5/radar.js')}}"></script>
<script src="{{url('panel/assets/lib/5/themes/Animated.js')}}"></script>
<script src="{{url('panel/assets/lib/5/map.js')}}"></script>
<script src="{{url('panel/assets/lib/5/geodata/worldLow.js')}}"></script>
<script src="{{url('panel/assets/lib/5/geodata/continentsLow.js')}}"></script>
<script src="{{url('panel/assets/lib/5/geodata/usaLow.js')}}"></script>
<script src="{{url('panel/assets/lib/5/geodata/worldTimeZonesLow.js')}}"></script>
<script src="{{url('panel/assets/lib/5/geodata/worldTimeZoneAreasLow.js')}}"></script>
<script src="{{url('panel/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{url('panel/assets/js/widgets.bundle.js')}}"></script>
<script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>
<script src="{{url('panel/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/new-target.js')}}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
</body>
</html>
