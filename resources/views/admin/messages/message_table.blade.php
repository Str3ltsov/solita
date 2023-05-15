<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Vardass">{{ __('Vardas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="El. paštas">{{ __('El. paštas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Tema">{{ __('Tema') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Aprašymas">{{ __('Aprašymas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Sukūrimo data">{{ __('Sukūrimo data') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Veiksmai">{{ __('Veiksmai') }}</th>
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
            <th rowspan="1" colspan="1">{{ __('Vardas') }}</th>
            <th rowspan="1" colspan="1">{{ __('El. paštas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Tema') }}</th>
            <th rowspan="1" colspan="1">{{ __('Aprašymas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Sukūrimo data') }}</th>
            <th rowspan="1" colspan="1">{{ __('Veiksmai') }}</th>
        </tr>
    </tfoot>
</table>
