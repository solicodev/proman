<x-layout>
    @push('styles')
        <style>
            .gantt-wrapper {
                position: relative;
            }

            #deps-svg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }

        </style>
        <link href="{{asset('panel/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endpush
    @include('layouts.message')
    @include('proMan.projects.main-card')
    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-header mt-5">
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">گزارش وضعیت تسک ها</h3>

                <div class="fs-6 text-gray-500"></div>
            </div>

        </div>
        <div class="card-body">
            <div class="gantt-wrapper">
                <div id="task-timeline"></div>
                <svg id="deps-svg"></svg>
            </div>
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
                const container = document.getElementById('task-timeline');

                svg.innerHTML = '';

                deps.forEach(dep => {
                    const fromEl = container.querySelector(`[data-id="${dep.from}"]`);
                    const toEl   = container.querySelector(`[data-id="${dep.to}"]`);

                    if (!fromEl || !toEl) return;

                    const containerRect = container.getBoundingClientRect();
                    const fromRect = fromEl.getBoundingClientRect();
                    const toRect   = toEl.getBoundingClientRect();

                    const x1 = fromRect.right - containerRect.left;
                    const y1 = fromRect.top + fromRect.height / 2 - containerRect.top;

                    const x2 = toRect.left - containerRect.left;
                    const y2 = toRect.top + toRect.height / 2 - containerRect.top;

                    const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
                    line.setAttribute('x1', x1);
                    line.setAttribute('y1', y1);
                    line.setAttribute('x2', x2);
                    line.setAttribute('y2', y2);
                    line.setAttribute('stroke', '#ef4444');
                    line.setAttribute('stroke-width', '2');

                    svg.appendChild(line);
                    const options = {
                        stack: false,
                        orientation: 'top',
                        zoomKey: 'ctrlKey',
                        margin: { item: 10, axis: 20 },

                        template: function (item) {
                            return `<div class="gantt-item" data-id="${item.id}">
                            ${item.content}
                            </div>`;
                        }
                    };
                });
            }

            timeline.on('rangechanged', () => {
                requestAnimationFrame(() => {
                    drawDependencies(timeline, deps);
                });
            });
        </script>
    @endpush
</x-layout>
