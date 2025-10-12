@if (isset($errors) and is_array($errors) and count($errors) > 0)
    @push('scripts')
        <script type="text/javascript">
            $.jGrowl('<ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>', {life: 10000, position: 'bottom-left', theme: 'bg-danger'});
        </script>
    @endpush
@endif
@if(Session::has('flash_message'))
    @push('scripts')
        <script type="text/javascript">
            $.jGrowl('{!! session("flash_message") !!}', {life: 10000, position: 'bottom-left', theme: 'bg-success'});
        </script>
    @endpush
@endif
@if(Session::has('err_message'))
    @push('scripts')
        <script type="text/javascript">
            $.jGrowl('{!! session("err_message") !!}', {life: 10000, position: 'bottom-left', theme: 'bg-danger'});
        </script>
    @endpush
@endif
@if(Session::has('warning_message'))
    @push('scripts')
        <script type="text/javascript">
            $.jGrowl('{!! session("warning_message") !!}', {life: 10000, position: 'bottom-left', theme: 'bg-warning'});
        </script>
    @endpush
@endif
