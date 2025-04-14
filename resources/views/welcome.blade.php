@extends('Layouts.master')

@section('content')
    <div class="site-section-cover overlay" lang="{{ app()->getLocale() }}"
        dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">{{ __('message.welcome') }}</span>
                    <h1 class="mb-3 font-weight-bold text-teal">{{ __('message.bring fun life to your kids') }}</h1>
                    <p>{{ __('message.amazing playground for your kids') }}</p>
                    <p class="mt-5"><a href="#"
                            class="btn btn-primary py-4 btn-custom-1">{{ __('message.learn more') }}</a></p>
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
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class=" package text-center block-2 yellow">
                        <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image"
                                class="img-fluid"></span>
                        <h1 class="text-teal">{{ __('message.AR Solar System') }}</h1>
                        <h3>{{ __('message.game text') }}</h3>
                        <p><a href="/games" class="btn btn-primary btn-custom-1 mt-4">{{ __('message.learn more') }}</a>
                        </p>
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
                    <span class="text-cursive h5 text-red">{{ __('message.about') }}</span>
                    <h3 class="text-black">{{ __('message.bring fun life to your kids') }}</h3>
                    <p><span>{{ __('message.about text') }}</span></p>

                    <p class="mt-5"><a href="/about"
                            class="btn btn-warning py-4 btn-custom-1">{{ __('message.learn more') }}</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">{{ __('message.Packages You Like') }}</span>
                    <h2 class="text-white">{{ __('message.Our Packages') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image"
                                class="img-fluid"></span>
                        <h3 class="text-teal">{{ __('message.AR Solar System') }}</h3>
                        <p>{{ __('message.game text') }}</p>
                        <p><a href="/games" class="btn btn-primary btn-custom-1 mt-4">{{ __('message.learn more') }}</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
