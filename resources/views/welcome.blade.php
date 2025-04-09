@extends('Layouts.master')

@section('content')
    <div class="site-section-cover overlay">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">Welcome To Our Website</span>
                    <h1 class="mb-3 font-weight-bold text-teal">Bring Fun Life To Your Kids</h1>
                    <p>Amazing Playground for your kids</p>
                    <p class="mt-5"><a href="#" class="btn btn-primary py-4 btn-custom-1">Learn More</a></p>
                </div>
                <div class="col-md-6 ml-auto align-self-end">
                    <img src="images/kid_transparent.png" alt="Image" class="img-fluid">

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="block-2 red">
                        <span class="wrap-icon">
                            <span class="icon-home"></span>
                        </span>
                        <h2>Indoor Games</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id
                            culpa.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-2 yellow">
                        <span class="wrap-icon">
                            <span class="icon-person"></span>
                        </span>
                        <h2>Outdoor Game And Event</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id
                            culpa.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-2 teal">
                        <span class="wrap-icon">
                            <span class="icon-cog"></span>
                        </span>
                        <h2>Camping for Kids</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id
                            culpa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto pl-md-5">
                    <span class="text-cursive h5 text-red">About Us</span>
                    <h3 class="text-black">Bring Fun Life To Your Kids</h3>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum, magni sequi nostrum maxime
                            enim.</span><span>Magnam id atque dicta deleniti, ipsam ipsum distinctio. Facilis praesentium
                            voluptatem accusamus, earum veritatis, laudantium.</span></p>

                    <p class="mt-5"><a href="#" class="btn btn-warning py-4 btn-custom-1">More About Us</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">Packages You Like</span>
                    <h2 class="text-white">Our Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-teal">Indoor Games</h3>
                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta
                            recusandae?</p>
                        <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/002-target.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-success">Outdoor Game and Event</h3>
                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta
                            recusandae?</p>
                        <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
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
