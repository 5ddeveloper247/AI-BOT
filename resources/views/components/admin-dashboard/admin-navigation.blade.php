<ul class="metismenu" id="menu">
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Home</div>
        </a>
        <ul>
            <li>
                <a href="{{ url('/admin/home/logo') }}" ><i class="bx bx-radio-circle"></i>Logo</a>
                <a href="{{ url('/admin/home/section-1') }}" ><i class="bx bx-radio-circle"></i>Section-1</a>
                <a href="{{ url('/admin/home/section-2') }}" ><i class="bx bx-radio-circle"></i>Section-2</a>
                <a href="{{ url('/admin/home/section-3') }}" ><i class="bx bx-radio-circle"></i>Section-3</a>
                <a href="{{ url('/admin/home/section-4') }}" ><i class="bx bx-radio-circle"></i>Section-4</a>
                <a href="{{ url('/admin/home/section-5') }}" ><i class="bx bx-radio-circle"></i>Section-5</a>
                <a href="{{ url('/admin/home/section-6') }}" ><i class="bx bx-radio-circle"></i>Footer</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ url('/admin/users/listing') }} "  id="users-link">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Users</div>
        </a>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Products</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/products/section-1') }}" id="products-link-section-1" ><i class="bx bx-radio-circle"></i>Section 1</a>
                <a href="{{ url('/admin/products/section-2') }}" id="products-link-section-1" ><i class="bx bx-radio-circle"></i>Section 2</a>
                <a href="{{ url('/admin/add/products') }}" id="products-link-section-1" ><i class="bx bx-radio-circle"></i>Add Product</a>
                <a href="{{ url('/admin/list/products') }}" id="products-link-section-2" ><i class="bx bx-radio-circle"></i>Product Listing</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Pricing</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/pricing/section-1') }}"  id="Pricing-link-section-1"  href="#"><i class="bx bx-radio-circle"></i>Section-1</a>
                <a href="{{ url('/admin/pricing/section-2') }}"  id="Pricing-link-section-2"  href="#"><i class="bx bx-radio-circle"></i>Plans</a>
                <a href="{{ url('/admin/pricing/section-3') }}"  id="Pricing-link-section-3"  href="#"><i class="bx bx-radio-circle"></i>Section-3</a>
                <a href="{{ url('/admin/pricing/section-4') }}"  id="Pricing-link-section-4"  href="#"><i class="bx bx-radio-circle"></i>Section-4</a>

            </li>

        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Tools</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/tools/section-1') }}" id="Tools-link-section-1" ><i class="bx bx-radio-circle"></i>Section-1</a>
                <a href="{{ url('/admin/tools/section-1') }}" id="Tools-link-section-2" ><i class="bx bx-radio-circle"></i>Section-2</a>
                <a href="{{ url('/admin/tools/section-1') }}" id="Tools-link-section-3" ><i class="bx bx-radio-circle"></i>Tools</a>

            </li>

        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Support</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/support/section-1') }}" id="Support-link-section-1"><i class="bx bx-radio-circle"></i>Section-1</a>
                <a href="{{ url('/admin/support/section-2') }}" id="Support-link-section-2"><i class="bx bx-radio-circle"></i>Section-2</a>
                <a href="{{ url('/admin/support/section-2') }}" id="Support-link-section-3"><i class="bx bx-radio-circle"></i>Section-3</a>

            </li>

        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Contact</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/contact/section-1') }}" id="Contact-link-section-1"><i class="bx bx-radio-circle"></i>Section-1</a>
                <a href="{{ url('/admin/contact/section-2') }}" id="Contact-link-section-2"><i class="bx bx-radio-circle"></i>Gusets User</a>
                <a href="{{ url('/admin/contact/section-3') }}" id="Contact-link-section-3"><i class="bx bx-radio-circle"></i>Inbox</a>
                <a href="{{ url('/admin/contact/section-4') }}" id="Contact-link-section-3"><i class="bx bx-radio-circle"></i>Reply</a>

            </li>

        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">Chat</div>
        </a>
        <ul>

            <li>
                <a href="{{ url('/admin/chat/section-1') }}" id="Chat-link"><i class="bx bx-radio-circle"></i>Section-1</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ url('/admin/faqs') }} " >
            <div class="parent-icon"><i class='bx bx-home-alt'></i>
            </div>
            <div class="menu-title">FAQS</div>
        </a>
    </li>
</ul>

{{--
<script>
    // Get the chat link element by its ID
    const chatLink = document.getElementById('Chat-link');

    // Add a click event listener to the link
    chatLink.addEventListener('click', function() {
        window.location.href = '{{ route("admin.chat") }}';
    });
</script> --}}
