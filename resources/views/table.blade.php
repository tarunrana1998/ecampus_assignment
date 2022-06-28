@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <table class="table table-striped">
            <tbody>
                @foreach ($arr as $row)
                    <tr>
                        @foreach ($row as $col)
                            <th>{{ $col }}</th>
                        @endforeach
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
