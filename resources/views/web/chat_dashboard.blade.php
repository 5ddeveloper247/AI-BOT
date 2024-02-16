@include('layouts.web.chat_dashboard_header')

    <div class="wrapper">

        <x-chat_dashboard_sidebar></x-chat_dashboard_sidebar>

        <x-chat_dashboard_main></x-chat_dashboard_main>


        <!-- profile side modal -->
        <div class="offcanvas offcanvas-start custom-offcanvas" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile</h5>
                <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center position-relative">

                            <img class="rounded-circle profile_image " width="100" height="100"
                                id="profile_image" src="assets/images/logo.jpeg" alt="" />
                            <input class="d-none" onchange="loadFile(event)" accept="image/*" type="file"
                                name="" id="hung22">
                            <span class="profile_icon"><i class="bi bi-pencil"></i></span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <form>

                            <div class="my-3">
                                <label for="inputName" class="form-label form_label">Name</label>
                                <input type="password" class="form-control form-control-sm" id="inputName">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label form_label">Email</label>
                                <input type="email" class="form-control form-control-sm" id="inputEmail"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label form_label">Password</label>
                                <input type="password" class="form-control form-control-sm" id="inputPassword">
                            </div>

                            <button type="submit" class="btn btn-sm float-end ms-1 text-light"
                                style="background-color: var(--btn-background-color);">Save</button>
                            <button class="btn btn-sm btn-dark float-end" data-bs-dismiss="offcanvas"
                                aria-label="Close">Cancel</button>
                        </form>
                    </div>
                    <div class="col-md-12 my-3">
                        <h6>Update Payment Card</h6>
                        <form>

                            <div class="my-3">
                                <label for="inputName" class="form-label form_label">Card Number</label>
                                <input type="number" class="form-control form-control-sm" id="inputName">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label form_label">Expiry Date</label>
                                <input type="date" class="form-control form-control-sm" id="inputEmail"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label form_label">Csv Number</label>
                                <input type="password" class="form-control form-control-sm" id="inputPassword">
                            </div>

                            <button type="submit" class="btn btn-sm float-end ms-1 text-light "
                                style="background-color: var(--btn-background-color);">Save</button>
                            <button class="btn btn-sm btn-dark float-end" data-bs-dismiss="offcanvas"
                                aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile side modal end-->

        <!-- price modal -->
        <div class="modal fade" id="price_modal_toggle" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="text-center fw-bolder">Pricing</h6>
                        <button type="button" class="btn-close bg-body btn-close p-1 me-1"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Pricing Plan-->
                        <section class="mb-5">
                            <div class="container container-sm container-md container-lg container-xl container-xxl">

                                <div role="list" class="price_card">

                                    <div role="listitem" class="" data-aos="flip-left"
                                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                        <div style="background:var(--background)" class="pricing_card_wrap">
                                            <div class="price-card">
                                                <div class="price_card_header">
                                                    <h4 style="color:var(--primary-color)" class="price_header_h4">
                                                        Bot 1</h4>
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

                                    <div role="listitem" class="" data-aos="flip-left"
                                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
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

                                    <div role="listitem" class="" data-aos="flip-left"
                                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
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
                        </section>
                        <!--Pricing Plan End-->
                    </div>

                </div>
            </div>
        </div>
        <!-- price modal end-->

        <!-- Delete modal -->
        <div class="modal fade" id="delete_modal_toggle" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h6 class="fw-bold">
                            Delete chat?
                        </h6>

                        <button type="button" class="btn-close bg-body btn-close p-1 me-1"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        This chat will delete will be delete. Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn text-light"
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
                        <button type="button" class="btn-close bg-body btn-close p-1 me-1"
                            data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <button type="button" class="btn btn-sm text-light"
                            style="background-color: var(--primary-color);" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm text-light save_bookmark"
                            style="background-color: var(--btn-background-color);">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Add Bookmark End-->

    </div>

@include('layouts.web.chat_dashboard_footer');
