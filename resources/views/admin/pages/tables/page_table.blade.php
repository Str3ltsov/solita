<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
    <tr>
        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Pavadinimas">{{ __('Pavadinimas') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Maršrutas">{{ __('Maršrutas') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Sukūrimo data">{{ __('Sukūrimo data') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Atnaujinimo data">{{ __('Atnaujinimo data') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Veiksmai">{{ __('Veiksmai') }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>{{ '/'.$page->route }}</td>
                <td style="">{{ $page->created_at ? $page->created_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">{{ $page->updated_at ? $page->updated_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">
                    <div class="d-flex">
                        <a href="{{ url("pages/$page->route")}}">
                            <i class="fa-solid fa-eye text-dark"></i>
                        </a>
                        <a href="{{ route('puslapiai.edit', $page->id) }}">
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
        <th rowspan="1" colspan="1">{{ __('Maršrutas') }}</th>
        <th rowspan="1" colspan="1">{{ __('Sukūrimo data') }}</th>
        <th rowspan="1" colspan="1">{{ __('Atnaujinimo data') }}</th>
        <th rowspan="1" colspan="1">{{ __('Veiksmai') }}</th>
    </tr>
    </tfoot>
</table>