<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="blocks">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="{{ __('inputs.order') }}">{{ __('inputs.order') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.name') }}">{{ __('inputs.name') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.title') }}">{{ __('inputs.title') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.blockType') }}">{{ __('inputs.blockType') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.createDate') }}">{{ __('inputs.createDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.updateDate') }}">{{ __('inputs.updateDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.actions') }}">{{ __('inputs.actions') }}</th>
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
            <th rowspan="1" colspan="1">{{ __('inputs.order') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.name') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.title') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.blockType') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.createDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.updateDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.actions') }}</th>
        </tr>
    </tfoot>
</table>
