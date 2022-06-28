@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>SELECT Name ,GROUP_CONCAT(Id) as Repeated, Count() as Count
        FROM TableName
        GROUP BY Name;</h2>
</div>
@endsection
