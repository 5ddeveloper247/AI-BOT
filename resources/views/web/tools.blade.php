@extends('layouts.web.master')
@section('title', 'Tools')
@push('css')

@endpush

@section('content')
    <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container container-sm container-md container-lg container-xl container-xxl">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                    <h1 class="">Empowering productivity with essential tools.</h1>
                    <h2 class="">
                        Discover a comprehensive suite of powerful tools designed to streamline your workflow and boost
                        efficiency. From project management to creative design, our versatile toolset equips you with
                        the resources needed to succeed. Harness the potential of these cutting-edge tools and unlock
                        your team's full potential for success.
                    </h2>

                    {{-- <button class="btn try-bot">
                        <p class="mb-0 text-white">Try Bot</p>
                    </button> --}}
                    <div class="parent">
                        <a href="{{ auth()->check() ? route('chat_dashboard') : route('login') }}">
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
            <h1 class="text-center mt-3 mt-md-5">Essential Productivity Tools</h1>
            <!-- <p class="mx-auto text-center w-75">Boost your productivity with our curated collection of essential tools.
                From collaboration and organization to creativity and analysis, our diverse toolset empowers you to
                tackle any task efficiently and effectively</p> -->
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-12 col-xl-6">
                    <img class="img-fluid" src="assets/images/tools.jpg" style="border-radius: 10px" alt="">
                </div>
                <div class="general-section col-12 col-sm-12 col-md-12 col-xl-6 my-auto">
                    <h3 class="h3 mt-3 mt-md-0">Unleash Innovation</h3>
                    <div class="spacer"></div>
                    <p>
                        Embrace innovation and creativity with our tools' advanced features and capabilities. From
                        automation to AI-driven insights, our cutting-edge functionalities push the boundaries of what's
                        possible.Protect your valuable data with our tools' robust security measures, ensuring your
                        information remains safe and confidential. We prioritize data privacy, adhering to industry
                        standards to safeguard your sensitive data, so you can work with peace of mind.
                    </p>
                    <a href="#!" class="link-button w-inline-block">
                        <div class="">
                            Generate factual content instantly!
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--General Section End-->

    <!--PDF Download Section -->
    <section id="downloadSection" class="pb-5">
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center my-3 my-md-5">Download Tools</h1>
                </div>
            </div>

            <div class="card" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-3">
                        <img class="img-fluid" src="assets/images/pdf.png"  alt="">

                        </div>
                        <div class="col-md-3 my-auto">
                            <div class="price_card_body align-items-center gap-3">
                                <div class="price_line">
                                    <div class="price_card_price">AI Tools</div>
                                </div>
                                <div class="feature_main">
                                    <div class="price_feature">
                                        <div class="feature_dollar">$</div>
                                        <div class="feature_amount">99</div>
                                        <!-- <div class="feature_month">/month</div> -->
                                    </div>

                                </div>
                                <button class="contact_us scrollto d-block" onclick="window.location.href = '{{ url('/login') }}';">
                                    <span class="icon-container">
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </span>
                                    <span class="contact">Buy Now</span>
                                </button>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Features</h6>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi recusandae adipisci eius iure</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dicta provident aliquid.</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi recusandae adipisci eius iure</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dicta provident aliquid.</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card mt-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        <img class="img-fluid" src="assets/images/pdf.png"  alt="">

                        </div>
                        <div class="col-md-3 my-auto">
                            <div class="price_card_body align-items-center gap-3">
                                <div class="price_line">
                                    <div class="price_card_price">AI Tools</div>
                                </div>
                                <div class="feature_main">
                                    <div class="price_feature">
                                        <div class="feature_dollar">$</div>
                                        <div class="feature_amount">99</div>
                                        <!-- <div class="feature_month">/month</div> -->
                                    </div>
                                </div>
                                <button class="contact_us scrollto d-block" onclick="window.location.href = '{{ url('/login') }}';">
                                    <span class="icon-container">
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </span>
                                    <span class="contact">Buy Now</span>
                                </button>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Features</h6>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi recusandae adipisci eius iure</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dicta provident aliquid.</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi recusandae adipisci eius iure</div>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick.png" class="feature_list_icon">
                                    <div class="price_card_feature">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dicta provident aliquid.</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PDF Download Section End -->
@endsection

@push('script')
@endpush
