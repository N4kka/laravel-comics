@extends('layouts/app')

@section('main-content')
    @include('components.jumbotron')

    <section class="page">
        <div class="upper">
            <img src="{{ $comics['thumb'] }}" alt="">
        </div>
        <div class="main-section">
            <div class="container">
                <h1>{{ $comics['title'] }}</h1>
                <div class="available">
                    <div class="price">
                        <div class="dolllars">
                            <span>U.S. Price:</span> <span class="dollar-price">{{ $comics['price'] }}</span>
                        </div>
                        <div class="availability">
                            <h3>AVAILABLE</h3>
                        </div>
                    </div>
                    <div class="check">
                        <h3>Check Availability &#9660;</h3>
                    </div>
                </div>
                <p id="description">{{ $comics['description'] }}</p>
            </div>
            <div class="ad">
                <h4>ADVERTISEMENT</h4>
                <img src="../images/adv.jpg" alt="">
            </div>
        </div>
    </section>
@endsection
