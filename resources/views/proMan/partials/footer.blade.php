</div>
<!-- end row -->
</div>
<!-- container -->
</div>
<!--end::Content container-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->

</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->

<div class="modal fade theme-primary" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true"
     data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border-radius: 5px; margin-top: 80px;">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">برش تصویر </h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="thumbimg d-flex justify-content-center">
                        <img id="cropImage" src="" alt="Selected Image">
                    </div>
                </div>
                <p class="text-danger text-center" style="display:none;" id="cropAlert">تصویر ویرایش شد!</p>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal" style="display:none;"
                        id="closeBtn">
                    بستن
                </button>
                <span></span>
                <button type="button" id="cropBtn" class="btn btn-primary st-cropper-upload-btn btn-md">
                    برش تصویر و آپلود
                </button>
            </div>
        </div>
    </div>
</div>

@stack('scripts')
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{my_asset('panel/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{my_asset('panel/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{my_asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/index.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/xy.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/percent.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/radar.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/themes/Animated.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/map.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/geodata/worldLow.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/geodata/continentsLow.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/geodata/usaLow.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/geodata/worldTimeZonesLow.js')}}"></script>
<script src="{{my_asset('panel/assets/lib/geodata/worldTimeZoneAreasLow.js')}}"></script>
<script src="{{my_asset('panel/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{my_asset('panel/assets/js/widgets.bundle.js')}}"></script>
<script src="{{my_asset('panel/assets/js/custom/widgets.js')}}"></script>
<script src="{{my_asset('panel/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{my_asset('panel/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{my_asset('panel/assets/js/custom/utilities/modals/users-search.js')}}"></script>

<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (
            document.documentElement.hasAttribute("data-bs-theme-mode")
        ) {
            themeMode =
                document.documentElement.getAttribute(
                    "data-bs-theme-mode"
                );
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia(
                "(prefers-color-scheme: dark)"
            ).matches
                ? "dark"
                : "light";
        }

        document.documentElement.setAttribute(
            "data-bs-theme",
            themeMode
        );
    }
</script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
