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
        <div class="card-body">
            <div id="task-timeline"></div>
        </div>
    </div>
    @push('scripts')
        <script src="{{url('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>

        <script>
            const groups = {!! $groupsJson !!};
            const items  = {!! $itemsJson !!};
            const deps   = {!! $depsJson !!};

            document.addEventListener("DOMContentLoaded", () => {

                const container = document.getElementById("task-timeline");

                const options = {
                    stack: false,
                    orientation: 'top',
                    selectable: true,
                    zoomKey: 'ctrlKey',
                    margin: {
                        item: 10,
                        axis: 20
                    }
                };

                const tlGroups = new vis.DataSet(groups);
                const tlItems  = new vis.DataSet(items);

                const timeline = new vis.Timeline(container, tlItems, tlGroups, options);

                drawDependencies(timeline, deps);

                timeline.on('rangechange', () => drawDependencies(timeline, deps));
                // timeline.on('changed', () => drawDependencies(timeline, deps));

            });

            function drawDependencies(timeline, deps) {
                // SVG container
                let svg = document.getElementById('deps-svg');
                if (!svg) {
                    svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                    svg.setAttribute("id", "deps-svg");
                    svg.style.position = "absolute";
                    svg.style.top = "0";
                    svg.style.left = "0";
                    svg.style.width = "100%";
                    svg.style.height = "100%";
                    svg.style.pointerEvents = "none";
                    timeline.el.appendChild(svg);
                }

                svg.innerHTML = '';

                deps.forEach(dep => {
                    const fromItem = timeline.itemsData.get(dep.from);
                    const toItem   = timeline.itemsData.get(dep.to);
                    if (!fromItem || !toItem) return;

                    const fromX = timeline.timeToScreen(fromItem.end);
                    const toX   = timeline.timeToScreen(toItem.start);
                    const fromY = timeline.itemSet.items[fromItem.id].top + timeline.itemSet.items[fromItem.id].height / 2;
                    const toY   = timeline.itemSet.items[toItem.id].top + timeline.itemSet.items[toItem.id].height / 2;

                    const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
                    line.setAttribute("x1", fromX);
                    line.setAttribute("y1", fromY);
                    line.setAttribute("x2", toX);
                    line.setAttribute("y2", toY);
                    line.setAttribute("stroke", "red");
                    line.setAttribute("stroke-width", "2");
                    svg.appendChild(line);
                });
            }

        </script>
    @endpush
</x-layout>
