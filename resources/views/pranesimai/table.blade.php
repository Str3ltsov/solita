<table id="datatable" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="pages">
    <thead>
    <tr>
        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID">{{ __('ID') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Vardass">{{ __('Vardas') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="El. paštas">{{ __('El. paštas') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Tema">{{ __('Tema') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Aprašymas">{{ __('Aprašymas') }}</th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Sukūrimo data">{{ __('Sukūrimo data') }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->topic }}</td>
                <td>{{ $message->description }}</td>
                <td>{{ $message->created_at ? $message->created_at->format('Y-m-d H:i') : '-' }}</td>
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
