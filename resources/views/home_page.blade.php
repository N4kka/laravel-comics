<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials.header')

    @include('components.jumbotron')
    
    @include('components.section')
</body>

</html>
