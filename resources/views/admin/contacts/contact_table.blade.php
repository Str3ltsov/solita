<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.name') }}">{{ __('inputs.name') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.description') }}">{{ __('inputs.description') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.createDate') }}">{{ __('inputs.createDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.updateDate') }}">{{ __('inputs.updateDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.actions') }}">{{ __('inputs.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $contact->id }}</td>
                <td>{{ $contact->title }}</td>
                <td>{{ $contact->description }}</td>
                <td style="">{{ $contact->created_at ? $contact->created_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">{{ $contact->updated_at ? $contact->updated_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">
                    <div class="d-flex">
                        <a href="{{ route('kontaktai.edit', $contact->id) }}">
                            <i class="fa-solid fa-pen-to-square text-dark ml-2"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">{{ __('ID') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.name') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.description') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.createDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.updateDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.actions') }}</th>
        </tr>
    </tfoot>
</table>
