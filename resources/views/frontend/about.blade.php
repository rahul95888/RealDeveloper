@extends('frontend.layouts.master')
@section('title', 'Real Developer')
@section('content')


    <!-- About us -->
    <section id="aboutus" class="section p-0px-b">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-left">
                        <h2>I'm Ryan Thompson</h2>
                        <h3>I'm a Lead UX & UI designer based in Canada</h3>
                        <p>I design and develop services for customers of all sizes, specializing in creating
                            stylish, modern websites, web services and online stores.</p>
                        <p>My passion is to design digital user experiences through the bold interface and
                            meaningful interactions. Check out my <a class="m-btn-link theme-after"
                                href="#portfolio">Portfolio</a></p>
                        <a class="m-btn m-btn-theme" href="#contact">Contact us <i class="ti-arrow-right"></i></a>
                    </div>
                </div> <!-- col -->

                <div class="col-md-6 text-center sm-m-45px-t">
                    <img src="assets/static/img/man.jpg" title="" alt="">
                </div> <!-- col -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- / -->

    <section class="counter-section">
        <div class="container">
            <div class="counter-row">
                <div class="row">
                    <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                        <div class="counter-col">
                            <div class="counter-data" data-count="375">
                                <div class="count">375</div>
                                <h6>Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                        <div class="counter-col">
                            <div class="counter-data" data-count="375">
                                <div class="count">375</div>
                                <h6>Telephonic Talk</h6>
                            </div>
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                        <div class="counter-col">
                            <div class="counter-data" data-count="550">
                                <div class="count">550</div>
                                <h6>Photo Capture</h6>
                            </div>
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                        <div class="counter-col">
                            <div class="counter-data" data-count="450">
                                <div class="count">450</div>
                                <h6>Project</h6>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
        </div>
        <!-- container -->
    </section>



@endsection
