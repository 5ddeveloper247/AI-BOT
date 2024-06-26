@extends('layouts.web.master')
@section('title', 'Home')
@push('css')
@endpush

@section('content')

    <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container container-sm container-md container-lg container-xl container-xxl">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                    <h1>Welcome to MediNurseAI - Your Ultimate NCLEX Exam Companion!</h1>
                    <h2 class="">
                        Powered by cutting-edge AI technology, MediNurseAI is the first chatbot tailored specifically
                        for nurses like you, aiming to excel in their NCLEX journey. Our interactive platform offers
                        personalized study plans, practice quizzes, and real-time feedback, ensuring you're fully
                        equipped for success.
                    </h2>
                    {{-- <div class="parent">
                        <input class="input-search" type="type" placeholder="Search..." />

                        <button class="btn btn-search">
                            <p class="mb-0 text-white">Start Chat</p>
                        </button>
                    </div> --}}

                    <div class="parent">
                        <input id="input-search" class="input-search" type="text" placeholder="Search..." />
                        <button id="btn-search" class="btn btn-search">
                            <p class="mb-0 text-white">Start Chat</p>
                        </button>
                    </div>



                    <div class="no-credit ">No credit card required.</div>
                </div>
            </div>
        </div>



    </section>
    <!-- Hero Section End -->

    <!-- Chat dasboard section -->
    <section>
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" data-aos="fade-up"
                    data-aos-delay="200">
                    <h1 class="text-center my-3 my-md-5">Chat Dashboard</h1>
                    <img class="chat_dashboard_image" width="100%" src="{{ asset('assets/images/chat_image.jpg') }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- Chat dasboard section End -->

    <!-- Features section -->
    <section>
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <div class="row" data-aos="fade-up">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h1 class="text-center my-3 my-md-5">Features</h1>
                </div>
                <div class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch"
                    data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="card features-card-item">
                        <div class="card-body features-card-body d-flex flex-column">
                            <div>
                                <img src="{{ asset('assets/images/logo.jpeg') }}" loading="lazy" alt=""
                                    class="features-image">
                                <h3 class="tools-title">Interactive Learning</h3>
                                <p class="features-para">Boredom? Not here! Engage in interactive learning sessions with
                                    the AI bot, making studying not just effective but fun too! Our bot uses quizzes,
                                    flashcards, and real-life scenarios to keep you captivated and motivated throughout
                                    your study sessions.</p>
                            </div>
                            <div class="features-card-flex mt-auto">
                                <a href="#" class="features-link w-inline-block">
                                    <div>Learn more</div>
                                    <i class="bi bi-graph-up-arrow"></i>
                                </a>
                                <img src="{{ asset('assets/images/new_svg.svg') }}" loading="lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch"
                    data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="card features-card-item">
                        <div class="card-body features-card-body d-flex flex-column">
                            <div>
                                <img src="{{ asset('assets/images/logo.jpeg') }}" loading="lazy" alt=""
                                    class="features-image">
                                <h3 class="tools-title">In-Depth Explanations</h3>
                                <p class="features-para">Stuck on a complex topic? Our AI bot provides
                                    in-depth explanations to clear your doubts. It breaks down challenging concepts into
                                    easy-to-understand nuggets of knowledge, making sure you grasp every critical
                                    aspect.</p>
                            </div>
                            <div class="features-card-flex mt-auto">
                                <a href="#" class="features-link w-inline-block">
                                    <div>Learn more</div>
                                    <i class="bi bi-graph-up-arrow"></i>
                                </a>
                                <img src="{{ asset('assets/images/new_svg.svg') }}" loading="lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 mb-4 mb-lg-0 col-lg-4 col-xl-4 col-xxl-4 card-gradiant d-flex align-items-stretch"
                    data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="card features-card-item ">
                        <div class="card-body features-card-body d-flex flex-column">
                            <div>
                                <img src="{{ asset('assets/images/logo.jpeg') }}" loading="lazy" alt=""
                                    class="features-image">
                                <h3 class="tools-title">Simulated Practice Exams</h3>
                                <p class="features-para">Practice makes perfect, right? Prepare yourself with confidence
                                    using our simulated practice exams. The AI bot simulates real NCLEX exam scenarios,
                                    allowing you to familiarize yourself with the test format and time management.</p>
                            </div>
                            <div class="features-card-flex mt-auto">
                                <a href="#" class="features-link w-inline-block">
                                    <div>Learn more</div>
                                    <i class="bi bi-graph-up-arrow"></i>
                                </a>
                                <img src="{{ asset('assets/images/new_svg.svg') }}" loading="lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Features section End -->

    <!--General Section-->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <img class="w-100" src="{{ asset('assets/images/Robotics-AI.png') }}" style="border-radius: 10px"
                        alt="">
                </div>
                <div class="general-section col-md-6 d-flex justify-content-center flex-column" data-aos="fade-right">
                    <h3 class="h3">Write Factual Trending Content</h3>
                    <div class="spacer"></div>
                    <p>
                        ChatBot is trained and powered by ‘Google Search’ to chat with
                        you on current events and trending topics in real-time.
                        ChatBot is trained and powered by ‘Google Search’ to chat with you on current events and
                        trending topics in real-time.
                        ChatBot is trained and powered by ‘Google Search’ to chat with you on current events and
                        trending topics in real-time.
                        ChatBot is trained and powered by ‘Google Search’ to chat with you on current events and
                        trending topics in real-time.
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

    <!--Pricing Plan-->
    <section class="mb-5">
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <h1 class="text-center my-3 my-md-5">Pricing</h1>
            <div role="list" class="price_card">


                {{-- @foreach ($plans as $plan)
                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="background:var(--background)" class="pricing_card_wrap">
                        <div class="price-card">
                            <div class="price_card_header">
                                <h4 style="color:var(--primary-color)" class="price_header_h4">{{ $plan->plan_name }}
                                </h4>
                                <p>{{ $plan->plan_name_description }}</p>
                            </div>
                            <div class="price_card_body">
                                <div class="price_line">
                                    <div class="price_card_price">{{ $plan->plan_tittle }}</div>
                                </div>
                                <div class="pricing_small_p">{{ $plan->plan_tittle_description }}</div>

                            </div>
                            <div class="price_card_body">
                                <div class="feature_main">
                                    <div class="price_feature">
                                        <div class="feature_dollar">$</div>
                                        <div class="feature_amount">{{ $plan->plan_price }}</div>
                                        <div class="feature_month">/month</div>
                                    </div>
                                </div>

                                <!-- <div class="price_line">
                                    <div class="price_card_price">Talk with sales</div>
                                </div> -->
                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.</div>

                            </div>


                            <button class="contact_us_2 scrollto" href="#">
                                <span class="icon-container">
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </span>
                                <span class="contact"> Start free 7-day trial</span>

                            </button>
                            <div class="price_card_features">
                                <h6 class="price_card_feature_heading">Features:</h6>
                                <div class="feature_list">
                                    @foreach ($plan->features as $feature)
                                        <img alt="Check" src="{{ asset('assets/images/tick_Check.svg') }}"
                                            class="feature_list_icon">
                                        <p class="price_card_feature">{{ $feature->name }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
            @endforeach --}}





                  <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div style="background:var(--background)" class="pricing_card_wrap">
                    <div class="price-card">
                        <div class="price_card_header">
                            <h4 style="color:var(--primary-color)" class="price_header_h4">{{$plans_Bot1->plan_tittle }}
                            </h4>
                            <p>{{ $plans_Bot1->plan_tittle_description }}</p>
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

                            @foreach($plans_Bot1->features as $feature )

                            <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">{{ $feature->name }}</p>
                            </div>

                            @endforeach
                            {{-- <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">No limits on all features</p>
                            </div>
                            <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">No limits on all features</p>
                            </div> --}}
                            {{-- <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">No limits on all features</p>
                            </div> --}}
                            {{-- <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">No limits on all features</p>
                            </div> --}}
                            {{-- <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <div class="price_card_feature">Team onboarding & ongoing tech support</div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>





            <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div style="background:var(--background)" class="pricing_card_wrap">
                    <div class="price-card">
                        <div class="price_card_header">
                            <h4 style="color:var(--primary-color)" class="price_header_h4">{{$plans_Bot2->plan_tittle }}
                            </h4>
                            <p>{{$plans_Bot2->plan_tittle_description }}</p>
                        </div>
                        <div class="price_card_body">
                            <div class="feature_main">
                                <div class="price_feature">
                                    <div class="feature_dollar">$</div>
                                    <div class="feature_amount">{{$plans_Bot2->plan_price }}</div>
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
                            @foreach($plans_Bot2->features as $feature )
                            <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                <p class="price_card_feature">{{ $feature->name }}</p>
                            </div>
                            @endforeach
                            {{-- <div class="feature_list">
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
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>






            <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div style="background:var(--background)" class="pricing_card_wrap">
                    <div class="price-card">
                        <div class="price_card_header">
                            <h4 style="color:var(--primary-color)" class="price_header_h4">
                                {{$plans_Bot1_Plus_Bot2->plan_tittle }}</h4>
                            <p>{{$plans_Bot1_Plus_Bot2->plan_tittle_description}}</p>
                        </div>
                        <div class="price_card_body">
                            <div class="feature_main">
                                <div class="price_feature">
                                    <div class="feature_dollar">$</div>
                                    <div class="feature_amount">{{$plans_Bot1_Plus_Bot2->plan_price }}</div>
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

                            @foreach($plans_Bot1_Plus_Bot2->features as $feature )

                            <div class="feature_list">
                                <img alt="Check" src="assets/images/tick_Check.svg" class="feature_list_icon">
                                 <p class="price_card_feature">{{ $feature->name }}</p>
                            </div>

                            @endforeach
                            {{-- <div class="feature_list">
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
                            </div> --}}
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get reference to the input field and the button
            var inputField = document.getElementById('input-search');
            var startChatBtn = document.getElementById('btn-search');

            // Add click event listener to the button
            startChatBtn.addEventListener('click', function() {
                // Get the value from the input field

                var inputValue = inputField.value.trim();

                // Check if input field is not blank
                if (inputValue) {

                    // Make an AJAX request using Axios
                    axios.post('/user/dashboard', {
                            search: inputValue
                        })
                        .then(function(response) {
                            // Handle success, if needed

                            window.location.href ="/user/chat/dashboard";
                        })
                        .catch(function(error) {
                            // Handle error, if needed
                            console.error('Request failed');
                            console.log(error);
                        });

                    // Empty the input field
                    inputField.value = '';
                }
                //
                else{

                   console.log(inputValue);
                }
            });
        });
    </script>
@endpush
