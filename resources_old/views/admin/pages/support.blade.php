@extends('admin.layouts.admin-master')
@section('title', 'Support')
@push('css')
    <style>

    </style>
@endpush

@section('content')


@if (url()->current() == url('admin/support/section-1'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Support</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
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

    @if (url()->current() == url('admin/support/section-2'))
        <div class="page-wrapper">
            <div class="page-content">

                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Support</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
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
                                        <textarea class="form-control" id="mainTitle" placeholder=" Title" rows="2" maxlength="100" required
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
                                    <hr>
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
                                            <button type="submit" class="btn btn-white px-4">Save</button>
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


    @if (url()->current() == url('admin/support/section-3'))
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Support</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
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
                                        <input type="text" class="form-control" id="button"
                                            placeholder="Button text" maxlength="10" required>
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

@endsection

@push('script')
@endpush
