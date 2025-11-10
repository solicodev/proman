<!DOCTYPE html>
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت')</title>
    <link rel="shortcut icon" href="{{url('panel/assets/media/logos/favicon.ico')}}"/>

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
    <link href="{{url('panel/assets/css/main.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('panel/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <link href="{{url('assets/admin/plugins/JalaliDatePicker/jalalidatepicker.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}" rel="stylesheet"/>
    <link href="{{url('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/assets/css/filepond-plugin-image-preview.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/assets/css/filepond.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/assets/css/cropper.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('panel/assets/css/persian-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/jgrowl.min.css') }}">


    @stack('styles')
</head>
<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
      class="app-default">

@yield('body')


<!-- Test -->

{{--<script src="{{ asset('assets/admin/js/jgrowl.min.js') }}"></script>--}}
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{url('panel/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('panel/assets/js/scripts.bundle.js')}}"></script>
<script src="{{url('panel/assets/js/custom/apps/projects/settings/settings.js')}}"></script>
<script src="{{url('panel/assets/js/custom/apps/projects/project/project.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
<script src="{{url('panel/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
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

<script src="{{url('panel/assets/js/widgets.bundle.js')}}"></script>
<script src="{{url('panel/assets/js/custom/widgets.js')}}"></script>

<script src="{{url('assets/admin/plugins/datetimepicker/js/legacy.js')}}"></script>
<script src="{{url('assets/admin/plugins/datetimepicker/js/picker.js')}}"></script>
<script src="{{url('assets/admin/plugins/datetimepicker/js/picker.time.js')}}"></script>
<script src="{{url('assets/admin/plugins/datetimepicker/js/picker.date.js')}}"></script>
<script src="{{url('assets/admin/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
<script src="{{url('assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
<script src="{{url('assets/admin/plugins/JalaliDatePicker/jalalidatepicker.min.js')}}"></script>

<script src="{{url('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>

<script src="{{ asset('panel/assets/js/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('panel/assets/js/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ asset('panel/assets/js/filepond.js') }}"></script>
<script src="{{ asset('panel/assets/js/cropper.min.js') }}"></script>

<script src="{{ asset('panel/assets/js/persian-date.min.js') }}"></script>
<script src="{{ asset('panel/assets/js/persian-datepicker.min.js') }}"></script>


<script>
    jalaliDatepicker.startWatch({
        showTodayBtn: true,
        showEmptyBtn: true,
        time: true,
        topSpace: 10,
        bottomSpace: 30,
        dayRendering(opt, input) {
            return {
                isHollyDay: opt.day == 1,
            };
        },
    });
</script>
<script>
    $(".datepicker").pickadate({
        selectMonths: true,
        selectYears: true,
    }),
        $(".timepicker").pickatime();
</script>
<script>
    $(function () {
        $("#date-time").bootstrapMaterialDatePicker({
            format: "YYYY-MM-DD HH:mm",
        });
        $("#date").bootstrapMaterialDatePicker({
            time: false,
        });
        $("#time").bootstrapMaterialDatePicker({
            date: false,
            format: "HH:mm",
            cancelText: "انصراف",
            okText: "خب",
        });
    });

    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
        url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 10,
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });


</script>
<script>
    var photosGallery = []
    var drop = new Dropzone('#photo' , {
        addRemoveLinks : true,
        url : "{{route('photos.upload')}}",
        sending : function (file ,xhr ,formData) {
            formData.append("_token" , "{{csrf_token()}}")
        },
        success: function (file, response){
            photosGallery.push(response.photos)
        }
    });
    productGallery = function () {
        document.getElementById('pro-photo').value = photosGallery
    }
</script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);

    const options = {
        labelIdle: 'فایل خود را اینجا رها کنید یا <span class="filepond--label-action"> انتخاب کنید </span>',
        acceptedFileTypes: ['image/*'],
    }
</script>
<script>
    document.getElementById("current-year").innerHTML = new Date().getFullYear();
</script>
<!-- jQuery -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}
{{--<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>--}}
<!-- jGrowl -->

<script src="{{asset('assets/admin/js/jgrowl.min.js')}}"></script>
<!--end::Custom Javascript-->
@stack('scripts')
</body>
</html>
