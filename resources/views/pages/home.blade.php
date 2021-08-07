@extends('layouts.app')


@section('title')
NOMADS
@endsection

@section('content')
    <!-- header -->
<header class="header text-center">
    <h1>
    Explore The Beatiful World <br />
    As Easy One Click
    </h1>
    <p class="mt-3">
    You will see beatiful
    <br />
    moment You never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
</header>

<main>
    <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <h2>3K</h2>
        <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
        </div>
    </section>
    </div>

    <section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
        <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
            Something that you never try
            <br />
            before in this world
            </p>
        </div>
        </div>
    </div>
    </section>
    <section class="section-popular-content" id="Wisata Contente">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/wisata1.jpg')">
            <div class="travel-country">INDONESIA</div>
            <div class="travel-location">DERATAN, BALI</div>
            <div class="travel-button mt-auto">
                <a href="{{route ('detail')}}" class="btn btn-travel-details px-4"> View Details </a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/wisata2.jpg')">
            <div class="travel-country">MIDDLE EAST</div>
            <div class="travel-location">DUBAI</div>
            <div class="travel-button mt-auto">
                <a href="{{route ('detail')}}" class="btn btn-travel-details px-4"> View Details </a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/wisata3.jpg')">
            <div class="travel-country">INDONESIA</div>
            <div class="travel-location">LAWANG SEWU</div>
            <div class="travel-button mt-auto">
                <a href="{{route ('detail')}}" class="btn btn-travel-details px-4"> View Details </a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/wisata4.jpg')">
            <div class="travel-country">TURKI</div>
            <div class="travel-location">ISTANBUL</div>
            <div class="travel-button mt-auto">
                <a href="{{route ('detail')}}" class="btn btn-travel-details px-4"> View Details </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-network" id="Networks">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h2>Our Network</h2>
            <p>
            Compaies are trusted us
            <br />
            more than just a trip
            </p>
        </div>
        <div class="col-md-8 text-center">
            <img src="frontend/images/logos_partner.png" alt="Logo Partner" class="img-partners" />
        </div>
        </div>
    </div>
    </section>

    <section class="section-testimonial-heading" id="TestimonialHeading">
    <div class="container">
        <div class="row">
        <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
            Moments were giving them
            <br />
            the best experience
            </p>
        </div>
        </div>
    </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img src="frontend/images/testimonial1.png" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Bagas Kurnia Rahman</h3>
                <p class="testimonial">" It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee "</p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Ubud</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img src="frontend/images/User_pic.jpg" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Jeje</h3>
                <p class="testimonial">" The trip was amazing and I saw something beautiful in that island that makes me want to learn more "</p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Turki</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img src="frontend/images/testimonial3.png" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Zoeybit</h3>
                <p class="testimonial">"I loved it when the waves was shaking harder - I was sacreed too"</p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Lawang Sewu</p>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-3 mx-1"> I Need Help </a>
            <a href="#" class="btn btn-get-started px-4 mt-3 mx-1"> Get Started </a>
        </div>
        </div>
    </div>
    </section>
</main>
@stop
