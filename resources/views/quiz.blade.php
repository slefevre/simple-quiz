<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <h1>Quiz</h1>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    @endif

    @isset($questions)
    <form method="POST" action="/">
    @csrf
    <ul>
        @foreach( $questions as $question )
        @include('question')
        @endforeach
    </ul>
    <button type="submit" class="btn btn-primary">Score</button>
    </form>
    @endisset

    </body>
</html>
