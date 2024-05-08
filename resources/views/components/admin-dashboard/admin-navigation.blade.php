<ul class="metismenu" id="menu">

    <li>
        <a href="{{ route('admin.dashboard') }}">
            <div class="parent-icon"><i class='bx bxs-dashboard'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>

    </li>





    {{-- Home --}}

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Home</div>
        </a>
        <ul>
            <li>
                <a href="{{ url('/admin/home/logo') }}"><i class="bx bx-radio-circle"></i>Logo</a>

            </li>
        </ul>
    </li>





    {{-- Admin users --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bxs-user'></i>
            </div>
            <div class="menu-title">Admin Users</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.list.admins.view') }}"><i class="bx bx-radio-circle"></i>Admins</a>

            </li>
        </ul>
    </li>






    {{-- Site Users --}}

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-user-circle'></i>
            </div>
            <div class="menu-title">Site Users</div>
        </a>
        <ul>
            <li>
                <a href="#"><i class="bx bx-radio-circle"></i>Users</a>

            </li>
        </ul>
    </li>




    {{-- Users --}}
    <li>
        <a href="{{ url('/admin/users/listing') }} " id="users-link">
            <div class="parent-icon"><i class='bx bx-user'></i>
            </div>
            <div class="menu-title">Users</div>
        </a>
    </li>




    {{-- Pricing --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-purchase-tag-alt'></i>
            </div>
            <div class="menu-title">Pricing</div>
        </a>

        <ul>

            <li>
                <a href="{{ url('/admin/pricing/section-2') }}" id="Pricing-link-section-2" href="#"><i
                        class='bx bx-purchase-tag-alt'></i>Plans</a>


            </li>

        </ul>
    </li>





    {{-- Bot Prices --}}

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-bot'></i>
            </div>
            <div class="menu-title">Bot Prices</div>
        </a>
        <ul>
            <li>
                <a href="#"><i class='bx bx-bot'></i>Bot Prices</a>

            </li>
        </ul>
    </li>

    {{-- MemberShips --}}

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-ghost'></i>
            </div>
            <div class="menu-title">Memberships</div>
        </a>
        <ul>
            <li>
                <a href="#"><i class='bx bx-ghost'></i>Memberships</a>

            </li>
        </ul>
    </li>



    {{-- Payment and Invoices--}}

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-wallet-alt'></i>
            </div>
            <div class="menu-title">Payment and Invoices</div>
        </a>
        <ul>
            <li>
                <a href="#"><i class='bx bx-wallet-alt'></i>Payment and Invoices</a>

            </li>
        </ul>
    </li>






    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bxs-contact'></i>
            </div>
            <div class="menu-title">Contact</div>
        </a>
        <ul>

            <li>
                {{-- <a href="{{ url('/admin/contact/section-1') }}" id="Contact-link-section-1"><i
                        class="bx bx-radio-circle"></i>Section-1</a> --}}
                <a href="{{ url('/admin/contact/section-2') }}" id="Contact-link-section-2"><i
                        class="bx bx-radio-circle"></i>Gusets User</a>
                <a href="{{ url('/admin/contact/section-3') }}" id="Contact-link-section-3"><i
                        class="bx bx-radio-circle"></i>Inbox</a>
                <a href="{{ url('/admin/contact/section-4') }}" id="Contact-link-section-3"><i
                        class="bx bx-radio-circle"></i>Reply</a>

            </li>

        </ul>
    </li>








    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-chat'></i>
            </div>
            <div class="menu-title">Chat</div>
        </a>
        <ul>

            {{-- <li>
                <a href="{{ url('/admin/chat/section-1') }}" id="Chat-link"><i
                        class="bx bx-radio-circle"></i>Section-1</a>
            </li> --}}
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-chat'></i>
            </div>
            <div class="menu-title">Payment History</div>
        </a>
        <ul>

            <li>
                <a href="{{ route('admin.payment.history.view') }}" id="Chat-link"><i
                        class="bx bx-radio-circle"></i>Payment History</a>
            </li>
        </ul>
    </li>

    {{-- Payment Api Settings --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cog'></i>
            </div>
            <div class="menu-title">Payment Api Settings</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.paymentapisettings.view') }}"><i class='bx bx-cog'></i>Payment Api Settings</a>

            </li>
        </ul>
    </li>


    {{-- Bot Api Settings --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bxs-cog'></i>
            </div>
            <div class="menu-title">Bot Api Settings </div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.botConfiguration.view') }}"><i class='bx bxs-cog'></i>Bot Api Settings </a>
            </li>
        </ul>
    </li>



    {{-- Site Configurations --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-sitemap'></i>
            </div>
            <div class="menu-title">Site Configurations</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.siteconfiguration.view') }}"><i class='bx bx-sitemap'></i>Site Configurations
                </a>

            </li>
        </ul>
    </li>

    <li>
        <a href="{{ url('/admin/faqs') }} ">
            <div class="parent-icon"><i class='bx bx-info-circle'></i>
            </div>
            <div class="menu-title">FAQS</div>
        </a>
    </li>
</ul>








{{-- for menu collapseable --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Collapse all submenu items initially
        $('.metismenu ul').hide();

        // Toggle submenu on clicking the parent menu item
        $('.metismenu .has-arrow').click(function (e) {
            e.preventDefault();
            $(this).next('ul').slideToggle();
        });
    });
</script>



{{--
<script>
    // Get the chat link element by its ID
    const chatLink = document.getElementById('Chat-link');

    // Add a click event listener to the link
    chatLink.addEventListener('click', function() {
        window.location.href = '{{ route("admin.chat") }}';
    });
</script> --}}