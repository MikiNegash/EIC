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

    </style>
@section('content')

<div class="card custom-card">
    <div  class="card-header justify-content-between ">
        <div class="card-title text-center pl-4"> Regions Management</div>
        <div class="prism-toggle">
            @if(Auth::check() && Auth::user()->hasPermissionWithName("region_registration"))
                    <button class="btn btn-sm btn-primary-light" onclick="Register_Region()">NEW REGION</i></button>
            @endif
        </div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_region"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Regions</a>
            </li>
    @endif
    </ul>
@if(Auth::check() && Auth::user()->hasPermissionWithName("region_registration"))
   <!-- Register Region -->
    <div class='modal fade' id='add_new_region_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h6 class='modal-title' id='exampleModalSmLabel'>Adding New Region </h6>
                <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <form id="regionForm">
                        <div class="mb-3">
                            <label style="font-weight:bolder" class=" mb-2 form-label">Region Name</label>
                            <input type="text" class="form-control" id="region_name" placeholder="Enter Region Name">
                            <div class="error-message" id="region_name_error"></div>
                        </div>
                        <div class="col-xl-12 custom-margin-bottom"> 
                            <label style="font-weight:bolder" class=" mb-2 form-label">Region Code</label>
                            <input type="text" class="form-control" id="region_code" placeholder="Enter Region Code">
                            <div class="error-message" id="region_code_error"></div>
                        </div>
                        <div class="input-group mb-3 custom-margin-bottom"> 
                            <label style="font-weight:bolder"   class=" mb-2 input-group-text" for="inputGroupSelect01">Select Type</label>
                            <select class="form-select" id="region_type">
                                <option selected>Choose</option>
                                <option value="Chartered_city">Chartered City</option>
                                <option value="Regional_city">Regional City</option>
                            </select>
                            <div class="error-message" id="region_type_error"></div>
                        </div>
                        <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                        <button type="button" class="btn btn-primary" id="registerButton">Register Region</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endif

        <div class="tab-content">
        <!-- List of Regions Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_region"))
                <div class="table-responsive mt-3">
                    <table class="table text-nowrap table-sm" id="regionsTable">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Region Name</th>
                                <th>Region Code</th>
                                <th>Region Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id='role_table_body'>

                            <tr class='no_role_message'>
                                <th colspan='5' style='color:red'>There is no region  created yet!!</th>

                            </tr>
                        </tbody>
                    </table>
                </div>
        @endif
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
                Are you sure you want to delete this Region?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- The Modal for Editing Region -->
@if(Auth::check() && Auth::user()->hasPermissionWithName("update_region"))
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Region</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editMeasurementForm">
                    <div class="mb-3">
                        <label for="edit_region_name" class="form-label">Region Name</label>
                        <input type="text" class="form-control" id="edit_region_name" placeholder="Enter Region Name">
                        <div class="error-message" id="edit_region_name_error"></div>
                    </div>
                    <input type="hidden" name="region_id" id="edit_region_id">
                    <div class="col-xl-12"> 
                        <label for="input-rounded" class="form-label">Region Code</label> 
                        <input type="text" class="form-control" id="edit_region_code" value="">
                        <div class="error-message" id="region_code_error"></div> 
                    </div>
                  <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Select Type</label>
                        <select class="form-select" id="region_type">
                              <option value="Chartered_city" {{ $selectedValue = 'Chartered_city' ? 'selected' : '' }}>Chartered City</option>
                              <option value="Regional_city" {{ $selectedValue = 'Regional_city' ? 'selected' : '' }}>Regional City</option>
                        </select>
                        <div class="error-message" id="region_type_error"></div>
                  </div>
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
 function Register_Region()
{
    $('#regionForm').trigger("reset");
    $('#add_new_region_modal').modal("show");
}
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
        function showSuccessMessage(message) {
        $('#messageModalLabel').text('Success');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }

    // Function to show error message in the modal
    function showErrorMessage(message) {
        $('#messageModalLabel').text('Error');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }
        $('#regionsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/regions/list',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'code', name: 'code' },
            { data: 'type', name: 'type' },
            {
                data: null,
                render: function (data, type, row)
                 {
                        @if (Auth::check() && Auth::user()->hasPermissionWithName("update_region"))
                        Edit = '<a href="#" class="btn btn-sm btn-primary edit-region" data-id="' + row.id + '">Edit</a>';
                        @else
                            Edit = ''; 
                        @endif
                        @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_region"))
                         Delete= '<button class="btn btn-sm btn-danger delete-region" data-id="' + row.id + '">Delete</button>';
                        @else
                        Delete= ''; 
                        @endif
                    return Edit + " " + Delete;
                     
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
        var regionId = $('#edit_region_id').val();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_region_name').val(),
            code: $('#edit_region_code').val(),
            type: $('#region_type option:selected').val()
        };

        $.ajax({
            type: 'post',
            url: '/regions/update/'+regionId, // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#regionsTable').DataTable().ajax.reload();
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


    $('#regionsTable').on('click', '.edit-region', function () {
        var row = $(this).closest('tr');
        var regionId = row.find('td:eq(0)').text(); // Get the region ID from the first column
        var regionName = row.find('td:eq(1)').text(); // Get the measurement name from the second column
        var regionCode = row.find('td:eq(2)').text(); // Get the measurement name from the second column
        var regionType = row.find('td:eq(3)').text(); // Get the measurement name from the second column


        // Populate the modal form fields
        $('#edit_region_id').val(regionId); // Set the region ID in the hidden form field
        $('#edit_region_name').val(regionName); // Set the region name in the input field
        $('#edit_region_code').val(regionCode); // Set the region code in the input field
        $('#region_type').val(regionType); // Set the region type in the input field


        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editMeasurementForm')[0].reset();
    });



    $('#regionsTable').on('click', '.delete-region', function () {
        var regionId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/regions/' + regionId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    showSuccessMessage('Region deleted successfully.');
                    $('#regionsTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    showErrorMessage('Error deleting Region.');
                }
            });
       })
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#region_name').val(),
            code: $('#region_code').val(),
            created_by: $('#created_by').val(),
            type: $('#region_type option:selected').val()
      };

    $.ajax({
        type: 'POST',
        url: '/regions/register',
        data: formData,
        success: function (response) {
            console.log(response);
            showSuccessMessage(response.message);
            $('#regionForm')[0].reset();
            $('.error-message').empty();
            $('#regionsTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                showErrorMessage('Error occurred during Region registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    showErrorMessage(value[0]);
                });
                $('#' + key + '_error').text(value[0]);
            } else {
                showErrorMessage('Error occurred during Region registration.');
            }
        },
    });
});
});
</script>
@endsection
