
@props(['data'])

<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @foreach (array_keys($data[0]) as $column)
            <th scope="col" class="px-6 py-3">{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            @foreach ($row as $value)
                <td @if($loop->first) scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" @else class="px-6 py-4" @endif >{{ Str::limit($value,60) }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>

{{-- <table class="table table-sm table-dark table-hover table-responsive">
    <thead>
        <tr>
            @foreach (array_keys($data[0]) as $column)
                <th scope="col">{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                @foreach ($row as $value)
                    <td @if($loop->first) scope="row" @endif >{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table> --}}
