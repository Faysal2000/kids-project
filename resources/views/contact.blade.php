@extends('Layouts.master')

@section('content')
    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius
                        earum voluptates sed!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                    value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
