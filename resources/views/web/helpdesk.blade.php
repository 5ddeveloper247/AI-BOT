<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            width: 100%;
        }

        :root {
            --primary--color-: var(#dadada);
            --secondary--color-: var(#fff);
        }

        .header h1 {
            font-size: 25px;
        }

        .header p {
            font-size: 15px;
            opacity: 0.6;
        }

        .header button {
            font-size: 12px;
            padding: 0.3rem 0.5rem;
            border: none;
            background-color: #242323eb;
            color: #fff;
        }

        .input-subject {
            border: 1px solid #0000001e;
        }

        .message-textarea {
            border: 1px solid #0000001e;
        }

        .input-fields {
            background-color: #fff;
            box-shadow: 0px 0px 30px 0px #00000021;
        }

        .input-search {
            border: 1px solid #0000001e;
        }

        .modal-body .popup-dropdown-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: transparent;
            border: 1px solid #0000001e;
            color: #000;
            font-size: 16px;
        }

        .dropdown {
            width: 100%;
        }

        .dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: transparent;
            border: 1px solid #0000001e;
        }

        .search-btn {
            background-color: rgba(0, 128, 0, 0.605);
            color: #fff;
            border: 1px solid #0000001e;
            font-size: 16px;
            padding: .4rem 1.5rem;
            border-radius: 4px;
        }

        .tickets-container {
            width: 100%;
            height: 50vh;
            background-color: #fff;
            box-shadow: 0px 0px 30px 0px #00000021;
        }

        .chat-cards {
            background-color: #fff;
            box-shadow: 0px 0px 30px 0px #00000033;
            border-radius: 5px;
            padding: 1rem 0.4rem;
            margin: 1rem;
        }

        .chat-left-container {
            height: 50vh;
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #24232325;
            border-radius: 50px;
            width: 100%;
        }

        .chat-recieve {
            margin: 2rem 0;
        }

        .chat-right-container {
            height: 50vh;
            overflow-y: auto;
        }

        .chat-right-container-header {
            background-color: #fff;
            box-shadow: 0px 0px 30px 0px #00000033;
        }
    </style>
</head>

<body>
    <section>
        <div class="container py-3">
            <!-- header -->
            <div class="row g-0 header align-items-center">
                <div class="col">
                    <h1>
                        Help Desk
                    </h1>
                    <p>
                        Create a new ticket in case you need to contact Writer Manager
                    </p>
                </div>
                <div class="col text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Create new ticket
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create new tickets</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <div class="dropdown">
                                        <span>Category</span>
                                        <button class="dropdown-toggle popup-dropdown-btn py-2 px-3 my-2" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Suggestion/Complaint
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                    <label for="subject">Subject</label>
                                    <input type="text" class="w-100 input-subject py-2 px-3 my-2" name="your-subject"
                                        id="subject">
                                    <span>Message</span>
                                    <textarea name="" class="w-100 mt-2 message-textarea" id="message" cols="30" rows="4"></textarea>
                                    <button type="button" class="browse-btn">Browse</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="cancel-btn rounded-2 py-2 px-4"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="submit-btn rounded-2 py-2 px-4">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- input-fields -->
            <div class="row g-0 gap-4 px-3 mb-2 py-4 input-fields rounded-3">
                <div class="col">
                    <input id="searchInput" type="text" class="form-control"
                    placeholder="Search by Ticket Id or Subject">
                </div>
                <div class="col d-flex align-items-center gap-2">
                    <span>
                        categories:
                    </span>
                    <div class="dropdown">
                        <button class="dropdown-toggle py-1 px-3" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex align-items-center gap-2">
                    <span>
                        Status:
                    </span>
                    <div class="dropdown">
                        <button class="dropdown-toggle py-1 px-3" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Active
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">In Active</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" class="search-btn">Search</button>
                </div>
            </div>
            <p>Total Tickets: {{ $totalTickets }}</p>

            <div class="row g-0 my-3 tickets-container rounded-3">
                <div class="no-found-image d-flex align-items-center justify-content-center d-none">
                    <img src="not found.jpg" alt="">
                </div>

                {{-- side bar ot ticket  --}}
                <div class="col-3 chat-left-container">
                    @foreach ($tickets as $ticket)
                        <div class="chat-cards my-3 d-flex align-items-center justify-content-between ticket-item"
                            data-uuid="{{ $ticket->uuid }}">
                            <div class="chat-left-side">
                                <h6>{{ $ticket->uuid }}</h6>
                                <small>{{ $ticket->subject }}</small>
                            </div>
                            <div class="chat-right-side">
                                <small>{{ $ticket->created_at->format('h:i a') }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- chat box of ticket  --}}

                <div class="col-9 chat-right-container">
                    <div class="chat-right-container-header p-3 my-3">
                        <h4 id="chat-header-title"></h4>
                    </div>
                    <div class="chat-content"></div>


                    <div class="chat-footer  align-items-center">
                        <div class="flex-grow-1 pe-2">
                            <div class="input-group">
                                <input id="message-input" type="text" class="form-control"
                                    placeholder="Type a message">
                            </div>
                        </div>
                        <div class="chat-footer-menu">
                            <button type="submit" id="send-message" class="btn btn-primary">Send</button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>






    <script>


        document.addEventListener('DOMContentLoaded', function() {
            let currentChatUUID;
            const chatFooter = document.querySelector('.chat-footer'); // Select the chat footer
            const chatItems = document.querySelectorAll('.chat-item');
            const ticketItems = document.querySelectorAll('.ticket-item');

            // Hide the chat footer initially
            chatFooter.style.display = 'none';

            // Add event listeners for chat items

            // Add event listeners for ticket items
            ticketItems.forEach(ticket => {
                ticket.addEventListener('click', function() {
                    const uuid = ticket.dataset.uuid;
                    fetchChatMessages(uuid);

                    // Hide the chat footer when a ticket item is clicked
                    chatFooter.style.display = 'none';
                });
            });

            function fetchChatMessages(uuid) {
                fetch(`{{ url('/chat/') }}/${uuid}`)
                    .then(response => response.json())
                    .then(data => displayChatMessages(data))
                    .catch(error => console.error('Error fetching chat messages:', error));
            }

            function displayChatMessages(messages) {
                const chatContent = document.querySelector('.chat-content');
                const chatHeader = document.getElementById('chat-header-title');
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

                    chatTime.textContent = message.msgfrom === 'admin' ? 'admin, ' + formatTime(message
                        .created_at) : message.name + ', ' + formatTime(message.created_at);
                    chatMsg.textContent = message.description;

                    if (message.msgfrom === 'admin') {
                        chatMsg.classList.add('chat-right-msg');
                        chatContentSide.classList.add('chat-content-rightside', 'me-2');
                        chatTime.classList.add('text-end');
                        chatContentSide.classList.add('text-end');
                        chatContentSide.appendChild(chatMsg);
                        chatContent.appendChild(chatContentSide);
                    } else {
                        chatMsg.classList.add('chat-left-msg');
                        chatContentSide.classList.add('chat-content-leftside', 'ms-2');
                        chatContentSide.appendChild(chatMsg);
                        chatContent.appendChild(chatContentSide);
                    }

                    chatFlexGrow.appendChild(chatTime);
                    chatFlexGrow.appendChild(chatMsg);
                    chatMessage.appendChild(chatFlexGrow);
                    chatContentSide.appendChild(chatMessage);
                    chatContent.appendChild(chatContentSide);
                });

                // Update chat header with ticket UUID
                chatHeader.textContent = messages.length > 0 ? messages[0].uuid : '';
                // Show the chat footer when a chat item is clicked
                chatFooter.style.display = 'flex';
            }

            function formatTime(timeString) {
                const date = new Date(timeString);
                return date.toLocaleString('en-US', {
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true
                });
            }
        });
    </script>

</body>

</html>
