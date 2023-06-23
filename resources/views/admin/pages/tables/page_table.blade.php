<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.name') }}">{{ __('inputs.name') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.route') }}">{{ __('inputs.route') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.createDate') }}">{{ __('inputs.createDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.updateDate') }}">{{ __('inputs.updateDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.actions') }}">{{ __('inputs.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pages as $page)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>{{ '/' . $page->route }}</td>
                <td style="">{{ $page->created_at ? $page->created_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">{{ $page->updated_at ? $page->updated_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">
                    <div class="d-flex">
                        <a href="{{ url("pages/$page->route") }}">
                            <i class="fa-solid fa-eye text-dark"></i>
                        </a>
                        <a href="{{ route('puslapiai.edit', $page->id) }}">
                            <i class="fa-solid fa-pen-to-square text-dark ml-2"></i>
                        </a>
                        @if ($page->route != '' || $page->route != null)
                            @include('admin.pages.forms.delete_page_form')
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">{{ __('ID') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.name') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.route') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.createDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.updateDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.actions') }}</th>
        </tr>
    </tfoot>
</table>
