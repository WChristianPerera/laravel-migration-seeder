<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel index</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div>

            @foreach($trains as $train)
                <div>
                    <h1>{{$train ->company}}</h1>
                    <p>{{$train ->departure_station}}</p>
                    <p>{{$train ->arrival_station}}</p>
                    <p>{{$train ->departure_time}}</p>
                    <p>{{$train ->arrival_time}}</p>
                    <p>{{$train ->train_code}}</p>
                    <p>{{$train ->number_of_carriages}}</p>
                    <p>{{$train ->in_time}}</p>
                    <p>{{$train ->deleted}}</p>


                </div>
    
            @endforeach
        </div>
    </body>
</html>
