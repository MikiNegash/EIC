@extends('common.main')
<style>
            .dataTables_paginate .paginate_button {
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            color: #333;
            cursor: pointer; 
            border-radius: 5px; 
            }

            .dataTables_paginate .paginate_button.current {
            background-color: #007bff; 
            color: #fff; 
            border: 1px solid #007bff; 
            }
            .custom-margin-bottom {
                margin-bottom: 20px; /* Adjust the value as needed */
            }
            .custom-button {
                width: 200px; /* Set your desired width here */
            }
    </style>
@section('content')
<div class="card custom-card">
    <div class="card-header ">
        <div class="card-title text-center pl-4"> VIP Service Request Management</div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("investor_vip_request"))
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#requestTab">Request VIP Service</a>
            </li>
    @endif
    @if(Auth::check() && Auth::user()->hasPermissionWithName("investor_vip_request"))
           <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#prepareletter">Prepare Letter</a>
            </li>
    @endif
    @if(Auth::check() && Auth::user()->hasPermissionWithName("investor_vip_request"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">Requested VIP</a>
            </li>
    @endif
    </ul>
        <div class="tab-content">
        <!-- Registration Form Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("VIP_services_registration"))
        <div class="tab-pane fade show active" id="requestTab">
            <form id="VIPRequestForm">
            <div class="input-group mb-3"> 
                <label class="input-group-text" for="viprequest">Select VIP Service</label>
                <select id="VipService" class="form-select">
                    <option value="">choose</option>
                     @foreach ($VipServiceTypeData as $investment)
                        <option value="{{ $investment->id }}">{{ $investment->service }}</option>
                     @endforeach
                </select>
            </div>
            <div class="input-group mb-3"> 
                <label class="input-group-text" for="viprequest">Select Investment</label>
                <select id="investment" class="form-select">
                    <option value="">choose</option>
                     @foreach ($investments as $investment)
                        <option value="{{ $investment->investment_id }}">{{ $investment->Investment->service }}</option>
                     @endforeach
                 </select>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="landing_date">Choose Landing Date</label>
                <input type="date" name="landing_date" id = "landing_date" class="form-control">
            </div>
                <input type="hidden" id="created_by" value="{{ Auth::user()->id }}">
                <input type="hidden" id="letter_code_id" value="2">
                <div class="text-center">
                        <button type="button" class="btn btn-success custom-button" id="requestVIPServiceButton">Next</button>
                </div>
        </form>
        </div>
        @endif

        <!-- List of VIP Service Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_VIP_services"))
        <div class="tab-pane fade" id="listTab">
        @if ($vipServices->isEmpty())
               <p>There is no VIP Service request created yet!!</p>
        @else
        <div class="table-responsive mt-3">
        <table class="table text-nowrap table-sm" id="ViewVIPServiceRequest">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VIP Service Type</th>
                    <th>Investment</th>
                    <th>Company Name</th>
                    <th>Investor</th>
                    <th>Letter</th>
                    <th>Reviewed By</th>
                    <th>Reviewed Status</th>
                    <th>Approved By</th>
                    <th>Approve Status</th>
                    <th>Landing Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id='role_table_body'>
                
                <!-- Add other rows with data here if available -->
            </tbody>
        </table>
    </div>
    @endif
   </div>
        @endif
</div>

<div class="tab-pane fade" id="prepareletter">
    <div class="table-responsive mt-3">
        <table class="table text-nowrap table-sm" id="ViewVIPService">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VIP Service Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id='role_table_body'>
                <tr class='no_role_message'>
                    <td colspan='4' style='color:red; text-align:center;'>There is no VIP Service created yet!!</td>
                </tr>
                <!-- Add other rows with data here if available -->
            </tbody>
        </table>
    </div>
</div>


<!-- Hidden modal for success and error messages -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="messageModalBody">
                <!-- Message content will be inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Hidden modal for delete confirmation -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="deleteConfirmationModalBody">
                Are you sure you want to delete this VIP Service?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- The Modal for Editing Region -->
@if(Auth::check() && Auth::user()->hasPermissionWithName("update_VIP_services"))
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit VIP Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editMeasurementForm">
                    <div class="mb-3">
                        <label for="edit_VIPService_name" class="form-label">VIP Service Name</label>
                        <input type="text" class="form-control" id="edit_VIPService_name" placeholder="Enter Region Name">
                        <div class="error-message" id="edit_VIPService_name_error"></div>
                    </div>
                    <input type="hidden" name="VIPService_id_id" id="edit_VIPService_id">
                </form>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button> 
            </div>
        </div>
    </div>
</div>
@endif


<script>

    $(document).ready(function () {
        function showDeleteConfirmation(callback) {
        $('#deleteConfirmationModal').modal('show');

        // Set click event for the "Delete" button inside the modal
        $('#confirmDeleteButton').off('click').on('click', function () {
            // Hide the modal
            $('#deleteConfirmationModal').modal('hide');

            // Call the provided callback function (delete action) if it exists
            if (typeof callback === 'function') {
                callback();
            }
        });
    }
        function showSuccessMessage(message) 
        {
            $('#messageModalLabel').text('Success');
            $('#messageModalBody').text(message);
            $('#messageModal').modal('show');
       }

    // Function to show error message in the modal
    function showErrorMessage(message) 
        {
            $('#messageModalLabel').text('Error');
            $('#messageModalBody').text(message);
            $('#messageModal').modal('show');
        }
        // VIEW REQUESTED VIP SERVICE
        $('#ViewVIPServiceRequest').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/investor/VIP_servicesRequest/list',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
        { data: 'id', name: 'id' }, // ID column
        { data: 'service_type_id', name: 'service_type_id' }, // Service Type ID column
        { data: 'investment_id', name: 'investment_id' }, // Investment ID column
        { data: 'customer_id', name: 'customer_id' }, // Customer ID column
        { data: 'landing_date', name: 'landing_date' }, // Landing Date column
        { data: 'letter_id', name: 'letter_id' }, // Letter ID column
        { data: 'reviewed_by', name: 'reviewed_by' }, // Reviewed By column
        { data: 'review_status', name: 'review_status' }, // Review Status column
        { data: 'approved_by', name: 'approved_by' }, // Approved By column
        { data: 'approve_status', name: 'approve_status' }, // Approve Status column
        { data: 'approved_date', name: 'approved_date' },
            {
                data: null,
                render: function (data, type, row) 
                {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("update_item"))
                        return '<button class="btn btn-sm btn-primary edit-item" data-id="' + row.id + '">Edit</button>';
                    @else
                        return ''; 
                    @endif
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_item"))
                        return '<button class="btn btn-sm btn-danger delete-item" data-id="' + row.id + '">Delete</button>';
                    @else
                        return ''; 
                    @endif
                }
            },

        ],
        paging: true, // Enable pagination
        pageLength: 10, // Number of rows per page
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']], // Dropdown options for rows per page
        pagingType: 'full_numbers', // Style of pagination
    });

        $('#saveEditButton').click(function () {
        // Reset previous error messages
        $('.error-message').empty();
        var VIPServiceId = $('#edit_VIPService_id').val();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_VIPService_name').val(),
            id:VIPServiceId,
        };

        $.ajax({
            type: 'post',
            url: '/VIP_services/update/', // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#ViewVIPServiceRequest').DataTable().ajax.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $('#edit_' + key + '_error').text(value[0]);
                    });
                }
            },
        });
    });


    $('#ViewVIPServiceRequest').on('click', '.edit-VIPService', function () {
        var row = $(this).closest('tr');
        var VIPServiceId = row.find('td:eq(0)').text(); // Get the region ID from the first column
        var VIPServiceName = row.find('td:eq(1)').text(); // Get the measurement name from the second column


        // Populate the modal form fields
        $('#edit_VIPService_id').val(VIPServiceId); // Set the region ID in the hidden form field
        $('#edit_VIPService_name').val(VIPServiceName); // Set the region name in the input fiel
        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editMeasurementForm')[0].reset();
    });



    $('#ViewVIPServiceRequest').on('click', '.delete-VIPService', function () {
        var regionId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/VIP_services/' + regionId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    showSuccessMessage("VIP Service deleted successfully");
                    $('#ViewVIPServiceRequest').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    showErrorMessage('Error occurred during VIP Service deletion.');
                }
            });
       })
    });

    $('#requestVIPServiceButton').click(function () {
    $('.error-message').empty();
    var formData = {
            _token: '{{ csrf_token() }}',
            customer_id: $('#created_by').val(),
            letter_code_id: $('#letter_code_id').val(),
            investment: $('#investment option:selected').val(),
            service_type_id: $('#VipService option:selected').val(),
            landing_date: $('#landing_date').val(),
        };
        $.ajax({
            type: 'post',
            url: '/investor/VIPRequest', // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#ViewVIPServiceRequest').DataTable().ajax.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $('#edit_' + key + '_error').text(value[0]);
                    });
                }
            },
        });
});
});
</script>
@endsection
