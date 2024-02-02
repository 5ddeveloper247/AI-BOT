

(function () {

  var json_data = {
    "bots": [
      {
        "name": "bot1",
        "text": "Bot 1",
        "features": [
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot1"
            }
       
     ]
      },
      {
        "name": "bot2",
        "text": "Bot 2",
        "features": [
            {
             "text": "Remembers what user said earlier in the conversation bot2"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot2"
            },
            {
             "text": "Remembers what user said earlier in the conversation bot2"
            }
     ]
      },
      {
        "name": "botboth",
        "text": "Bot 1 + Bot 2",
        "features": [
           {
            "text": "Remembers what user said earlier in the conversation botboth"
           },
           {
            "text": "Remembers what user said earlier in the conversation botboth"
           },
           {
            "text": "Remembers what user said earlier in the conversation botboth"
           }
    ]
      }
    ]
  };
  

  $(".sidebar-link").on("click", function (e) {

    var target = $(e.target);

    if (target.is('.chat_name_input')) {
      return false;
    }

    $('.sidebar-item').removeClass('sidebar-item-active');
    $(this).parent().addClass('sidebar-item-active');

    $(this).children(".sidebar-link").css('text-overflow', 'ellipsis');

    $('.sidebar-item').children(".action_btn").addClass('d-none');
    $(this).parent().children(".action_btn").removeClass('d-none');
    $('.sidebar-item').children(".action_save_btn").addClass('d-none');

    $('.chat_name').removeClass('d-none');
    $('.chat_name_input').addClass('d-none');

    // const parentDiv = $(this).find(".chat_name");

    // const chatNameInput = $(this).find(".chat_name_input");
    // const currentText = parentDiv.text();
    // parentDiv.text(currentText);

  });
  $(".delete_record").on("click", function () {
    $('#delete_modal_toggle').modal('show');
  });

  function setFocusAtEnd(inputElement) {

    inputElement.focus();
    const length = inputElement.val().length;
    inputElement[0].setSelectionRange(length, length);

  }

  $(".edit_field").on("click", function () {

    const parentDiv = $(this).closest(".sidebar-item").find(".chat_name");
    const chatNameInput = $(this).closest(".sidebar-item").find(".chat_name_input");

    $(this).closest(".sidebar-item").children(".action_btn").addClass('d-none');
    $(this).closest(".sidebar-item").children(".action_save_btn").removeClass('d-none');
    $(this).closest(".sidebar-item").children(".sidebar-link").css('text-overflow', 'initial');

    const currentText = parentDiv.text();

    parentDiv.addClass('d-none');
    chatNameInput.removeClass('d-none');
    chatNameInput.val(currentText);

    setFocusAtEnd(chatNameInput);

  });

  $(".close_record").on("click", function () {

    const parentDiv = $(this).closest(".sidebar-item").find(".chat_name");
    const chatNameInput = $(this).closest(".sidebar-item").find(".chat_name_input");

    $(this).closest(".sidebar-item").children(".action_btn").removeClass('d-none');
    $(this).closest(".sidebar-item").children(".action_save_btn").addClass('d-none');
    $(this).closest(".sidebar-item").children(".sidebar-link").css('text-overflow', 'ellipsis');

    const currentText = parentDiv.text();

    parentDiv.removeClass('d-none');
    chatNameInput.addClass('d-none');
    parentDiv.text(currentText);

  });

  const toggler = document.querySelector(".toggle_btn");

  toggler.addEventListener("click", function () {

    document.querySelector("#sidebar").classList.toggle("collapsed");
    document.querySelector(".main").classList.toggle("collapsed");
    document.querySelector(".nav").classList.toggle("collapsed");
    document.querySelector(".toggle_btn").classList.toggle("bi-filter-right");
    document.querySelector(".toggle_btn").classList.toggle("bi-arrow-right");

  });


  var currentYear = new Date().getFullYear();

  // Set the current year in the 'current-year' span
  $('#current_year').text(currentYear);

  $(".dropdown_list").on("click", function () {

    $('.dropdown-menu').toggle();

  });

  $('.close-on-click').on('click', function () {

    $('.dropdown-menu').toggle();

  });
  $('.profile_icon').on('click', function () {

    $('#hung22').click();

  });

  function loadFile(event) {

    var output = document.getElementById('profile_image');
    output.src = URL.createObjectURL(event.target.files[0]);

    output.onload = function () {
      URL.revokeObjectURL(output.src) // free memory
    }

  }

  $(".btn-bot").on("click", function () {

    $('.btn-bot').removeClass('active');
    $(this).addClass('active');

    var buttonText = $(this).data("bot");
    LoadBotsView(buttonText);

  });

  function LoadBotsView(buttonText) {

    // var jsonBot = "assets/json/bot.json";

       
    // fetch(jsonBot)
    //   .then(response => response.json())
    //   .then(data => {

        var bot = json_data.bots.find(bot => bot.name === buttonText);
        console.log(bot)
        var features_html = '';
        if (bot) {

          $('.bot-heading').text(bot.text);

          bot.features.forEach(feature => {
            features_html += `<div class="features_data">
                            <div class="card">
                              <div class="card-body text-dark">
                                <small>${feature.text}</small>
                              </div>
                            </div>
                          </div>`;

          });
          $('#features_data').html(features_html);
        } else {
          console.log("Bot not found in JSON data.");
        }
      // })
      // .catch(error => {
      //   console.error("Error fetching JSON data:", error);
      // });
  }
  LoadBotsView('bot1');


  $(".start_new_chat").on("click", function () {
    $('.main_meraki').addClass('d-none');
    $('.chat_meraki').removeClass('d-none');
    $('.start_new_chat').addClass('d-none');
    $('.close_new_chat').removeClass('d-none');
    scrollToLastChat();
  });
  $(".close_new_chat").on("click", function () {
    $('.main_meraki').removeClass('d-none');
    $('.chat_meraki').addClass('d-none');
    $('.start_new_chat').removeClass('d-none');
    $('.close_new_chat').addClass('d-none');
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
  checkScreenSize()
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


  document.addEventListener('DOMContentLoaded', function () {
    const scrollableElement = document.querySelector('.scrollable-content');

    new PerfectScrollbar(scrollableElement, {
      wheelPropagation: true,
      scrollingSpeed: 1,
    });
    const scrollableElement1 = document.querySelector('.offcanvas-body');

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
    var selectedValues = $('.select2').val();
    console.log(selectedValues);
    // $('#addToBookmark').modal('hide');

  });

  function scrollToLastChat() {
    var chatContainer = $(".scrollable-content");
    var lastChat = chatContainer.find(".chat-global:last");

    if (lastChat.length > 0) {
      var scrollTo = lastChat.offset().top - chatContainer.offset().top + chatContainer.scrollTop();
      chatContainer.animate({ scrollTop: scrollTo }, 1000);
    }
  }
  $(document).ready(function () {
    $('.select2').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: "Select Bookmarks",
        dropdownParent: $("#addToBookmark") 
    });
  });

  $(".bookmark-icon-notfill").click(function () {
    $('.select_for_bookmark').toggle();

    if($('.chat_input').hasClass('d-none')){

      $('.chat_input').removeClass('d-none');
      $('.bookmark_input').addClass('d-none');
    }else{
      $('.chat_input').addClass('d-none');
      $('.bookmark_input').removeClass('d-none');
    }
    
    $('.chat_input').toggle();
    $('.chat_image').toggle();
  });
})();