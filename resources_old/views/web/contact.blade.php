@extends('layouts.web.master')
@section('title', 'Contact')
@push('css')
@endpush

@section('content')
    <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container container-sm container-md container-lg container-xl container-xxl">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex flex-column text-center mx-xl-auto justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="zoom-in-down" data-aos-delay="2500" style="max-width: 828px">
                    <h1 class="">
                        Our competitive edge – An AI pricing bot for smart business
                        decisions
                    </h1>
                    <h2 class="">
                        Introducing our AI pricing bot – an invaluable tool for businesses
                        seeking a competitive advantage. From analyzing market trends to
                        recommending optimal prices, this intelligent assistant equips you
                        with actionable insights to boost profitability and seize
                        opportunities in real-time. Unlock the potential of data-driven
                        pricing strategies and stay ahead in today's ever-evolving market
                        landscape.
                    </h2>


                    <div class="parent">
                        <a href="{{ auth()->check() ? url('/chat_dashboard') : route('login') }}">
                            <button class="btn try-bot" id="tryBotButton">
                                <p class="mb-0 text-white">Try Bot</p>
                            </button>
                        </a>
                    </div>
                    {{-- <button class="btn try-bot">
                        <p class="mb-0 text-white">Try Bot</p>
                    </button> --}}

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!--Contact Form-->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 p-4 p-md-0">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch p-0">






                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4 fw-bold">Get in touch</h3>

                                    {{-- <div id="form-message-success" class="mb-4">
                                        <div style="display: none" id="alert-success" class="alert alert-success"
                                            role="alert">
                                            Your message was sent, thank you!
                                            <a href="#" class="btn-close alert-contact-us float-end p-1 shadow"
                                                data-bs-dismiss="alert" aria-label="close"></a>
                                        </div>
                                        <div style="display: none" id="alert-danger" class="alert alert-danger"
                                            role="alert">
                                            Something went wrong. Please try again.
                                            <a href="#" class="btn-close alert-contact-us float-end p-1 shadow"
                                                data-bs-dismiss="alert" aria-label="close"></a>
                                        </div>
                                    </div> --}}
                                    <div id="form-message-success" class="mb-4">
                                        <div style="display: none" id="alert-success" class="alert alert-success" role="alert">
                                            Your message was sent, thank you!
                                            <a href="#" class="btn-close alert-contact-us float-end p-1 shadow" data-bs-dismiss="alert" aria-label="close"></a>
                                        </div>
                                        <div style="display: none" id="alert-danger" class="alert alert-danger" role="alert">
                                            {{-- Something went wrong. Please try again. --}}
                                           Please Fill all the fields marked with * sign
                                            <a href="#" class="btn-close alert-contact-us float-end p-1 shadow" data-bs-dismiss="alert" aria-label="close"></a>
                                        </div>
                                    </div>


                                    <form id="contactForm" class="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group contact-page-form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control contact-page" name="name"
                                                        id="name" placeholder="Name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="form-group contact-page-form-group contact-page-form-group contact-page-form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control contact-page" name="email"
                                                        id="email" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group contact-page-form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control contact-page" name="subject"
                                                        id="subject" placeholder="Subject" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group contact-page-form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control contact-page" id="message" cols="30" rows="4"
                                                        placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-4">
                                                <div class="form-group contact-page-form-group">
                                                    <button class="contact_us_2 scrollto" type="button" id="submitButton">
                                                        <span class="icon-container">
                                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                                        </span>
                                                        <span class="contact"> Send Message</span>
                                                    </button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div>










                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch p-0">
                                <div class="info-wrap w-100 p-md-5 p-4" style="background-color: var(--background-color)">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">
                                        We're open for any suggestion or just to have a chat
                                    </p>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="bi bi-geo-alt"></span>
                                        </div>
                                        <div class="text ps-3">
                                            <p>
                                                <span>Address:</span> 198 West 21th Street, Suite 721
                                                New York NY 10016
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="bi bi-telephone-fill"></span>
                                        </div>
                                        <div class="text ps-3">
                                            <p>
                                                <span>Phone:</span>
                                                <a href="tel://1234567920">+ 1235 2355 98</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="bi bi-envelope-check-fill"></span>
                                        </div>
                                        <div class="text ps-3">
                                            <p>
                                                <span>Email:</span>
                                                <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact-Form End-->
@endsection




<script>

//  document.addEventListener('DOMContentLoaded', function() {
//     var successAlert = document.getElementById('alert-success');
//     var errorAlert = document.getElementById('alert-danger');

//     // Set the initial style of the alerts to display: none
//     successAlert.style.display = 'none';
//     errorAlert.style.display = 'none';

//     document.getElementById('submitButton').addEventListener('click', function() {
//         var formData = new FormData(document.getElementById('contactForm'));

//         fetch('{{ url('/contact/store') }}', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => response.text())
//         .then(data => {
//             // Check if the response contains success or error messages
//             if (data.includes('Message sent successfully')) {
//                 // Display success message
//                 successAlert.style.display = 'block';
//                 // Hide error message
//                 errorAlert.style.display = 'none';

//                 // Reset form fields
//                 document.getElementById('contactForm').reset();
//             } else {
//                 // Display error message
//                 errorAlert.style.display = 'block';
//                 // Hide success message
//                 successAlert.style.display = 'none';
//             }

//             // Set a timeout to hide the alerts after 5000 milliseconds (5 seconds)
//             setTimeout(function() {
//                 successAlert.style.display = 'none';
//                 errorAlert.style.display = 'none';
//             }, 5000);
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             errorAlert.innerHTML = 'Error';
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', function() {
//     var successAlert = document.getElementById('alert-success');
//     var errorAlert = document.getElementById('alert-danger');

//     // Set the initial style of the alerts to display: none
//     successAlert.style.display = 'none';
//     errorAlert.style.display = 'none';

//     document.getElementById('submitButton').addEventListener('click', function() {
//         var formData = new FormData(document.getElementById('contactForm'));

//         fetch('{{ url('/contact/store') }}', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => response.json()) // Parse the JSON response
//         .then(data => {
//             // Check if the response contains success or error messages
//             if (data.error) {
//                 // Display error message
//                 errorAlert.innerHTML = `"error": "${data.error}"`; // Set error message
//                 errorAlert.style.display = 'block'; // Display error message
//                 // Hide success message
//                 successAlert.style.display = 'none';
//             } else if (data.includes('Message sent successfully')) {
//                 // Display success message
//                 successAlert.innerHTML = 'Message sent successfully'; // Set success message
//                 successAlert.style.display = 'block'; // Display success message
//                 // Hide error message
//                 errorAlert.style.display = 'none';

//                 // Reset form fields
//                 document.getElementById('contactForm').reset();
//             } else {
//                 // Display error message
//                 errorAlert.innerHTML = 'An error occurred. Please try again.';
//                 errorAlert.style.display = 'block'; // Display error message
//                 // Hide success message
//                 successAlert.style.display = 'none';
//             }

//             // Set a timeout to hide the alerts after 5000 milliseconds (5 seconds)
//             setTimeout(function() {
//                 successAlert.style.display = 'none';
//                 errorAlert.style.display = 'none';
//             }, 5000);
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             errorAlert.innerHTML = 'Error';
//             errorAlert.style.display = 'block'; // Display error message
//             // Hide success message
//             successAlert.style.display = 'none';
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function() {
    var successAlert = document.getElementById('alert-success');
    var errorAlert = document.getElementById('alert-danger');

    // Set the initial style of the alerts to display: none
    successAlert.style.display = 'none';
    errorAlert.style.display = 'none';

    document.getElementById('submitButton').addEventListener('click', function(event) {
        var nameInput = document.getElementById('name').value;
        var emailInput = document.getElementById('email').value;
        var subjectInput = document.getElementById('subject').value;
        var messageInput = document.getElementById('message').value;

        // Validate all fields are filled in
        if (nameInput.trim() === '' || emailInput.trim() === '' || subjectInput.trim() === '' || messageInput.trim() === '') {
            errorAlert.innerHTML = 'Please fill in all fields.';
            errorAlert.style.display = 'block';
            successAlert.style.display = 'none';
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput)) {
            errorAlert.innerHTML = 'Please enter a valid email address.';
            errorAlert.style.display = 'block';
            successAlert.style.display = 'none';
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Form submission logic
        var formData = new FormData(document.getElementById('contactForm'));
        formData.append('email', emailInput); // Append email to the form data

        fetch('{{ url('/contact/store') }}', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Assuming the response is in JSON format
        .then(data => {
            // Check if the response contains success or error messages
            if (data.success) {
                // Display success message
                successAlert.style.display = 'block';
                errorAlert.style.display = 'none';

                // Reset form fields
                document.getElementById('contactForm').reset();
            } else {
                // Handle the error response data received from the backend
                data.json().then(errorResponse => {
                    // Construct error message from the error object
                    let errorMessage = '';

                    // Check if error object contains 'error' key
                    if (errorResponse.error) {
                        const errorData = errorResponse.error;

                        // Iterate over each error field and its corresponding error messages
                        for (const fieldName in errorData) {
                            errorMessage += `${fieldName}: ${errorData[fieldName].join(', ')}\n`;
                        }
                    } else {
                        // If error object does not contain 'error' key, fallback to a generic error message
                        errorMessage = 'An error occurred. Please try again later.';
                    }

                    // Display the constructed error message
                    errorAlert.innerHTML = errorMessage;
                    errorAlert.style.display = 'block';
                    // Hide success message
                    successAlert.style.display = 'none';
                });
            }

            // Set a timeout to hide the alerts after 5000 milliseconds (5 seconds)
            setTimeout(function() {
                successAlert.style.display = 'none';
                errorAlert.style.display = 'none';
            }, 5000);
        })
        .catch(error => {
            // Handle network or server errors
            console.error('Error:', error);
            errorAlert.innerHTML = 'Error';
            errorAlert.style.display = 'block';
            // Hide success message
            successAlert.style.display = 'none';
        });

        // Prevent form submission
        event.preventDefault();
    });
});




</script>


@push('script')
@endpush
