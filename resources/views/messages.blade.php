@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
        <span>{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
        <span>{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
        <span>{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
        <span>{{ $message }}</span>
    </div>
@endif

@push('scripts')
    <script>
        setTimeout(() => $('.alert').remove(), 2.5 * 1000);
    </script>
@endpush
