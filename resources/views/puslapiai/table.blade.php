<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
    <tr>
        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">{{ __('Id') }}</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">{{ __('Pavadinimas') }}</th>
{{--        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">{{ __('HTML Tekstas') }}</th>--}}
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">{{ __('Atnaujinta data') }}</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">{{ __('Veiksmai') }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $page->id }}</td>
                <td>{{ $page->page->name }}</td>
{{--                                <td>{!! $page->html_text ?? '-' !!}</td>--}}
                <td style="">{{ $page->updated_at ? $page->updated_at->format('Y-m-d H:i') : '-' }}</td>
                <td style="">
                    <div class="d-flex gap-3">
                        <a href="{{ route('puslapiai.edit', $page->id) }}">
                            <i class="fa-solid fa-pen-to-square text-dark"></i>
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
{{--        <th rowspan="1" colspan="1">{{ __('HTML Tekstas') }}</th>--}}
        <th rowspan="1" colspan="1" style="">{{ __('Atnaujinta data') }}</th>
        <th rowspan="1" colspan="1" style="">{{ __('Veiksmai') }}</th>
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
