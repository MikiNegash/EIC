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

    </style>
@section('content')

<div class="card custom-card">
    <div  class="card-header justify-content-between ">
        <div class="card-title text-center pl-4"> Zone Management</div>
        <div class="prism-toggle">
            @if(Auth::check() && Auth::user()->hasPermissionWithName("zone_registration"))
                    <button class="btn btn-sm btn-primary-light" onclick="Register_Zone()">NEW ZONE</button>
            @endif
        </div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_zone"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Zones</a>
            </li>
    @endif
    </ul>
    @if(Auth::check() && Auth::user()->hasPermissionWithName("zone_registration"))
    <!-- Register Zone -->
    <div class='modal fade' id='add_new_zone_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h6 class='modal-title' id='exampleModalSmLabel'>Adding New Zone </h6>
                <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                    <form id="zoneForm">
                        <div class="row gy-3">
                                    <div id="successMessage" style="display: none;"></div>
                                    <div id="errorMessage" style="display: none;"></div>
                            <div class="col-xl-12"> 
                                    <label for="input-noradius" class="form-label">Zone Name</label> 
                                    <input type="text" class="form-control rounded-0"
                                    id="zone_name" placeholder="Enter Zone"> 
                                    <div class="error-message" id="name_error"></div>
                            </div>
                            <div class="input-group mb-3"> 
                                <label class="input-group-text" for="region_id">Select Region</label>
                                <select class="form-select" id="region_id">
                                </select>
                                <div class="error-message" id="region_id_error"></div>
                            </div>
                            <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                        </div>
                        <button type="button" class="btn btn-primary" id="registerButton">Register Zone</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    @endif
        <div class="tab-content">
        <!-- List of Zones Tab -->
        @if (Auth::check() && Auth::user()->hasPermissionWithName("list_of_zone"))
                <div class="table-responsive mt-3">
                    <table class="table text-nowrap table-sm" id="zonesTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Zone Name</th>
                                <th>Region Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
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
                Are you sure you want to delete this Zone?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- The Modal for Editing Zone -->
@if(Auth::check() && Auth::user()->hasPermissionWithName("update_zone"))
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Zone</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editZoneForm">
                    <div class="mb-3">
                        <label for="edit_zone_name" class="form-label">Zone Name</label>
                        <input type="text" class="form-control" id="edit_zone_name" placeholder="Enter Region Name">
                        <div class="error-message" id="edit_zone_name_error"></div>
                    </div>
                    <input type="hidden" id="edit_zone_id">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="region">Select Region</label>
                        <select class="form-select" id="region" name="region_id"></select>
                        <div class="error-message" id="region_id_error"></div>
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
      function Register_Zone(){
        $('#regionForm').trigger("reset");
        $('#add_new_zone_modal').modal('show');
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
    $('#zonesTable').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        url: '/zones/list',
        type: 'get',
        data: {
            _token: '{{ csrf_token() }}',
        },
    },
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'region.name', name: 'region.name' }, // Use dot notation to access the region name
        {
            data: null,
            render: function (data, type, row) {
                @if (Auth::check() && Auth::user()->hasPermissionWithName("update_zone"))
                    Edit = '<a href="#" class="btn btn-sm btn-primary edit-zone" data-id="' + row.id + '">Edit</a>';
                @else
                    Edit = '';
                @endif
                @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_zone"))
                    Delete= '<button class="btn btn-sm btn-danger delete-zone" data-id="' + row.id + '">Delete</button>';
                @else
                    Delete '';
                @endif
            return Edit + " " + Delete;
            },
        },
    ],
    paging: true, // Enable pagination
    pageLength: 10, // Number of rows per page
    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']], // Dropdown options for rows per page
    pagingType: 'full_numbers', // Style of pagination
});

    function loadRegions() {
        $.ajax({
            type: 'GET',
            url: '/regions/list', // Replace with the correct URL to fetch regions data
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                var regions = response.data;
                var selectOptions = '<option value="">Select Region</option>';
                regions.forEach(function (region) {
                    selectOptions += '<option value="' + region.id + '">' + region.name + '</option>';
                });
                $('#region_id').html(selectOptions);
            },
            error: function (xhr) {
                console.log('Error loading regions data');
            },
        });
    }

    // Call loadRegions() function on page load to populate the <select> dropdown
    loadRegions();

    // Event listener for the Registration Tab
    $('a[data-bs-toggle="tab"][href="#registrationTab"]').on('shown.bs.tab', function (e) {
        loadRegions(); // Load regions data and populate the <select> dropdown
    });

        $('#saveEditButton').click(function () {
        // Reset previous error messages
        $('.error-message').empty();
        var zoneId = $('#edit_zone_id').val();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_zone_name').val(),
            region_id: $('#region option:selected').val()
        };

        $.ajax({
            type: 'post',
            url: '/zones/update/'+zoneId, // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#zonesTable').DataTable().ajax.reload();
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


    $('#zonesTable').on('click', '.edit-zone', function () {
    var row = $(this).closest('tr');
    var zoneId = row.find('td:eq(0)').text();
    var zoneName = row.find('td:eq(1)').text();
    var regionId = row.find('td:eq(2)').data('region-id'); // Assuming you have the region ID as a data attribute in the table cell
    var regionName = row.find('td:eq(2)').text();

    // Populate the modal form fields
    $('#edit_zone_id').val(zoneId);
    $('#edit_zone_name').val(zoneName);
    $('#edit_region_id').val(regionId);


    // Fetch and populate the region select element
    $.ajax({
        type: 'GET',
        url: '/regions/list', // Replace with the correct URL to fetch regions data
        data: {
            _token: '{{ csrf_token() }}',
        },
        success: function (response) {
            var regions = response.data;
            var selectOptions = '';
            regions.forEach(function (region) {
                selectOptions += '<option value="' + region.id + '"';
                if (region.id === regionId) {
                    selectOptions += ' selected';
                }
                selectOptions += '>' + region.name + '</option>';
            });
            $('#region').html(selectOptions);
        },
        error: function (xhr) {
            console.log('Error loading regions data');
        },
    });

    $('#editModal').modal('show');
});

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editZoneForm')[0].reset();
    });



    $('#zonesTable').on('click', '.delete-zone', function () {
        var zoneId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/zones/' + zoneId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    showSuccessMessage('Zone deleted successfully.');
                    $('#zonesTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    showErrorMessage('Error deleting Zone.');
                }
            });
       })
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#zone_name').val(),
            created_by: $('#created_by').val(),
            region_id: $('#region_id option:selected').val()
        };

    $.ajax({
        type: 'POST',
        url: '/zones/register',
        data: formData,
        success: function (response) {
            console.log(response);
            showSuccessMessage(response.message);
            $('#zoneForm')[0].reset();
            $('.error-message').empty();
            $('#zonesTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                showErrorMessage('Error occurred during Zone registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    showErrorMessage(value[0]);
                });
                $('#' + key + '_error').text(value[0]);
            } else {
                showErrorMessage('Error occurred during Zone registration.');
            }
        },
    });
});
});
</script>
@endsection
