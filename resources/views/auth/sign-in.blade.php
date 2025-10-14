@extends('layouts.panel')

@push('title')
    <title>ورود | عضویت</title>
@endpush

@push('styles')
    <link href="{{ asset('assets/css/filepond.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/filepond-plugin-image-preview.min.css') }}" rel="stylesheet">
    <style>
        .filepond--credits { display: none; }
        #map { z-index: 1 !important; }
    </style>

@endpush

@section('content')
    <section class="listing-grid-area pt-50 pb-50">
        <div class="container">
            <div class="section-title section-title-two mb-20">
                <h2 class="text-center"><span class="line">ورود به پنل</span></h2>
            </div>
            <div class="contact-wrapper-one mb-30">
                <div class="contact-form text-center">
                    <form action="{{ route('login') }}" method="post" class="needs-validation"
                          novalidate>
                        <div class="row">
                            <div class="col-lg-6 mx-auto d-flex flex-column">
                                <div class="form_group mb-4">
                                    <input type="text" class="form_control form-control"
                                           placeholder="شماره موبایل *" name="mobile" required>
                                    <div class="invalid-feedback">
                                        شماره موبایل الزامی است
                                    </div>
                                </div>
                                <div class="form_group mb-4">
                                    <input type="password" class="form_control form-control"
                                           placeholder="رمز عبور *" name="password"
                                           oninput="this.value = this.value.replace(/\s/g, '')" required>
                                    <div class="invalid-feedback">
                                        رمز عبور الزامی است
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-4">
                                <div class="form_group">
                                    <button class="btn primary-btn py-2">ورود به حساب</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/filepond.min.js') }}"></script>
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>

    <script>
        $(() => {
            document.querySelectorAll('input[type="file"]').forEach((input, i) => {
                FilePond.create(input, {
                    storeAsFile: true,
                    imagePreviewHeight: 170,
                    allowImagePreview: true,
                    allowMultiple: false,
                    instantUpload: false,
                    labelIdle: '<span class="filepond--label-action"> انتخاب کنید </span> فایل را اینجا رها کنید یا',
                    allowMultiple: input.getAttribute('name') == 'contracts[]',
                    required: true,
                    onupdatefiles: files => {
                        !!files[0] ? $('#' + input.getAttribute('data-name')).val(true) : $(
                            '#' +
                            input
                                .getAttribute('data-name')).val('');
                    }
                });
            });
        });
    </script>

    <script>
        {{--var cities = '<?php echo $cities; ?>';--}}
        {{--$('#province').change(function() {--}}
        {{--    $('#city').empty();--}}
        {{--    $('#city').append("<option value disabled selected>انتخاب شهر</option>")--}}
        {{--    var id = parseInt($(this).find(':selected').val());--}}

        {{--    $.each(JSON.parse(cities), function(index, value) {--}}
        {{--        if (parseInt(value['parent_id']) === id) {--}}
        {{--            $('#city').append("<option value='" + value['id'] + "'>" + value['name'] + "</option>")--}}
        {{--        }--}}
        {{--    });--}}

        {{--    $('.form_control').niceSelect('update');--}}
        {{--});--}}
    </script>

    <script>
        const fetchCategories = async e => {
            const res = await fetch(`/api/categories/${$(e).val()}`);
            const data = await res.json();

            return data;
        }

        async function setCategories(e) {
            const data = await fetchCategories(e);

            $('#sub_category').empty();
            $('#sub_category').append('<option value selected disabled>انتخاب زیر دسته بندی *</option>');

            data.map(sub_category => {
                $('#sub_category').append(`<option value="${sub_category.id}">${sub_category.title}</option>`)
            })

            $('#sub_category').niceSelect('update');
        }
    </script>

    <script>
        function setCategorySelector(el) {
            if ($(el).val() && $(el).val() == 'micro_provider') {
                $('#categoryId').show();
                $('#subCategoryId').show();
                $('#categoryId').find('select').attr('required', true);
                $('#subCategoryId').find('select').attr('required', true);
            } else {
                $('#categoryId').hide();
                $('#subCategoryId').hide();
                $('#categoryId').find('select').removeAttr('required');
                $('#subCategoryId').find('select').removeAttr('required');
            }
        }
    </script>

    <script>
        const editableMap = new L.Map("map", {
            key: "{{ env('NESHAN_API_KEY') }}",
            maptype: "neshan",
            poi: false,
            traffic: false,
            center: [{{ old('lat', '35.699756') }}, {{ old('lng', '51.338076') }}],
            zoom: 14,
        })

        const marker = L.marker([{{ old('lat', '35.699756') }}, {{ old('lng', '51.338076') }}]).addTo(editableMap);

        editableMap.addEventListener('click', event => {
            marker.setLatLng(event.latlng);
            $('#lat').val(event.latlng.lat);
            $('#lng').val(event.latlng.lng);
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(event) {
            editableMap.invalidateSize();
        })
    </script>
@endpush


