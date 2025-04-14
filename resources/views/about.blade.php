@extends('Layouts.master')

@section('content')
    <div class="ftco-blocks-cover-1">
        <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
            style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center ">

                    <div class="col-md-5 mt-5 pt-5">
                        <span class="text-cursive h5 text-red">{{ __('message.welcome') }}</span>
                        <h1 class="mb-3 font-weight-bold text-teal">{{ __('message.about') }}</h1>
                        <p>{{ __('message.about page text1') }} </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto pl-md-5">
                    <span class="text-cursive h5 text-red">{{ __('message.about') }}</span>
                    <h3 class="text-black">{{ __('message.about page welcome') }}</h3>
                    <p>{{ __('message.about page text2') }} </p>

                    <h3>{{ __('message.How to Use') }}</h3>
                    <p>{{ __('message.use1') }}</p>
                    <p>{{ __('message.use2') }}</p>
                    <p>{{ __('message.use3') }}</p>

                    <h3>{{ __('message.benefits') }}</h3>
                    <p>{{ __('message.benefits1') }}</p>
                    <p>{{ __('message.benefits2 ') }}</p>
                    <p>{{ __('message.benefits3') }}</p>
                    <p>{{ __('message.benefits4') }}</p>
                    <p>{{ __('message.benefits5') }}</p>

                    <p class="mt-5"><a href="/about"
                            class="btn btn-warning py-4 btn-custom-1">{{ __('message.learn more') }}</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
