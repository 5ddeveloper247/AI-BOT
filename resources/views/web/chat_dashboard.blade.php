@include('layouts.web.chat_dashboard_header')


<div class="wrapper">

    <!-- Sidebar -->
    <x-chat_dashboard_sidebar :chats="$chats"></x-chat_dashboard_sidebar>
    <!-- Sidebar End -->


    <!--Main start-->
    <x-chat_dashboard_main :plan="$plan" :membership="$membership"></x-chat_dashboard_main>
    <!--Main End-->



    <!-- profile side modal -->
    <x-dashboard_profile_update :user="$user"></x-dashboard_profile_update>
    <!-- profile side modal end-->



    <!-- price modal -->
    <div class="modal fade" id="price_modal_toggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="text-center fw-bolder">Pricing</h6>
                    <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Pricing Plan-->
                    {{-- <section class="mb-5">
                        <div class="container container-sm container-md container-lg container-xl container-xxl">

                            <div role="list" class="price_card">

                                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div style="background:var(--background)" class="pricing_card_wrap">
                                        <div class="price-card">
                                            <div class="price_card_header">
                                                <h4 style="color:var(--primary-color)" class="price_header_h4">
                                                    Bot 21</h4>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod
                                                    eaque sunt porro.</p>
                                            </div>
                                            <div class="price_card_body">
                                                <!-- <div class="price_line">
                                                 <div class="price_card_price">Talk with sales</div>
                                                  </div> -->
                                                <div class="feature_main">
                                                    <div class="price_feature">
                                                        <div class="feature_dollar">$</div>
                                                        <div class="feature_amount">49</div>
                                                        <div class="feature_month">/month</div>
                                                    </div>
                                                </div>
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your
                                                    company.</div>

                                            </div>
                                            <button class="contact_us scrollto bg-dark" href="#" disabled>
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact"> Your Current Plan</span>

                                            </button>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">Team onboarding & ongoing tech
                                                        support</div>
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
                                                <h4 style="color:var(--primary-color)" class="price_header_h4">
                                                    Bot 2</h4>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod
                                                    eaque sunt porro.</p>
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
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your
                                                    company.</div>

                                            </div>


                                            <button class="contact_us scrollto" href="#">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact"> Try Bot 2</span>

                                            </button>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">Team onboarding & ongoing tech
                                                        support</div>
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
                                                <h4 style="color:var(--primary-color)" class="price_header_h4">
                                                    Bot 1 + Bot 2</h4>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod
                                                    eaque sunt porro.</p>
                                            </div>
                                            <div class="price_card_body">
                                                <div class="feature_main">
                                                    <div class="price_feature">
                                                        <div class="feature_dollar">$</div>
                                                        <div class="feature_amount">130</div>
                                                        <div class="feature_month">/month</div>
                                                    </div>
                                                </div>

                                                <!-- <div class="price_line">
                                                 <div class="price_card_price">Talk with sales</div>
                                                </div> -->
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your
                                                    company.</div>

                                            </div>

                                            <button class="contact_us scrollto" href="#">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact"> Try Bot 1 + Bot 2</span>

                                            </button>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <div class="price_card_feature">Team onboarding & ongoing tech
                                                        support</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </section> --}}

                    <section class="mb-5">
                        <div class="container container-sm container-md container-lg container-xl container-xxl">
                            <h1 class="text-center my-3 my-md-5">Pricing</h1>
                            <div role="list" class="price_card">

                                <div role="listitem" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div style="background:var(--background)" class="pricing_card_wrap">
                                        <div class="price-card">
                                            <div class="price_card_header">
                                                <h4 style="color:var(--primary-color)" class="price_header_h4">
                                                    {{$plans_Bot1->plan_tittle }}
                                                </h4>
                                                <p>{{ $plans_Bot1->plan_tittle_description }}</p>
                                            </div>
                                            <div class="price_card_body">
                                                <div class="price_line">
                                                    <div class="price_card_price">Talk with sales</div>
                                                </div>
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.
                                                </div>

                                            </div>

                                            @if($plan->id == 1)
                                            <a href="{{ route('plans') }}"
                                                class="contact_us scrollto d-block bg-success">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Your's Subscription</span>
                                            </a>
                                            @else
                                            <a href="{{ route('plans') }}" class="contact_us scrollto d-block">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Contact Sales</span>
                                            </a>
                                            @endif


                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>

                                                @foreach($plans_Bot1->features as $feature )

                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <p class="price_card_feature">{{ $feature->name }}</p>
                                                </div>

                                                @endforeach

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
                                                    {{$plans_Bot2->plan_tittle }}
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
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.
                                                </div>

                                            </div>


                                            @if($plan->id == 2)
                                            <a href="{{ route('plans') }}"
                                                class="contact_us scrollto d-block bg-success">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Your's Subscription</span>
                                            </a>

                                            @else
                                            <a href="{{ route('plans') }}" class="contact_us scrollto d-block">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Start with ${{ $plans_Bot2->plan_price }}</span>
                                            </a>
                                            @endif


                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>
                                                @foreach($plans_Bot2->features as $feature )
                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <p class="price_card_feature">{{ $feature->name }}</p>
                                                </div>
                                                @endforeach

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
                                                        <div class="feature_amount">{{$plans_Bot1_Plus_Bot2->plan_price
                                                            }}</div>
                                                        <div class="feature_month">/month</div>
                                                    </div>
                                                </div>

                                                <!-- <div class="price_line">
                                                <div class="price_card_price">Talk with sales</div>
                                            </div> -->
                                                <div class="pricing_small_p">Get MediNurseAI tailored for your company.
                                                </div>

                                            </div>


                                            @if($plan->id == 3)
                                            <a href="{{ route('plans') }}" class="contact_us scrollto d-block">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Your's Subscription</span>
                                            </a>
                                            @else
                                            <a href="{{ route('plans') }}" class="contact_us scrollto d-block">
                                                <span class="icon-container">
                                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                                </span>
                                                <span class="contact">Start with ${{ $plans_Bot1_Plus_Bot2->plan_price
                                                    }}</span>
                                            </a>
                                            @endif



                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">Everything in Teams, plus:</h6>

                                                @foreach($plans_Bot1_Plus_Bot2->features as $feature )

                                                <div class="feature_list">
                                                    <img alt="Check" src="assets/images/tick_Check.svg"
                                                        class="feature_list_icon">
                                                    <p class="price_card_feature">{{ $feature->name }}</p>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </section>
                    <!--Pricing Plan End-->
                </div>

            </div>
        </div>
    </div>
    <!-- price modal end-->




    <!-- Delete modal -->
    <div class="modal fade" id="delete_modal_toggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="fw-bold">Delete chat?</h6>
                    <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">This chat will be deleted. Are you sure?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn text-light btn-delete"
                        style="background-color: var(--btn-background-color);">Delete!</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Delete modal end-->
    <!--Add Bookmark-->
    <div class="modal fade" id="addToBookmark" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h6 class="modal-title fw-bold" id="staticBackdropLabel">Select Bookmark</h6>
                    <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row py-4">
                        <div class="col-md-12">
                            <select class="select2 form-control" name="bookmark">
                                <option value="Bookmark1">Bookmark1</option>
                                <option value="Bookmark2">Bookmark2</option>
                                <option value="Bookmark3">Bookmark3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-2">
                    <button type="button" class="btn btn-sm text-light" style="background-color: var(--primary-color);"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm text-light save_bookmark"
                        style="background-color: var(--btn-background-color);">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--Add Bookmark End-->
</div>




@include('layouts.web.chat_dashboard_footer');