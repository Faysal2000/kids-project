@extends('Layouts.master')

@section('content')
    <div class="ftco-blocks-cover-1">
        <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
            style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center ">

                    <div class="col-md-5 mt-5 pt-5">
                        <span class="text-cursive h5 text-red">Welcome To Our Website</span>
                        <h1 class="mb-3 font-weight-bold text-teal">Games</h1>
                        <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span>
                            <strong>Packages</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">Games You Like</span>
                    <h2 class="text-white">Our Games</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-teal">Indoor Games</h3>
                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta
                            recusandae?</p>
                        <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/002-target.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-success">Outdoor Game and Event</h3>
                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta
                            recusandae?</p>
                        <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/003-mission.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-danger">Camping for Kids</h3>
                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta
                            recusandae?</p>
                        <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
