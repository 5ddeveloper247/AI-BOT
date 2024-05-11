<style>
    .fixed-bottom-left {
        position: fixed;
        bottom: 1px;
        left: 1px;
        z-index: 1000;
    }
</style>


<!-- Sidebar -->
<aside id="sidebar" class="position-fixed">
    <div class="vh-100 overflow-auto scroll-bar-left-side">
        <div class="sidebar-logo">
            <div class="user-profile position-relative">

                <img role="button" class="img-fluid rounded-circle dropdown_list cursor-pointer"
                    src="assets/images/logo.jpeg" width="30" alt="" />
                <ul class="dropdown-menu position-absolute">
                    <li>
                        <a class="dropdown-item close-on-click" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample" aria-controls="offcanvasScrolling"
                            onclick="loadProfileEdit()" type="button">
                            Edit Profile
                        </a>
                    </li>
                    <li><a class="dropdown-item close-on-click" data-bs-toggle="modal" href="#price_modal_toggle"
                            role="button">Packages</a></li>

                </ul>

            </div>

            <div class="sidebar-logo-rightside">
                <i class="bi bi-plus start_new_chat text-white"></i>
                <i class="bi bi-box-arrow-left close_new_chat d-none text-white"></i>
                <i class="bi bi-bookmarks text-white"></i>
                <i class="bi bi-arrow-repeat text-white " id="chatReloadSidebarBtn"></i>
            </div>
        </div>
        <div class="search_chat my-1 mx-2">
            <div class="form-group has-search">
                <span class="bi bi-search form-control-feedback"></span>
                <input type="search" id="searchInput" class="form-control search_input rounded-pill shadow-sm"
                    placeholder="Search">
            </div>
        </div>

        {{-- <ul id="chatlist" class="sidebar-nav">
            @foreach ($chats as $chat)
            <li class="sidebar-item chat-item" id="chat{{ $chat->id }}">
                <div class="sidebar-link">
                    <i class="bi bi-chat-left me-2"></i>
                    <label class="chat_name">{{ $chat->user_chat }}</label>
                    <input type="text" class="chat_name_input d-none">
                </div>
                <div class="d-flex action_btn d-none">
                    <a type="button" class="edit_field">
                        <i class="bi bi-pencil-square text-white me-1"></i>
                    </a>
                    <a type="button" class="delete_record" data-chat-id="{{ $chat->id }}">
                        <i class="bi bi-trash text-white"></i>
                    </a>
                </div>
                <div class="d-flex action_save_btn d-none">
                    <a type="button" class="save_field">
                        <i class="bi bi-check2 text-white me-1"></i>
                    </a>
                    <a type="button" class="close_record">
                        <i class="bi bi-x text-white"></i>
                    </a>
                </div>
            </li>
            @endforeach
        </ul>

        --}}


        <ul id="chatlist" class="sidebar-nav">
            {{-- @foreach ($chats as $chat)
            <li class="sidebar-item chat-item" id="chat{{ $chat->id }}" data-chat-id="{{ $chat->id }}">
                <div class="sidebar-link">
                    <i class="bi bi-chat-left me-2"></i>
                    <label class="chat_name">{{ $chat->user_chat }}</label>
                    <input type="text" class="chat_name_input d-none">
                </div>
                <div class="d-flex action_btn d-none">
                    <a type="button" class="edit_field">
                        <i class="bi bi-pencil-square text-white me-1"></i>
                    </a>
                    <a type="button" class="delete_record" data-chat-id="{{ $chat->id }}">
                        <i class="bi bi-trash text-white"></i>
                    </a>
                </div>
                <div class="d-flex action_save_btn d-none">
                    <a type="button" class="save_field">
                        <i class="bi bi-check2 text-white me-1"></i>
                    </a>
                    <a type="button" class="close_record">
                        <i class="bi bi-x text-white"></i>
                    </a>
                </div>
            </li>
            @endforeach --}}
        </ul>






        <div class="fixed-bottom-left">
            <button id="helpDeskButton" class="btn btn-primary">Help Desk</button>
        </div>

    </div>
</aside>
<!-- Sidebar End -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const helpDeskButton = document.getElementById('helpDeskButton');
        if (helpDeskButton) {
            helpDeskButton.addEventListener('click', function() {
                window.location.href = "{{ url('/helpdesk') }}";
            });
        }
    });

    // ************ search funtin ************

    document.getElementById('searchInput').addEventListener('keyup', function() {
        const searchTerm = this.value.trim().toLowerCase();
        const chatlist = document.getElementById('chatlist');
        const chatItems = chatlist.querySelectorAll('.chat-item');

        chatItems.forEach(item => {
            const chatText = item.querySelector('.chat_name').textContent.toLowerCase();

            if (chatText.includes(searchTerm)) {
                // If the chat matches the search term, display it
                item.style.display = 'flex';
            } else {
                // If the chat does not match the search term, hide it
                item.style.display = 'none';
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
       
           reloadChatSideBar();
    });



    //reload on when reloadsidebard btn clicked
   $('#chatReloadSidebarBtn').on('click',()=>{
    reloadChatSideBar();
   });

    function reloadChatSideBar(){
    
        $.ajax({
            type: "GET",
            url: "{{ route('user.chat.all') }}",
            success: function(response) {
                var chats = response.chats; // Assuming 'chats' is the key containing the array of chats

                // Loop through the chats and append HTML dynamically
                $('#chatlist').empty();// empty the ul first then append 
                chats.forEach(function(chat) {
                    var chatItem = `
                        <li class="sidebar-item chat-item" id="chat${chat.id}" data-chat-id="${chat.id}">
                            <div class="sidebar-link">
                                <i class="bi bi-chat-left me-2"></i>
                                <label class="chat_name">${chat.user_chat}</label>
                                <input type="text" class="chat_name_input d-none">
                            </div>
                            <div class="d-flex action_btn d-none">
                                <a type="button" class="edit_field">
                                    <i class="bi bi-pencil-square text-white me-1"></i>
                                </a>
                                <a type="button" class="delete_record" data-chat-id="${chat.id}">
                                    <i class="bi bi-trash text-white"></i>
                                </a>
                            </div>
                            <div class="d-flex action_save_btn d-none">
                                <a type="button" class="save_field">
                                    <i class="bi bi-check2 text-white me-1"></i>
                                </a>
                                <a type="button" class="close_record">
                                    <i class="bi bi-x text-white"></i>
                                </a>
                            </div>
                        </li>
                    `;
                    
                    $('#chatlist').append(chatItem); // Assuming '#chatlist' is the container where you want to append the chat items
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }


</script>