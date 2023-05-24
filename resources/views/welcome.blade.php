<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="p-4 d-flex justify-content-center align-items-center gap-4 flex-wrap">
            @foreach ($trains as $train)
            <div class="train d-flex flex-column align-items-start justify-content-center gap-4 p-4">
                <p><strong>Codice treno: </strong>{{ $train->train_code }} <strong>Azienda: </strong>{{ $train->company }}</p>
                <p><strong>Stazione di partenza: </strong> {{ $train->departure_station }} <strong>Orario: </strong>{{ $train->departure_time }}</p>
                <p><strong>Stazione di arrivo: </strong> {{ $train->arrival_station }} <strong>Orario: </strong>{{ $train->arrival_time }}</p>
                <p><strong>Numero di bagagli: </strong> {{ $train->carriage_number }} <strong>In orario: </strong>{{ $train->in_time ? 'Sì' : 'No' }} <strong>Eliminato: </strong>{{ $train->deleted ? 'Sì' : 'No' }}</p>
            </div>
        @endforeach
        </div>
    </main>

</body>

</html>
