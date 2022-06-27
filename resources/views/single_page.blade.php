@extends('layouts/app')

@section('main-content')
    @include('components.jumbotron')

    <section class="page">
        <div class="upper">
            <img src="../images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg" alt="">
        </div>
        <div class="main-section">
            <div class="container">
                <h1>{{ $comic['title'] }}</h1>
                <div class="available">
                    <div class="price">
                        <div class="dolllars">
                            <span>U.S. Price:</span> <span class="dollar-price">{{ $comic['price'] }}</span>
                        </div>
                        <div class="availability">
                            <h3>AVAILABLE</h3>
                        </div>
                    </div>
                    <div class="check">
                        <h3>Check Availability &#9660;</h3>
                    </div>
                </div>
                <p>{!! $comic['description'] !!}</p>
            </div>
        </div>
    </section>
@endsection
