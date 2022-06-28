@extends('layouts.app')

@section('content')
<div class="container my-5 ">
    <div class="row">
        <div class="col">
            <form id="sort_form" name="form_sort" action="" >
                <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Textbox</label>
                    <input type="text" class="form-control" id="text_val">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button id="form_submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col text-center">
            <h3>Output</h3>
            <h4 id="out"></h4>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sort_form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'vals': $('#text_val').val()
                },
                url: "{{ url('sort-calculations') }}",
                method: 'post',
                success: function(data, textstatus, xhr) {

                    $('#out').html(data.toString());
                    console.log(data);
                },
                error: function(xhr, textStatus, errorThrown) {

                }
            });
        });

    });
</script>
@endsection

