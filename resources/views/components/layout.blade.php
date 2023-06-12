<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Sqaud</title>
    <meta name="description" content="Find assistance to work abroad within Europe, we're here to guide you through your life changing experience">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="preload" as="stylesheet" onload="this.rel='stylesheet'">

    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <main>
        {{$slot}}
    </main>
    <x-footer />
</body>
</html>