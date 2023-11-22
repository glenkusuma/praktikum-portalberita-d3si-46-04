
@props(['data'])

<table class="table table-sm table-dark table-hover table-responsive">
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
</table>
