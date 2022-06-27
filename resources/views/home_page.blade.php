@extends('layouts.app')

<body>
    <a href="{{ route('single_page') }}">ciao</a>
    @include('components.jumbotron')
    
    @include('components.section')

    @include('components.second_section')

</body>