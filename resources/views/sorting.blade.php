<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="container">
    <div class="row">
        <div class="col">
            <form id="sort_form" name="form_sort" action="" method="POST">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Textbox</label>
                    <input type="text" class="form-control" id="text_val">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button id="form_submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <h3>Output</h3>
            <h4 id="out"></h4>
        </div>
    </div>

</body>

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

</html>
