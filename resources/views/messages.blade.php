@if ($message = Session::get('success'))
    <div class="alert alert-block bg-white"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; box-shadow: 1px 1px 10px #ddd">
        <i class="fa-solid fa-check text-success me-2"></i>
        <span class="text-success fw-bold">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-block bg-white"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; box-shadow: 1px 1px 10px #ddd">
        <i class="fa-solid fa-xmark text-danger me-2"></i>
        <span class="text-danger fw-bold">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-block bg-white"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; box-shadow: 1px 1px 10px #ddd">
        <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>
        <span class="text-warning fw-bold">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('info'))
    <div class="alert alert-block bg-white"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; box-shadow: 1px 1px 10px #ddd">
        <i class="fa-solid fa-circle-info text-info me-2"></i>
        <span class="text-info fw-bold">{{ $message }}</span>
    </div>
@endif

@push('scripts')
    <script>
        setTimeout(() => $('.alert').remove(), 5 * 1000);
    </script>
@endpush
