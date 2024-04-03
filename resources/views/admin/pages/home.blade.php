@extends('admin.layouts.admin-master')
@section('title', 'Home')
@push('css')
    <style>
        .form-control::placeholder {
            color: rgb(101, 152, 178);
            /* Grey color */
        }
    </style>
@endpush

@section('content')


    @if (Route::current()->getName() == 'admin.header')
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">File Upload</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <input id="fancy-file-upload" type="file" name="files"
                                    accept=".jpg, .png, image/jpeg, image/png" multiple>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <!--end row-->
            </div>
        </div>
    @endif

    @if (Route::current()->getName() == 'admin.home.Section.2')
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Home</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
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
                                        <label for="mainTitle" class="form-label fs-5">Main Title</label>
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
                                    <div class="col-md-12">
                                        <label for="punchLine" class="form-label fs-5">Punch Line</label>
                                        <input type="text" class="form-control" id="punchLine" placeholder="Punch Line"
                                            maxlength="25" required>
                                        <div class="invalid-feedback">
                                            Please enter a punch line (maximum 25 characters).
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

    @if (Route::current()->getName() == 'admin.home.Section.3')
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row justify-content-center"> <!-- Center the content -->
                    <div class="col-xl-8">
                        <div class="card">

                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-12">
                                        <label for="mainTitle" class="form-label fs-5"> Title</label>
                                        <!-- Increased label size -->
                                        <textarea class="form-control" id="mainTitle" placeholder=" Title" rows="2" maxlength="100" required
                                            onkeypress="return event.charCode < 48 || event.charCode > 57" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a main title (maximum 100 characters).
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center"> <!-- Center the buttons -->
                                        <div class="d-md-flex d-grid gap-3 justify-content-center">
                                            <button type="submit" class="btn btn-white px-4">Save</button>
                                            <button type="reset" class="btn btn-light px-4">Reset</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 mx-auto">

                            <div class="card">
                                <div class="card-body">
                                    <input id="fancy-file-upload" type="file" name="files"
                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endif

    @if (Route::current()->getName() == 'admin.home.Section.4')
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
                                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-light"
                                onclick="window.location.href = '{{ route('admin.view.features') }}'">Feature
                                Listings</button>

                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row justify-content-center"> <!-- Center the content -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header px-4 py-3 border-bottom text-center"> <!-- Center the text -->
                                <h5 class="mb-0">Feature </h5>
                            </div>

                            <div class="card-body p-4">



                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-12">
                                        <label for="mainTitle" class="form-label fs-5">Main Title</label>
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

                                    <div class="col-xl-12 mx-auto">
                                        <label for="description" class="form-label fs-5">Image Upload</label>

                                        <div class="card">
                                            <div class="card-body">
                                                <input id="fancy-file-upload" type="file" name="files"
                                                    accept=".jpg, .png, image/jpeg, image/png" multiple>
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


    @if (Route::current()->getName() == 'admin.view.features')
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">eCommerce</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                {{-- <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span> --}}
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('admin.home.Section.4') }}"
                                    class="btn btn-light radius-30 mt-2 mt-lg-0">
                                    <i class="bx bxs-plus-square"> </i>
                                    Add New Feature
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Image</th>
                                        <th>Tittle</th>
                                        <th>Discription </th>
                                        <th>Date Created</th>
                                        <th>View Details</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{ asset('assets/images/logo.jpeg') }}" height="30"
                                                width="30">
                                        </td>
                                        <td>Gaspur Antunes</td>
                                        {{-- <td><div class="badge rounded-pill bg-light p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td> --}}
                                        <td>$650.30</td>
                                        <td>June 12, 2020</td>
                                        <td>
                                            <button type="button" class="btn btn-light view-details-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">View
                                                Details</button>
                                        </td>
                                        <td>
                                            <div
                                                class="order-actions form-check form-switch d-flex justify-content-center align-items-center">
                                                <input style="font-size: 20px;" type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                                <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="{{ asset('assets/images/logo.jpeg') }}" height="30"
                                                width="30">
                                        </td>
                                        <td>Gaspur Antunes</td>
                                        {{-- <td><div class="badge rounded-pill bg-light p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td> --}}
                                        <td>$650.30</td>
                                        <td>June 12, 2020</td>
                                        <td>
                                            <button type="button" class="btn btn-light view-details-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">View
                                                Details</button>
                                        </td>
                                        <td>
                                            <div
                                                class="order-actions form-check form-switch d-flex justify-content-center align-items-center">
                                                <input style="font-size: 20px;" type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                                <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="{{ asset('assets/images/logo.jpeg') }}" height="30"
                                                width="30">
                                        </td>
                                        <td>Gaspur Antunes</td>
                                        {{-- <td><div class="badge rounded-pill bg-light p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td> --}}
                                        <td>$650.30</td>
                                        <td>June 12, 2020</td>
                                        <td>
                                            <button type="button" class="btn btn-light view-details-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">View
                                                Details</button>
                                        </td>
                                        <td>
                                            <div
                                                class="order-actions form-check form-switch d-flex justify-content-center align-items-center">
                                                <input style="font-size: 20px;" type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                                <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>4</td>
                                        <td>
                                            <img src="{{ asset('assets/images/logo.jpeg') }}" height="30"
                                                width="30">
                                        </td>
                                        <td>Gaspur Antunes</td>
                                        {{-- <td><div class="badge rounded-pill bg-light p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td> --}}
                                        <td>$650.30</td>
                                        <td>June 12, 2020</td>
                                        <td>
                                            <button type="button" class="btn btn-light view-details-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">View
                                                Details</button>
                                        </td>
                                        <td>
                                            <div
                                                class="order-actions form-check form-switch d-flex justify-content-center align-items-center">
                                                <input style="font-size: 20px;" type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                                <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Feature Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="user-details-body">
                        <!-- User details will be dynamically populated here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const viewDetailsButtons = document.querySelectorAll('.view-details-btn');

            viewDetailsButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Simulate fetching user details from the server
                    const userDetails = {
                        name: 'Gaspur Antunes',
                        email: 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classic',
                        date: '10-feb-2023'
                    };

                    // Populate modal body with user details
                    const userDetailsBody = document.getElementById('user-details-body');
                    userDetailsBody.innerHTML = `
                    <p><strong>Tittle:</strong> ${userDetails.name}</p>
                    <p><strong>Discription:</strong> ${userDetails.email}</p>
                    <p><strong>Date Created:</strong> ${userDetails.date}</p>
                    <!-- Add more details here -->
                `;
                });
            });
        </script>
    @endif


    @if (Route::current()->getName() == 'admin.home.Section.5')
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
                                <li class="breadcrumb-item active" aria-current="page">Section 4</li>
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
                                            <h6 class="mb-0 text-uppercase">File Upload</h6>
                                            <hr />
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
