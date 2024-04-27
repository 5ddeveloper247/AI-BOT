@include('layouts.web.chat_dashboard_header')


<div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar" class="position-fixed">
        <div class="vh-100 overflow-auto scroll-bar-left-side">
            <div class="sidebar-logo">
                <div class="user-profile position-relative">

                    <img role="button" class="img-fluid rounded-circle dropdown_list cursor-pointer"
                        src="assets/images/logo.jpeg" width="30" alt="" />
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item close-on-click " data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasExample" aria-controls="offcanvasScrolling"
                                type="button">Profile</a></li>
                        <li><a class="dropdown-item close-on-click" data-bs-toggle="modal" href="#price_modal_toggle"
                                role="button">Packages</a></li>

                    </ul>

                </div>

                <div class="sidebar-logo-rightside">
                    <i class="bi bi-plus start_new_chat text-white"></i>
                    <i class="bi bi-box-arrow-left close_new_chat d-none text-white"></i>
                    <i class="bi bi-bookmarks text-white"></i>
                    <i class="bi bi-arrow-repeat text-white"></i>
                </div>
            </div>
            <div class="search_chat my-1 mx-2">
                <div class="form-group has-search">
                    <span class="bi bi-search form-control-feedback"></span>
                    <input type="search" class="form-control search_input rounded-pill shadow-sm" placeholder="Search">
                </div>
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li class="sidebar-header">January</li>
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile12 is better with dots and icons just see</label>
                        <input type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile13 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">
                            Profile5 is better with dots and icons just see</label>
                        <input type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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

                <li class="sidebar-header">Feburary</li>
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-header">March</li>
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">Profile5 is better with dots and icons just see</label><input
                            type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record">
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
            </ul>
        </div>
    </aside>
    <!-- Sidebar End -->

    <!--Main start-->
    <main class="main collapsed">
        <nav class="nav navbar navbar-expand px-3 border-bottom fixed-top">
            <!-- Button for sidebar toggle -->
            <span class="bi bi-filter-right toggle_btn"></span>
        </nav>
        <div class="main-content main_meraki container-fluid mt-5">

            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
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

                </div>
                <div class="col-md-12 text-center my-4">
                    <h1 class="bot-heading text-center text-dark fw-bolder">Bot 1</h1>
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

                                    <div class="col-auto">

                                        <div class="pt-3 pe-3 scrollable-content"
                                            style="position: relative; height: 73vh">

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}" alt="avatar 1">
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
                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}" alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
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

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}" alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
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

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}" alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
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

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}" alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start gap-2">
                                                <img class="chat_image" src="{{ asset('assets/images/user.png') }}"
                                                    alt="avatar 1">
                                                <input class="form-check-input select_for_bookmark ms-1 "
                                                    style="display:none" type="checkbox">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Voluptatum, velit laudantium magnam ad
                                                        reiciendis
                                                        quaerat porro praesentium nostrum dolore nisi.</p>
                                                    <!-- <i class="bi bi-bookmarks-fill bookmark-icon-notfill"></i> -->
                                                    <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-row justify-content-end gap-2">

                                                <div class="chat-global w-75 position-relative">
                                                    <p class="user_question bot_answer">Lorem ipsum dolor sit
                                                        amet,
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
                                                <img class="chat_image" src="assets/images/logo.jpeg"
                                                    alt="avatar 1">
                                            </div>


                                        </div>

                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 bg-search-bar chat_input">
                                            <img class="chat_image mx-2" src="{{ asset('assets/images/user.png') }}"
                                                alt="avatar 3">
                                            <input type="text"
                                                class="form-control form-control-lg bg-transparent" id="search_bar"
                                                placeholder="Type message">

                                            <a class="ms-3 send_chat_btn text-light p-2 rounded-3" href="#!"><i
                                                    class="bi bi-send-fill"></i></a>
                                        </div>
                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 bg-search-bar bookmark_input d-none">

                                            <input type="text"
                                                class="form-control form-control-lg bg-transparent" id="search_bar"
                                                placeholder="Add To Bookmark" disabled>

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

                    <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
