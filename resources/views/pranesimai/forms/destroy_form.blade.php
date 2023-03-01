<form method="POST" action="{{ route('pranesimai.destroy', $message->id) }}" class="d-flex gap-3">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="confirm('{{ __('Ar tikrai norite ištrinti šį pranešimą?') }}')" class="btn">
        <i class="fa-solid fa-trash text-dark"></i>
    </button>
</form>
