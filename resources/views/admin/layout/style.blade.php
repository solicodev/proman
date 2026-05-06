<!doctype html>
<html lang="fa" dir="rtl">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{url('assets/admin/images/favicon-32x32.png')}}" type="image/png" />

    <link href="{{url('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

    <link href="{{url('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{url('assets/admin/js/pace.min.js')}}">
    </script>

    <link href="{{url('assets/admin/plugins/fancy-file-uploader/fancy_fileupload.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet"/>

    <link href="{{url('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/css/bootstrap-extended.css')}}" rel="stylesheet">
    {{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">--}}

    <link href="{{url('assets/admin/css/icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/fonts/Vazirmatn-FD-font-face.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/css/app.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/plugins/select2/select2-bootstrap-5-theme.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/plugins/JalaliDatePicker/jalalidatepicker.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}" rel="stylesheet"/>

    <link href="{{ url('assets/admin/css/jgrowl.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/boxicon.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/boxicons.css') }}" rel="stylesheet" />
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">--}}
    @stack('style')

    <title>پنل مدیریت</title>

    <style>
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.2; }
            100% { opacity: 1; }
        }

        .blink {
            animation: blink 1.5s infinite ease-in-out;
        }

        @keyframes bell-ring-interval {
            0%, 90%, 100% { transform: rotate(0); }
            92% { transform: rotate(15deg); }
            94% { transform: rotate(-15deg); }
            96% { transform: rotate(10deg); }
            98% { transform: rotate(-10deg); }
        }

        .bell-animate {
            animation: bell-ring-interval 3s infinite;
            transform-origin: top center;
        }
    </style>
</head>
