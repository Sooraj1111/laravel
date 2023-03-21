@extends('layouts.dashboard')
@section('content')
    <!-- card section -->
    <section class="card-sec">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-5">
                    <div class="card-yellow d-flex">
                        <div class="dog-img"><img src="{{ asset('assets/images/Mask group.png') }}"
                                class="img-fluid pos-dog"></div>
                        <div class="dog-text">
                            <h4>Market Place</h4>
                            <p>There are many some of the text variations of passages of Lorem Ipsum available</p>
                            <a href="#" class="explore-btn"> Explore now <img
                                    src="{{ asset('assets/images/Arrow 1.png') }}" class="img-fluid pl-2"></a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-5">
                    <div class="card-yellow red-bg d-flex">
                        <div class="dog-img"><img src="{{ asset('assets/images/Mask-group-1.png') }}"
                                class="img-fluid pos-dog"></div>
                        <div class="dog-text">
                            <h4>Live Pets</h4>
                            <p>There are many some of the text variations of passages of Lorem Ipsum available</p>
                            <a href="#" class="explore-btn"> Explore now <img
                                    src="{{ asset('assets/images/Arrow 1.png') }}" class="img-fluid pl-2"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- pet vet sec -->

    <section class="pet-sec">
        <div class=" offset-md-6 col-md-6 pr-3"><img src="{{ asset('assets/images/large-img.png') }}"
                class="img-fluid large-img-pos"></div>
        <div class="container">
            <div class="row">
                <div class=" col-md-6 top-space">
                    <p class="small-text">Lorel Ipsum</p>
                    <h2> Pet Vet For Your <span class="clr-org"> Trusted </span> Companion</h2>

                    <div class="row no-gutters">
                        <div class=" col-md-6 pad-r right-space">
                            <p>There are many variations of passages of Lorem</p>
                        </div>
                        <div class=" col-md-6 pad-r left-space">
                            <p>There are many variations of passages of Lorem</p>
                        </div>
                        <div class=" col-md-6 pad-r right-space">
                            <p>There are many variations of passages of Lorem</p>
                        </div>
                        <div class=" col-md-6 pad-r left-space">
                            <p>There are many variations of passages of Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- Testimonial sec -->

    <section class="testimonial-sec">
        <div class="container">
            <h3>Testimonials</h3>
            <h2>Our Happy Customers</h2>

            <!-- slider start -->
            <div class="test-slider">
                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>

                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>

                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>

                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>

                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>
                <div>
                    <div class="test-card">
                        <div class="d-flex align-items-center pb-4">
                            <div class="img-round-test"><img src="{{ asset('assets/images/Ellipse 1.png') }}"
                                    class="img-fluid"></div>
                            <div class="text-test">
                                <h6>Hamza Malik</h6>
                                <p>Desigination</p>
                            </div>
                            <img src="{{ asset('assets/images/image 6.png') }}" class="img-fluid test-pos">
                        </div>
                        <p class="pera-test">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <p class="pera-test"> The majority have suffered alteration in some form</p>
                    </div>
                </div>
                <div>
                    <!-- end -->
                </div>
    </section>
    <!-- end -->

    <!-- img slider -->
    <section class="test-sider-sec">
        <div class="test-img">
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 13.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 14.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 15.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 16.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 17.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 13.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 14.png') }}"
                        class="img-fluid"></div>
            </div>
            <div>
                <div class="test-img-slider"><img src="{{ asset('assets/images/Rectangle 15.png') }}"
                        class="img-fluid"></div>
            </div>
        </div>
    </section>
    <!-- end -->

{{-- <a href="{{ route('logout')}}"><button>log out</button></a> --}}

@endsection
