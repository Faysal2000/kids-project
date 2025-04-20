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
                        <h1 class="mb-3 font-weight-bold text-teal">{{ __('message.games') }}</h1>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">{{ __('message.Games You Like') }}</span>
                    <h2 class="text-white">{{ __('message.games') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="package text-center bg-white">

                        <h3 class="text-teal">QR Code Eklenecek..</h3>
                        <p>{{ __('message.bring fun life to your kids') }}</p>
                        <p><a href="/qrcode" class="btn btn-primary btn-custom-1 mt-4">{{ __('message.learn more') }}</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
