<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="blocks">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Tvarka">{{ __('Tvarka') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Pavadinimas">{{ __('Pavadinimas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Titulas">{{ __('Titulas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Bloko tipas">{{ __('Bloko tipas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Sukūrimo data">{{ __('Sukūrimo data') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Atnaujinimo data">{{ __('Atnaujinimo data') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Veiksmai">{{ __('Veiksmai') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blocks as $block)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $block->order }}</td>
                <td>{{ $block->name }}</td>
                <td>{{ $block->title }}</td>
                <td>{{ $block->type->name }}</td>
                <td style="">{{ $block->created_at ? $block->created_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">{{ $block->updated_at ? $block->updated_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">
                    <div class="d-flex">
                        <a href="{{ route('editBlock', [$page->id, $block->id]) }}">
                            <i class="fa-solid fa-pen-to-square text-dark"></i>
                        </a>
                        @include('admin.pages.forms.delete_block_form')
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">{{ __('Tvarka') }}</th>
            <th rowspan="1" colspan="1">{{ __('Pavadinimas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Titulas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Bloko tipas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Sukūrimo data') }}</th>
            <th rowspan="1" colspan="1">{{ __('Atnaujinimo data') }}</th>
            <th rowspan="1" colspan="1">{{ __('Veiksmai') }}</th>
        </tr>
    </tfoot>
</table>
