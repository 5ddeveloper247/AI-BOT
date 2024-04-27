    <!--Main start-->
    <main class="main collapsed">
        <nav class="nav navbar navbar-expand px-3 border-bottom fixed-top">
            <!-- Button for sidebar toggle -->
            <span class="bi bi-filter-right toggle_btn"></span>
        </nav>
        <div class="main-content main_meraki container-fluid mt-5">


            <div class="col-md-12 text-center my-4">
                @if ($membership && $membership->end_trial)
                    @php
                        $remainingDays = now()->diffInDays($membership->end_trial);
                    @endphp
                    <h1 class="text-center text-danger fw-bolder" style="
                    font-size: 20px;
                    margin-top: -20px;
                    margin-bottom: -20px;
                ">Membership: {{ $remainingDays }} days remaining</h1>
                @endif
            </div>


            <div class="row">
                {{-- <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="bg-bot-div rounded-2 p-2">
                        <button class="btn btn-bot text-light active" data-bot="bot1">
                            <i class="bi bi-robot me-2"></i>
                            Bot 1
                        </button>
                        <button class="btn btn-bot text-light" data-bot="bot2">
                            <i class="bi bi-robot me-2"></i>
                            Bot 2
                            <i class="bi bi-lock ms-2"></i>
                        </button>
                        <button class="btn btn-bot text-light" data-bot="botboth">
                            <i class="bi bi-robot me-2"></i>Bot 1 + Bot 2
                            <i class="bi bi-lock ms-2"></i>
                        </button>
                    </div>

                </div> --}}

                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="bg-bot-div rounded-2 p-2">
                        <button class="btn btn-bot text-light {{ $plan->id == 1 ? 'active' : '' }}" data-bot="bot1" {{ $plan->id == 1 ? '' : 'disabled' }}>
                            <i class="bi bi-robot me-2"></i>
                            Bot 1
                        </button>
                        <button class="btn btn-bot text-light {{ $plan->id == 2 ? 'active' : '' }}" data-bot="bot2" {{ $plan->id == 2 ? '' : 'disabled' }}>
                            <i class="bi bi-robot me-2"></i>
                            Bot 2
                            @unless($plan->id == 2)
                            <i class="bi bi-lock ms-2"></i>
                            @endunless
                        </button>
                        <button class="btn btn-bot text-light {{ $plan->id == 3 ? 'active' : '' }}" data-bot="botboth" {{ $plan->id == 3 ? '' : 'disabled' }}>
                            <i class="bi bi-robot me-2"></i>Bot 1 + Bot 2
                            @unless($plan->id == 3)
                            <i class="bi bi-lock ms-2"></i>
                            @endunless
                        </button>
                    </div>

                </div>

                <div class="col-md-12 text-center my-4">
                    {{-- <h1 class="bot-heading text-center text-dark fw-bolder">Bot 1</h1> --}}
                    <h1 class=" text-center text-dark fw-bolder">{{ $plan->plan_name }}</h1>

                </div>
                <div class="col-md-12 ">
                    <div class="search_chat_main my-1 w-50 mx-auto">
                        <div class="form-group has-search">
                            <span class="bi bi-search form-control-feedback-main"></span>
                            <input type="text" class="form-control search_input_main rounded-pill shadow-sm"
                                placeholder="Search">
                            <button class="btn btn-search end-0 position-absolute start_new_chat text-light top-0">
                                <span>
                                    <i class="bi bi-send"></i>
                                </span></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h4 class="my-4 text-center text-dark fw-bolder">Features</h4>
                </div>
            </div>
            <div class="d-grid features_data justify-content-center m-auto w-75" id="features_data">

            </div>
        </div>




        <!--Chat start-->
        <section class="chat_meraki d-none h-100" style="background-color: #CDC4F9;">
            <div class="container pt-5 pb-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="chat3" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto" style="width: 73vw;">
                                        <div class="pt-3 pe-3 scrollable-content"
                                            style="position: relative; height: 73vh">

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="assets/images/user.png" alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1"
                                                    style="display:none" type="checkbox">
                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-end gap-2">
                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit. Autem soluta reiciendis,
                                                        veritatis
                                                        neque aliquam dolore enim nemo numquam magnam? Illo, in
                                                        praesentium.
                                                        Harum, id aperiam? Aliquam pariatur laudantium sit incidunt.
                                                    </p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">
                                                <img class="chat_image" src="assets/images/logo.jpeg" alt="avatar 1">
                                            </div>
                                        </div>
                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 bg-search-bar chat_input">
                                            <img class="chat_image mx-2" src="assets/images/user.png" alt="avatar 3">
                                            <input type="text" class="form-control form-control-lg bg-transparent"
                                                id="messaeg_bar" placeholder="Type message">
                                            <a class="ms-3 send_chat_btn text-light p-2 rounded-3" href="#!"><i
                                                    class="bi bi-send-fill"></i></a>
                                        </div>
                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 bg-search-bar bookmark_input d-none">
                                            <input type="text" class="form-control form-control-lg bg-transparent"
                                                id="search_bar" placeholder="Add To Bookmark" disabled>
                                            <a class="ms-3 send_chat_btn text-light p-2 rounded-3"
                                                data-bs-toggle="modal" href="#addToBookmark"><i
                                                    class="bi bi-bookmark-plus-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Chat End-->



        <footer class="footer mt-auto py-1">
            <p class="copyright my-1">
                Copyright &copy; <span id="current_year"></span> All Rights Reserved | MediNurseAI
            </p>
        </footer>
    </main>
    <!--Main End-->


