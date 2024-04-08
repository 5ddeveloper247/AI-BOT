<div class="offcanvas offcanvas-start custom-offcanvas" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile</h5>
        <button type="button" class="btn-close bg-body btn-close p-1 me-1" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="text-center position-relative">

                    <img class="rounded-circle profile_image " width="100" height="100" id="profile_image"
                        src="assets/images/logo.jpeg" alt="" />
                    <input class="d-none" onchange="loadFile(event)" accept="image/*" type="file" name=""
                        id="hung22">
                    <span class="profile_icon"><i class="bi bi-pencil"></i></span>
                </div> --}}
                <div class="text-center position-relative">
                    <img class="rounded-circle profile_image" width="100" height="100" id="profile_image"
                        src="{{ $user->picture ? asset(Storage::url($user->picture)) : asset('assets/images/logo.jpeg') }}"
                        alt="Profile Image" />
                    <input class="d-none" onchange="uploadImage(event)" accept="image/*" type="file" name="profile_image"
                        id="profile_image_input">
                    <label for="profile_image_input" class="profile_icon"><i class="bi bi-pencil"></i></label>
                </div>


            </div>

            @if (session('status') === 'profile-updated')
                <style>
                    .custom-alert {
                        position: fixed;
                        top: 20px;
                        left: 50%;
                        transform: translateX(-50%);
                        background-color: #d9f8d7;
                        /* Green color */
                        color: #1c7222;
                        padding: 15px 20px;
                        border-radius: 5px;
                        border: 1px solid #4ae73c;
                        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
                        z-index: 9999;
                    }
                </style>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Create a custom alert element
                        var profileUpdatedAlert = document.createElement('div');
                        profileUpdatedAlert.className = 'custom-alert success';
                        profileUpdatedAlert.textContent = 'Success: Profile updated successfully.';

                        // Append the custom alert to the body
                        document.body.appendChild(profileUpdatedAlert);

                        // Hide the custom alert after 3 seconds
                        setTimeout(function() {
                            profileUpdatedAlert.style.display = 'none';
                        }, 3000);
                    });
                </script>
            @endif

            <div class="col-md-12">
                <!-- Your existing HTML form structure -->
                <form method="post" action="{{ url('/profile/update') }}">
                    @csrf
                    @method('patch')

                    <div class="my-3">
                        <label for="inputName" class="form-label form_label">Name</label>
                        <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label form_label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="inputEmail" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    {{-- <div class="mb-3">
                    <label for="inputPassword" class="form-label form_label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="inputPassword"
                        name="password">
                </div> --}}

                    <button type="submit" class="btn btn-sm float-end ms-1 text-light"
                        style="background-color: var(--btn-background-color);">Save</button>

                    <button class="btn btn-sm btn-dark float-end" data-bs-dismiss="offcanvas"
                        aria-label="Close">Cancel</button>
                </form>

            </div>

            <div class="col-md-12 my-3">
                <h6>Update Payment Card</h6>

                <form>

                    <div class="my-3">
                        <label for="inputName" class="form-label form_label">Card Number</label>
                        <input type="number" class="form-control form-control-sm" id="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label form_label">Expiry Date</label>
                        <input type="date" class="form-control form-control-sm" id="inputEmail"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label form_label">Csv Number</label>
                        <input type="password" class="form-control form-control-sm" id="inputPassword">
                    </div>

                    <button type="submit" class="btn btn-sm float-end ms-1 text-light "
                        style="background-color: var(--btn-background-color);">Save</button>
                    <button class="btn btn-sm btn-dark float-end" data-bs-dismiss="offcanvas"
                        aria-label="Close">Cancel</button>
                </form>
            </div>

            @if (session('status') === 'password-updated')
                <style>
                    .custom-alert {
                        position: fixed;
                        top: 20px;
                        left: 50%;
                        transform: translateX(-50%);
                        background-color: #d9f8d7;
                        /* Green color */
                        color: #1c7222;
                        padding: 15px 20px;
                        border-radius: 5px;
                        border: 1px solid #4ae73c;
                        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
                        z-index: 9999;
                    }
                </style>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Create a custom alert element
                        var profileUpdatedAlert = document.createElement('div');
                        profileUpdatedAlert.className = 'custom-alert success';
                        profileUpdatedAlert.textContent = 'Success: Password updated successfully.';

                        // Append the custom alert to the body
                        document.body.appendChild(profileUpdatedAlert);

                        // Hide the custom alert after 3 seconds
                        setTimeout(function() {
                            profileUpdatedAlert.style.display = 'none';
                        }, 3000);
                    });
                </script>
            @endif
            <div class="col-md-12 my-3">
                <h6>Update Password</h6>



                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                        <x-text-input id="update_password_current_password" name="current_password" type="password"
                            class="form-control form-control-sm" {{-- class="mt-1 block w-full" --}}
                            autocomplete="current-password" />

                        {{-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 alert-error" id="currentPasswordError" />


                    </div>

                    <div>
                        <x-input-label for="update_password_password" :value="__('New Password')" />
                        <x-text-input id="update_password_password" name="password" type="password"
                            {{-- class="mt-1 block w-full"  --}} class="form-control form-control-sm" autocomplete="new-password" />

                        {{-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 alert-error" id="passwordError" />

                    </div>

                    <div>
                        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="update_password_password_confirmation" name="password_confirmation"
                            type="password" class="form-control form-control-sm" {{-- class="mt-1 block w-full" --}}
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />


                    </div>

                    <div class="flex items-center gap-4">
                        {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}


                        <button type="submit" class="btn btn-sm float-end ms-1 text-light"
                            style="background-color: var(--btn-background-color);">Save</button>
                        <button class="btn btn-sm btn-dark float-end" data-bs-dismiss="offcanvas"
                            aria-label="Close">Cancel</button>

                    </div>

                </form>

            </div>


        </div>
    </div>
</div>


<script>
    function loadProfileEdit() {
        // Perform an AJAX request using jQuery and Laravel named route
        $.ajax({
            url: '{{ url('/profile/edit') }}',
            type: 'GET',
            success: function(response) {
                // Access the entire response object
                // console.log(response);

                // Access individual properties
                var userData = response.user;
                var message = response.message;

                // Populate the form fields with the received data
                $('#inputName').val(userData.name);
                $('#inputEmail').val(userData.email);
            },

            error: function(xhr, status, error) {
                // Handle errors if necessary
                console.error(xhr.responseText);
            }
        });

    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentPasswordError = document.getElementById('currentPasswordError');

        if (currentPasswordError && currentPasswordError.textContent.trim() !== '') {
            var customAlert = document.createElement('div');
            customAlert.className = 'custom-alert';
            customAlert.textContent = 'Error: ' + currentPasswordError.textContent;

            document.body.appendChild(customAlert);

            setTimeout(function() {
                customAlert.style.display = 'none';
            }, 3000);
        }
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        var currentPasswordError = document.getElementById('passwordError');

        if (currentPasswordError && currentPasswordError.textContent.trim() !== '') {
            var customAlert = document.createElement('div');
            customAlert.className = 'custom-alert';
            customAlert.textContent = 'Error: ' + currentPasswordError.textContent;

            document.body.appendChild(customAlert);

            setTimeout(function() {
                customAlert.style.display = 'none';
            }, 3000);
        }
    });
</script>
<script>
    function uploadImage(event) {
        const file = event.target.files[0];
        const formData = new FormData();
        formData.append('profile_image', file);

        // Send the image file to the server
        fetch("{{ url('/upload-profile-image') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to upload image');
            }
            return response.json();
        })
        .then(data => {
            // Update the image source with the newly uploaded image
            document.getElementById('profile_image').src = data.image_url;

            // Optionally, you can display a success message to the user
            // Here, you can use a toast or any other method to display the message
            // For example:
            console.log();('Profile picture uploaded successfully.');
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>
