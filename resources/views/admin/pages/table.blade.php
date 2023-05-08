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
{{--<table id="datatables" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>--}}
{{--        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Browser: activate to sort column ascending">Browser</th>--}}
{{--        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>--}}
{{--        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--            @foreach($pages as $page)--}}
{{--                <tr>--}}
{{--                    <td class="dtr-control sorting_1" tabindex="0">{{ $page->id }}</td>--}}
{{--                    <td colspan="2">{{ $page->page->name }}</td>--}}
{{--                    <td style="">{{ $page->updated_at ? $page->updated_at->format('Y-m-d H:i') : '-' }}</td>--}}
{{--                    <td style="">--}}
{{--                        <div class="d-flex gap-3">--}}
{{--                            <a href="{{ route('puslapiai.edit', $page->id) }}">--}}
{{--                                <i class="fa-solid fa-pen-to-square text-dark"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--    </tbody>--}}
{{--    <tfoot>--}}
{{--    <tr>--}}
{{--        <th rowspan="1" colspan="1">Rendering engine</th>--}}
{{--        <th rowspan="1" colspan="2">Browser</th>--}}
{{--        <th rowspan="1" colspan="1">Engine version</th>--}}
{{--        <th rowspan="1" colspan="1">CSS grade</th>--}}
{{--    </tr>--}}
{{--    </tfoot>--}}
{{--</table>--}}
