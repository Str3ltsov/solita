<form method="POST" action="{{ route('puslapiai.update', $page->id) }}" class="card card-default">
    @csrf
    @method('PUT')
    <div class="card-header">
        <h3 class="card-title">{{ __('Redaguoti').' update_form.blade.php'.$page->page->name }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6">
                <div class="form-group">
                    <label>{{ __('Pavadinimas') }}</label>
                    <input type="text" name="name" class="form-control mb-1 @error('name') is-invalid @enderror"
                           value="{{ $page->page->name }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>{{ __('Tekstas') }}</label>
                    <textarea class="form-control text-muted @error('html_text') is-invalid @enderror" name="html_text"
                              id="editor">
                        {!! $page->html_text !!}
                    </textarea>
                    @error('html_text')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('Atnaujinti ir išsaugoti') }}</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">{{ __('Grįžti atgal') }}</a>
    </div>
</form>
