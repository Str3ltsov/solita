<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Pavadinimas">{{ __('Pavadinimas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Aprašymas">{{ __('Aprašymas') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Sukūrimo data">{{ __('Sukūrimo data') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Atnaujinimo data">{{ __('Atnaujinimo data') }}</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                aria-label="Veiksmai">{{ __('Veiksmai') }}</th>
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
            <th rowspan="1" colspan="1">{{ __('Pavadinimas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Aprašymas') }}</th>
            <th rowspan="1" colspan="1">{{ __('Sukūrimo data') }}</th>
            <th rowspan="1" colspan="1">{{ __('Atnaujinimo data') }}</th>
            <th rowspan="1" colspan="1">{{ __('Veiksmai') }}</th>
        </tr>
    </tfoot>
</table>
