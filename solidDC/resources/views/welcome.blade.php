<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOLID en Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.
 4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV\
Capítulo 13: Ingenieria de Software 187
 6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            - {{ $error }} <br>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Título *</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label>Contenido *</label>
                        <input type="text" name="body" class="form-control" value="{{ old('body') }}">
                    </div>
                    <div class="form-group">
                        <label>Tipo *</label>
                        <input type="radio" name="type" value="video"> Video
                        <input type="radio" name="type" value="post"> Post
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
