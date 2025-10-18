<script src="{{url('assets/admin/js/jquery.min.js')}}" type="text/javascript">
</script>
<script src="{{url('assets/admin/js/bootstrap.bundle.min.js')}}" type="text/javascript">
</script>
<script src="{{url('assets/admin/js/main.js')}}" type="text/javascript">
</script>
<script src="{{url('assets/admin/plugins/simplebar/js/simplebar.min.js')}}">
</script>
<script src="{{url('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}">
</script>
<script src="{{url('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}">
</script>
{{--<script src="{{url('assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}">--}}
{{--</script>--}}
<script src="{{url('assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}">
</script>
<script src="{{url('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}">
</script>

<script src="{{url('assets/admin/plugins/fancy-file-uploader/jquery.ui.widget.js')}}"></script>
<script src="{{url('assets/admin/plugins/fancy-file-uploader/jquery.fileupload.js')}}"></script>
<script src="{{url('assets/admin/plugins/fancy-file-uploader/jquery.iframe-transport.js')}}"></script>
<script src="{{url('assets/admin/plugins/fancy-file-uploader/jquery.fancy-fileupload.js')}}"></script>
<script src="{{url('assets/admin/plugins/fancy-file-uploader/lang/fa.js')}}"></script>
<script src="{{url('assets/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>

<script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
<script src="{{url('assets/admin/js/index.js')}}">
</script>

<script src="{{url('assets/admin/js/app.js')}}">
</script>

<script>
    // $("#fancy-file-upload").FancyFileUpload({
    //     params: {
    //         action: "fileuploader",
    //     },
    //     maxfilesize: 1000000,
    // });
</script>
<script>
    // $(document).ready(function () {
    //     $("#image-uploadify").imageuploadify();
    //     $.FancyFileUpload.defaults.langmap = {
    //         Preview: "پیش نمایش",
    //         "Remove from list": "حذف از لیست",
    //     };
    // });
</script>
@stack('script')
</body>


</html>
