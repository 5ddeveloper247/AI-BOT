@extends('layouts.web.master')
@section('title', 'Product')
@push('css')
@endpush

@section('content')
 <!-- Hero section -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container container-sm container-md container-lg container-xl container-xxl">

        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                <h1 class="">Your AI-powered assistant, always ready to help and learn</h1>
                <h2 class="">
                    Meet your new AI companion - a versatile bot designed to assist and adapt to your needs. From
                    answering questions to providing personalized recommendations, this intelligent virtual
                    assistant is here to streamline your tasks and enhance your daily life.
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
        <h1 class="text-center mt-3 mt-md-5">About Bot</h1>
        <p class="mx-auto text-center w-75">Our cutting-edge AI solutions harness the potential of artificial
            intelligence to empower businesses and individuals alike. By delivering advanced automation,
            personalized insights, and enhanced decision-making capabilities, </p>
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-xl-6">
                <img class="img-fluid" src="assets/images/product-ai.jpg" style="border-radius: 10px" alt="">
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

<!-- Features section -->
<section>
    <div class="container container-sm container-md container-lg container-xl container-xxl">
        <div class="row" data-aos="fade-up">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <h1 class="text-center my-3 my-md-5">Features</h1>
            </div>

            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch">
                <div class="card features-card-item">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">Interactive Learning</h3>
                            <p class="features-para mb-0">Boredom? Not here! Engage in interactive learning sessions
                                with
                                the AI bot, making studying not just effective but fun too! Our bot uses quizzes,
                                flashcards, and real-life scenarios to keep you captivated and motivated throughout
                                your study sessions.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch">
                <div class="card features-card-item">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">In-Depth Explanations</h3>
                            <p class="features-para mb-0">Stuck on a complex topic? Our AI bot provides
                                in-depth explanations to clear your doubts. It breaks down challenging concepts into
                                easy-to-understand nuggets of knowledge, making sure you grasp every critical
                                aspect.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch">
                <div class="card features-card-item ">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">Simulated Practice Exams</h3>
                            <p class="features-para mb-0">Practice makes perfect, right? Prepare yourself with
                                confidence
                                using our simulated practice exams. The AI bot simulates real NCLEX exam scenarios,
                                allowing you to familiarize yourself with the test format and time management.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch mt-3">
                <div class="card features-card-item">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">Interactive Learning</h3>
                            <p class="features-para mb-0">Boredom? Not here! Engage in interactive learning sessions
                                with
                                the AI bot, making studying not just effective but fun too! Our bot uses quizzes,
                                flashcards, and real-life scenarios to keep you captivated and motivated throughout
                                your study sessions.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch mt-3">
                <div class="card features-card-item">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">In-Depth Explanations</h3>
                            <p class="features-para mb-0">Stuck on a complex topic? Our AI bot provides
                                in-depth explanations to clear your doubts. It breaks down challenging concepts into
                                easy-to-understand nuggets of knowledge, making sure you grasp every critical
                                aspect.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch mt-3">
                <div class="card features-card-item ">
                    <div class="card-body features-card-body d-flex flex-column">
                        <div>
                            <img src="assets/images/logo.jpeg" loading="lazy" alt="" class="features-image">
                            <h3 class="fw-bold tools-title">Simulated Practice Exams</h3>
                            <p class="features-para mb-0">Practice makes perfect, right? Prepare yourself with
                                confidence
                                using our simulated practice exams. The AI bot simulates real NCLEX exam scenarios,
                                allowing you to familiarize yourself with the test format and time management.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Features section End -->

<!--Pricing Plan-->
<section class="mb-5">
    <div class="container container-sm container-md container-lg container-xl container-xxl">
        <h1 class="text-center my-3 my-md-5">Pricing</h1>
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
@endsection

@push('script')
@endpush
