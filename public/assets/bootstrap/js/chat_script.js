(function () {
    var json_data = {
        bots: [
            {
                name: "bot1",
                text: "Bot 1",
                features: [
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot1",
                    },
                ],
            },
            {
                name: "bot2",
                text: "Bot 2",
                features: [
                    {
                        text: "Remembers what user said earlier in the conversation bot2",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot2",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation bot2",
                    },
                ],
            },
            {
                name: "botboth",
                text: "Bot 1 + Bot 2",
                features: [
                    {
                        text: "Remembers what user said earlier in the conversation botboth",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation botboth",
                    },
                    {
                        text: "Remembers what user said earlier in the conversation botboth",
                    },
                ],
            },
        ],
    };

    $(".sidebar-link").on("click", function (e) {
        var target = $(e.target);

        if (target.is(".chat_name_input")) {
            return false;
        }

        $(".sidebar-item").removeClass("sidebar-item-active");
        $(this).parent().addClass("sidebar-item-active");

        $(this).children(".sidebar-link").css("text-overflow", "ellipsis");

        $(".sidebar-item").children(".action_btn").addClass("d-none");
        $(this).parent().children(".action_btn").removeClass("d-none");
        $(".sidebar-item").children(".action_save_btn").addClass("d-none");

        $(".chat_name").removeClass("d-none");
        $(".chat_name_input").addClass("d-none");

        // const parentDiv = $(this).find(".chat_name");

        // const chatNameInput = $(this).find(".chat_name_input");
        // const currentText = parentDiv.text();
        // parentDiv.text(currentText);
    });

    // $(".delete_record").on("click", function () {
    //     $("#delete_modal_toggle").modal("show");
    // });

    function setFocusAtEnd(inputElement) {
        inputElement.focus();
        const length = inputElement.val().length;
        inputElement[0].setSelectionRange(length, length);
    }

    $(".edit_field").on("click", function () {
        const parentDiv = $(this).closest(".sidebar-item").find(".chat_name");
        const chatNameInput = $(this)
            .closest(".sidebar-item")
            .find(".chat_name_input");

        $(this)
            .closest(".sidebar-item")
            .children(".action_btn")
            .addClass("d-none");
        $(this)
            .closest(".sidebar-item")
            .children(".action_save_btn")
            .removeClass("d-none");
        $(this)
            .closest(".sidebar-item")
            .children(".sidebar-link")
            .css("text-overflow", "initial");

        const currentText = parentDiv.text();

        parentDiv.addClass("d-none");
        chatNameInput.removeClass("d-none");
        chatNameInput.val(currentText);

        setFocusAtEnd(chatNameInput);
    });

    $(".close_record").on("click", function () {
        const parentDiv = $(this).closest(".sidebar-item").find(".chat_name");
        const chatNameInput = $(this)
            .closest(".sidebar-item")
            .find(".chat_name_input");

        $(this)
            .closest(".sidebar-item")
            .children(".action_btn")
            .removeClass("d-none");
        $(this)
            .closest(".sidebar-item")
            .children(".action_save_btn")
            .addClass("d-none");
        $(this)
            .closest(".sidebar-item")
            .children(".sidebar-link")
            .css("text-overflow", "ellipsis");

        const currentText = parentDiv.text();

        parentDiv.removeClass("d-none");
        chatNameInput.addClass("d-none");
        parentDiv.text(currentText);
    });

    const toggler = document.querySelector(".toggle_btn");

    toggler.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("collapsed");
        document.querySelector(".main").classList.toggle("collapsed");
        document.querySelector(".nav").classList.toggle("collapsed");
        document
            .querySelector(".toggle_btn")
            .classList.toggle("bi-filter-right");
        document
            .querySelector(".toggle_btn")
            .classList.toggle("bi-arrow-right");
    });

    var currentYear = new Date().getFullYear();

    // Set the current year in the 'current-year' span
    $("#current_year").text(currentYear);

    $(".dropdown_list").on("click", function () {
        $(".dropdown-menu").toggle();
    });

    $(".close-on-click").on("click", function () {
        $(".dropdown-menu").toggle();
    });

    $(".profile_icon").on("click", function () {
        $("#hung22").click();
    });

    function loadFile(event) {
        var output = document.getElementById("profile_image");
        output.src = URL.createObjectURL(event.target.files[0]);

        output.onload = function () {
            URL.revokeObjectURL(output.src); // free memory
        };
    }

    $(".btn-bot").on("click", function () {
        $(".btn-bot").removeClass("active");
        $(this).addClass("active");

        var buttonText = $(this).data("bot");
        LoadBotsView(buttonText);
    });

    function LoadBotsView(buttonText) {
        // var jsonBot = "assets/json/bot.json";

        // fetch(jsonBot)
        //   .then(response => response.json())
        //   .then(data => {

        var bot = json_data.bots.find((bot) => bot.name === buttonText);
        console.log(bot);
        var features_html = "";
        if (bot) {
            $(".bot-heading").text(bot.text);

            bot.features.forEach((feature) => {
                features_html += `<div class="features_data">
                            <div class="card">
                              <div class="card-body text-dark">
                                <small>${feature.text}</small>
                              </div>
                            </div>
                          </div>`;
            });
            $("#features_data").html(features_html);
        } else {
            console.log("Bot not found in JSON data.");
        }
        // })
        // .catch(error => {
        //   console.error("Error fetching JSON data:", error);
        // });
    }
    LoadBotsView("bot1");

    $(".start_new_chat").on("click", function () {
        $(".main_meraki").addClass("d-none");
        $(".chat_meraki").removeClass("d-none");
        $(".start_new_chat").addClass("d-none");
        $(".close_new_chat").removeClass("d-none");
        scrollToLastChat();
        $(".scrollable-content").empty();
    });
    $(".close_new_chat").on("click", function () {
        $(".main_meraki").removeClass("d-none");
        $(".chat_meraki").addClass("d-none");
        $(".start_new_chat").removeClass("d-none");
        $(".close_new_chat").addClass("d-none");
    });

    function checkScreenSize() {
        var newWindowWidth = $(window).width();

        if (newWindowWidth < 576) {
            $("#sidebar").addClass("collapsed");
            $(".main").addClass("collapsed");
            $(".nav").addClass("collapsed");
            $(".toggle_btn").removeClass("bi-filter-right");
            $(".toggle_btn").addClass("bi-arrow-right");
        }
    }
    checkScreenSize();
    // function saveImageToLocalStorage(imageData) {
    //   localStorage.setItem('profileImage', imageData);
    // }

    // function loadAndDisplayImage() {
    //   var profileImage = localStorage.getItem('profileImage');
    //   if (profileImage) {
    //     var output = document.getElementById('profile_image');
    //     output.src = profileImage;
    //   }
    // }
    // loadAndDisplayImage();

    document.addEventListener("DOMContentLoaded", function () {
        const scrollableElement = document.querySelector(".scrollable-content");

        new PerfectScrollbar(scrollableElement, {
            wheelPropagation: true,
            scrollingSpeed: 1,
        });
        const scrollableElement1 = document.querySelector(".offcanvas-body");

        new PerfectScrollbar(scrollableElement1, {
            wheelPropagation: true,
            scrollingSpeed: 1,
        });
    });

    // $(".bookmark-icon-notfill").click(function () {

    //   if (!$('addToBookmark').hasClass('show')) {
    //     $('.select2').val('').trigger('change');
    //     $('#addToBookmark').modal('show');

    //   } else {
    // var clickedBookmark = $(this);

    // if (clickedBookmark.hasClass("bi-bookmarks")) {

    //   clickedBookmark.removeClass("bi-bookmarks");
    //   clickedBookmark.addClass("bi-bookmarks-fill");

    // } else {

    //   clickedBookmark.addClass("bi-bookmarks");
    //   clickedBookmark.removeClass("bi-bookmarks-fill");

    // }

    //   }

    // });
    $(".save_bookmark").click(function () {
        var selectedValues = $(".select2").val();
        console.log(selectedValues);
        // $('#addToBookmark').modal('hide');
    });

    function scrollToLastChat() {
        var chatContainer = $(".scrollable-content");
        var lastChat = chatContainer.find(".chat-global:last");

        if (lastChat.length > 0) {
            var scrollTo =
                lastChat.offset().top -
                chatContainer.offset().top +
                chatContainer.scrollTop();
            chatContainer.animate(
                {
                    scrollTop: scrollTo,
                },
                1000
            );
        }
    }
    $(document).ready(function () {
        $(".select2").select2({
            tags: true,
            tokenSeparators: [",", " "],
            placeholder: "Select Bookmarks",
            dropdownParent: $("#addToBookmark"),
        });
    });

    $(".bookmark-icon-notfill").click(function () {
        $(".select_for_bookmark").toggle();

        if ($(".chat_input").hasClass("d-none")) {
            $(".chat_input").removeClass("d-none");
            $(".bookmark_input").addClass("d-none");
        } else {
            $(".chat_input").addClass("d-none");
            $(".bookmark_input").removeClass("d-none");
        }

        $(".chat_input").toggle();
        $(".chat_image").toggle();
    });



    $(document).ready(function () {
        let isNewChat = false; // Initialize isNewChat flag
        let chatId = null; // Initialize chatId variable

        $(".start_new_chat").on("click", function () {
            isNewChat = true; // Set isNewChat to true when starting a new chat
            chatId = null; // Reset chatId when starting a new chat
            console.log(chatId);
        });

        $(".send_chat_btn").on("click", function (e) {
            e.preventDefault();
            var message = $("#messaeg_bar").val().trim();

            console.log(chatId);
            if (message !== "") {
                // Make Axios POST request to store the message
                axios.post(baseUrl+"/store-message/user" ,{

                        message: message,
                        new_chat: isNewChat,
                        chat_id: chatId, // Pass chatId with the request
                    })
                    .then(function (response) {
                        // Handle success response if needed
                        console.log(response.data);

                        chatId = response.data.chat_id;
                        console.log(chatId);
                        userMessage = response.data.message;
                        botReply = response.data.bot_reply; // Get bot reply from response
                        isNewChat = response.data.isNewChat;

                        $("#messaeg_bar").val("");

                        sendAdminReply(chatId)
                        // prependChatItem(userMessage)
                    })
                    .catch(function (error) {
                        // Handle error response if needed
                        console.error("Error:", error);
                    });
            }
        });

        function sendAdminReply(chatId) {
            // Make Axios POST request to send the admin's reply

            axios.post(baseUrl+"/send-admin-reply",{


                    bot_reply: "i am your ai boat your reply message here", // Admin's reply message
                    chat_id: chatId, // Pass chatId with the request
                })
                .then(function (response) {
                    // Handle success response if needed
                    console.log(
                        "Admin reply sent successfully:",
                        response.data
                    );

                    botReply = response.data.boat_reply; // Assign bot reply from the response

                    // Check if the response is true
                    if (response.data.success) {
                        // If it's a new chat, prepend the chat item to the list
                        if (isNewChat) {
                            prependChatItem(userMessage);
                            isNewChat = false; // Set isNewChat to false after creating a new chat
                        }
                        // Update chat window with user message and bot reply
                        updateChatWindow(userMessage, botReply);
                    }
                })
                .catch(function (error) {
                    // Handle error response if needed
                    console.error("Error sending admin reply:", error);
                });
        }


        // Function to prepend chat item to the list
        function prependChatItem(userMessage) {
            $("#chatlist").prepend(`
                <li class="sidebar-item">
                    <div class="sidebar-link">
                        <i class="bi bi-chat-left me-2"></i>
                        <label class="chat_name">${userMessage}</label>
                        <input type="text" class="chat_name_input d-none">
                    </div>
                    <div class="d-flex action_btn d-none">
                        <a type="button" class="edit_field">
                            <i class="bi bi-pencil-square text-white me-1"></i>
                        </a>
                        <a type="button" class="delete_record" data-chat-id="${chatId}">
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
            `);
        }

        // Function to update the chat window with the sent message
        function updateChatWindow(userMessage, botReply) {
            // Append the user's message to the chat window
            $(".scrollable-content").append(`
                <div class="d-flex flex-row justify-content-start gap-2">
                    <img class="chat_image" src="assets/images/user.png" alt="avatar 1">
                    <input class="form-check-input select_for_bookmark ms-1" style="display:none" type="checkbox">
                    <div class="chat-global w-75 position-relative">
                        <p class="user_question">${userMessage}</p>
                        <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                    </div>
                </div>
            `);

            // Append the bot's reply to the chat window
            $(".scrollable-content").append(`
                <div class="d-flex flex-row justify-content-end gap-2">
                    <div class="chat-global w-75 position-relative">
                        <p class="user_question bot_answer">${botReply}</p>
                        <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                    </div>
                    <input class="form-check-input select_for_bookmark ms-1" style="display:none" type="checkbox">
                    <img class="chat_image" src="assets/images/logo.jpeg" alt="avatar 1">
                </div>
            `);

            // Scroll to the bottom of the chat window
            $(".scrollable-content").scrollTop(
                $(".scrollable-content")[0].scrollHeight
            );
        }

        // Show the delete modal when the delete button is clicked
        $(".delete_record").on("click", function () {
            // Get the chat ID associated with the delete button
            var chatId = $(this).data("chat-id");

            // Store the chat ID in the delete button
            $(".btn-delete").data("chat-id", chatId);

            // Show the delete modal
            $("#delete_modal_toggle").modal("show");
        });

        // Delete the record when confirmed in the modal
        $(".btn-delete").click(function () {
            var chatId = $(this).data("chat-id");
            axios.delete(baseUrl+"/delete-chat/"+chatId)
                .then(function (response) {
                    // Remove the chat item from the list
                    $("#chat" + chatId).remove();
                    $("#delete_modal_toggle").modal("hide"); // Close the modal
                    console.log(response.data.message);
                })
                .catch(function (error) {
                    console.error("Error:", error);
                });
        });

        // Function to fetch chat messages for a given chat ID
        function fetchChatMessages(chatId) {

            axios.get(baseUrl+"/fetch-chat-messages/"+chatId)
                .then(function (response) {
                    // Handle success response
                    chatId = response.data.chat_id;
                    console.log(response.data);
                    console.log(chatId);

                    // Show the chat section after loading messages
                    $(".main_meraki").addClass("d-none");
                    $(".chat_meraki").removeClass("d-none");
                    displayChatMessagesWindow(response.data.messages);
                    console.log(response.data.messages);
                })
                .catch(function (error) {
                    // Handle error response if needed
                    console.error("Error:", error);
                });
        }


        // Function to display chat messages in the chat window
        function displayChatMessagesWindow(messages) {
            const chatContainer = $(".scrollable-content");
            chatContainer.empty(); // Clear existing messages
            messages.forEach((message) => {
                let messageHtml = "";
                if (message.msgfrom === "user") { // Use === for comparison
                    messageHtml = `
                        <div class="d-flex flex-row justify-content-start gap-2">
                            <img class="chat_image" src="assets/images/user.png" alt="avatar 1">
                            <input class="form-check-input select_for_bookmark ms-1" style="display:none" type="checkbox">
                            <div class="chat-global w-75 position-relative">
                                <p class="user_question">${message.user_message}</p>
                                <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                            </div>
                        </div>
                    `;
                } else { // Assuming null or any value other than "user" represents admin or boat reply
                    messageHtml = `
                        <div class="d-flex flex-row justify-content-end gap-2">
                            <div class="chat-global w-75 position-relative">
                                <p class="user_question bot_answer">${message.bot_reply}</p>
                                <i class="bi bi-bookmarks bookmark-icon-notfill"></i>
                            </div>
                            <input class="form-check-input select_for_bookmark ms-1" style="display:none" type="checkbox">
                            <img class="chat_image" src="assets/images/logo.jpeg" alt="avatar 1">
                        </div>
                    `;
                }
                chatContainer.append(messageHtml);
            });
            // Scroll to the bottom of the chat window
            chatContainer.parent().css("width", "73vw");
            chatContainer.scrollTop(chatContainer[0].scrollHeight);
        }

        // Event listener for clicking on a chat item
        $(".sidebar-nav").on("click", ".chat-item", function () {
            chatId = $(this).attr("data-chat-id");
            fetchChatMessages(chatId);
        });
    });


})();

