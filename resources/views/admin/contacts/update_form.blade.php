<form method="POST" action="{{ route('kontaktai.update', $contact->id) }}" class="card card-default"
    enctype="multipart/form-data" files="true">
    @csrf
    @method('PUT')
    <div class="card-header">
        <h3 class="card-title">{{ __('pages.editContact') . ' ' . $contact->title }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <input type="hidden" name="title" value="{{ $contact->title }}">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label>{{ __('inputs.description') }}</label>
                    <input type="text" name="description"
                        class="form-control mb-1 @error('description') is-invalid @enderror"
                        value="{{ $contact->description }}">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('buttons.updateAndSave') }}</button>
        <a href="{{ route('kontaktai.index') }}" class="btn btn-secondary">{{ __('buttons.returnBack') }}</a>
    </div>
</form>
