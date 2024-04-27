@extends('layouts.web.master')
@section('title', 'Support')
@push('css')

@endpush

@section('content')
 <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container container-sm container-md container-lg container-xl container-xxl">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                    <h1 class="">Enhance applications with cutting-edge AI technology and support.</h1>
                    <h2 class="">
                        Empower your apps with AI using our dedicated support. Seamlessly integrate cutting-edge
                        technology for enhanced functionality. Let us guide you in leveraging artificial intelligence
                        effectively.
                    </h2>

                    {{-- <button class="btn try-bot">
                        <p class="mb-0 text-white">Try Bot</p>
                    </button> --}}
                    <div class="parent">
                        <a href="{{ auth()->check() ? url('/chat_dashboard') : route('login') }}">
                            <button class="btn try-bot" id="tryBotButton">
                                <p class="mb-0 text-white">Try Bot</p>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!--General Section-->
    <section>
        <div class="container my-5" data-aos="fade-right">

            <div class="row mt-10">
                <div class="general-section col-12 col-sm-12 col-md-12 col-xl-6 my-auto">
                    <h3 class="h3 mt-3 mt-md-0">AI-Powered Customer Assistance</h3>
                    <div class="spacer"></div>
                    <p>
                        Experience the future of customer service with our AI-powered support solutions. Our expertly
                        designed AI systems provide personalized assistance, delivering timely and accurate responses to
                        your inquiries. Say goodbye to long wait times and hello to efficient issue resolution as our AI
                        support streamlines your experience, making customer satisfaction our top priority. Let our
                        advanced technology redefine your support interactions and enhance your overall journey with us
                    </p>
                    <a href="#!" class="link-button w-inline-block">
                        <div class="">
                            Generate factual content instantly!
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-xl-6">
                    <img class="img-fluid h-100" src="assets/images/support.webp" style="border-radius: 10px" alt="">
                </div>

            </div>
        </div>
    </section>
    <!--General Section End-->

    <!--About Support Section-->
    <section>
        <div class="container mb-5" data-aos="fade-right">
            <div class="row my-10">
                <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <h1 class="text-center mb-3 mb-md-5">About Support</h1>
                </div>
            </div>

            <div class="row my-10">
                <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <div class="card" style="border-radius: 20px;">
                        <div class="card-body text-dark p-3 text-center">
                            <p class="">
                                Our support services are designed to be your reliable partner throughout your journey.
                                With a dedicated team of experts, we offer comprehensive assistance tailored to your
                                unique needs. Whether you require technical guidance, have questions about our products,
                                or need help with troubleshooting, our knowledgeable support staff is available to
                                provide prompt solutions. We prioritize your satisfaction, ensuring that every
                                interaction leaves you with a sense of confidence and clarity. Through continuous
                                training and staying updated with the latest industry trends, our support team maintains
                                a deep understanding of your concerns and strives to exceed your expectations. We take
                                pride in being your dependable support system, always ready to assist you in navigating
                                any challenges you may encounter.
                            </p>
                            <div>
                                <!-- <img src="assets/images/live-chat-icon.jpg"
                                    sizes="(max-width: 600px) 300px,(max-width: 1000px) 600px,1000px" width="60"
                                    height="40" alt="" srcset=""> -->
                                    <button class="contact_us_2 scrollto w-md-25" href="#">
                                        <span class="icon-container">
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </span>
                                        <span class="contact"> Chat With Us</span>

                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Support Section End-->
@endsection

@push('script')
@endpush
