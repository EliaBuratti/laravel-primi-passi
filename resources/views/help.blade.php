<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>

<body class="antialiased">
    <h1>Welcome to Help page</h1>

    <p>{{ $message }}</p>

    <section>
        <h2>Common problems</h2>

        <ul>
            @foreach ($faqs as $answer => $response)

            <li>
                <h4>{{ $answer }}</h4>
                <p>{{ $response }}</p>
            </li>

            @endforeach
        </ul>
    </section>

    <a href="/">Go Home page</a>



</body>

</html>