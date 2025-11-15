<x-layout>
    @push('styles')
        <link href="{{asset('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endpush
    @include('layouts.message')
    @include('proMan.projects.main-card')
    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">لیست فعالیت ها</h3>

                <div class="fs-6 text-gray-500"></div>
            </div>
            <div class="card-toolbar my-1">
                <div class="me-6 my-1">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected>همه زمان ها</option>
                        <option value="thisyear">امسال</option>
                        <option value="thismonth">این ماه</option>
                        <option value="lastmonth">اخرین ماه</option>
                        <option value="last90days">90 روز گذشته</option>
                    </select>
                </div>

                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                    <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="جستجو" />
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <button type="button" class="btn btn-primary mb-5" id="kt_docs_vistimeline_group_button">Show current visible items</button>
            <div class="mb-5">
                <div class="fw-bold mb-5">Visible groups: <span id="visibleGroupsContainer" class="fw-normal"></span></div>

                (Scroll with the mouse and see the items being focus automatically on the timeline)
            </div>

            <div id="kt_docs_vistimeline_group"></div>
        </div>
    </div>
@push('scripts')
   <script src="{{url('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>

    <script>
        var now = Date.now();

        var options = {
            stack: true,
            maxHeight: 640,
            horizontalScroll: false,
            verticalScroll: true,
            zoomKey: "ctrlKey",
            start: Date.now() - 1000 * 60 * 60 * 24 * 3, // minus 3 days
            end: Date.now() + 1000 * 60 * 60 * 24 * 21, // plus 1 months aprox.
            orientation: {
                axis: "both",
                item: "top",
            },
        };
        var groups = new vis.DataSet();
        var items = new vis.DataSet();

        var count = 300;

        for (var i = 0; i < count; i++) {
            var start = now + 1000 * 60 * 60 * 24 * (i + Math.floor(Math.random() * 7));
            var end = start + 1000 * 60 * 60 * 24 * (1 + Math.floor(Math.random() * 5));

            groups.add({
                id: i,
                content: "Task " + i,
                order: i,
            });

            items.add({
                id: i,
                group: i,
                start: start,
                end: end,
                type: "range",
                content: "Item " + i,
            });
        }

        // create a Timeline
        var container = document.getElementById("kt_docs_vistimeline_group");
        var timeline = new vis.Timeline(container, items, groups, options);
        //timeline = new vis.Timeline(container, null, options);
        timeline.setGroups(groups);
        timeline.setItems(items);

        function debounce(func, wait = 100) {
            let timeout;
            return function (...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    func.apply(this, args);
                }, wait);
            };
        }

        let groupFocus = (e) => {
            let vGroups = timeline.getVisibleGroups();
            let vItems = vGroups.reduce((res, groupId) => {
                let group = timeline.itemSet.groups[groupId];
                if (group.items) {
                    res = res.concat(Object.keys(group.items));
                }
                return res;
            }, []);
            timeline.focus(vItems);
        };
        timeline.on("scroll", debounce(groupFocus, 200));
        // Enabling the next line leads to a continuous since calling focus might scroll vertically even if it shouldn't
        // this.timeline.on("scrollSide", debounce(groupFocus, 200))

        // Handle button click
        const button = document.getElementById('kt_docs_vistimeline_group_button');
        button.addEventListener('click', e => {
            e.preventDefault();

            var a = timeline.getVisibleGroups();
            document.getElementById("visibleGroupsContainer").innerHTML = "";
            document.getElementById("visibleGroupsContainer").innerHTML += a;
        });
    </script>
@endpush
</x-layout>
