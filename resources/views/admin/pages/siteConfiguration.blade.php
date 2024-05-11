@extends('admin.layouts.admin-master')

{{--
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://resources/demos/style.css"> --}}

@section('title', 'Faqs')

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

    .Checkbox {
        text-align: center;
    }

    /* Custom styles for the sortable table */
    #sortable tbody {
        cursor: move;
    }
</style>
@endpush

@section('content')

<div class="page-wrapper">
    <div class="page-content">



        {{--
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQs Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb--> --}}

        <h6 class="mb-0 text-uppercase">Add Frequently view like header footer</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="ms-auto">
                        <a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0" data-bs-toggle="modal"
                            data-bs-target="#addModal">
                            <i class="bx bxs-plus-square"></i>Add Configurations
                        </a>
                    </div>
                </div>



                {{-- <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Preminum</th>
                                <th>Visitor</th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            @foreach ($faqs as $faq)
                            <tr id="faqRow_{{ $faq->id }}">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->answer }}</td>
                                <td>
                                    <div
                                        class="form-check form-switch d-flex justify-content-center align-items-center">
                                        <input style="font-size: 20px;" type="checkbox" {{ $faq->active ? 'checked' : ''
                                        }} class="form-check-input"
                                        onchange="toggleActive({{ $faq->id }})">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions" style="justify-content: space-around;">
                                        <button class="btn btn-danger mx-2" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-question="{{ $faq->question }}"
                                            data-answer="{{ $faq->answer }}" data-id="{{ $faq->id }}"
                                            data-premium-user="{{ $faq->PreminumUser }}"
                                            data-visitor="{{ $faq->Visitor }}"
                                            onclick="populateEditModal('{{ $faq->question }}', '{{ $faq->answer }}', '{{ $faq->id }}', '{{ $faq->PreminumUser }}', '{{ $faq->Visitor }}')">
                                            <i class="bx bxs-edit"></i>
                                        </button>
                                        <button onclick="deleteFAQ({{ $faq->id }})" class="btn btn-danger">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </div>
                                </td>

                                <td class="Checkbox">
                                    <div class="form-check d-flex justify-content-center align-items-center">
                                        @if ($faq->PreminumUser)
                                        <input style="font-size: 20px;" type="checkbox" class="form-check-input" checked
                                            disabled>
                                        @else
                                        <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                                            disabled>
                                        @endif
                                    </div>
                                </td>

                                <td class="Checkbox">
                                    <div class="form-check d-flex justify-content-center align-items-center">
                                        @if ($faq->Visitor)
                                        <input style="font-size: 20px;" type="checkbox" class="form-check-input" checked
                                            disabled>
                                        @else
                                        <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                                            disabled>
                                        @endif
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}



            </div>
        </div>

    </div>
</div>

<!-- Confirmation Delete  Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgb(9,70,115)">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this FAQ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgb(9,70,115)">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="editFaqId">
                <input type="hidden" id="originalQuestion">
                <input type="hidden" id="originalAnswer">
                <input type="hidden" id="originalPremiumCheckbox">
                <input type="hidden" id="originalVisitorCheckbox">


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Question</h6>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="editQuestion">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Answer</h6>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="editAnswer" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Premium User</h6>
                    </div>
                    <div class="col-sm-9">
                        <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                            id="editPremiumCheckbox">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Visitor</h6>
                    </div>
                    <div class="col-sm-9">
                        <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                            id="editVisitorCheckbox">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="updateFAQ()">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation  Edit Modal -->
<div class="modal fade" id="confirmationEditModal" tabindex="-1" aria-labelledby="confirmationEditModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgb(9,70,115)">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationEditModalLabel">Confirm </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to Edit this FAQ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmEditButton">save</button>
            </div>
        </div>
    </div>
</div>


<!-- Create  Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgb(9,70,115)">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Site Configurations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Question</h6>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addQuestion">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Answer</h6>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="addAnswer" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Premium User</h6>
                    </div>
                    <div class="col-sm-9">
                        <input style="font-size: 20px;" type="checkbox" class="form-check-input" id="premiumCheckbox">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Visitor</h6>
                    </div>
                    <div class="col-sm-9">
                        <input style="font-size: 20px;" type="checkbox" class="form-check-input" id="visitorCheckbox">
                    </div>
                </div>
            </div> --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="disable-button" onclick="saveNewFAQ()">Save</button>
            </div>
        </div>
    </div>
</div>




{{-- // site configuration --}}


<div class="row justify-content-center">
    <!-- Center the content -->
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header px-4 py-3 border-bottom text-center">
                <!-- Center the text -->
                <h5 class="mb-0">Site Configuration</h5>
            </div>



            {{-- Errors handling here --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            {{-- Errors handling here --}}



            
            <div class="card-body p-4">
                <form class="row g-3 needs-validation" action="{{ route('admin.site.config.submit') }}" method="POST"
                    id="siteConfigForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="configForm" name="type">

                    <div class="col-md-12">
                        <label for="siteLogo" class="form-label fs-5"> Logo</label>
                        <!-- Increased label size -->
                        <input type="file" name="siteLogo" class="form-control" id="siteLogo" />
                    </div>

                    <div class="col-md-12">

                        <label for="mainTitle" class="form-label fs-5">Copy Right Text</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="mainTitle" name="copyright" placeholder="Text"></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <!-- Center the buttons -->
                        <div class="d-md-flex d-grid gap-3 justify-content-center">
                            <button type="submit" class="btn btn-white px-4 siteConfigBtn">Submit</button>
                            {{-- <button type="reset" class="btn btn-light px-4">Reset</button> --}}
                        </div>
                    </div>
                </form>
            </div>









            {{-- contact us started --}}
            <div class="card-header px-4 py-3 border-bottom text-center">
                <!-- Center the text -->
                <h5 class="mb-0">Contact Us</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3 needs-validation" action="{{ route('admin.site.config.submit') }}" method="POST"
                    novalidate id="siteConfigContactForm">
                    @csrf
                    <input type="hidden" value="contactForm" name="type">
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Address</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="address" name="address" placeholder="Address"
                            rows="2"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Phone</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" name="phone" id="phone" placeholder="Phone" rows="2"
                            maxlength="20"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5">Email</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" name="email" id="email" placeholder="Email" rows="2"></textarea>
                    </div>



                    <div class="col-md-12 text-center">
                        <!-- Center the buttons -->
                        <div class="d-md-flex d-grid gap-3 justify-content-center">
                            <button type="submit" class="btn btn-white px-4" id="siteConfigContactBtn">Submit</button>
                            {{-- <button type="reset" class="btn btn-light px-4">Reset</button> --}}
                        </div>
                    </div>
                </form>
            </div>


            {{-- contact links ended --}}







            {{-- social proifles --}}

            <div class="card-header px-4 py-3 border-bottom text-center">
                <!-- Center the text -->
                <h5 class="mb-0">Social Profiles</h5>
            </div>

            <div class="card-body p-4">
                <form class="row g-3 needs-validation" action="{{ route('admin.site.config.submit') }}" method="POST"
                    novalidate id="siteConfigSocialForm">
                    @csrf
                    <input type="hidden" value="socialForm" name="type">
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Facebook</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="facebook" name="facebook" placeholder="Link"
                            required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Linked In</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="mainTitle" name="linkedin" placeholder="Link"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> TwitterX</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="mainTitle" placeholder="Link" name="twitter"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Instagram</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="mainTitle" placeholder="Link" name="instagram"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="mainTitle" class="form-label fs-5"> Youtube</label>
                        <!-- Increased label size -->
                        <textarea class="form-control" id="mainTitle" placeholder="Link" name="youtube"></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <!-- Center the buttons -->
                        <div class="d-md-flex d-grid gap-3 justify-content-center">
                            <button type="submit" class="btn btn-white px-4" id="siteConfigSocialBtn">Submit</button>
                            {{-- <button type="reset" class="btn btn-light px-4">Reset</button> --}}
                        </div>
                    </div>
                </form>
            </div>
            {{-- Social ended --}}

        </div>
    </div>
</div>
@endsection



@push('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


{{-- <script>
    function populateEditModal(question, answer, id, premiumUser, visitor) {
            document.getElementById('editFaqId').value = id;
            document.getElementById('editQuestion').value = question;
            document.getElementById('editAnswer').value = answer;
            document.getElementById('editPremiumCheckbox').checked = premiumUser === '1'; // Note the string comparison
            document.getElementById('editVisitorCheckbox').checked = visitor === '1'; // Note the string comparison


            // Assign values to the hidden fields
            document.getElementById('originalQuestion').value = question;
            document.getElementById('originalAnswer').value = answer;
            document.getElementById('originalPremiumCheckbox').value = premiumUser;
            document.getElementById('originalVisitorCheckbox').value = visitor;

        }

        // Call populateEditModal function when opening the edit modal
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var question = button.data('question');
            var answer = button.data('answer');
            var id = button.data('id');
            var premiumUser = button.data('premium-user');
            var visitor = button.data('visitor');
            populateEditModal(question, answer, id, premiumUser, visitor);
        });


        //  function updateFAQ() {
        //      // Show the confirmation modal
        //      $('#confirmationEditModal').modal('show');

        //      // Event handler for confirming FAQ update
        //      $('#confirmEditButton').click(function() {

        //          // Retrieve input values
        //          var id = document.getElementById('editFaqId').value;
        //          var question = document.getElementById('editQuestion').value;
        //          var answer = document.getElementById('editAnswer').value;
        //          var premiumCheckbox = document.getElementById('editPremiumCheckbox').checked ? 1 : 0;
        //          var visitorCheckbox = document.getElementById('editVisitorCheckbox').checked ? 1 : 0;

        //          // Send update request
        //          fetch("{{ url('/admin/faqs/update') }}/" + id, {
        //                  method: 'POST',
        //                  headers: {
        //                      'Content-Type': 'application/json',
        //                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //                  },
        //                  body: JSON.stringify({
        //                      question: question,
        //                      answer: answer,
        //                      premiumUser: premiumCheckbox,
        //                      visitor: visitorCheckbox
        //                  })
        //              })
        //              .then(response => {
        //                  if (!response.ok) {
        //                      throw new Error('Network response was not ok');
        //                  }
        //                  // Handle success
        //                  round_success_noti('FAQ updated successfully.');
        //                  window.location.reload();
        //              })
        //              .catch(error => {
        //                  console.error('Error updating FAQ:', error);
        //              });

        //      });
        //  }

        //  function updateFAQ() {
        //      // Disable the button


        //      // Show the confirmation modal
        //      $('#confirmationEditModal').modal('show');

        //      // Event handler for confirming FAQ update
        //      $('#confirmEditButton').click(function() {
        //          // Retrieve input values
        //          var id = document.getElementById('editFaqId').value;
        //          var question = document.getElementById('editQuestion').value;
        //          var answer = document.getElementById('editAnswer').value;
        //          var premiumCheckbox = document.getElementById('editPremiumCheckbox').checked ? 1 : 0;
        //          var visitorCheckbox = document.getElementById('editVisitorCheckbox').checked ? 1 : 0;
        //          var editButton = document.getElementById('confirmEditButton');
        //          editButton.disabled = true;
        //          // Send update request
        //          fetch("{{ url('/admin/faqs/update') }}/" + id, {
        //                  method: 'POST',
        //                  headers: {
        //                      'Content-Type': 'application/json',
        //                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //                  },
        //                  body: JSON.stringify({
        //                      question: question,
        //                      answer: answer,
        //                      premiumUser: premiumCheckbox,
        //                      visitor: visitorCheckbox
        //                  })
        //              })
        //              .then(response => {
        //                  if (!response.ok) {
        //                      throw new Error('Network response was not ok');
        //                  }
        //                  // Handle success
        //                  round_success_noti('FAQ updated successfully.');
        //                  window.location.reload();
        //              })
        //              .catch(error => {
        //                  console.error('Error updating FAQ:', error);
        //              })
        //              .finally(function() {
        //                  // Re-enable the button after 3 seconds
        //                  setTimeout(function() {
        //                      editButton.disabled = false;
        //                  }, 3000);
        //              });
        //      });
        //  }

        function updateFAQ() {
            // Retrieve input values
            var id = document.getElementById('editFaqId').value;
            var question = document.getElementById('editQuestion').value;
            var answer = document.getElementById('editAnswer').value;
            var premiumCheckbox = document.getElementById('editPremiumCheckbox').checked ? 1 : 0;
            var visitorCheckbox = document.getElementById('editVisitorCheckbox').checked ? 1 : 0;

            // Check if any changes have been made
            var originalQuestion = document.getElementById('originalQuestion').value;
            var originalAnswer = document.getElementById('originalAnswer').value;
            var originalPremiumCheckbox = document.getElementById('originalPremiumCheckbox').value;
            var originalVisitorCheckbox = document.getElementById('originalVisitorCheckbox').value;

            //  console.log('changed ',premiumCheckbox , visitorCheckbox);

            //  console.log('orignal',originalPremiumCheckbox , originalVisitorCheckbox);

            // If no changes have been made, close the modal
            if (
                question === originalQuestion &&
                answer === originalAnswer &&
                premiumCheckbox == originalPremiumCheckbox &&
                visitorCheckbox == originalVisitorCheckbox
            ) {
                $('#editModal').modal('hide'); // Close the modal
                round_info_noti('No changes has been made')
                return; // Exit the function
            }

            // Show the confirmation modal
            $('#confirmationEditModal').modal('show');

            // Event handler for confirming FAQ update
            $('#confirmEditButton').click(function() {
                // Send update request
                fetch("{{ url('/admin/faqs/update') }}/" + id, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            question: question,
                            answer: answer,
                            premiumUser: premiumCheckbox,
                            visitor: visitorCheckbox
                        })
                    }) 
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        // Handle success
                        round_success_noti('FAQ updated successfully.');
                        window.location.reload();
                    })
                    .catch(error => {
                        console.error('Error updating FAQ:', error);
                    });
            });
        }
</script>

<script>
    //  function saveNewFAQ() {
        //      var question = document.getElementById('addQuestion').value;
        //      var answer = document.getElementById('addAnswer').value;
        //      var premiumCheckbox = document.getElementById('premiumCheckbox').checked ? 1 :
        //          0; // Check if premiumCheckbox is checked
        //      var visitorCheckbox = document.getElementById('visitorCheckbox').checked ? 1 :
        //          0; // Check if visitorCheckbox is checked

        //      axios.post('{{ url('/admin/faqs/create') }}', {
        //              question: question,
        //              answer: answer,
        //              premiumUser: premiumCheckbox,
        //              visitor: visitorCheckbox
        //          }, {
        //              headers: {
        //                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //              }
        //          })
        //          .then(function(response) {
        //              console.log('FAQ added successfully'. response);
        //              round_success_noti('FAQ added successfully');
        //              window.location.reload();
        //          })
        //          .catch(function(error) {
        //             round_error_noti('Error adding FAQ:', error);
        //              console.error('Error adding FAQ:', error);
        //          });
        //  }



        function saveNewFAQ() {

            var disableButton = document.getElementById('disable-button');
            var question = document.getElementById('addQuestion').value;
            var answer = document.getElementById('addAnswer').value;
            var premiumCheckbox = document.getElementById('premiumCheckbox').checked ? 1 :
                0; // Check if premiumCheckbox is checked
            var visitorCheckbox = document.getElementById('visitorCheckbox').checked ? 1 :
                0; // Check if visitorCheckbox is checked
            disableButton.disabled = true;
            axios.post('{{ url('/admin/faqs/create') }}', {
                    question: question,
                    answer: answer,
                    premiumUser: premiumCheckbox,
                    visitor: visitorCheckbox
                }, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(function(response) {
                    console.log('FAQ added successfully', response);
                    round_success_noti('FAQ added successfully');
                    window.location.reload();
                })
                .catch(function(error) {
                    // Display error message in error_noti
                    round_error_noti(error.response.data.message);
                    console.error('Error adding FAQ:', error);

                })
                .finally(function() {
                    // Re-enable the button after 3 seconds
                    setTimeout(function() {
                        disableButton.disabled = false;
                    }, 2000);
                });
        }


        //  function populateModal(question, answer, id) {
        //      $('#editQuestion').val(question); // Set the question
        //      $('#editAnswer').val(answer); // Set the answer
        //      $('#editFaqId').val(id);
        //      $('#editModal').modal('show'); // Show the modal
        //  }


        function saveFAQChanges() {
            var id = $('#editFaqId').val();
            var question = $('#editQuestion').val();
            var answer = $('#editAnswer').val();

            // Perform AJAX request to update the FAQ details
            $.ajax({
                url: '/admin/faqs/' + id,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    question: question,
                    answer: answer
                },
                success: function(response) {
                    // Reload the page after successful update
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('Error updating FAQ:', error);
                }
            });
        }
        // toggleActive
        function toggleActive(faqId) {
            fetch(`{{ url('/') }}/admin/faqs/toggle/${faqId}`, {
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
                        if (data.active) {
                            round_success_noti('FAQ is now visible');
                        } else {
                            round_success_noti('FAQ is now hidden');
                        }

                        // Optionally, update UI or display a success message
                        console.log('FAQ status toggled successfully.');

                        //  round_success_noti('FAQ status toggled successfully..');
                    } else {
                        console.error('Failed to toggle FAQ status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
        // PreminumActive
        function togglePreminum(id) {
            axios.post(`{{ url('/') }}/admin/faqs/toggle-preminum/${id}`)
                .then(response => {
                    if (response.data.success) {
                        console.log('PreminumUser status toggled successfully.');
                        round_success_noti('PreminumUser status toggled successfully..');
                    } else {
                        console.error('Failed to toggle PreminumUser status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        }

        // VisitorActive
        function VisitorActive(id) {
            axios.post(`{{ url('/') }}/admin/faqs/toggle-VisitorActive/${id}`)
                .then(response => {
                    if (response.data.success) {
                        console.log('VisitorUser status toggled successfully.');
                        round_success_noti('VisitorUser status toggled successfully..');
                    } else {
                        console.error('Failed to toggle PreminumUser status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        }

        function deleteFAQ(faqId) {
            // Show the confirmation modal
            $('#confirmationModal').modal('show');

            // Store the FAQ ID to be deleted in a data attribute
            $('#confirmDeleteButton').data('faq-id', faqId);
        }

        // Event handler for confirming FAQ deletion
        $('#confirmDeleteButton').click(function() {
            // Retrieve the FAQ ID to be deleted from the data attribute
            var faqId = $(this).data('faq-id');

            // Perform the deletion using AJAX
            fetch("{{ url('/admin/faqs/') }}/" + faqId, {
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
                        // Remove the FAQ row from the table
                        $('#faqRow_' + faqId).remove();
                        // Optionally, you can update the UI to reflect the changes
                        //  console.log('FAQ deleted successfully.');
                        round_success_noti('FAQ deleted successfully.');
                    } else {
                        console.error('Failed to delete FAQ.');
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

        // <!-- Add the sortable functionality to the table -->

        $(function() {
            $("#sortable").sortable({
                update: function(event, ui) {
                    var data = $(this).sortable('serialize'); // Serialize the sortable elements
                    // Convert serialized string to an array
                    var dataArray = data.split('&').map(function(item) {
                        return item.split('=')[1]; // Extract only the IDs
                    });
                    // Send AJAX request to update order in the backend using Axios
                    axios.post('{{ url('/update-faqs-order') }}', {
                            order: dataArray // Pass the serialized data as a single array
                        })
                        .then(function(response) {
                            console.log('Order updated successfully.');
                            round_success_noti('Order updated successfully.');
                        })
                        .catch(function(error) {
                            console.error('Error updating order:', error);
                        });
                }
            }).disableSelection();
        });


        // Your existing JavaScript code for CRUD operations
</script> --}}



{{-- here is the ajax calls to handle the site configurations form submission --}}
{{-- <script>
    $(document).ready(function() {
    // Get CSRF token from the meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Set up AJAX headers to include CSRF token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    // AJAX for Site Configuration Form
    $('#siteConfigForm').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Retrieve logo file input element
        const logoFile = $('#logo')[0].files[0]; // Get the first file

        // Retrieve copyright text
        const copyrightText = $('#mainTitle').val();

        // Create a new FormData object
        const formData = new FormData();

        // Append logo file and copyright text to FormData object
        formData.append('logo', logoFile);
        formData.append('copyright', copyrightText);

        // Create a plain object to store data
        const data = {
            logo: logoFile,
            copyright: copyrightText
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route('admin.site.config.submit') }}',
            data: data,
            contentType: false, // Prevent jQuery from setting contentType
            processData: false, // Prevent jQuery from processing data
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log('Site Configuration Form submitted successfully.');
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error submitting Site Configuration Form:', xhr.responseText);
            }
        });
    });

    // AJAX for Contact Us Form
    $('#siteConfigContactForm').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Serialize form data
        var formData = $(this).serialize();
        const formType = "contactForm";

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route('admin.site.config.submit') }}',
            data: { formData: formData, formType: formType },
            success: function(response) {
                // Handle success response
                console.log('Contact Us Form submitted successfully.');
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error submitting Contact Us Form:', xhr.responseText);
            }
        });
    });

    // AJAX for Social Profiles Form
    $('#siteConfigSocialForm').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Serialize form data
        var formData = $(this).serialize();
        const formType = "socialForm";

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route('admin.site.config.submit') }}',
            data: { formData: formData, formType: formType },
            success: function(response) {
                // Handle success response
                console.log('Social Profiles Form submitted successfully.');
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error submitting Social Profiles Form:', xhr.responseText);
            }
        });
    });
});

</script> --}}



{{-- here is the ajax calls to handle the site configurations form submission --}}
@endpush