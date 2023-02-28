<form method="POST" action="{{ route('submitContactForm') }}" {{--style="width: clamp(300px, 100%, 600px)"--}}>
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="contact__from-input">
                <input type="text" name="name" placeholder="{{ __('Vardas *') }}" class=" mb-1 @error('topic') is-invalid @enderror">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact__from-input">
                <input type="text" name="email" placeholder="{{ __('El. paštas *') }}" class="mb-1 @error('topic') is-invalid @enderror">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact__from-input">
                <input type="text" name="topic" placeholder="{{ __('Tema *') }}" class="mb-1 @error('topic') is-invalid @enderror">
                @error('topic')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact__from-input">
                <textarea name="description" id="Message" placeholder="{{ __('Aprašymas') }}" rows="4"></textarea>
            </div>
        </div>
        <div class="col-12">
            <button class="comment__btn e-btn" type="submit">{{ __('Siųsti') }}</button>
        </div>
    </div>
</form>
