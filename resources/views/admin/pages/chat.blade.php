@extends('admin.layouts.admin-master')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

@section('title', 'Chat')
@push('css')
    <style>
        .custom-padding {
            --bs-btn-padding-x: 3.75rem;
            /* Custom padding */
        }
    </style>
@endpush

@section('content')


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">


            <div class="chat-wrapper">

                <div class="chat-sidebar">

                    <div class="chat-sidebar-header">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-2">
                                <a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0  custom-padding"
                                    data-bs-toggle="modal" data-bs-target="#addModal">
                                    <i class="bx bxs-plus-square"></i>create new ticket
                                </a>
                            </div>

                        </div>
                        <div class="mb-3"></div>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text"><i class='bx bx-search'></i></span>
                            <input id="searchInput" type="text" class="form-control"
                                placeholder="Search by Ticket Id or Subject">
                        </div>

                    </div>
                    <div class="chat-sidebar-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-Chats">


                                <div class="chat-list">
                                    <div class="list-group list-group-flush" id="ticketList">
                                        @foreach ($tickets as $ticket)
                                            <a href="javascript:;" class="list-group-item chat-item"
                                                data-uuid="{{ $ticket->uuid }}">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="mb-0 chat-title">{{ $ticket->uuid }}</h6>
                                                        <!-- Display name -->
                                                        <p class="mb-0 chat-msg">{{ $ticket->subject }}</p>
                                                        <!-- Display subject -->
                                                    </div>
                                                    <div class="chat-time">
                                                        {{ $ticket->created_at ? $ticket->created_at->format('h:i A') : '' }}
                                                    </div>
                                                    <!-- Display time -->
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-header d-flex align-items-center">
                    <div class="chat-toggle-btn"><i class='bx bx-menu-alt-left'></i>
                    </div>
                    <div>
                        <h4 class="mb-1 font-weight-bold"></h4>
                    </div>

                </div>
                {{-- chat box area of  --}}



                <div class="chat-content">

                    <div class="chat-content-leftside">
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-2">
                                <p class="mb-0 chat-time">Harvey, 3:33 PM</p>
                                <p class="chat-left-msg">All the best for your target. thanks for giving your time.</p>
                                <img style="width: 200px; height: auto;" src="{{ asset('assets/images/gallery/01.png') }}"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="chat-content-rightside">
                        <div class="d-flex">
                            <div class="flex-grow-1 me-2">
                                <p class="mb-0 chat-time text-end">you, 3:35 PM</p>
                                <p class="chat-right-msg">thanks Harvey</p>
                                <img style="width: 200px; height: auto; margin-left: 704px;" class="card-img-top img-fluid"
                                    src="{{ asset('assets/images/gallery/01.png') }}" alt="...">
                            </div>

                        </div>
                    </div>

                </div>


                <div class="chat-footer align-items-center">
                    <div class="flex-grow-1 pe-2">
                        <div class="input-group">
                            <input id="message-input" type="text" class="form-control" placeholder="Type a message">
                        </div>
                    </div>
                    <div class="chat-footer-menu">
                        <button type="submit" id="send-message" class="btn btn-primary">Send</button>
                    </div>
                    <div class="chat-footer-menu">
                        <!-- Input field to select the image -->
                        <input id="send-attachment" type="file" id="myFile" name="filename" style="display: none;">
                        <label for="send-attachment"
                            style="
                        width: 50;
                        height: 40; margin-left: 10;" class="btn btn-primary">
                            <i style="font-size: 16px;margin-top: 4px;" class="fas fa-paperclip"></i>  <!-- Font Awesome icon for image -->


                        </label>

                        <!-- Hidden file input for attachments -->
                        <input id="attachment-input" type="file" style="display: none;" accept="image/*, .pdf, .docx">
                    </div>
                </div>



                {{-- <div class="chat-footer  align-items-center">
                    <div class="flex-grow-1 pe-2">
                        <div class="input-group">
                            <input id="message-input" type="text" class="form-control" placeholder="Type a message">
                        </div>
                    </div>
                    <div class="chat-footer-menu">
                        <button type="submit" id="send-message" class="btn btn-primary">Send</button>

                    </div>
                    <div class="chat-footer-menu">
                        <button type="submit" id="send-Attachment" class="btn btn-primary">Attachment</button>

                    </div>

                </div> --}}

                <!--start chat overlay-->
                <div class="overlay chat-toggle-btn-mobile"></div>
                <!--end chat overlay-->
            </div>
        </div>
    </div>
    <!--end page wrapper -->


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: rgb(10, 66, 116)">
                <form id="ticketForm" action="{{ url('/save/ticket') }}" method="POST">
                    @csrf <!-- CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="addModalLabel">Create New Ticket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Category dropdown -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option selected>Select Category</option>
                                <option value="1">hamza</option>
                                <option value="2">zaid</option>
                                <!-- Add your category options here -->
                            </select>
                        </div>
                        <!-- Name input field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <!-- Phone input field -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <!-- Subject input field -->
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <!-- Description textarea -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- image modal  --}}
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: rgb(10, 66, 116)">
                <div id="ticketForm">
                    @csrf <!-- CSRF token -->

                    <div class="modal-body">
                        <img id="previewImage" src="#" alt="Selected Image" style="width: 100%; display: none;">
                        <!-- Other form fields -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="send-image" class="btn btn-primary">Send Image</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.trim().toLowerCase();
            const ticketList = document.getElementById('ticketList');
            const chatItems = ticketList.querySelectorAll('.chat-item');

            chatItems.forEach(item => {
                const ticketId = item.querySelector('.chat-title').textContent.toLowerCase();
                const subject = item.querySelector('.chat-msg').textContent.toLowerCase();

                if (ticketId.includes(searchTerm) || subject.includes(searchTerm)) {
                    // If the ticket matches the search term, display it
                    item.style.display = 'block';
                } else {
                    // If the ticket does not match the search term, hide it
                    item.style.display = 'none';
                }
            });
        });
        let currentChatUUID;
        let currentChatMessage;
        document.addEventListener('DOMContentLoaded', function() {

            const chatFooter = document.querySelector('.chat-footer'); // Select the chat footer
            const chatItems = document.querySelectorAll('.chat-item');

            // Hide the chat footer initially
            chatFooter.style.display = 'none';

            chatItems.forEach(item => {
                item.addEventListener('click', function() {
                    const uuid = item.dataset.uuid;
                    currentChatUUID = item.dataset.uuid;
                    fetchChatMessages(uuid);

                    // Show the chat footer when a chat item is clicked
                    chatFooter.style.display = 'flex';

                    // alert(currentChatUUID);
                });
            });

            function fetchChatMessages(uuid) {
                fetch(`/chat/${uuid}`)
                    .then(response => response.json())
                    .then(data => displayChatMessages(data))
                    .catch(error => console.error('Error fetching chat messages:', error));
            }



            function displayChatMessages(messages) {
                const chatContent = document.querySelector('.chat-content');
                chatContent.innerHTML = ''; // Clear existing messages

                messages.forEach(message => {
                    const chatContentSide = document.createElement('div');
                    const chatMessage = document.createElement('div');
                    const chatFlexGrow = document.createElement('div');
                    const chatTime = document.createElement('p');
                    const chatMsg = document.createElement('p');

                    chatMessage.classList.add('d-flex');
                    chatFlexGrow.classList.add('flex-grow-1');
                    chatTime.classList.add('mb-0', 'chat-time');
                    chatMsg.classList.add('mb-0', 'chat-msg');

                    chatTime.textContent = message.msgfrom === 'admin' ? 'you, ' + formatTime(message
                        .created_at) : message.name + ', ' + formatTime(message.created_at);
                    chatMsg.textContent = message.description;






                    if (message.msgfrom === 'admin') {
                        chatMsg.classList.add('chat-right-msg');
                        chatContentSide.classList.add('chat-content-rightside', 'me-2');
                        chatTime.classList.add('text-end');

                        // alert(message.chat_image)
                        if (message.chat_image) {
                            const img = document.createElement('img'); // Create img element
                            img.src = message.chat_image;
                            img.alt = 'Image'; // Set alt text
                            img.style.width = '200px'; // Set width
                            img.style.height = 'auto'; // Maintain aspect ratio
                            chatMsg.appendChild(img); // Append img element to chat message
                        }

                    } else {
                        chatMsg.classList.add('chat-left-msg');
                        chatContentSide.classList.add('chat-content-leftside', 'ms-2');
                        if (message.chat_image) {
                            const img = document.createElement('img'); // Create img element
                            img.src = message.chat_image;
                            img.alt = 'Image'; // Set alt text
                            img.style.width = '200px'; // Set width
                            img.style.height = 'auto'; // Maintain aspect ratio
                            chatMsg.appendChild(img); // Append img element to chat message
                        }
                    }

                    chatFlexGrow.appendChild(chatTime);
                    chatFlexGrow.appendChild(chatMsg);
                    chatMessage.appendChild(chatFlexGrow);
                    chatContentSide.appendChild(chatMessage);
                    chatContent.appendChild(chatContentSide);
                });
            }



            function formatTime(timeString) {
                const date = new Date(timeString);
                return date.toLocaleString('en-US', {
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true
                });
            }

            function getChatUUID(uuid) {
                // Implement this function to get the UUID of the current chat box
                // You can use any logic to retrieve the UUID
                // For now, returning a placeholder value
                return currentChatUUID;
            }

            document.getElementById('send-message').addEventListener('click', function() {
                const messageInput = document.getElementById('message-input').value.trim();
                const uuid =
                    currentChatUUID; // Implement this function to get the UUID of the current chat box
                // alert(uuid);
                if (messageInput !== '') {
                    sendMessage(uuid, messageInput);
                    document.getElementById('message-input').value =
                        ''; // Clear the input field after sending the message
                }
            });

            function sendMessage(uuid, message) {
                    axios.post(`{{url('/')}}/send-message`,{

                        uuid: uuid,
                        message: message
                    })
                    .then(response => {
                        // After sending the message, you can update the chat interface if needed
                        // For example, you can display the sent message under the corresponding UUID chat box
                        displaySentMessage(uuid, message);
                    })
                    .catch(error => {
                        console.error('Error sending message:', error);
                    });
            }

            function displaySentMessage(uuid, message) {
                // Here, you can append the sent message to the chat interface under the corresponding UUID chat box
                const chatContent = document.querySelector('.chat-content');
                const sentMessage = document.createElement('div');
                sentMessage.classList.add('chat-content-rightside');

                const messageContent = document.createElement('div');
                messageContent.classList.add('d-flex');
                messageContent.innerHTML = `
            <div class="flex-grow-1 me-2">
                <p class="mb-0 chat-time text-end">you, ${getCurrentTime()}</p>
                <p class="chat-right-msg">${message}</p>
            </div>
        `;

                sentMessage.appendChild(messageContent);
                chatContent.appendChild(sentMessage);
            }



            function getCurrentTime() {
                // Get the current time in the desired format
                const now = new Date();
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');
                return `${hours}:${minutes}`;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ticketForm');
            const submitBtn = document.querySelector('#ticketForm button[type="submit"]');

            form.addEventListener('input', function() {
                const inputs = form.querySelectorAll('input, textarea, select');
                let hasErrors = false;

                inputs.forEach(input => {
                    if (input.classList.contains('is-invalid') || input.value.trim() === '') {
                        hasErrors = true;
                    }
                });

                submitBtn.disabled = hasErrors;
            });

            form.addEventListener('submit', function(event) {
                const inputs = form.querySelectorAll('input, textarea, select');
                let hasEmptyFields = false;

                inputs.forEach(input => {
                    if (input.value.trim() === '') {
                        hasEmptyFields = true;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });

                if (hasEmptyFields || form.querySelectorAll('.is-invalid').length > 0) {
                    event.preventDefault(); // Prevent form submission
                }
            });
        });

        document.getElementById('send-attachment').addEventListener('click', function() {
            // Check if the input field is not empty
            if (this.value.trim() !== '') {
                // Reset the input field value
                this.value = '';
            }
        });

        document.getElementById('send-attachment').addEventListener('change', function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    var previewImage = document.getElementById('previewImage');
                    previewImage.src = event.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
                // Show the modal when an image is selected
                var modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            }
        });



        function getCurrentChatUUID() {
            return currentChatUUID;
        }

        // Event listener
        $('#send-image').click(function() {
            var file = $('#send-attachment')[0].files[0]; // Get the selected file
            var uuid = getCurrentChatUUID(); // Implement this function to get the UUID

            if (file && uuid) {
                var formData = new FormData();
                formData.append('file', file);
                formData.append('uuid', uuid);

                axios.post('/upload', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(function(response) {
                        $('#imageModal').modal('hide');
                        var attachmentUrl = response.data.image_url;

                        $('#send-attachment').val('');
                        // Call fetchChatMessagesagain function with the UUID
                        displaySentimage(attachmentUrl);

                    })
                    .catch(function(error) {
                        console.error('Error uploading file:', error);
                    });
            }
        });

        function displaySentimage(attachmentUrl) {
            const chatContent = document.querySelector('.chat-content');
            const sentMessage = document.createElement('div');
            sentMessage.classList.add('chat-content-rightside');

            const messageContent = document.createElement('div');
            messageContent.classList.add('d-flex');
            // Set the inner HTML to include the time, "you" text, and the image
            messageContent.innerHTML = `
        <div class="flex-grow-1 me-2">
            <div style="position: relative;"> <!-- Container for positioning time and "you" text -->
                <img src="${attachmentUrl}" style="width: 200px; height: auto; margin-left: 465px; margin-top: 32px;" class="card-img-top img-fluid" alt="Attachment">
                <p class="mb-0 chat-time text-end" style="position: absolute; top: 10px; right: 10px;">you, ${getCurrentTime()}</p>
            </div>
        </div>
    `;

            // Append message content to the sent message
            sentMessage.appendChild(messageContent);

            // Append sent message to the chat content
            chatContent.appendChild(sentMessage);
        }

        function getCurrentTime() {
            // Get the current time in the desired format
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            return `${hours}:${minutes}`;
        }
    </script>
@endpush
