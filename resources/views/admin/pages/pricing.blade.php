@extends('admin.layouts.admin-master')
@section('title', 'Pricing')
@push('css')
    <style>

    </style>
@endpush

@section('content')

    @if (url()->current() == url('/admin/pricing/section-1'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Pricing</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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




    @if (url()->current() == url('/admin/pricing/section-2'))


        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Plans Table</li>
                    </ol>
                </nav>
            </div>
        </div> --}}
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Plans</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="ms-auto">
                                <a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0" data-bs-toggle="modal"
                                    data-bs-target="#addModal">
                                    <i class="bx bxs-plus-square"></i>Add New Plan
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Name Discription </th>
                                        <th>Title</th>
                                        <th>Title Discription</th>
                                        <th>Price</th>
                                        <th>Input Words Limits</th>
                                        <th>OutPut Words Limits</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $plan->plan_name }}</td>
                                            <td>{{ $plan->plan_name_description }}</td>
                                            <td>{{ $plan->plan_tittle }}</td>
                                            <td>{{ $plan->plan_tittle_description }}</td>
                                            <td>{{ $plan->plan_price }}</td>
                                            <td>{{ $plan->input_word_limit }}</td>
                                            <td>{{ $plan->output_word_limit }}</td>

                                            <td>
                                                <button class="btn btn-danger mx-2" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" data-id="{{ $plan->id }}"
                                                    data-name="{{ $plan->plan_name }}"
                                                    data-name-description="{{ $plan->plan_name_description }}"
                                                    data-tittle="{{ $plan->plan_tittle }}"
                                                    data-tittle-description="{{ $plan->plan_tittle_description }}"
                                                    data-price="{{ $plan->plan_price }}"
                                                    data-input-word-limits="{{ $plan->input_word_limit }}"
                                                    data-output-word-limits="{{ $plan->output_word_limit }}"
                                                    onclick="populateEditModal('{{ $plan->id }}', '{{ $plan->plan_name }}', '{{ $plan->plan_name_description }}', '{{ $plan->plan_tittle }}', '{{ $plan->plan_tittle_description }}', '{{ $plan->plan_price }}', '{{ $plan->input_word_limit }}', '{{ $plan->output_word_limit }}')">
                                                    <i class="bx bxs-edit"></i>
                                                </button>


                                                <button class="btn btn-danger"
                                                    onclick="confirmDeletePlan({{ $plan->id }})">
                                                    <i class="bx bxs-trash"></i>
                                                </button>

                                                <button class="btn btn-success add-feature-btn"
                                                    onclick="Showmodal({{ $plan->id }})">
                                                    <i class="bx bx-plus"></i>
                                                </button>

                                                <button class="btn btn-success add-feature-btn"
                                                    onclick="showPlanDetails({{ $plan->id }})">
                                                    <i class="bx bx-info-circle"></i>
                                                </button>

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

        <!-- Details Modal -->
        <div class="modal fade" id="showDetailsModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showModalLabel">Plan Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <tr>
                                <td>Name:</td>
                                <td id="nameInput"></td>
                            </tr>
                            <tr>
                                <td>Name Description:</td>
                                <td id="nameDescriptionInput"></td>
                            </tr>
                            <tr>
                                <td>Title:</td>
                                <td id="TittleInput"></td>
                            </tr>
                            <tr>
                                <td>Title Description:</td>
                                <td id="TittledescriptionInput"></td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td id="priceInput"></td>
                            </tr>
                            <tr>
                                <td>Input Words Limits:</td>
                                <td id="InputWordsLimitsInput"></td>
                            </tr>
                            <tr>
                                <td>Output Words Limits:</td>
                                <td id="OutputWordsLimitsInput"></td>
                            </tr>
                            <tr>
                                <td>Features:</td>
                                <td id="featuresInput"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function showPlanDetails(planId) {
                // Show the modal
                $('#showDetailsModal').modal('show');

                $.ajax({
                    url: `{{ url('/') }}/plans/${planId}`, // Replace with your route to fetch plan details
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        // Update modal content with plan details
                        $('#nameInput').text(response.plan.plan_name);
                        $('#nameDescriptionInput').text(response.plan.plan_name_description);
                        $('#TittleInput').text(response.plan.plan_tittle);
                        $('#TittledescriptionInput').text(response.plan.plan_tittle_description);
                        $('#priceInput').text(response.plan.plan_price);
                        $('#InputWordsLimitsInput').text(response.plan.input_word_limit);
                        $('#OutputWordsLimitsInput').text(response.plan.output_word_limit);

                        // Construct HTML for features list
                        let featuresHtml = '';
                        response.features.forEach(function(feature) {
                            featuresHtml += `<li>${feature}</li>`;
                        });
                        $('#featuresInput').html(`<ul>${featuresHtml}</ul>`);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching plan details:', error);
                    }
                });
            }
        </script>

        <!-- Create Add Feature Modal -->
        <div class="modal fade" id="addFeatureModal" tabindex="-1" aria-labelledby="addFeatureModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFeatureModalLabel">Add Features</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addFeatureForm">
                            <!-- Container to hold dynamically added input fields -->
                            <div id="featureInputsContainer">
                                <!-- Input fields will be populated dynamically -->
                            </div>
                        </form>
                        <input type="hidden" id="planIdInput" name="plan_id">
                        <!-- Hidden input field to store the plan ID -->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" onclick="addFeatureInput()">
                            <i class="bx bx-plus"></i> Add Another Feature
                        </button>
                        <button type="button" class="btn btn-primary" onclick="submitFeatures()">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function Showmodal(planId) {
                $('#planIdInput').val(planId);

                // Fetch features for the selected plan via AJAX
                $.ajax({
                    url: `{{ url('/') }}/plans/${planId}/features`,
                    method: 'GET',
                    success: function(response) {

                        let featuresHtml = '';
                        response.features.forEach(function(feature) {
                            featuresHtml += `
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="${feature.name}" readonly>
                            <button class="btn btn-danger" type="button" onclick="removeFeatureInput(this)">
                                <i class="bx bx-minus"></i>
                            </button>
                        </div>
                    `;
                        });
                        $('#featureInputsContainer').html(featuresHtml);
                        $('#addFeatureModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching features:', error);
                    }
                });
            }

            let featureCount = 1;

            function addFeatureInput() {
                featureCount++;
                let newInputField = `
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Feature ${featureCount}" name="feature[]" required>
                <button class="btn btn-danger" type="button" onclick="removeFeatureInput(this)">
                    <i class="bx bx-minus"></i>
                </button>
            </div>
        `;
                $('#featureInputsContainer').append(newInputField);
            }

            function removeFeatureInput(btn) {
                $(btn).closest('.input-group').remove();
                featureCount--;
            }

            function submitFeatures() {
                let planId = $('#planIdInput').val();
                let features = $('input[name="feature[]"]').map(function() {
                    return $(this).val();
                }).get();

                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: `{{ url('/') }}/plans/${planId}/features`,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    success: function(response) {
                        // round_success_noti('Feature Deleted successfully!.');

                        storeNewFeatures(planId, features);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting features:', error);
                    }
                });
            }

            function storeNewFeatures(planId, features) {
                // Get the CSRF token value from the meta tag
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: `{{ url('/') }}/plans/${planId}/features`,
                    method: 'POST',
                    data: {
                        _token: token, // Include the CSRF token in the request data
                        plan_id: planId,
                        features: features
                    },
                    success: function(response) {
                        // console.log('Features submitted successfully:', response);

                        round_success_noti('Features submitted successfully:', response);

                        $('#addFeatureModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting features:', error);
                    }
                });
            }
        </script>

        <!-- {{-- Add new Plan  --}} -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="addPlanName" class="form-label">Plan Name <i class="text-danger h6">*</i></label>
                            <input type="text" class="form-control" id="addPlanName">
                        </div>
                        <div class="mb-3">
                            <label for="addPlanNameDescription" class="form-label">Plan Name Description</label>
                            <textarea type="text" class="form-control" rows="2" id="addPlanNameDescription"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="addPlanTittle" class="form-label">Plan Title <i class="text-danger h6">*</i></label>
                            <input type="text" class="form-control" id="addPlanTittle">
                        </div>
                        <div class="mb-3">
                            <label for="addPlanTittleDescription" class="form-label">Plan Title Description</label>
                            <textarea type="text" class="form-control" rows="2" id="addPlanTittleDescription"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="addPlanPrice" class="form-label">Plan Price <i class="text-danger h6">*</i></label>
                            <input type="text" class="form-control" id="addPlanPrice">
                        </div>
                        <div class="mb-3">
                            <label for="inputWordsLimits" class="form-label">Input Words Limits</label>
                            <input class="form-control" id="inputWordsLimits">
                        </div>
                        <div class="mb-3">
                            <label for="outputWordsLimits" class="form-label">Output Words Limits</label>
                            <input class="form-control" id="outputWordsLimits">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveNewPlan()">Save</button>
                    </div>
                </div>
            </div>
        </div>



        <script>
            function saveNewPlan() {
                // Retrieve input values
                var name = $('#addPlanName').val();
                var nameDescription = $('#addPlanNameDescription').val();
                var tittle = $('#addPlanTittle').val();
                var tittleDescription = $('#addPlanTittleDescription').val();
                var price = $('#addPlanPrice').val();
                var inputWordsLimits = $('#inputWordsLimits').val();
                var outputWordsLimits = $('#outputWordsLimits').val();

                // Prepare data for AJAX request
                var data = {
                    plan_name: name,
                    plan_name_description: nameDescription,
                    plan_tittle: tittle,
                    plan_tittle_description: tittleDescription,
                    plan_price: price,
                    input_word_limit: inputWordsLimits,
                    output_word_limit: outputWordsLimits
                };

                // Send AJAX request to save the new plan
                $.ajax({
                    url: '{{ url('/') }}/admin/plans',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    data: JSON.stringify(data),
                    success: function(response) {
                        // Handle success response
                        round_success_noti('Plan added successfully:', response);

                        console.log('Plan added successfully:', response);
                        // Optionally, you can update the UI or display a success message
                        // For example, clear the form inputs
                        $('#addPlanName').val('');
                        $('#addPlanNameDescription').val('');
                        $('#addPlanTittle').val('');
                        $('#addPlanTittleDescription').val('');
                        $('#addPlanPrice').val('');
                        $('#inputWordsLimits').val('');
                        $('#outputWordsLimits').val('');
                        // Close the modal
                        $('#addModal').modal('hide');
                        //window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Check if the response is in JSON format
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            // If there are validation errors, display them
                            var validationErrors = xhr.responseJSON.errors;
                            var errorMessage = "";
                            for (var key in validationErrors) {
                                errorMessage += validationErrors[key][0] +
                                ". "; // Add a period and space after each error
                            }

                            // Split the error message string into an array of individual errors based on the period (".") delimiter
                            var individualErrors = errorMessage.split(".");

                            // Loop through each error and display it individually
                            individualErrors.forEach(function(error) {

                                if (error.trim() !== "") { // Check if the error is not empty
                                    round_error_noti(error);

                                }
                            });
                        }
                        else {
                            // If it's not a validation error, display a generic error message
                            console.error(error);
                        }
                    }
                });
            }
        </script>


        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="editPlanId">
                        <div class="mb-3">
                            <label for="editPlanName" class="form-label">Plan Name</label>
                            <input type="text" class="form-control" id="editPlanName">
                        </div>
                        <div class="mb-3">
                            <label for="editPlanNameDescription" class="form-label">Plan Name Description</label>
                            <textarea class="form-control" id="editPlanNameDescription" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editPlanTittle" class="form-label">Plan Title</label>
                            <input type="text" class="form-control" id="editPlanTittle">
                        </div>
                        <div class="mb-3">
                            <label for="editPlanTittleDescription" class="form-label">Plan Title Description</label>
                            <textarea class="form-control" id="editPlanTittleDescription" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editPlanPrice" class="form-label">Plan Price</label>
                            <input type="text" class="form-control" id="editPlanPrice">
                        </div>
                        <div class="mb-3">
                            <label for="editInputWordsLimits" class="form-label">Input Words Limits</label>
                            <input class="form-control" id="editInputWordsLimits">
                        </div>
                        <div class="mb-3">
                            <label for="editOutputWordsLimits" class="form-label">Output Words Limits</label>
                            <input class="form-control" id="editOutputWordsLimits">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="updatePlan()">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function populateEditModal(id, name, nameDescription, tittle, tittleDescription, price, inputWordLimits,
                outputWordLimits) {
                $('#editPlanId').val(id);
                $('#editPlanName').val(name);
                $('#editPlanNameDescription').val(nameDescription);
                $('#editPlanTittle').val(tittle);
                $('#editPlanTittleDescription').val(tittleDescription);
                $('#editPlanPrice').val(price);
                $('#editInputWordsLimits').val(inputWordLimits);
                $('#editOutputWordsLimits').val(outputWordLimits);
            }

            // Call populateEditModal function when opening the edit modal
            $('#editModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id = button.data('id');
                var name = button.data('name');
                var nameDescription = button.data('name-description');
                var tittle = button.data('tittle');
                var tittleDescription = button.data('tittle-description');
                var price = button.data('price');
                var inputWordLimits = button.data('input-word-limits');
                var outputWordLimits = button.data('output-word-limits');
                populateEditModal(id, name, nameDescription, tittle, tittleDescription, price, inputWordLimits,
                    outputWordLimits);
            });

            function updatePlan() {
                // Fetch updated plan details
                var id = $('#editPlanId').val();
                var name = $('#editPlanName').val();
                var nameDescription = $('#editPlanNameDescription').val();
                var tittle = $('#editPlanTittle').val();
                var tittleDescription = $('#editPlanTittleDescription').val();
                var price = $('#editPlanPrice').val();
                var inputWordLimits = $('#editInputWordsLimits').val();
                var outputWordLimits = $('#editOutputWordsLimits').val();

                // Prepare the data to be sent
                var formData = {
                    plan_name: name,
                    plan_name_description: nameDescription,
                    plan_tittle: tittle,
                    plan_tittle_description: tittleDescription,
                    plan_price: price,
                    input_word_limit: inputWordLimits,
                    output_word_limit: outputWordLimits
                };

                // Send AJAX request
                $.ajax({
                    url: ' {{ url('/') }}/admin/plans/' + id,
                    type: 'PUT',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Handle success response
                        console.log('Plan updated successfully');
                        round_success_noti('Plan updated successfully!.');

                        window.location.reload();

                        $('#editModal').modal('hide'); // Hide the edit modal
                        // You may perform additional actions like updating the UI
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Error updating plan:', error);
                        // You may display an error message to the user
                    }
                });
            }
        </script>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: rgb(9,70,115)">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this Plan?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="confirmAndDeletePlan()"
                            id="confirmDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Function to handle plan deletion confirmation
            function confirmDeletePlan(planId) {
                console.log(planId);
                $('#confirmDeleteButton').data('plan-id', planId);
                $('#confirmationModal').modal('show');
            }


            // Function to confirm and delete the plan
            function confirmAndDeletePlan() {
                // Retrieve the plan ID to be deleted from the button's data attribute
                var planId = $('#confirmDeleteButton').data('plan-id');

                // Perform the deletion using AJAX
                $.ajax({
                    url: '{{ url('/') }}/admin/plans/' + planId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    success: function(response) {
                        round_success_noti('Deleted successfully!.');

                        window.location.reload();

                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    },
                    complete: function() {
                        // Close the confirmation modal after deletion
                        $('#confirmationModal').modal('hide');
                    }
                });
            }
        </script>


    @endif







    @if (url()->current() == url('/admin/pricing/section-3'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Tables</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="row justify-content-center"> <!-- Center the content -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-12">
                                        <label for="mainTitle" class="form-label fs-5"> Title</label>
                                        <!-- Increased label size -->
                                        <textarea class="form-control" id="mainTitle" placeholder="Main Title" rows="2" maxlength="25" required
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
                                    <hr />
                                    <div class="row">
                                        <div class="col-xl-12 mx-auto">
                                            <label for="description" class="form-label fs-5">File Upload</label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <input id="fancy-file-upload" type="file" name="files"
                                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                </div>
                                            </div>
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



    @if (url()->current() == url('/admin/pricing/section-4'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Tables</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="row justify-content-center"> <!-- Center the content -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-12">
                                        <label for="mainTitle" class="form-label fs-5"> Title</label>
                                        <!-- Increased label size -->
                                        <textarea class="form-control" id="mainTitle" placeholder="Main Title" rows="2" maxlength="25" required
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
                                    <hr />
                                    <div class="row">
                                        <div class="col-xl-12 mx-auto">
                                            <label for="description" class="form-label fs-5">File Upload</label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <input id="fancy-file-upload" type="file" name="files"
                                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                </div>
                                            </div>
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

@endsection
@push('script')
@endpush
