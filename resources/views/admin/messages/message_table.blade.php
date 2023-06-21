<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.name') }}">{{ __('inputs.name') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.email') }}">{{ __('inputs.email') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.topic') }}">{{ __('inputs.topic') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.description') }}">{{ __('inputs.description') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.createDate') }}">{{ __('inputs.createDate') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="{{ __('inputs.actions') }}">{{ __('inputs.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->topic }}</td>
                <td>{{ $message->description }}</td>
                <td>{{ $message->created_at ? $message->created_at->format('Y-m-d H:i') : '-' }}</td>
                <td>
                    @include('admin.messages.destroy_form')
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">{{ __('ID') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.name') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.email') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.topic') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.description') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.createDate') }}</th>
            <th rowspan="1" colspan="1">{{ __('inputs.actions') }}</th>
        </tr>
    </tfoot>
</table>
