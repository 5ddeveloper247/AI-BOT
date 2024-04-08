@extends('admin.layouts.admin-master')


@section('title', 'Contact')
@push('css')
    <style>
        .order-actions button {
            font-size: 18px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(255 255 255 / 15%);
            border: 1px solid rgb(255 255 255 / 15%);
            text-align: center;
            border-radius: 20%;
            color: #ffffff;
        }

        #example2_filter {
            display: none !important;
        }
    </style>
@endpush

@section('content')

@if (url()->current() == url('/admin/contact/section-1'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Contact</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="row justify-content-center"> <!-- Center the content -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header px-4 py-3 border-bottom text-center"> <!-- Center the text -->
                                <h5 class="mb-0">Form Validation</h5>
                            </div>
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-12">
                                        <label for="mainTitle" class="form-label fs-5"> Title</label>
                                        <!-- Increased label size -->
                                        <textarea class="form-control" id="mainTitle" placeholder="Main Title" rows="2" maxlength="100" required
                                            onkeypress="return event.charCode < 48 || event.charCode > 57" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a main title (maximum 100 characters).
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label fs-5">Description</label>
                                        <textarea class="form-control" id="description" placeholder="Description" rows="5" maxlength="500" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a description (maximum 500 characters without digits).
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="button" class="form-label fs-5">Button</label>
                                        <input type="text" class="form-control" id="button" placeholder="Button text"
                                            maxlength="10" required>
                                        <div class="invalid-feedback">
                                            Please enter a button text (maximum 10 characters).
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center"> <!-- Center the buttons -->
                                        <div class="d-md-flex d-grid gap-3 justify-content-center">
                                            <button type="submit" class="btn btn-white px-4">Submit</button>
                                            <button type="reset" class="btn btn-light px-4">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endif

     @if (url()->current() == url('/admin/contact/section-3'))

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <h6 class="mb-0 text-uppercase">DataTable Import</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th> <!-- Indexing column -->
                                        <th style="border-right: 0px;width: 14.0417px;"></th>
                                        <th>Name</th>

                                        <th>SUBJECT</th>
                                        <th>MESSAGE</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $index => $contact)
                                        <!-- Loop through contacts with index -->
                                        <tr id="contactRow_{{ $contact->id }}">
                                            <td style="width: 30px;">

                                                {{ $index + 1 }}


                                            </td> <!-- Increment index by 1 -->

                                            <td style="border-right: 0px;width: 14.0417px;">
                                                @if (!$contact->viewed)
                                                    <span id="badge_{{ $contact->id }}" class="badge bg-primary">New</span>
                                                @endif

                                            </td>
                                            <td>{{ $contact->name }}


                                            </td>

                                            <td>{{ $contact->subject }}</td>
                                            <td id="messageContent">{{ $contact->message }}</td>
                                            <td style="width: 100px;">
                                                <div class="d-flex order-actions" style="justify-content: space-around;">
                                                    <!-- View Button -->
                                                    <button class="mx-1 btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#showModal"
                                                        onclick="markAsViewed('{{ $contact->id }}'); displayDetails('{{ $contact->name }}', '{{ $contact->email }}', '{{ $contact->subject }}', '{{ $contact->message }}','{{ $contact->reply }}')">
                                                        <i class="bx bxs-show"></i>
                                                    </button>
                                                    <!-- Reply Button -->
                                                    <button class="mx-1 btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#replyModal"
                                                        onclick="replyMessage('{{ $contact->name }}', '{{ $contact->email }}', '{{ $contact->subject }}', '{{ $contact->message }}')">
                                                        <i class="lni lni-reply"></i>
                                                    </button>
                                                    <button class="btn btn-danger mx-1"
                                                        onclick="deleteContact({{ $contact->id }})">
                                                        <i class="bx bxs-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->

        {{-- view  --}}
        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="showModalLabel">Contact Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th class="text-uppercase">Name:</th>
                                <td id="modalNameContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Email:</th>
                                <td id="modalEmailContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Subject:</th>
                                <td id="modalSubjectContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Message:</th>
                                <td id="modalMessageContent"></td>
                            </tr>
                            <tr id="replycheck">
                                <th class="text-uppercase">Reply:</th>
                                <td id="modalReplyContent"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- reply Modal -->
        <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="replyModalLabel">Reply Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th class="text-uppercase">Name:</th>
                                <td id="replymodalNameContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Email:</th>
                                <td id="replymodalEmailContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Subject:</th>
                                <td id="replymodalSubjectContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Message:</th>
                                <td id="replymodalMessageContent"></td>
                            </tr>

                        </table>
                        <div class="form-group">
                            <label for="replyMessage" class="form-label">Reply:</label>
                            <textarea class="form-control" id="replyMessage" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachment" class="form-label">Attachment:</label>
                            <input type="file" id="attachment" name="attachment"
                                accept=".pdf, .doc, .docx, .jpg, .png" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="sendReplyButton">Send Reply</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this contact?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @if (url()->current() == url('/admin/contact/section-4'))

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <h6 class="mb-0 text-uppercase">DataTable Import</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th style="border-right: 0px;width: 14.0417px;"></th>
                                        <th>Name</th>
                                        <th>SUBJECT</th>
                                        {{-- <th>MESSAGE</th> --}}
                                        <th>Reply</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($contacts as $contact)
                                        <tr id="contactRow_{{ $contact->id }}">
                                            <td style="width: 50px;">{{ $i++ }}
                                                {{-- @if (!$contact->viewed)
                                                    <span id="badge_{{ $contact->id }}"
                                                        class="badge bg-primary">New</span>
                                                @endif --}}
                                            </td>

                                            <td style="border-right: 0px;width: 14.0417px;">
                                                @if (!$contact->viewed)
                                                    <span id="badge_{{ $contact->id }}"
                                                        class="badge bg-primary">New</span>
                                                @endif

                                            </td>
                                            <td>{{ $contact->name }} </td>
                                            <td>{{ $contact->subject }}</td>
                                            {{-- <td id="messageContent">{{ $contact->message }}</td> --}}
                                            <td>{{ $contact->reply }}</td>
                                            <td style="width: 100px;">
                                                <div class="d-flex order-actions" style="justify-content: space-around;">
                                                    <!-- View Button -->
                                                    <button class="mx-1 btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#showModal"
                                                        onclick="markAsViewed('{{ $contact->id }}'); displayDetails('{{ $contact->name }}', '{{ $contact->email }}', '{{ $contact->subject }}', '{{ $contact->message }}','{{ $contact->reply }}')">
                                                        <i class="bx bxs-show"></i>
                                                    </button>
                                                    <button class="btn btn-danger mx-1"
                                                        onclick="deleteContact({{ $contact->id }})">
                                                        <i class="bx bxs-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->

        {{-- view  --}}
        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="showModalLabel">Contact Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th class="text-uppercase">Name:</th>
                                <td id="modalNameContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Email:</th>
                                <td id="modalEmailContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Subject:</th>
                                <td id="modalSubjectContent"></td>
                            </tr>
                            <tr>
                                <th class="text-uppercase">Message:</th>
                                <td id="modalMessageContent"></td>
                            </tr>
                            <tr id="replycheck">
                                <th class="text-uppercase">Reply:</th>
                                <td id="modalReplyContent"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this contact?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection


@push('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable()
        });

        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });

        function deleteContact(contactId) {
            // Show the confirmation modal
            $('#confirmationModal').modal('show');

            // Store the contact ID to be deleted in a data attribute
            $('#confirmDeleteButton').data('contact-id', contactId);
        }


        function deleteContact(contactId) {
            // Show the confirmation modal
            $('#confirmationModal').modal('show');

            // Store the contact ID to be deleted in a data attribute
            $('#confirmDeleteButton').data('contact-id', contactId);
        }

        // Event handler for confirming contact deletion
        $('#confirmDeleteButton').click(function() {
            // Retrieve the contact ID to be deleted from the data attribute
            var contactId = $(this).data('contact-id');

            // Perform the deletion using AJAX
            fetch("{{ url('/admin/contact/${contactId}') }}",

            {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    if (data.success) {
                        // Remove the row from the table
                        $('#contactRow_' + contactId).remove();
                        // Optionally, you can update the UI to reflect the changes

                    } else {
                        console.error('Failed to delete contact.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    // Close the confirmation modal after deletion
                    $('#confirmationModal').modal('hide');
                });
        });

        function replyMessage(name, email, subject, message) {
            // Populate modal with data
            document.getElementById('replymodalNameContent').textContent = name;
            document.getElementById('replymodalEmailContent').textContent = email;
            document.getElementById('replymodalSubjectContent').textContent = subject;
            document.getElementById('replymodalMessageContent').textContent = message;

            // Show the reply modal
            $('#replyModal').modal('show');
        }


        function displayDetails(name, email, subject, message, reply) {
            // Populate modal with data
            document.getElementById('modalNameContent').textContent = name;
            document.getElementById('modalEmailContent').textContent = email;
            document.getElementById('modalSubjectContent').textContent = subject;
            document.getElementById('modalMessageContent').textContent = message;

            // Populate the reply content in the modal
            var replyContent = document.getElementById('modalReplyContent');
            replyContent.textContent = reply;

            // Check if reply is empty
            if (!reply || reply.trim() === '') {
                // If reply is empty, hide the entire row
                var replyRow = replyContent.closest('tr');
                replyRow.style.display = 'none';
            } else {
                // If reply is not empty, show the row
                var replyRow = replyContent.closest('tr');
                replyRow.style.display = '';
            }

            $('#showModal').modal('show');
        }


        function markAsViewed(contactId) {
            fetch(`{{url('/admin/contact/${contactId}/markAsViewed')}} `, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    if (data.success) {
                        // Remove the "New" badge from the corresponding contact row
                        const badge = document.querySelector(`#badge_${contactId}`);
                        if (badge) {
                            badge.remove();
                        } else {
                            console.warn('Badge element not found.');
                        }


                    } else {
                        console.error('Failed to mark contact as viewed.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        $(document).ready(function() {
            // Event listener for the "Send Reply" button inside the modal
            $('#sendReplyButton').click(function() {
                // Get the email, subject, and reply message
                var email = $('#replymodalEmailContent').text();
                var subject = $('#replymodalSubjectContent').text();
                var reply = $('#replyMessage').val();

                // Call the sendReply function to send the reply message
                sendReply(email, subject, reply);
            });
        });

        function sendReply(email, subject, reply) {
            fetch("{{ url('/send-reply') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        email: email,
                        subject: subject,
                        reply: reply
                    })
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    if (data.success) {
                        alert('Reply sent successfully!');
                        // Optionally, you can add code to update UI or handle further actions after sending the reply
                        // For example, you can close the modal after sending the reply
                        $('#replyModal').modal('hide');
                    } else {
                        alert('Failed to send reply.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while sending the reply.');
                });
        }
    </script>
@endpush
