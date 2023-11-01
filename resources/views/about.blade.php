@extends('layout.master')

@section('title', 'About us')


@section('page')


    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('myimg/15.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <br>
    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image:url(myimg/16.jpg);"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Unique Travel Adventures</h2>
                            <p>you'll discover a wide range of specialized categories designed to enhance your travel
                                experiences. Unearth history with our captivating archaeological tours, immerse yourself in
                                top-tier healthcare while exploring new destinations through medical tourism, and satisfy
                                your thrill-seeking desires with our exciting fun tours. Delve into a spiritual journey with
                                our religious tours, deepening your faith at sacred sites. Our website is your all-in-one
                                solution, catering to travelers with diverse interests, creating a distinctive and
                                comprehensive travel hub. Explore, experience, and embrace the world through our
                                thoughtfully curated travel categories, all easily accessible in one convenient place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Team</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Web developer training with Orange coding Academy.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(myimg/Alhareth.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Alhareth Alalawneh</p>
                                            <span class="position">Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
