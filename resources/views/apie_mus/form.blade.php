<form method="POST" action="{{ route('updateApieMus') }}" class="d-flex flex-column gap-4 mb-5">
    @csrf
    @method('PATCH')
    <textarea class="form-control text-muted" name="html_text" id="editor">
                {!! $pageText->html_text !!}
            </textarea>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary px-4 py-3">
            {{ __('Atnaujinti ir Išsaugoti') }}
        </button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary px-4 py-3">
            {{ __('Grįžti Atgal') }}
        </a>
    </div>
</form>
