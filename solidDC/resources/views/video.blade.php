<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Video</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.\
 4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV\
 6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Contenido en Video</h1>

                <h2>{{ $post->title }}</h2>

                <p>........</p>
            </div>
        </div>
    </div>
</body>

</html>
