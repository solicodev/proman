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

        </div>
        <div class="card-body">
            <div id="task-timeline" ></div>
            <svg id="deps-svg"
                 style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;">
            </svg>
        </div>
    </div>
    @push('scripts')
        <script src="{{url('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
        <script>
            const groups = {!! $groupsJson !!};
            const items  = {!! $itemsJson !!};
            const deps   = {!! $depsJson !!};

            document.addEventListener('DOMContentLoaded', () => {
                const container = document.getElementById('task-timeline');
                const timeline = new vis.Timeline(
                    container,
                    new vis.DataSet(items),
                    new vis.DataSet(groups),
                    {
                        stack: false,
                        orientation: 'top',
                        selectable: true,
                        zoomKey: 'ctrlKey',
                        margin: { item: 10, axis: 20 }
                    }
                );


                let drawing = false;
                timeline.on('changed', () => {
                    if (drawing) return;
                    drawing = true;
                    requestAnimationFrame(() => {
                        drawDependencies(timeline, deps);
                        drawing = false;
                    });
                });

                timeline.on('changed', redrawDeps);
                timeline.on('rangechanged', redrawDeps);

                setTimeout(redrawDeps, 0);
            });

            function drawDependencies(timeline, deps) {
                const svg = document.getElementById('deps-svg');
                if (!svg) return;
                svg.innerHTML = '';
                console.log(deps)
                deps.forEach(dep => {
                    const fromItem = timeline.itemsData.get(dep.from);
                    const toItem   = timeline.itemsData.get(dep.to);
                    if (!fromItem || !toItem) return;

                    const fromRendered = timeline.itemSet?.items?.[fromItem.id];
                    const toRendered   = timeline.itemSet?.items?.[toItem.id];
                    if (!fromRendered || !toRendered) return;

                    const fromX = timeline.timeToScreen(new Date(fromItem.end ?? fromItem.start));
                    const toX   = timeline.timeToScreen(new Date(toItem.start));

                    const fromY = fromRendered.top + fromRendered.height / 2;
                    const toY   = toRendered.top + toRendered.height / 2;

                    const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
                    line.setAttribute('x1', fromX);
                    line.setAttribute('y1', fromY);
                    line.setAttribute('x2', toX);
                    line.setAttribute('y2', toY);
                    line.setAttribute('stroke', 'red');
                    line.setAttribute('stroke-width', '2');
                    svg.appendChild(line);
                });
            }
        </script>
    @endpush
</x-layout>
