<form method="POST" action="{{ route('deleteBlock', [$page->id, $block->id]) }}" enctype="multipart/form-data"
    files="true">
    @csrf
    @method('DELETE')
    <button type="submit" class="ml-2 btn p-0 pb-1"
        onclick="return confirm('{{ __('messages.deletePageConfirmation') }}')">
        <i class="fa-solid fa-trash text-dark"></i>
    </button>
</form>
