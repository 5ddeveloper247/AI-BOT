@extends('layouts.web.master')
@section('title', 'Pricing')
@push('css')
@endpush

@section('content')
    <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container container-sm container-md container-lg container-xl container-xxl">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                    <h1 class="">Our competitive edge – An AI pricing bot for smart business decisions</h1>
                    <h2 class="">
                        Introducing our AI pricing bot – an invaluable tool for businesses seeking a competitive
                        advantage. From analyzing market trends to recommending optimal prices, this intelligent
                        assistant equips you with actionable insights to boost profitability and seize opportunities in
                        real-time. Unlock the potential of data-driven pricing strategies and stay ahead in today's
                        ever-evolving market landscape.
                    </h2>

                    <div class="parent">
                        <a href="{{ auth()->check() ? route('chat_dashboard') : route('login') }}">
                            <button class="btn try-bot" id="tryBotButton">
                                <p class="mb-0 text-white">Try Bot</p>
                            </button>
                        </a>
                    </div>
                    {{-- <button class="btn try-bot">
                        <p class="mb-0 text-white">Try Bot</p>
                    </button> --}}

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!--Pricing Plan-->
    <section class="mb-5">
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <h1 class="text-center my-3 my-md-5">Plans</h1>
            <div role="list" class="price_card">

                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="background:var(--background)" class="pricing_card_wrap">
                        <div class="price-card">
                            <div class="price_card_header">
                                <h4 style="color:var(--primary-color)" class="price_header_h4">Bot 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod eaque sunt porro.</p>
                            </div>
                            <div class="price_card_body">
                                <div class="price_line">
                                    <div class="price_card_price">Talk with sales</div>
                                </div>
                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.</div>

                            </div>
                            <button class="contact_us scrollto d-block" href="#">
                                <span class="icon-container">
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </span>
                                <span class="contact"> Contact Sales</span>

                            </button>

                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <div class="price_card_feature">Team onboarding & ongoing tech support</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="background:var(--background)" class="pricing_card_wrap">
                        <div class="price-card">
                            <div class="price_card_header">
                                <h4 style="color:var(--primary-color)" class="price_header_h4">Bot 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod eaque sunt porro.</p>
                            </div>
                            <div class="price_card_body">
                                <div class="feature_main">
                                    <div class="price_feature">
                                        <div class="feature_dollar">$</div>
                                        <div class="feature_amount">99</div>
                                        <div class="feature_month">/month</div>
                                    </div>
                                </div>

                                <!-- <div class="price_line">
                                <div class="price_card_price">Talk with sales</div>
                            </div> -->
                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.</div>

                            </div>


                            <button class="contact_us scrollto d-block" href="#">
                                <span class="icon-container">
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </span>
                                <span class="contact"> Start free 7-day trial</span>

                            </button>

                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <div class="price_card_feature">Team onboarding & ongoing tech support</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="background:var(--background)" class="pricing_card_wrap">
                        <div class="price-card">
                            <div class="price_card_header">
                                <h4 style="color:var(--primary-color)" class="price_header_h4">Bot 1 + Bot 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod eaque sunt porro.</p>
                            </div>
                            <div class="price_card_body">
                                <div class="feature_main">
                                    <div class="price_feature">
                                        <div class="feature_dollar">$</div>
                                        <div class="feature_amount">99</div>
                                        <div class="feature_month">/month</div>
                                    </div>
                                </div>

                                <!-- <div class="price_line">
                                <div class="price_card_price">Talk with sales</div>
                            </div> -->
                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.</div>

                            </div>


                            <button class="contact_us scrollto d-block" href="#">
                                <span class="icon-container">
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </span>
                                <span class="contact"> Start free 7-day trial</span>

                            </button>

                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <p class="price_card_feature">No limits on all features</p>
                                </div>
                                <div class="feature_list">
                                    <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                    <div class="price_card_feature">Team onboarding & ongoing tech support</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--Pricing Plan End-->

    <!--General Section-->
    <section>
        <div class="container my-5" data-aos="fade-right">

            <div class="row mt-10">
                <div class="col-12 col-sm-12 col-md-12 col-xl-6">
                    <img class="img-fluid" src="assets/images/pricing.jpg" style="border-radius: 10px" alt="">
                </div>
                <div class="general-section col-12 col-sm-12 col-md-12 col-xl-6 my-auto">
                    <h3 class="h3 mt-3 mt-md-0">Empowering Through AI</h3>
                    <div class="spacer"></div>
                    <p>
                        An AI bot, short for Artificial Intelligence bot, is a computer program or application powered
                        by advanced algorithms that enable it to simulate human-like interactions and intelligence.
                        These intelligent virtual assistants are designed to understand and respond to natural language
                        inputs, allowing users to communicate with them in a conversational manner. AI bots can perform
                        a wide range of tasks, such as answering questions, providing recommendations, scheduling
                        appointments, offering customer support, and even engaging in casual conversation.
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
    <!--General Section-->

    <!--General Section-->
    <section>
        <div class="container my-5" data-aos="fade-right">

            <div class="row mt-10">

                <div class="general-section col-12 col-sm-12 col-md-12 col-xl-6 my-auto">
                    <h3 class="h3 mt-3 mt-md-0">Smart Pricing Bot Solution</h3>
                    <div class="spacer"></div>
                    <p>
                        Revolutionize your pricing approach with our AI-driven bot, a game-changer for businesses.
                        Leverage real-time market analysis and historical data to set competitive prices, maximize
                        profits, and respond swiftly to market fluctuations. Our pricing bot adapts and learns from
                        customer behavior, ensuring dynamic pricing decisions tailored to your target audience. Stay
                        agile, make data-backed choices, and secure your position as an industry leader with this
                        indispensable tool in your pricing arsenal. Embrace the future of pricing optimization and
                        embrace unparalleled success in your market
                    </p>
                    <a href="#!" class="link-button w-inline-block">
                        <div class="">
                            Generate factual content instantly!
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-xl-6">
                    <img class="img-fluid" src="assets/images/Robotics-AI.png" style="border-radius: 10px" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--General Section-->
@endsection

@push('script')
@endpush
