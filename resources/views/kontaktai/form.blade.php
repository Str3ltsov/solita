<form method="POST" action="{{ route('submitContactForm') }}" style="width: clamp(300px, 100%, 600px)">
    @csrf
    <div class="row mb-4">
        <label class="col-6">
            <input type="text" name="name" placeholder="{{ __('Vardas *') }}"
                   class="form-control p-3 @error('name') is-invalid @enderror">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </label>
        <label class="col-6">
            <input type="email" name="email" placeholder="{{ __('El. paštas *') }}"
                   class="form-control p-3 @error('email') is-invalid @enderror">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </label>
    </div>
    <div class="mb-4">
        <label class="col-12">
            <input type="text" name="topic" placeholder="{{ __('Tema *') }}"
                   class="form-control p-3 @error('topic') is-invalid @enderror">
            @error('topic')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </label>
    </div>
    <div class="mb-4">
        <label class="col-12">
            <textarea name="description" placeholder="{{ __('Aprašymas') }}"
                      rows="4" class="form-control p-3"></textarea>
        </label>
    </div>
    <div class="d-flex">
        <button type="submit" class="btn btn-primary px-4 py-3">{{ __('Siųsti') }}</button>
    </div>
</form>
