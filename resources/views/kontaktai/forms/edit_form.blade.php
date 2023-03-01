<form method="POST" action="{{ route('updateKontaktai') }}" class="d-flex flex-column gap-4 mb-5">
    @csrf
    @method('PATCH')
    <textarea class="form-control text-muted" name="html_text" id="editor">
        {!! $pageText->html_text !!}
    </textarea>
    <div class="d-flex gap-2">
        <div class="banner5-btn wow fadeInUp mt-20 d-flex gap-4" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
            <div class="about__btn">
                <button type="submit" class="it__btn-3 px-4">
                    {{ __('Atnaujinti ir Išsaugoti') }}
                    <i class="fa-solid fa-floppy-disk ms-2"></i>
                </button>
            </div>
            <div class="about__btn">
                <a class="it__btn-3 px-4" href="{{ url()->previous() }}">
                    {{ __('Grįžti Atgal') }}
                    <i class="fa-solid fa-chevron-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</form>
