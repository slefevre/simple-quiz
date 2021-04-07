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

    <h1>Score</h1>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    @endif

    @isset($answers)
    <ul>
        @foreach( $answers as $answer )
		<li>{{ $answer }}<br/>
        @endforeach
    </ul>
    @endisset

    @isset($score)

    <strong>Your score:<strong> {{ $score['correct'] }} out of {{ $score['total'] }}.</br>
    @endisset

    </body>
</html>
