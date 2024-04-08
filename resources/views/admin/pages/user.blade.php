@extends('admin.layouts.admin-master')
@section('title', 'Users')
@push('css')
    <style>
        .order-actions button {
            font-size: 18px;
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(255 255 255 / 15%);
            border: 1px solid rgb(255 255 255 / 15%);
            text-align: center;
            border-radius: 20%;
            color: #ffffff;
        }
    </style>
@endpush

@section('content')



    <!--start page wrapper -->
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
                            <li class="breadcrumb-item active" aria-current="page">Users Table</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <h6 class="mb-0 text-uppercase">DataTable Import</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Package</th>
                                    <th>Status </th>
                                    <th>View Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr id="userRow_{{ $user->id }}">
                                        <td>{{ $loop->index + 1 }}</td>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->current_package }}</td>
                                        <td>


                                            <div
                                                class="  order-actions form-check form-switch d-flex justify-content-center align-items-center ">
                                                <input style="font-size: 20px;" type="checkbox"
                                                    {{ $user->active ? 'checked' : '' }} class="form-check-input"
                                                    onchange="toggleActive({{ $user->id }})">

                                            </div>

                                        </td>
                                        <td>

                                            <button class="btn btn-light btn-sm radius-30 px-4" data-bs-toggle="modal"
                                                data-bs-target="#showModal" type="button" id="openModalButton"
                                                onclick="populateModal2('{{ $user->name }}', '{{ $user->email }}', '{{ $user->phone }}', '{{ $user->active }}')">
                                                Details
                                            </button>


                                        </td>
                                        <td>
                                            <div class="d-flex order-actions" style="justify-content: space-around;">
                                                <button class="btn btn-danger mx-2" data-bs-toggle="modal"
                                                    data-bs-target="#editModal"
                                                    onclick="populateModal('{{ $user->name }}', '{{ $user->email }}', '{{ $user->phone }}',  '{{ $user->active }}')">
                                                    <i class="bx bxs-edit"></i>
                                                </button>

                                                <button onclick="deleteUser({{ $user->id }})" class="btn btn-danger">
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


    <!-- edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content" style="background-color: rgb(9,70,115)">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">

                        {{-- <div class="text-center mb-3">
                            <!-- Image placeholder -->
                            @if ($user->picture)
                                <img src="{{ asset($user->picture) }}" alt="Profile Picture" style="border-radius: 50%;"
                                    width="100" height="100">
                            @else
                                <img src="{{ asset('assets/images/defalutuser.PNG') }}" alt="Default Profile Picture"
                                    style="border-radius: 50%; margin-right:-40px;" width="100" height="100">
                            @endif
                        </div> --}}
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9">
                            <input id="fullNameInput" type="text" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9">
                            <input id="emailInput" type="text" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9">
                            <input id="phoneInput" type="text" class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="ms-3 form-check form-switch">
                                <input id="statusInput" style="font-size: 20px;" type="checkbox"
                                    class="form-check-input" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="saveChanges()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- details modeal  --}}
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: rgb(9,70,115)">
                <div class="modal-header">
                    <h5 class="modal-title" id="showModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <tr>

                            <td></td>
                            <td>
                                <div class="text-center mb-3">
                                    <!-- Image placeholder -->
                                    @if ($user->picture)
                                        <img src="{{ asset($user->picture) }}" alt="Profile Picture"
                                            style="border-radius: 50%;" width="100" height="100">
                                    @else
                                        <img src="{{ asset('assets/images/defalutuser.PNG') }}"
                                            alt="Default Profile Picture" style="border-radius: 50%; margin-right:100px;"
                                            width="100" height="100">
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td id="NameInput2"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td id="emailInput2"></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td id="phoneInput2"></td>
                        </tr>

                        <tr>
                            <td>Status:</td>
                            <td id="statusInput2"></td>
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
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!--end page wrapper -->
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

        function toggleActive(userId) {
          fetch(`{{ url('/') }}/admin/users/toggle-active/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to toggle user active state');
                    }

                    return response.json();
                })
                .then(data => {
                    console.log(data.message);
                    window.location.href = '{{ url('/admin/users/listing') }}';


                })
                .catch(error => {
                    console.error(error);
                });
        }


        function deleteUser(userId) {
            // Show the confirmation modal
            $('#confirmationModal').modal('show');

            // Handle delete confirmation
            $('#confirmDeleteButton').on('click', function() {
                // Once the "Delete" button in the confirmation modal is clicked, proceed with deletion
                fetch(`/users/${userId}`, {
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
                            document.getElementById(`userRow_${userId}`).remove();
                            // Update the table with the remaining users
                            updateTable(data.users);
                            window.location.href = '{{ url('/admin/users/listing') }}';
                        } else {
                            console.error('Failed to delete user.');
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
        }

        // Function to format date and time
        function formatDateTime(dateTime) {
            const formattedDateTime = new Date(dateTime).toLocaleString().replace(',', '');
            return formattedDateTime;
        }

        // function updateTable(users) {
        //     const tableBody = document.querySelector('#example2 tbody');
        //     // Clear the existing table body
        //     tableBody.innerHTML = '';
        //     // Populate the table with the updated list of users
        //     users.forEach((user, index) => {
        //         const row = `
    //         <tr id="userRow_${user.id}">
    //             <td>${index + 1}</td>

    //             <td>${user.name}</td>
    //             <td>${user.email}</td>
    //             <td>${user.phone}</td>
    //             <td>${user.current_package}</td>
    //             <td style="align-items: center; justify-content: center; width: auto; display: flex; height: 52px;">
    //                 <div class="form-check form-switch">
    //                     <input style="font-size: 20px;" type="checkbox" ${user.active ? 'checked' : ''} class="form-check-input" onchange="toggleActive(${user.id})">
    //                 </div>
    //             </td>
    //             <td>
    //                 <button type="button" class="btn btn-light btn-sm radius-30 px-4"> Details</button>
    //             </td>
    //             <td>
    //                 <div class="d-flex order-actions" style="justify-content: space-around;">
    //                     <button onclick="deleteUser(${user.id})" class="btn btn-danger"><i class="bx bxs-trash"></i></button>
    //                 </div>
    //             </td>
    //         </tr>`;
        //         tableBody.innerHTML += row;
        //     });
        // }
        function populateModal(fullName, email, phone, active) {
            // Set modal input values
            $('#fullNameInput').val(fullName);
            $('#emailInput').val(email);
            $('#phoneInput').val(phone);


            // Set the status checkbox based on the active status
            if (active == 1) {
                $('#statusInput').prop('checked', true);
            } else {
                $('#statusInput').prop('checked', false);
            }
        }


        function populateModal2(fullName, email, phone, active) {
            // Set modal input values
            $('#NameInput2').text(fullName);
            $('#emailInput2').text(email);
            $('#phoneInput2').text(phone);


            // Determine status text based on the status value
            var statusText = active == 1 ? 'Active' : 'Inactive';
            $('#statusInput2').text(statusText);

        }

        // Save changes function
        function saveChanges() {
            // Get the values from the modal inputs
            var fullName = $('#fullNameInput').val();
            var email = $('#emailInput').val();
            var phone = $('#phoneInput').val();
            var status = $('#statusInput').is(':checked') ? 1 :
                0; // Convert checkbox state to 1 for checked and 0 for unchecked

            // Make an AJAX request to update the user details
            $.ajax({
                url: '{{ url('/admin/update/user') }}', // Use named route
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Include CSRF token
                    fullName: fullName,
                    email: email,
                    phone: phone,
                    status: status
                },
                success: function(response) {
                    console.log('Changes saved successfully:', response);
                    // Close the modal

                    $('#editModal').modal('hide');
                    window.location.reload();
                    // Optionally, you can reload the page or update the UI to reflect the changes
                },
                error: function(xhr, status, error) {
                    console.error('Error saving changes:', error);
                }
            });
        }
    </script>
@endpush
