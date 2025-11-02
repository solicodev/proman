@if ($errors->any())
    @push('scripts')
        <script>
            $(function () {
                $.jGrowl(
                    `<ul style="margin:0; padding-left:20px;">
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        @endforeach
                    </ul>`,
                    {
                        life: 10000,
                        position: 'bottom-left',
                        theme: 'bg-danger'
                    }
                );
            });
        </script>
    @endpush
@endif

@if (session('flash_message'))
    @push('scripts')
        <script>
            $(function () {
                $.jGrowl(`{!! session('flash_message') !!}`, {
                    life: 10000,
                    position: 'bottom-left',
                    theme: 'bg-success',
                    animateOpen :  {opacity : 'show'},
                });
            });
        </script>
    @endpush
@endif

@if (session('err_message'))
    @push('scripts')
        <script>
            $(function () {
                $.jGrowl(`{!! session('err_message') !!}`, {
                    life: 10000,
                    position: 'bottom-left',
                    theme: 'bg-danger',
                    animateOpen :  {opacity : 'show'},
                });
            });
        </script>
    @endpush
@endif

@if (session('warning_message'))
    @push('scripts')
        <script>
            $(function () {
                $.jGrowl(`{!! session('warning_message') !!}`, {
                    life: 10000,
                    position: 'bottom-left',
                    theme: 'bg-warning',
                    animateOpen :  {opacity : 'show'},
                });
            });
        </script>
    @endpush
@endif
