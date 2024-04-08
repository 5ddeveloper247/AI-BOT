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
             <!--end breadcrumb-->

             <h6 class="mb-0 text-uppercase">Frequently Asked Questions</h6>
             <hr />
             <div class="card">
                 <div class="card-body">
                     <div class="d-lg-flex align-items-center mb-4 gap-3">
                         <div class="ms-auto">
                             <a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0" data-bs-toggle="modal"
                                 data-bs-target="#addModal">
                                 <i class="bx bxs-plus-square"></i>Add New FAQs
                             </a>
                         </div>
                     </div>

                     <div class="table-responsive">
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
                                                 <input style="font-size: 20px;" type="checkbox"
                                                     {{ $faq->active ? 'checked' : '' }} class="form-check-input"
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
                                                     <input style="font-size: 20px;" type="checkbox"
                                                         class="form-check-input" checked disabled>
                                                 @else
                                                     <input style="font-size: 20px;" type="checkbox"
                                                         class="form-check-input" disabled>
                                                 @endif
                                             </div>
                                         </td>

                                         <td class="Checkbox">
                                             <div class="form-check d-flex justify-content-center align-items-center">
                                                 @if ($faq->Visitor)
                                                     <input style="font-size: 20px;" type="checkbox"
                                                         class="form-check-input" checked disabled>
                                                 @else
                                                     <input style="font-size: 20px;" type="checkbox"
                                                         class="form-check-input" disabled>
                                                 @endif
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
                     <input type="hidden" class="form-control" id="editFaqId">
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



     <!-- Create  Modal -->
     <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content" style="background-color: rgb(9,70,115)">
                 <div class="modal-header">
                     <h5 class="modal-title" id="addModalLabel">Add New FAQ</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
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
                             <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                                 id="premiumCheckbox">
                         </div>
                     </div>
                     <div class="row mb-3">
                         <div class="col-sm-3">
                             <h6 class="mb-0">Visitor</h6>
                         </div>
                         <div class="col-sm-9">
                             <input style="font-size: 20px;" type="checkbox" class="form-check-input"
                                 id="visitorCheckbox">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-primary" onclick="saveNewFAQ()">Save</button>
                 </div>
             </div>
         </div>
     </div>


 @endsection



 @push('script')
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


     <script>
         function populateEditModal(question, answer, id, premiumUser, visitor) {
             document.getElementById('editFaqId').value = id;
             document.getElementById('editQuestion').value = question;
             document.getElementById('editAnswer').value = answer;
             document.getElementById('editPremiumCheckbox').checked = premiumUser === '1'; // Note the string comparison
             document.getElementById('editVisitorCheckbox').checked = visitor === '1'; // Note the string comparison
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


         function updateFAQ() {
             var id = document.getElementById('editFaqId').value;
             var question = document.getElementById('editQuestion').value;
             var answer = document.getElementById('editAnswer').value;
             var premiumCheckbox = document.getElementById('editPremiumCheckbox').checked ? 1 : 0;
             var visitorCheckbox = document.getElementById('editVisitorCheckbox').checked ? 1 : 0;


             fetch("{{ url('/admin/faqs/update') }}/"+id, {
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
                     console.log('FAQ updated successfully');
                     window.location.reload();
                 })
                 .catch(error => {
                     console.error('Error updating FAQ:', error);
                 });

         }
     </script>

     <script>
         function saveNewFAQ() {
             var question = document.getElementById('addQuestion').value;
             var answer = document.getElementById('addAnswer').value;
             var premiumCheckbox = document.getElementById('premiumCheckbox').checked ? 1 :
                 0; // Check if premiumCheckbox is checked
             var visitorCheckbox = document.getElementById('visitorCheckbox').checked ? 1 :
                 0; // Check if visitorCheckbox is checked

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
                     console.log('FAQ added successfully');
                     window.location.reload();
                 })
                 .catch(function(error) {
                     console.error('Error adding FAQ:', error);
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
                 type: 'PUT', // You may need to change this to 'POST' depending on your backend setup
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
                         // Optionally, update UI or display a success message
                         console.log('FAQ status toggled successfully.');
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
                         console.log('PreminumUser status toggled successfully.');
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
             fetch(`/admin/faqs/${faqId}`, {
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
                         console.log('FAQ deleted successfully.');
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
                     axios.post('/update-faqs-order', {
                             order: dataArray // Pass the serialized data as a single array
                         })
                         .then(function(response) {
                             console.log('Order updated successfully.');
                         })
                         .catch(function(error) {
                             console.error('Error updating order:', error);
                         });
                 }
             }).disableSelection();
         });


         // Your existing JavaScript code for CRUD operations
     </script>
 @endpush
